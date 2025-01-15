<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "proadmin";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if ($conn) {
    echo "Connection OK";
} else {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['submited']))
{
    $name = $_POST['name'];
    $mobile = $_POST['mobile'];
    $email = $_POST['email'];
    $organization = $_POST['organization'];
    $message = $_POST['message'];

    if($name !="" && $mobile != "" && $email !="" && $organization != "" && $message !="")
    {
    $query = "INSERT INTO contectme (name, Mobile_no, Email, Organization, Message) 
              VALUES ('$name', '$mobile', '$email', '$organization', '$message')";
    $data = mysqli_query($conn, $query);
    
    if ($data) {
        echo "Data inserted successfully.";
    } 
    else {
        echo "Data insertion failed: " . mysqli_error($conn);
    }
    }
    else
    {
        echo "fill the form";
    }
}
?>
