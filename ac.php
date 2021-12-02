<?php
   $name = $_POST['na'];
   $email = $_POST['em'];
    
//    echo "Your name is ".$name."And your e mail is ".$email;

// -----------------DATA BASE CONNECTION -------------------
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


// ----------------insert query-------------------
// $sql = "INSERT INTO 'users' ('sno','name','age','salary')VALUES ('3','rishabh','32','3000')";
// if(mysqli_query($conn,$sql))
// {
//     echo "Success";
// }
// else{
//     echo "Error".mysqli_error($conn);
// }
// mysqli_close($conn);

?>