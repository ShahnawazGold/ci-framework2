


<head>
	<meta charset="utf-8">
	 <!-- Bootstrap core CSS -->
   
	<title>Welcome to CodeIgniter</title>

	<link rel="stylesheet" type="text/css" href=" <?= base_url('shah/css/bootstrap.min.css');?> " >
	
	
</head>
<body>


<div class="blog-masthead">
      <div class="container">
        <nav class="blog-nav">
          <a class="blog-nav-item active" href="indux.php">Home</a>
          <a class="blog-nav-item" href="add_post.php">add post</a>
          <a class="blog-nav-item" href="#">Services</a>
          <a class="blog-nav-item pull-right" href="#">About Us</a>
          <a class="blog-nav-item pull-right" href="#">Contact</a>
        </nav>
      </div>
    </div>

<h2><?php //echo $title; ?></h2>
<?php foreach ( $news as $value): ?>

<h1><?php echo $value['name']; ?></h1>
<h3><?php echo $value['pass']; ?></h3>
<h2><?php echo $value['comment']; ?></h2>
<a class="readmore" href="single.php?id=<?php  echo $value ['id']; ?>">Read More</a>
<?php endforeach; ?>

<?php
/*
foreach($news as $value){ 
		
		//echo $value->name ."<br>";
 }*/
 
 ?>


</body>
</html>