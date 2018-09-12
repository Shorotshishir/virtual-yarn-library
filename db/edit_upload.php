<?php
$conn=mysqli_connect("localhost","root","","sq_virtual_yarn_library");
$filename = $_FILES['file']['name'];
$id=(int)$_POST['id'];
$location = 'product_images/'.date("Y-m-d").'_'.date("H-i-s").'_'.$filename;
mysqli_query($conn,"UPDATE products SET gauge= where id=$id");
if(move_uploaded_file($_FILES['file']['tmp_name'],$location)){
	if(mysqli_query($conn,"UPDATE products SET image='$filename',image_path='$location' where id=$id")){
		echo "ok";
	}
}
?>