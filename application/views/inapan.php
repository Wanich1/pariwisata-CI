<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/file.css">
    <title>Document</title>
</head>
<body>
    <div style="padding: 20px;">
    <div class="row">            
            <div class="card">
                <span class="label" style="background-color: #4CAF50;">Event</span>
                <hr style="border: 2px solid #4CAF50">
                <div class="container">
                <?php foreach($konten as $kntn):?>
                <h2><?php echo $kntn['judul'];?></h2>
                <h5>Title description, <?php echo $kntn['tanggal'];?></h5>
                <div class="fakeimg" style="height:200px;">
                    <img src="<?php echo base_url(); ?>assets/img/thumb/<?php echo $kntn['foto'] ?>" width="100%" height="180">
                </div>
                <p>Some text..</p>
                <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
                <br>
                <?php endforeach; ?>
                </div>
            </div>
            
    </div>
    </div>    
</body>
</html>
