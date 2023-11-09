<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM</title>
    <!-- Bootstrap links -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

    <!-- flowbite link -->
    <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.css"  rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js"></script>
  
</head>
<body>
    <div class="container bg-green-200 border-3 border-black border-solid rounded py-5 mt-8">
        <h2 class="text-3xl font-bold mb-4 text-center">Create Your Certificate</h2>
        <h4 class="text-lg mb-4 text-center font-semibold ">Enter some values, and hit "Create PDF" to add your data.</h4>
        <form action="insert.php" method="post">
            
            <div class="mb-4">
                <label for="name" class="block text-lg font-semibold">Name :</label>
                <input type="text" id="name" name="name" class="w-full px-4 py-2 border rounded-lg" placeholder="Enter name" required>
            </div>
            <div class="mb-4">
                <label for="email" class="block text-lg font-semibold">Age :</label>
                <input type="number" id="age" name="age" class="w-full px-4 py-2 border rounded-lg" placeholder="Enter age" required>
            </div>
            <div class="mb-4">
                <label for="email" class="block text-lg font-semibold">Email :</label>
                <input type="email" id="email" name="email" class="w-full px-4 py-2 border rounded-lg" placeholder="example123@gmail.com" required>
            </div>
                    <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded-lg">Add data</button>
        </form>
    </div>
    
</body>
</html>