<?php
?>
<!DOCTYPE html>
<html>
<head>
    <title>Upload Video</title>
</head>
<body>
    <form method="POST" action="proses_upload_video.php">
        <input type="text" name="url" placeholder="Link video">
        <input type="text" name="name" placeholder="Name video">
        <textarea name="description" placeholder="Description"></textarea>
        <button type="submit">Upload</button>
    </form>
</body>
</html>