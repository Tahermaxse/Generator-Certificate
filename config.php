<?php

    $servername="localhost";
    $username="root";
    $password="";
    $dbname="certificate";

    $conn=mysqli_connect($servername,$username,$password,$dbname);
    if($conn->connect_error)
    {
        die("Connection error".$conn->connect_error);
    }

?>