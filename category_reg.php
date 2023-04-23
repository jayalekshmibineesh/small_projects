<?php
include 'connection.php';
if(isset($_POST['add']))// condition to check when the button is clicked
{
      $category=$_POST['category'];
      //var_dump($category);
      //exit();
  mysqli_query($con,"INSERT INTO `category_registration`( `category`) VALUES ('$category')");
     echo"<script> alert('Category entered successfully')</script>" ;
}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Category Registration Bootstrap </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
     <h2>Category Registration</h2>
     <div class="container">
         <form  method="POST">
            <div class="input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-default">Category</span>
                <input type="text" name="category" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
            </div>
            <div>
            <!-- <button type="button" name="add" value="add" class="btn btn-primary">Add</button> -->
            <button name="add" class="btn btn-primary" value='add'>Add</button>
            
              
            </div>
            </form>


    </div>
  </body>
</html>