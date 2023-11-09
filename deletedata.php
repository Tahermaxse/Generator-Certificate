<?php

    include("config.php");
    // $id=$_GET['delete'];
    if (isset($_GET['delete'])) {
        $id=$_GET['delete'];
        // $table = $_GET['table'];

        $sql="delete from generate where id=$id";

        $res=mysqli_query($conn,$sql);

        if(!$res)
        {
            echo "Error in delete";
        }
        else
        {
            ?>
            <script>
            alert("user deleted...");
            window.location.href = "index.php"; // Redirect after the user clicks "OK"
        </script>
    
            <?php

            // header("refresh:2");
        }
    }
    else {
        echo "Something went worng";
    }

?>