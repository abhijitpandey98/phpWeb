<!DOCTYPE.html>
<html>
<head>
<title>
	RIZVI COLLEGE OF ENGINEERING
<link rel="shortcut icon" href="assets/img/img1.jpg">
</title>

<style>
    table{
        text-align: center;
        width : 25%;
        height: 25%;
        border-collapse: collapse;
        border:2px; 
        border-color: purple;
        color: red;
    }
    div{
            text-align:center;
            background: rgb(14, 207, 198);
            width:33%;
          margin:20px auto 0px;
          
         
    }
    .contact{
        background:rgb(14, 207, 198);
    }

    </style>
    <script>
   function validateForm() {
    var x = document.forms["myForm"]["fname"].value;
    var y = document.forms["myForm"]["email1"].value;
    var x = document.forms["myForm"]["msg"].value;
    if (x == "" || y=="" ||z==""|| y="%@%") {
        alert("* BOX must be filled out");
        return false;
    }

}
    </script>
    <script>

    </script>
</head>
<body>
<?php
include "temp.php";
?>
<div class="main">
    <div>
    <form method="POST" action="contact.php" onsubmit="return validateForm()"  name="myForm">
        <table>
            <tr>
                <td><label for="fname"><h1>Name</h1></label></td>
                <td><input type="text" name="fname"></td>
                <td>*</td>

            </tr>
            <tr>
                <td><label for="email1"><h1>Email</h1></label></td>
                <td><input type="email" name="email1"></td>
                <td>*</td>
            </tr>
            <tr>
                <td><label for="msg"><h1>Message</h1></label></td>
                <td><input type="text" name="msg"></td>
                <td>*</td>
            </tr>
            <tr>
                <td><button name="submit_button" onclick="check()">Submit</button></td>
                <td><button>Reset</button></td>
            </tr>

        </table>
    </form>
    </div>
     <?php 
               if(isset($_POST["submit_button"]))
               {

                  $name=$_POST["fname"];
                  $email=$_POST["email1"];
                  $massage=$_POST["msg"];
                  
             
                  // connecting to mysql database 
                  $conn = mysqli_connect("localhost","root","","profile");              // //query to insert the values in table 
                  


                  
                mysqli_query($conn,  "insert into form (name,email,massage) values ('".$name."','".$email."','".$massage."')");
                echo "<h1>Data inserted Successfully</h1>";
                 //mysqli_close($conn);


               }            
         ?>
         </div>
</body>
</html>