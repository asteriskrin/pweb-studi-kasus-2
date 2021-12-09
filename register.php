<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <?php include "nav.php" ?>
    <div class="container mt-4">
        <h1>Register</h1>
        <p>Anda dapat mendaftar akun di sini.</p>
        <form method="POST" action="proses_register.php">
            <label for="username">Username</label>
            <input class="form-control mb-4" type="text" name="username" placeholder="Username">
            <label for="password">Password</label>
            <input class="form-control mb-4" type="password" name="password" placeholder="Password">
            <button type="submit" class="btn btn-primary">Register</button>
        </form>
    </div>
    <?php include "footer.php" ?>
</body>
</html>