<?php
$conn=mysqli_connect("localhost","root","","sq_virtual_yarn_library");
$post_data= file_get_contents("php://input");
$data=json_decode($post_data);
$name= $data->name;
$company= $data->company;
$season= $data->season;
$style= $data->style;


$count= $data->count;
$gauge= $data->gauge;
$price= $data->price;
if($data->op=="insert"){
	$comp= $data->comps;
	$color=  $data->color;
	$q="INSERT INTO products (name,company,season,style,color_code,compositions,count,gauge,price) VALUES ('$name','$company', '$season','$style','$color','$comp','$count','$gauge',''$price)";
	// echo $q;
	if(mysqli_query($conn,$q)){
		echo "ok";
	}
}
else{
	$comp= $data->compositions;
	$id= (int)$data->id;
	$color=  $data->color_code;
	$q="UPDATE products set name='$name', company='$company',season='$season',style='$style',color_code='$color',compositions='$comp', count= $count,gauge='$gauge',price='$price' where id= $id";
	echo $q;
}

// echo $q;
?>