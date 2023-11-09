<?php

    include("config.php");

    $name=$_POST['name'];
    $age=$_POST['age'];
    $email=$_POST['email'];

    $sql="insert into generate (name, age, email) values ('$name',$age, '$email')";

    $res=mysqli_query($conn,$sql);

    if($res==0)
    {
        echo "Error in inserting database";
    }
    else
    {
        header("location:index.php");
    }

?>