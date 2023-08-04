<?php
include 'declare.php';
$conn = mysqli_connect("localhost", "root", "", "user verification");

if(isset($_POST['submit']))
{
$name = $_POST['name'];
$email = $_POST['email'];
$pwd = $_POST['pwd'];
$rpwd = $_POST['rpwd'];
$sql = "INSERT INTO users(name,e_mail,pwd,rpwd) VALUES('$name','$email','$pwd', '$rpwd')";
if(mysqli_query($conn,$sql))
{
    echo "<script>alert('new data inserted successfully')</script>";
    header("Location:./welcomepage/welcome.html");
}
else{
    echo "error:".mysqli_error($conn);
}
mysqli_close($conn);
}
?>