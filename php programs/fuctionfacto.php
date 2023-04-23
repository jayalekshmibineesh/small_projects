<?php

function factorial($num)
{
  $fact=1;
for($i=1;$i<=$num;$i++)
{

  $fact=$fact*$i;
 }
echo "factorial of $num is"." " .$fact;
}
echo factorial(8);

?>