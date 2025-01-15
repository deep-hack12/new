<?php
    
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "proadmin";
    
    $deta = mysqli_connect($servername, $username, $password, $dbname);
    
    if (isset($_POST['submited']))
    {
        $name = $_POST['name'];
        $mobile = $_POST['mobile'];
        $email = $_POST['email'];
        $duration = $_POST['duration'];
        $Publications = $_POST['Publications'];
        $Link = $_POST['Link'];
        $Status = $_POST['Status'];
    
        if($name !="" && $mobile != "" && $email !="" && $duration != "" && $Publications !="" && $Link !="" && $Status !="")
        {
        $query = "INSERT INTO student (name, mobile_no, email, duration, Publications, Link, Status) 
                  VALUES ('$name', '$mobile', '$email', '$duration', '$Publications', '$Link','$Status')";
        $data = mysqli_query($deta, $query);
        
        if ($data) {
            echo "Data inserted successfully.";
        } 
        else{
            echo "Data insertion failed: " . mysqli_error($deta);
            }
        }
    }
    ?>