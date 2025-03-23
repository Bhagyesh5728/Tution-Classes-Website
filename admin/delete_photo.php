<?php
$b=$_GET['b'];

include "conect.php";
mysqli_query($con,"delete from photos where id='$b'");
header("location:view_photo.php");
?>