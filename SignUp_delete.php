<?php
//database connection  file
include 'connect.php';
//Code for deletion
if(isset($_GET['delid']))
{
$rid=intval($_GET['delid']);
$sql=mysqli_query($con,"delete from signup where id=$rid");
echo "<script>alert('Do you really want to Delete');</script>"; 
echo "<script>window.location.href = 'SignUp_index.php'</script>";     
} 
?>

