<?php
 $i1 = $_POST['name'];
 $i2 = $_POST['id'];
 $op = $_POST['op'];
 switch($op)
 {
   case "+":
   $output = $i1 + $i2;
   echo $output;
   break;
   case "-":
   $output = $i1 - $i2;
   echo $output;
   break;
   case '*':
 }
?>
© 2021 GitHub, Inc.