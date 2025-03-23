<table class="table table-bordered">

<tr>
<th>Name</th>
<th>Phone</th>
<th>Standerd</th>
<th>Medium</th>
<th>Actions</th>
</tr>


<tr>
	<?php
	$g=$_GET['m'];
	include "conect.php";
	$s=mysqli_query($con,"select * from student where name like '%$g%' or std like '%$g%' or no like '%$g%' or medium like '%$g%' ");
while($r=mysqli_fetch_array($s))
{
	?>


<td><?php echo $r['name'];  ?></td>
<td><?php echo $r['no'];  ?></td>
<td><?php echo $r['std'];  ?></td>
<td><?php echo $r['medium'];  ?></td>
<td>

<a href="editstud.php?a=<?php echo $r['id'];  ?>" class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
<a href="deletestud.php?a=<?php echo $r['id'];  ?>"  class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
</td>
</tr>
<?php } ?>

</tbody>
</table>