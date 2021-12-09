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

    // SQL Select
    $sql = "SELECT id FROM users WHERE username = '$a_username' AND password = '$a_password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        $row = $result->fetch_assoc();
        $_SESSION['user_id'] = $row['id'];
        header("Location: index.php");
    } else {
        echo "Username atau password salah.";
    }
?>