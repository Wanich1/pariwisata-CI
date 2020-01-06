<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/file.css">
    <title>Document</title>
</head>
<body>
    <div style="padding: 20px;">
    <div class="row">
        <div class="leftcolumn">
			
            <div class="card">
				<span class="label" style="background-color: #4CAF50;">Event</span>
				<hr style="border: 2px solid #4CAF50">
				<div class="container">
				<a style="text-decoration: none; color:black;" href="/artikel"><h2>Awali hari dengan indahnya sinar mentari pagi: Omah Kayu Paralayang, Batu</h2>
				<h5>Title description, Dec 7, 2017</h5>
				<div  style="height:200px;"><img class="img-thumb" src="assets/img/thumb/thumb omah kayu.jpg" alt=""></div>
				<!-- <p>Some text..</p> -->
				<p>Ada 6 buah rumah pohon yang masing-masing dapat menampung 3 orang. Pemandangan dari atas rumah pohon ini pasti akan menyihir Anda. Hijaunya gunung di siang hari dan indahnya lampu kota di malam hari. Anda bisa duduk di kursi kayu di balkonnya terus-terusan tanpa pernah merasa bosan!</p>
				<br></a>
				<?php foreach($konten as $kntn):?>
				<h2><?php echo $kntn['judul'];?></h2>
				<h5>Title description, <?php echo $kntn['tanggal'];?></h5>
				<div class="fakeimg" style="height:200px;">Image</div>
				<p>Some text..</p>
				<p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
				<?php endforeach; ?>
			</div>
            </div>
            <div class="card">
            <span class="label" style="background-color: blue;">Destinasi</span>
            <hr style="border: 2px solid blue;">
            <h2>TITLE HEADING</h2>
            <h5>Title description, Sep 2, 2017</h5>
            <div class="fakeimg" style="height:200px;">Image</div>
            <p>Some text..</p>
            <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
            </div>
        </div>
        <div class="rightcolumn">
            <div class="card">
            <span class="label" style="background-color: red;">Penginapan</span>
            <hr style="border: 2px solid red">
            <h2>TITTLE HEADING</h2>
            <div class="fakeimg" style="height:100px;">Image</div>
            <p>Some text about me in culpa qui officia deserunt mollit anim..</p>
            </div>
            <div class="card">
            <span class="label" style="background-color: red;">Penginapan</span>
            <hr style="border: 2px solid red">
            <h2>TITTLE HEADING</h2>
            <div class="fakeimg" style="height:100px;">Image</div>
            <p>Some text about me in culpa qui officia deserunt mollit anim..</p>
            </div>
            <div class="card">
            <h3>Follow Me</h3>
            <p>Some text..</p>
            </div>
        </div>
    </div>
    </div>    
</body>
</html>
