<?php
include 'declare.php';
$conn =  mysqli_connect("localhost", "root", "", "user verification");
if(!empty($_POST['submit']))
{
$email = $_POST['email'];
$pwd = $_POST['pwd'];
$sql = "SELECT * FROM users WHERE e_mail='$email' and pwd='$pwd'";
$result = mysqli_query($conn,$sql);

if ($result) {
    if (mysqli_num_rows($result) > 0) {
        header("Location:./welcomepage/welcome.html");
    } else {
        echo "<script>alert('Enter valid details')</script>";
        // header("Location:./loginpage.html");
        
    }
} else {
    echo 'Error: ' . mysqli_error();
}
mysqli_close($conn);
}
?>