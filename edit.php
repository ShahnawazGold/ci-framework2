<head>
	<meta charset="utf-8">
	 <!-- Bootstrap core CSS -->
   
	<title>Welcome to CodeIgniter</title>

	<link rel="stylesheet" type="text/css" href=" <?= base_url('shah/css/bootstrap.min.css');?> " >
	
	

<body>

<form  method="post" action="<?= site_url('user/update'); ?>"  enctype="multipart/form-data" >	


<input type="text" name="id" class="form-control" value="<?php echo $r->id; ?>" id="exampleInputEmail1" 
	placeholder=" Enter Post name">
	
  <div class="form-group">
    <label>Post name</label>
    <input type="text" name="name" class="form-control" value="<?php echo $r->name; ?>" id="exampleInputEmail1" 
	placeholder=" Enter Post name">
  </div>
  
  <div class="form-group">
    <label>post pass</label>
    <input type="text" name="pass"  class="form-control" value="<?php echo $r->pass; ?>" id="exampleInputEmail1"
	placeholder=" Enter Post pass">
  
  </div>
  
   <button type="submit"   name="submit" value="save" class="btn btn-success">Submit</button>
   
  <a href="indux.php" class="btn btn-danger" >Cancel</a>
  
  
  
  
</form>



</body>
</html>