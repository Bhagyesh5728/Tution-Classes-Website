<?php session_start(); 
if(isset($_SESSION['b']))
{
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
 <title>Students Detail</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="shortcut icon" type="image/x-icon" href="assets/img/TAPSVI_CLASSES-removebg-preview.png" width="25px" height="25px">

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Open+Sans">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style type="text/css">
.m:hover{
  background-color: white;
}
body {
color: #404E67;
background: #F5F7FA;
font-family: 'Open Sans', sans-serif;
}
.table-wrapper {
width: 700px;
margin: 30px auto;
background: #fff;
padding: 20px;
box-shadow: 0 1px 1px rgba(0,0,0,.05);
}
.table-title {
padding-bottom: 10px;
margin: 0 0 10px;
}
.table-title h2 {
margin: 6px 0 0;
font-size: 22px;
}
.table-title .add-new {
float: right;
height: 30px;
font-weight: bold;
font-size: 12px;
text-shadow: none;
min-width: 100px;
border-radius: 50px;
line-height: 13px;
}
.table-title .add-new i {
margin-right: 4px;
}
table.table {
table-layout: fixed;
}
table.table tr th, table.table tr td {
border-color: #e9e9e9;
}
table.table th i {
font-size: 13px;
margin: 0 5px;
cursor: pointer;
}
table.table th:last-child {
width: 100px;
}
table.table td a {
cursor: pointer;
display: inline-block;
margin: 0 5px;
min-width: 24px;
}
table.table td a.add {
color: #27C46B;
}
table.table td a.edit {
color: #FFC107;
}
table.table td a.delete {
color: #E34724;
}
table.table td i {
font-size: 19px;
}
table.table td a.add i {
font-size: 24px;
margin-right: -1px;
position: relative;
top: 3px;
}
table.table .form-control {
height: 32px;
line-height: 32px;
box-shadow: none;
border-radius: 2px;
}
table.table .form-control.error {
border-color: #f50000;
}
table.table td .add {
display: none;
}
</style>
<script type="text/javascript">
$(document).ready(function(){
$('[data-toggle="tooltip"]').tooltip();
var actions = $("table td:last-child").html();


// Delete row on delete button click
$(document).on("click", ".delete", function(){

$(".add-new").removeAttr("disabled");
});
});
</script>
</head>
<body ><br>&nbsp;&nbsp;
   <a href="ADD Photos.php"> <button class="btn btn-info add-new" id="back" >Back</button></a>
<br><br>
    <table>
    <?php
    include "conect.php";
    $t=mysqli_query($con,"select * from photos");
    $z=0;
    while($r=mysqli_fetch_array($t))
    {
        if($z%3==0)
  {
    echo "<tr>";
  }
    


     ?>
     <td><img src="<?php echo $r['url']; ?>" width="100" height="100"><br><a href="delete_photo.php?b=<?php echo $r['id'] ?>">Delete</a>
 </td>
 <?php
 if($z%3==2)
  {
    echo "</tr>";
  }
  $z++;
}
 ?>
</table>
   <?php
}
else
{
    header("location:index.php");
}
?>