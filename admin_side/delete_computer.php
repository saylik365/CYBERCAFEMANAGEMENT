<?php
$con=mysqli_connect("localhost","root","","ccmsdb")or die("Database Problem...!");
?>
<?php
$id=$_GET['id'];

if(mysqli_query($con,"DELETE FROM tblcomputers WHERE ID='".$id."'"))
{
	echo "
		<script>
			alert('RECORD DELETED');
			window.location.href='manage-computer.php';
		</script>
	";
}
else
{
	echo "
		<script>
			alert('TRY AGAIN..!');
			window.location.href='manage-computer.php';
		</script>
	";
}
?>