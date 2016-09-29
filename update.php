<?php

include_once 'dbconfig.php';

if(isset($_GET['update']))
{
 $sql_query="SELECT * FROM student_tbl WHERE sid=".$_GET['update'];
 $result_set=mysqli_query($conn, $sql_query);
 $fetched_row=mysqli_fetch_array($result_set);
}


	
	if(isset($_POST['btn-update']))
{
$firstname = $_POST['fname'];
$lastname = $_POST['lname'];
$studentcls = $_POST['sclass'];

	
	$query = "UPDATE student_tbl SET first_name='$firstname',last_name='$lastname',student_class='$studentcls' WHERE sid=".$_GET['update'];
	
	 if(mysqli_query($conn, $query))
 {
  ?>
  <script type="text/javascript">
  alert('Data Are Updated Successfully');
  window.location.href='view.php';
  </script>
  <?php
 }
 else
 {
  ?>
  <script type="text/javascript">
  alert('error occured while updating data');
  </script>
  <?php
 }
	}
	if(isset($_POST['btn-cancel']))
{
 header("Location: view.php");
}
?>
<html>
<head>
<title>Student Form</title>
 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
<div class="row">
<h2 class="text-center">Edit Student Information</h2>
<form method="post">
 <div class="form-group">
 <label for="email">First Name</label>
<input type="text" name="fname" class="form-control" value="<?php echo $fetched_row['first_name']; ?>" placeholder="Enter First Name">
</div>
 <div class="form-group">
 <label for="email">Last Name</label>
<input type="text" name="lname" class="form-control" value="<?php echo $fetched_row['last_name']; ?>" placeholder="Enter Last Name">
</div>
 <div class="form-group">
 <label for="email">Student Class</label>
<input type="text" name="sclass" class="form-control" value="<?php echo $fetched_row['student_class']; ?>" placeholder="Enter Class Name">
</div>
<button type="submit" name="btn-update"><strong>UPDATE</strong></button>
<button type="submit" name="btn-cancel"><strong>Cancel</strong></button>
</form>
 </div>

</div>
</body>
</html>