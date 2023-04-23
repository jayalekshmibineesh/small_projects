<?php
include 'connection.php';
session_start(); 
$id=$_GET['id'];
 $data=mysqli_query($con,"select* from `product_registration` where p_id='$id'");
 $row= mysqli_fetch_assoc($data);
 if(isset($_POST['Book']))
 {
  $user_id=$_SESSION['login_id'];
  $quantity=$_POST['quantity'];
  $date=date("Y/m/d");
  mysqli_query($con,"INSERT INTO `book`( `p_id`, `date`, `status`, `quantity`, `user_id`) VALUES ('$id','$date','booked','$quantity','$user_id')");

 }
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Book Item </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
     <h2>Book Items</h2>
     <div class="container">
         <form  method="POST">
         <div class="input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-default">ProductName</span>
                <input type="text" name="productname" value="<?php echo $row['p_name'];?>" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-default">Quantity</span>
                <input type="text" name="quantity" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
            </div>
            <div>
            <button name="Book" value="Book" class="btn btn-primary">Book</button> 
            </div> 
            </form>

