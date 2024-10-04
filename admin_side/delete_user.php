<?php
$con=mysqli_connect("localhost","root","","ccmsdb")or die("Database Problem...!");
?>
<?php
$id=$_GET['id'];

if(mysqli_query($con,"DELETE FROM tblusers WHERE ID='".$id."'"))
{
	echo "
		<script>
			alert('RECORD DELETED');
			window.location.href='manage-newusers.php';
		</script>
	";
}
else
{
	echo "
		<script>
			alert('TRY AGAIN..!');
			window.location.href='manage-newusers.php';
		</script>
	";
}
?>