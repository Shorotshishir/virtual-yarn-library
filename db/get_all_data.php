<?php
$conn=mysqli_connect("localhost","root","","sq_virtual_yarn_library");
$res=mysqli_query($conn,"SELECT * from products");
$arr=array();
if($res){
	while($r=mysqli_fetch_assoc($res)){
		$r['combined']= $r['name'].' '.$r['company'].' '.$r['compositions'].' '.$r['season'].' '.$r['style'];
		$arr[]=$r;

	}
	echo json_encode($arr);
}
?>