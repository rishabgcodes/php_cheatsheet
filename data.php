<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "phptut";

$conn = mysqli_connect($servername,$username,$password,$database);

if(!$conn)
{
    die("failed to connect ".mysqli_connect_error());
}
else
{
    echo "Database connected successfully";
}

$sql = "INSERT INTO `users` (`sno`, `name`, `age`, `salary`) VALUES ('3', 'abhi', '53', '400000')";
if(mysqli_query($conn,$sql))
{
    echo "Success";
}
else{
    echo "Error".mysqli_error($conn);
}
mysqli_close($conn);
?>