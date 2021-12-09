<?php
    session_start();
    
    $video_link = $_POST['url'];
    $video_name = $_POST['name'];
    $video_description = $_POST['description'];

    require_once "connection.php";

    // SQL Insert
    $sql = "INSERT INTO videos (uploader, name, description, url) VALUES ('".$_SESSION['user_id']."', '".$video_name."', '".$video_description."', '".$video_link."')";

    if ($conn->query($sql)) {
        echo "Video telah berhasil di-upload.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
?>