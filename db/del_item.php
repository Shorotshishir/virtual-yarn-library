<?php
$conn=mysqli_connect("localhost","root","","sq_virtual_yarn_library");
$id= (int)$_GET['id'];
if(mysqli_query($conn,"DELETE from products where id=$id")){
	echo "ok";
}
?>