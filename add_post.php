<?php

 /*
	 if(isset($_POST['submit'])){
	
	$title=$_POST['title'];
	$name=$_POST['name'];
	
		
	$data="INSERT INTO user (title,name)
	VALUES('$title','$name')";
	$run=$db->insert('user', $data);
	
	
	
	
	 }
    
*/
?>

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
          <a class="blog-nav-item" href="indux.php">ALL Post</a>
          <a class="blog-nav-item" href="#">Services</a>
          <a class="blog-nav-item pull-right" href="#">About Us</a>
          <a class="blog-nav-item pull-right" href="#">Contact</a>
        </nav>
      </div>
    </div>


	
	
	
<?php //echo validation_errors(); ?>

<?php //echo form_open('news/create'); ?>
	<form action="add_post.php" method="post" enctype="multipart/form-data" >	
  <div class="form-group">
    <label>Post Title</label>
    <input type="text" name="title" class="form-control" id="exampleInputEmail1" placeholder=" Enter Post Title">
  </div>
  <div class="form-group">
    <label>Content</label>
    <textarea name="content" class="form-control" rows="3"> </textarea>
  </div>
   <button type="submit"   name="submit" class="btn btn-success">Submit</button>
  <a href="indux.php" class="btn btn-danger" >Cancel</a>
</form>




</body>
</html>