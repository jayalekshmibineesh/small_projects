<?php
include 'connection.php';
$data=mysqli_query($con,"select * from category_registration");
if(isset($_POST['add']))
{

$productname=$_POST['productname'];
$price=$_POST['price'];
$expairydate=$_POST['expdate'];
$category_id=$_POST['category_id'];

mysqli_query($con,"INSERT INTO `product_registration`( `p_name`, `price`, `ex_date`, `category_id`) VALUES ('$productname','$price','$expairydate','$category_id')");
}

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Product Registration Bootstrap </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
     <h2>Product Registration</h2>
     <div class="container">
         <form  method="POST">
        
            <div class="input-group mb-3">
             <span class="input-group-text" id="inputGroup-sizing-default">ProductName</span>
             <input type="text"  name="productname" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
            </div>
            <div class="input-group mb-3">
             <span class="input-group-text" id="inputGroup-sizing-default">Price</span>
             <input type="text"  name="price" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
            </div>
            <div class="input-group mb-3">
             <span class="input-group-text" id="inputGroup-sizing-default">ExpiaryDate</span>
             <input type="date" name="expdate" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
            </div>
            
            <select name="category_id">
                <?php
                while($row=mysqli_fetch_assoc($data))
                {
                 ?>
                   <option value="<?php echo $row['category_id'];?>"><?php echo $row['category'];?></option>
                <?php
                 }  
                   ?>
        </select><br><br>
            <div>
            <button name="add"  value="add"class="btn btn-primary">Add</button>
            <button name="clear"  value="clear"class="btn btn-primary">Clear</button>
                         
            </div>


            </form>


    </div>
  </body>
</html>