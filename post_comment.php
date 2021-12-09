<?php
    session_start();

    require_once "auth.php";

    $video_id = $_POST['video_id'];
    $comment = $_POST['comment'];

    require_once "connection.php";

    // SQL Insert
    $sql = "INSERT INTO comments (user_id, video_id, comment) VALUES ('".$_SESSION['user_id']."', '".$video_id."', '".$comment."')";

    if ($conn->query($sql)) {
        header("Location: view_video.php?id=".$video_id);
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
?>