<?php
  session_start();
  $video_id = NULL;
  if (isset($_GET['id'])) {
    $video_id = $_GET['id'];
    $comments = [];
    $recommended_videos = [];

    require_once "connection.php";

    $sql = "SELECT v.id, v.name, v.description, v.url, v.published_at, v.view_count, u.username FROM videos v, users u WHERE v.id = ".$video_id." AND v.uploader = u.id LIMIT 1";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
      // output data of each row
      $row = $result->fetch_assoc();
      $video_data = $row;

      // Get comments
      $sql = "SELECT u.username, c.comment, c.posted_at FROM comments c, users u WHERE c.video_id = ".$video_id." AND u.id = c.user_id";
      $result = $conn->query($sql);
      if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
          array_push($comments, $row);
        }
      }

      // Increase view count
      $sql = "UPDATE videos SET view_count = view_count + 1 WHERE id = ".$video_id;
      $conn->query($sql);

      // Get video recommendation
      $sql = "SELECT v.id, v.name, v.description, v.url, v.published_at, v.view_count, u.username FROM videos v, users u WHERE v.uploader = u.id ORDER BY RAND()";
      $result = $conn->query($sql);

      if ($result->num_rows > 0) {
          // output data of each row
          while ($row = $result->fetch_assoc()) {
              array_push($recommended_videos, $row);
          }
      }

    } else {
      echo "Video tidak ditemukan.";
      exit;
    }

    $conn->close();
  }
  else {
    echo "Masukkan parameter ID video.";
    exit;
  }
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Vidios</title>
    <link rel="stylesheet" href="css/master.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <?php include "nav.php" ?>
    <div class="container-fluid">
      <div class="row">
        <div class="col-12 col-md">
          <!-- HTML5 Video Tag -->
          <video class="mt-4" width="100%" controls>
            <source src="<?= $video_data['url'] ?>" type="video/mp4">
            Your browser does not support the video tag.
          </video>
          <span class="hashtag">#video-test</span>
          <div class="d-flex flex-row">
            <div class="flex-grow-1">
              <h1><?= $video_data['name'] ?></h1>
              <p><?= $video_data['view_count'] ?> views</p>
            </div>
          </div>
          <hr>
          <div class="d-flex flex-row">
            <img src="asset/profile0.png" width="50" height="50" class="rounded-circle">
            <div class="flex-grow-1 ml-4">
              <span class="font-weight-bold"><?= $video_data['username'] ?></span>
                <p><?= $video_data['description'] ?></p>
                <span>Written on <?= date("d M Y H:i:s", strtotime($video_data['published_at'])) ?></span>
            </div>
            <div>
            </div>
          </div>
          <hr>
          <h2 class="mb-4"><?= count($comments) ?> Comments</h2>
          <?php foreach ($comments as $c) { ?>
          <div class="d-flex flex-col align-items-center mt-2">
            <img src="asset/profile0.png" width="50" class="rounded-circle">
            <div class="d-flex flex-column flex-grow-1 ml-4 p-2 border rounded">
              <span class="font-weight-bold"><?= $c['username'] ?></span>
              <p><?= $c['comment'] ?></p>
              <span>Written on <?= date("d M Y H:i:s", strtotime($c['posted_at'])) ?></span>
            </div>
          </div>
          <?php } ?>
          <form action="post_comment.php" method="POST" class="mt-4">
            <div class="d-flex flex-col align-items-center mt-2">
              <img src="asset/profile0.png" width="50" class="rounded-circle">
              <input type="text" name="video_id" value="<?= $video_data['id'] ?>" hidden>
              <?php if (isset($_SESSION['user_id'])) { ?>
              <textarea class="form-control ml-4" name="comment" placeholder="Write your comments..."></textarea>
              <?php } else { ?>
              <textarea class="form-control ml-4" name="comment" placeholder="Anda harus login sebelum berkomentar." disabled></textarea>
              <?php } ?>
            </div>
            <?php if (isset($_SESSION['user_id'])) { ?>
            <button type="submit" class="btn btn-primary float-right mt-2">Comment</button>
            <?php } else { ?>
            <button type="submit" class="btn btn-primary float-right mt-2" disabled>Comment</button>
            <?php } ?>
          </form>
        </div>
        <div class="col-12 col-md-3">
          <h2>Recommendation</h2>
          <?php foreach($recommended_videos as $rv) { ?>
          <a href="#" class="d-flex flex-row border align-items-center p-2">
            <video width="45%" height="100%">
              <source src="<?= $rv['url'] ?>#t=5" type="video/mp4">
            </video>
            <div class="d-flex flex-column flex-grow-1 ml-2 p-1">
              <span class="text-"><?= $rv['name'] ?></span>
              <span class="text-secondary"><?= $rv['username'] ?></span>
              <span class="text-secondary"><?= $rv['view_count'] ?> views - <?= date("d M Y H:i:s", strtotime($rv['published_at'])) ?></span>
            </div>
          </a>
          <?php } ?>
          <a href="index.php" class="btn btn-secondary btn-block mt-4">Load more video</a>
        </div>
      </div>
    </div>
    <?php include "footer.php"; ?>
  </body>
</html>
