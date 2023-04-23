<?php
include 'connection.php';
if (isset($_POST['submit']))
{
$username=$_POST['username'];
$dob=$_POST['dob'];
$email=$_POST['email'];
$contact=$_POST['contact'];
$password=$_POST['password'];

// var_dump($username);
// exit();
mysqli_query($con,"INSERT INTO `user_registration`( `user_name`, `DOB`, `email`, `password`, `contactnumber`) VALUES ('$username','$dob','$email','$password','$contact')");
mysqli_query($con,"INSERT INTO `login`( `username`, `password`, `type`) VALUES ('$username','$password','user')");
echo"<script> alert('Registered  successfully')</script>" ;
}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> PROJECT USING BOOTSTAP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <div class="container">
  
            <form action="" method="POST">
            <div class="input-group mb-3">
             <span class="input-group-text" id="inputGroup-sizing-default">username</span>
             <input type="text"  name="username" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
            </div>
 

            <div class="input-group mb-3">
             <span class="input-group-text" id="inputGroup-sizing-default">Date of birth</span>
             <input type="date"  name="dob" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
            </div>

            <div class="input-group mb-3">
             <span class="input-group-text" id="inputGroup-sizing-default">Email</span>
             <input type="email"  name="email" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
            </div>
            <div class="input-group mb-3">
             <span class="input-group-text" id="inputGroup-sizing-default">Password</span>
             <input type="text"  name="password" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
            </div>
            <div class="input-group mb-3">
             <span class="input-group-text" id="inputGroup-sizing-default">Contact Number</span>
             <input type="text"  name="contact" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
            </div>



            
            <div>
            <button  name="submit" value="submit" class="btn btn-primary">Submit</button> <br> 
            <!-- <a href="userregistration.php"> User Registration</a> -->
            </div>

            </form>

   </div>
