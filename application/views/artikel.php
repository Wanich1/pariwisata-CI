<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/file.css">
    <title>Artikel</title>
</head>
<body>
    <div style="padding : 20px;">
    <?php foreach($konten as $dst):?>
    <div class="row">
        <div class="card" style="padding: 20px;">
        <?php echo $dst['isi_konten']; ?>
        </div>
    </div>
    <?php endforeach ?>
    </div>
</body>
</html>
