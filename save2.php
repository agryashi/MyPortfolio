<?php
$name = $_POST['t1'];
$email = $_POST['t2'];
$phone =$_POST['t3'];
$message =$_POST['t4'];



$conn = mysqli_connect("localhost", "root", "", "mydb");
if (!$conn) 
{
    die("Connection failed: " . mysqli_connect_error());
}
$sql = "INSERT INTO profile (name,email,phone,message)
VALUES ('$name','$email','$phone','$message')";

if (mysqli_query($conn, $sql))
{
    echo "New record created successfully";
} 
else 
{
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>
