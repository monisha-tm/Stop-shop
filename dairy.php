<?php
$Product_id = filter_input(INPUT_POST, 'Product_id');
$Product_name= filter_input(INPUT_POST, 'Product_name');
$Product_price= filter_input(INPUT_POST, 'Product_price');
$Product_company= filter_input(INPUT_POST, 'Product_company');
$Product_image = filter_input(INPUT_POST, 'Product_image'); 
 
if (!empty($Product_id)){
if (!empty($Product_name)){
if (!empty($Product_price)){
if (!empty($Product_company)){
if (!empty($Product_image)){
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "grocery";
// Create connection
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
if (mysqli_connect_error()){
die('Connect Error ('. mysqli_connect_errno() .') '
. mysqli_connect_error());
}
else{
$sql = "INSERT INTO dairy (Product_id, Product_name,Product_price,Product_company,Product_image)
values ('$Product_id','$Product_name','$Product_price','$Product_company','$Product_image')";
if ($conn->query($sql)){
echo '<script>alert("New Item added Successfully")</script>';
}
else{
echo "Error: ". $sql ."
". $conn->error;
}
$conn->close();
}
}
else{
echo "Product_id should not be empty";
die();
}
}
else{
echo "Product_name should not be empty";
die();
}
}
else{
echo "Product_price should not be empty";
die();
}
}
else{
echo "Product_company should not be empty";
die();
}
}
else{
	echo "Product_image should not be empty";
	die();
}

?>
