<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman About</title>
</head>
<body>
    <div class="container"></div>
    <h1 class="mt-4">About Me</h1>
    <img src="<?php echo BASEURL; ?>/img/logo.png" width="200" class="rounded-circle shadow">
    <p>Halo, nama saya <?php echo $data['nama']; ?>, saya adalah seorang <?php echo $data['pekerjaan']; ?> </p>
</body>
</html>