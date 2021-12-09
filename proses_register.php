<?php
    // Validate
    if (!isset($_POST['username']) || !isset($_POST['password']) || empty($_POST['username']) || empty($_POST['password']) || !ctype_alnum($_POST['username']) || !ctype_alnum($_POST['password'])) {
        echo "Username dan password tidak valid. Harap gunakan alphanumeric saja.";
        exit;
    }

    session_start();
    
    $a_username = $_POST['username'];
    $a_password = md5($_POST['password']);

    require_once "connection.php";

    // SQL Insert
    $sql = "INSERT INTO users (username, password) VALUES ('$a_username', '$a_password')";

    if ($conn->query($sql)) {
        $_SESSION['user_id'] = $conn->insert_id;
        header("Location: index.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
?>