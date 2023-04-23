<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
$color="yellow";
switch($color)
{
    case"red": 
        echo"your favourite color is red";
        break;
     case"blue":
        echo"your favorite color is blue"  ; 
        break;

      case"green":
    echo"yor favourite color is green";
break;
default:
echo"your favourite color is neither red,green nor blue";
}
?>
</body>
</html>