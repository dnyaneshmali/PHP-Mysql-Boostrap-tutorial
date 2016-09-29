<?php

include_once 'dbconfig.php';

if(isset($_POST['submit'])){
	
$firstname = $_POST['fname'];
$lastname = $_POST['lname'];
$studentname = $_POST['sclass'];

//Insert Query
$query = "insert into student_tbl(first_name,last_name,student_class) values('$firstname','$lastname','$studentname');";
//Execute Query

mysqli_query($conn, $query);

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
<h2 class="text-center">Student Information</h2>
<button class="btn"><a href="view.php">back to main page</a></button>
<form method="post">
 <div class="form-group">
 <label for="email">First Name</label>
<input type="text" name="fname" class="form-control" placeholder="Enter First Name">
</div>
 <div class="form-group">
 <label for="email">Last Name</label>
<input type="text" name="lname" class="form-control" placeholder="Enter Last Name">
</div>
 <div class="form-group">
 <label for="email">Student Class</label>
<input type="text" name="sclass" class="form-control" placeholder="Enter Class Name">
</div>
<input type="submit" name="submit" class="btn btn-default" value="Submit">
</form>
 </div>

</div>
</body>
</html>