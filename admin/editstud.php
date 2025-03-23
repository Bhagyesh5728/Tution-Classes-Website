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
<body><br>&nbsp;&nbsp;
   <button class="btn btn-info add-new" id="back" onclick="history.back()"  >Back</button>
<div class="container">

<br><br><br>
<div class="table-title">
<div class="row">
<div class="col-sm-8"><h2> Update Students <b>Details</b></h2></div>

 
</div>
</div>
 <form method="post">
<span id="bm"><table class="table table-bordered">
<thead>
<tr>
<th width="200px;"> Name</th>
<th width="110px;">Phone</th>
<th width="50px;">Std.</th>
<th width="90px;">Medium</th>
<th width="50px;">AC</th>
<th width="50px;">State</th>
<th width="50px;">Eco.</th>
<th width="50px;">BA</th>
<th width="50px;">Eng.</th>
<th width="50px;">Guj.</th>
<th width="50px;">SPCC</th>

<th>Actions</th>

</tr>
</thead>
<tbody>
    <?php
    $t=$_GET['a'];
  include "conect.php";
    $s=mysqli_query($con,"select * from student where id='$t' ");
    while($r=mysqli_fetch_array($s))
    { 
     
  ?>

<tr>

<td><input name="nm" value="<?php echo $r['name'];  ?>" ></td>
<td><input name="no" style="width: 100px;" value="<?php echo $r['no'];  ?>" ></td>
<td>
<select name="std" >
  <option value="<?php echo $r['std'];  ?>"><?php echo $r['std'];  ?></option>
  <option value="11">11</option>
  <option value="12">12</option>

</select>
</td>
<td><select name="medium">
  <option value="<?php echo $r['medium'];  ?>"><?php echo $r['medium'];  ?></option>
  <option value="English">English</option>
  <option value="Gujarati">Gujarati</option>

</select></td>
<td><input name="account" style="width: 40px;" value="<?php echo $r['account'];  ?>" ></td>
<td><input name="state" style="width: 40px;" value="<?php echo $r['state'];  ?>" ></td>
<td><input name="economics" style="width: 40px;" value="<?php echo $r['economics'];  ?>" ></td>
<td><input name="ba" style="width: 40px;" value="<?php echo $r['ba'];  ?>" ></td>
<td><input name="english" style="width: 40px;" value="<?php echo $r['english'];  ?>"></td>
<td><input name="gujarati" style="width: 40px;" value="<?php echo $r['gujarati'];  ?>"></td>
<td><input name="spcc" style="width: 40px;"  value="<?php echo $r['spcc'];  ?>" ></td>
<td>

<a class="edit" title="Update" name="u" data-toggle="tooltip">Update</a>
</td>

</td>
</tr>
<?php 
}


?>

</tbody>
</table>

</span>
</form>
</div>
</div>
</body>
</html> 

<?php
if(isset($_POST['u']))
{ 

  $name=$_POST['nm'];
  $no=$_POST['no'];
  $std=$_POST['std'];
  $medium=$_POST['medium'];
  $account=$_POST['account'];
  $state=$_POST['state'];
  $economics=$_POST['economics'];
  $ba=$_POST['ba'];
  $english=$_POST['english'];
  $gujarati=$_POST['gujarati'];
  $spcc=$_POST['spcc'];
  mysqli_query($con,"update student set name='$name', no='$no', std='$std', medium='$medium', account='$account', state='$state', ba='$ba', english='$english', gujarati='$gujarati', economics='$economics', spcc='$spcc' ");
  echo "<script>alert('Updated')</script>";
  header("location:showstud.php");
}
}

else
{
    header("location:index.php");
}
?>
