<?php
include 'connection.php';
$data=mysqli_query($con,"select p_id, p_name,price,ex_date,category_registration.category  from product_registration inner join category_registration on product_registration.category_id=category_registration.category_id");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table,tr,th,td
        {
           border: 2px solid black;
           border-collapse:collapse; 
        }
    </style>
</head>
<body>
    
<table>
        <tr>
            <th>ProductName</th>
            <th>Price</th>
            <th>ExpiaryDate</th>
            <th>Category_id</th>
            

        </tr>
        <?php
while($row= mysqli_fetch_assoc($data))//o fetch data from table to display 
{
?>
<tr><td><?php echo $row['p_name'] ; ?></td>

<td><?php echo $row['price'];?></td> 

<td><?php echo $row['ex_date'];?></td>

<td><?php echo $row['category'];?></td>




<td><a href="book.php?id=<?php echo $row['p_id']?>">book</a></td>

<?php
}
?>

</body>
</html>