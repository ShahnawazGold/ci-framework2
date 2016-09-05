<head>
	<meta charset="utf-8">
	 <!-- Bootstrap core CSS -->
   
	<title>Welcome to CodeIgniter</title>

	<link rel="stylesheet" type="text/css" href=" <?= base_url('shah/css/bootstrap.min.css');?> " >
	
	

<body>

<form  method="post" action="<?= site_url('user/savadata'); ?>"  enctype="multipart/form-data" >	



  <div class="form-group">
    <label>Post name</label>
    <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder=" Enter Post name">
  </div>
  
  <div class="form-group">
    <label>post pass</label>
    <input type="text" name="pass" class="form-control" id="exampleInputEmail1" placeholder=" Enter Post pass">
  
  </div>
  
   <button type="submit"   name="submit" value="save" class="btn btn-success">Submit</button>
   
  <a href="indux.php" class="btn btn-danger" >Cancel</a>
</form>
<table border="3">
<thead>
      <th>ID</th>
	  <th>NAME</th>
	  <th>PASS</th>

</thead>
	<tbody>
		<?php 
         foreach($this->m->gettable () as $row )
		 {
			 echo"<tr>
			       <td>$row->id</td>
				   <td>$row->name</td>
				   <td>$row->pass</td>
				   <td><a href='".site_url('user/edit/'.$row->id)."'>EDIT</a>
				   <td><a href='".site_url('user/delete/'.$row->id)."'>DELETE</a>
				   </td>
			    </tr>";	 	 
		 }

		?>


	</tbody>

</table>


</body>
</html>