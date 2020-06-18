<!DOCTYPE html>
<html>
<head>
<style>
/*
.main{
	position:auto;
	top:25%;
	margin-top:11%;

}*/
.admin{
        background: rgb(14, 207, 198);
    }
</style>
<title>my</title></head>
<body>
<?php
include 'temp.php';
session_start();
If(isset($_SESSION["user"])){
	echo $_SESSION["user"] ;
}
?>
<div class="main">
	<table>
		
		<tr>
		<th>id</th>
		<th>name</th>
		<th>email</th>
		<th>message</th>
	</tr>
<?php 

   $conn=mysqli_connect("localhost","root","","profile");
   $table=mysqli_query($conn,"select * from form");

while($row=mysqli_fetch_assoc($table))
{
		echo"<tr><th>".$row['id']."</th>
		<th>".$row['name']."</th>
		<th>".$row['email']."</th>
		<th>".$row['massage']."</th>
	</tr>";
}
mysqli_close($conn);
?>


	
</table>
</div>

</body>
</html>