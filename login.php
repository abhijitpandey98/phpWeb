<!DOCTYPE.html>
<html>
<head>

<title>
	RIZVI COLLEGE OF ENGINEERING

</title>
<style>


    div{
            text-align:center;
        
        /*   background: rgb(14, 207, 198);*/
            width:33%;
          margin:20px auto 0px;
          
         
          background-image:url(assets/img/theme.jpg);

       
    }
    .admin{
        background: rgb(14, 207, 198);
    }

</style>
</head>
<body>
<?php include 'temp.php';
?>
<div class="main">
<div >
<form action="login.php" method="POST">
<center><table>
<tr>
<th><input type="text" name="userid" placeholder="userid"></th>
</tr>
<tr>
<th><input type="password" name="pass" placeholder="password"></th>
</tr>
<tr>
<td><center><input type="submit" name="but_submit" value="login"><center></tr>
</tr>

</table></center>
</form>
</div>
<?php
/*
session_start();
    if(isset($_POST["but_submit"])){
        $name = $_POST["userid"];
        $pwd = $_POST["pass"];
        $conn=mysqli_connect("localhost","root","","profile");
        $result=mysqli_query($conn,"select userid,password from user_detail");
        while( $row=mysqli_fetch_assoc($result));
    {
        echo"<tr><th>".$row['id']."</th>
		<th>".$row['name']."</th>
		<th>".$row['email']."</th>
		<th>".$row['massage']."</th>
	</tr>";
      /*  if($name==$row['userid']&&$pwd==$row['password']){
            header('location:mydatabase.php');
            $_SESSION["user"] = $name;
            echo "Welcome ".$_SESSION["user"] ."<a href='login.php?logout=true'>Logout</a>";

        }
    
        else{
            echo "Invalid";
        }
    }
    }
    if(isset($_GET["logout"])){
        
        if(isset($_SESSION["user"])){
           
           session_destroy();
           echo "You just logged out";
           
        }
        
        
    }
*/
if(isset($_POST["but_submit"])){
$name = $_POST["userid"];
$pwd = $_POST["pass"];
 $conn=mysqli_connect("localhost","root","","profile");
   $table=mysqli_query($conn,"select * from user_detail");

while($row=mysqli_fetch_assoc($table))
{
if($name==$row['userid']&&$pwd==$row['password'])
{
    header('location:mydatabase.php');
}
else{
    echo "Invalid";
}
}
}

    ?>
</div>
</body>
</html>
