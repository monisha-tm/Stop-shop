<?php
$Product_id = filter_input(INPUT_POST, 'Product_id');
$Product_name= filter_input(INPUT_POST, 'Product_name');
$Product_price= filter_input(INPUT_POST, 'Product_price');
$Product_company= filter_input(INPUT_POST, 'Product_company');
$Product_image= filter_input(INPUT_POST, 'Product_image');
if (isset($_POST['submit'])) {

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
echo "New record is inserted sucessfully";
}
else{
echo "Error: ". $sql ."
". $conn->error;
}
$conn->close();
}
}
?>
<!DOCTYPE html>
<html>
<head>
<title>DairyProducts</title>
 <style>
    body {
    background-color : #484848;
    margin: 0;
    padding: 0;
}
.container{
  width: 320px;
  height: 450px;
  background-image: url("http://localhost/img1.jpg");
    background-repeat: no-repeat;
    background-position: center;
  color: #fff;
    top: 50%;
    left: 50%;
    position: absolute;
    transform: translate(-50%,-50%);
    box-sizing: border-box;
    padding: 40px 20px; 
}
h1{
  margin: 0;
  padding: 0 0 30px;
  font-size: 30px;
  color : black;
    text-align : center;
    font-family: serif;
    font-style: italic;
    font-weight: bold;
}
form {
    width: 300px;
    margin: 0 auto;
    color: darkblue;
    font-size: 20px;
    float: left;
  outline: none;
  background: transparent;
}
.container input[type="submit"]
{
  border: none;
  background: black;
  outline: none;
  height: 30px;
  color: #fff;
  font-size: 16px;
  border-radius: 20px;
}
 </style>

</head>
<body background='http://localhost/image4.jpg'>
  <div class="container">

  <h1>Add Dairy Products</h1>
<form method="POST" action="dairysam.php" enctype="multipart/form-data">
Product_id :<input type="varchar(11)" name="Product_id"><br><br>
Product_name :<input type="text" name="Product_name"><br><br>
Product_price:<input type="varchar(20)" name="Product_price"><br><br>
Company:<input type="text" name="Product_company"><br><br>
Product_image:<input type="file" name="Product_image"><br><br>
<div align="center">
<input  type="submit" value="Add Item">
</div>

</form>
</div>
</body>
</html>