<?php
$conn=mysqli_connect("localhost","root","","sq_virtual_yarn_library");
$filename = $_FILES['file']['name'];
$location = 'product_images/'.date("Y-m-d").'_'.date("H-i-s").'_'.$filename;

if(move_uploaded_file($_FILES['file']['tmp_name'],$location)){
	if(mysqli_query($conn,"UPDATE products SET image='$filename',image_path='$location' ORDER BY id DESC LIMIT 1")){
		echo "ok";
	}
}
?>