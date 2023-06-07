<?php
// Database credentials
$db_name='gymregister';
$db_pas = '';
$server = 'localhost';
$user = 'root';

// Create a connection
$conn=mysqli_connect($server, $user, $db_pas, $db_name);
if($conn){
    echo "connected successfully";
}


//insert data

if(isset($_POST["login"])){
if(!empty($_POST["email"])
&&!empty($_POST["password"])){
    $email=$_POST["email"];
    $password=$_POST["password"];
    $sql="INSERT INTO register(email,password) 
    VALUES ('$email','$password')";

    mysqli_query($conn,$sql);
}

}

?>