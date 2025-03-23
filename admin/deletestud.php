<?php
$k=$_GET['a'];
include "conect.php";
mysqli_query($con,"delete from student where id='$k'");
header("location:showstud.php");


?>