<!DOCTYPE html>
<html>
<head>
    <title>Upload Video</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <?php include "nav.php" ?>
    <div class="container mt-4">
        <h1>Upload Video</h1>
        <p>Anda dapat mengupload video di sini.</p>
        <form method="POST" action="proses_upload_video.php">
            <label for="url">Link video</label>
            <input class="form-control mb-4" type="text" name="url" placeholder="http://domain.net/video.mp4">
            <label for="url">Nama video</label>
            <input class="form-control mb-4" type="text" name="name" placeholder="Name video">
            <label for="url">Deskripsi video</label>
            <textarea class="form-control mb-4" name="description" placeholder="Description"></textarea>
            <button type="submit" class="btn btn-primary">Upload</button>
        </form>
    </div>
    <?php include "footer.php" ?>
</body>
</html>