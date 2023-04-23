<?php
session_start();
include 'connection.php';
if(isset($_POST['submit']))// condition to check when the button is clicked
{
    $username=$_POST['username'];
    $password=$_POST['password'];
$data=mysqli_query($con,"SELECT * FROM `login` WHERE username='$username' and password='$password' ");

$row=mysqli_fetch_assoc($data);//fetching  data to  $row
if(mysqli_num_rows($data)>0)//userid and password match
{
if($row['type']=="admin")
 {
  header("location:adminhome.php");
}
if($row ['type']=="user")
{
  $_SESSION['login_id']=$row['login_id'];
  header("location:userhome.php");
}
  
    // header("location:home1.php");// move to the page Home.phpif the condition is true


//header("location:home1.php");

}else
{
echo "invalid userid or password";
}
}
?>

<!doctype html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> PROJECT USING BOOTSTAP</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <style>
      body
      {
        background-color:lightblue;
      }
      .container
      { 
      
        width:20%
      }
    </style>
      </head>
  
  <body>
  

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <div class="container">
  
            <form action="" method="POST">

            <div class="input-group mb-3">
             <span class="input-group-text" id="inputGroup-sizing-default">username</span>
            <input type="text"  name="username" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" required>
            </div>

            <div class="input-group mb-3">
             <span class="input-group-text" id="inputGroup-sizing-default">Password</span>
             <input type="password" name="password" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" required>
            </div>

            <div>
            <button name="submit" value="submit"class="btn btn-primary">Submit</button> <br> 
            <a href="user_registration.php"> User Registration</a>
            </div>

            </form>

   </div>



  </body>
</html>