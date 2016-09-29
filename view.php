<?php

include_once 'dbconfig.php';

// delete condition
if(isset($_GET['delete']))
{
	
 $sql_query="DELETE FROM student_tbl WHERE sid=".$_GET['delete'];
 mysqli_query($conn, $sql_query);
 header("Location: $_SERVER[PHP_SELF]");
}
// delete condition


?>
<html>
	<head>	
		<title>Student Form</title>	 
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
			<script type="text/javascript">
			function update(id)
			{
			 if(confirm('Sure to edit ?'))
			 {
			  window.location.href='update.php?update='+id;
			 }
			}
			function delete_id(id)
			{
			 if(confirm('Sure to Delete ?'))
			 {
			  window.location.href='view.php?delete_id='+id;
			 }
			}
			</script>
	</head>
	
<?php
	$query = "select * from student_tbl;";
	$result = mysqli_query($conn,$query);	
?>
<body>
  <div class="container">
	  <div class="row">
	  
		<h2 class="text-center">Student Information</h2>
			<table class="table table-bordered">
				<thead>
				  <tr>
					<th colspan="5" class="text-center"><a href="form_submit.php">Add Data Here</a></th>
				  </tr>
				  <tr>
					<th>Firstname</th>
					<th>Lastname</th>
					<th>Email</th>
					<th colspan="2" class="text-center">Action</th>
				  </tr>
				</thead>
			<?php
				// output data of each row
			while($row = mysqli_fetch_row($result)) {
			?>
				<tbody>
				  <tr>
					<td><?php echo $row[1]; ?></td>
					<td><?php echo $row[2];?></td>
					<td><?php echo $row[3];?></td>
					<td><a href="update.php?update=<?php echo $row[0]; ?>">Edit</a></td>
					<td><a href="view.php?delete=<?php echo $row[0]; ?>">Delete</a></td>
        
				  </tr>
				</tbody>
			  <?php
				} 
			  ?>
			
			</table>
	  </div>
  </div>
</body>
</html>
