<?php

    include("config.php");

    $name=$_POST['name'];

    $sql="insert into generate (name) values('$name')";

    $res=mysqli_query($conn,$sql);
    
    if(!$res)
    {
        echo "error in inserting data";
    }
    else
    {
        header("location:generate.php");
    }

?>