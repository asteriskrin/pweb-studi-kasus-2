<?php
    session_start();

    require_once "connection.php";

    $videos = [];

    $search_keyword = NULL;
    if (isset($_GET['s'])) {
        $search_keyword = $_GET['s'];
    }

    $sql = "SELECT v.id, v.name, v.description, v.url, v.published_at, v.view_count, u.username FROM videos v, users u WHERE v.uploader = u.id AND v.name LIKE '%".$search_keyword."%'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while ($row = $result->fetch_assoc()) {
            array_push($videos, $row);
        }
    }

    $conn->close();
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
    <div class="container mt-4">
        <h1 class="mb-4">Uploaded Video</h1>
        <?php foreach ($videos as $v) { ?>
        <div class="d-flex flex-row border">
            <div>
                <video width="320" height="100%" style="max-height: 200px;">
                    <source src="<?= $v['url'] ?>#t=5" type="video/mp4">
                </video>
            </div>
            <div class="d-flex flex-column ml-4 p-4">
                <h5><?= $v['name'] ?></h5>
                <p>Uploaded by <?= $v['username'] ?> at <?= date("d M Y H:i:s", strtotime($v['published_at'])) ?></p>
                <p><?= $v['view_count'] ?> views</p>
                <a href="view_video.php?id=<?= $v['id'] ?>">Tonton sekarang</a>
            </div>
        </div>
        <?php } ?>
    </div>
    <?php include "footer.php"; ?>
  </body>
</html>
