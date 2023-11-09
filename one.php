<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	 <!-- Bootstrap links -->
	 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

    <!-- flowbite link -->
    <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.css"  rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js"></script>
  
</head>
<body>
	
</body>
</html>



<?php
    include("config.php");

    $sql = "select * from generate";
    $res = mysqli_query($conn, $sql);

    echo "<table class='table-auto border border-collapse mx-auto my-5'>";
    echo "<thead>";
    echo "<tr>
		<td class='font-bold text-center'> ID </td>
		<td class='font-bold text-center'> Name </td>
		<td class='font-bold text-center'> Age </td>
		<td class='font-bold text-center'> Email </td>
		<td class='font-bold text-center'> Action </td>
		
    </tr>";
    echo "</thead>";
    echo "<tbody>";
    while ($row = mysqli_fetch_array($res)) {
        echo "<tr>";
        echo "<td class='border px-4 py-2'>".$row[0]."</td>";
        echo "<td class='border px-4 py-2'>".$row[1]."</td>";
        echo "<td class='border px-4 py-2'>".$row[2]."</td>";
		echo "<td class='border px-4 py-2'>".$row[3]."</td>";
        echo "<td class='border px-4 py-2'>
                <a href='deletedata.php?&delete=$row[0];' 
                class='bg-red-500 hover:bg-red-600 text-white font-bold py-2 px-4 rounded-full text-sm'>Delete
                </a>
            </td>";
        echo "</tr>";
    }
    echo "</tbody>";
    echo "</table>";
?>
