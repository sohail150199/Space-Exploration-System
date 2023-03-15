<?php
//db connection
$conn= mysqli_connect('localhost','root','','planets');

//get the post records
$txtName = $_POST['txtName'];
$txtEmail = $_POST['txtEmail'];
$txtMessage = $_POST['txtMessage'];

// db sql code
$sql = "INSERT INTO 'signup'('Name','Email','Dropusaline') VALUES('$txtName','$txtEmail', '$txtMessage')";

//insert into db
$rs = mysqli_query($con,$sql);

if($rs)
{
    echo"Contact Records Inserted";
}
?>