<?php 
include("config.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>TM-48</title>
    <link rel="stylesheet" href="style.css">
    
    <!-- Bootstrap links -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

    <!-- flowbite link -->
    <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.css"  rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js"></script>
  
   <style>

  
    .custom{
        box-shadow: rgba(0, 0, 0, 0.16) 0px 1px 4px, rgb(51, 51, 51) 0px 0px 0px 3px, 10px 5px 5px black;
        transition: background-color 0.3s, box-shadow 0.3s;
    }
   
    .custom-img{
        width: 250px;
        height: 200px;
    }

    .grid-container {
        display: grid;
        grid-template-columns: auto auto auto;
        gap: 0px;
       
      }
      .grid-item {
        text-align: center;
      }
      .header_logo{
        height: 100px;
        width: 100px;
      }

      /* team */
      #our-Team {
    width: 80%;
    margin: 4rem auto 1rem;
}

#our-Team h2 {
    text-align: center;
    margin: 1rem auto 4rem;
    position: relative;
}

#our-Team h2::after {
    content: '';
    height: 4px;
    margin: 0 auto;
    text-align: center;
    width: 15%;
    background-color: aqua;
    position: absolute;
    left: 50%;
    bottom: -10px;
    border-radius: 5px;
    transform: translate(-50%);
}

.teamContainer {
    width: 100%;
    margin: 0 auto;
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
}

.team-item {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    margin: 0.7rem;
}

.team-item h5 {
    margin-top: 1rem;
    font-size: 1.1rem;
}

.team-item span {
    margin-top: .4rem;
    font-weight: bold;
    text-transform: uppercase;
    color: #31C48D;
}

.team-item img {
    width: 80px;
}
/* our team over */
      
   </style>
</head>

<body >
 <!-- flowbite navbar -->
<nav class="bg-white border-gray-200 dark:bg-gray-900">
  <div class="flex flex-wrap items-center justify-between max-w-screen-xl mx-auto p-4">
      <a href="#" class="flex items-center">
          <img src="logo.png.png" class="header_logo" alt=" Logo" />
          <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white"></span>
      </a>
      <div class="flex items-center md:order-2">
         
        
          <button data-collapse-toggle="mega-menu" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-xl text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="mega-menu" aria-expanded="false">
              <span class="sr-only">Open main menu</span>
              <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
              </svg>
          </button>
      </div>
      <div id="mega-menu" class="items-center justify-between hidden w-full md:flex md:w-auto md:order-2">
          <ul class="flex flex-col mt-4 font-medium md:flex-row md:space-x-8 md:mt-0">
              <li>
                  <a href="#" class="block py-2 pl-3 pr-4 text-gray-900 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-600 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-blue-500 md:dark:hover:bg-transparent dark:border-gray-700" aria-current="page">Home</a>
              </li>
              <li>
                <a href="view.php" class="block py-2 pl-3 pr-4 text-gray-900 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-600 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-blue-500 md:dark:hover:bg-transparent dark:border-gray-700" aria-current="page">Table</a>
             </li>
              <li>
                  <a href="#about" class="block py-2 pl-3 pr-4 text-gray-900 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-600 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-blue-500 md:dark:hover:bg-transparent dark:border-gray-700">Team</a>
              </li>
          </ul>
      </div>
  </div>
</nav>

<div class="container text-center my-5 ">
    <div class="grid-container">
        <div class="grid-item">
            <img src="sample.jpg" alt="Certificate Image" class="mx-auto custom-img ">

        </div>
        <div class="grid-item">
            <img src="https://img.freepik.com/free-psd/classy-ornamental-certificate-template-psd-beige-black_53876-138539.jpg?w=900&t=st=1695986153~exp=1695986753~hmac=049888c2b2fd50b7269b2788650e9cfa7907839f626b245896fff23422a3af5e" alt="Certificate Image" class="mx-auto custom-img ">

        </div>
       
        <div class="grid-item">
            <img src="sample2.jpg" alt="Certificate Image" class="mx-auto custom-img mb-8s">

        </div>  
       
      </div>
    
    
    <h1 class="text-6xl font-bold mt-6">Create Certificate </h1>
    <h3 class="text-2xl my-6">Generate beautiful certificates for your students or colleagues and download them in PDF format.</h3>
    <a href="form.php" class="bg-green-400  custom text-white font-semibold py-4 px-8 mr-6 rounded-lg text-2xl  inline-block">Add User</a>
    <a href="generate.php" class="bg-green-400  custom text-white font-semibold py-4 px-8 rounded-lg text-2xl  inline-block">Create a Certificate </a>
    <a href="one.php" class="bg-green-400  custom text-white font-semibold py-4 px-8 ml-6 mt-6 rounded-lg text-2xl  inline-block">Delete User</a>
    <a href="mailto:khevlanidipak1@gmail.com?cc=&subject=certificate"class="bg-green-400  custom ml-4 text-white font-semibold py-4 px-8 rounded-lg text-2xl  inline-block">Send mail</a>    
    <p class="mt-4">
        <span class="text-black font-semibold">- Download in PDF & JPG</span>
    </p>
</div>

<!-- team -->
<div id="about">
	<section id="our-Team">
        <h2>Our Members</h2>
        <div class="teamContainer">
        <div class="team-item">
                <h5 class="member-name">Hatim Ghiyavadwala</h5>
                <span class="role">Team Leader</span>
            </div>
            <div class="team-item">
                <h5 class="member-name">Fazil Parasara</h5>
                <span class="role">UI Designer</span>
            </div>
            
            <div class="team-item">
                <h5 class="member-name">Taher Hathi</h5>
                <span class="role">UI Designer</span>
            </div>

            <div class="team-item">
                <h5 class="member-name">Dev Doshi</h5>
                <span class="role">Backend Developer</span>
            </div>

            <div class="team-item">
                <h5 class="member-name">Dipak Khevlani</h5>
                <span class="role">Backend Developer</span>
            </div>

            <div class="team-item">
                <h5 class="member-name">Abhishek Ramani</h5>
                <span class="role">Tester Q/A</span>
            </div>
        </div>
    </section>
</div>
<!-- team section -->
 
<footer class="bg-white p-8">
    <div class="container mx-auto flex flex-col md:flex-row items-center justify-between">
        <div class="flex items-center gap-6">
           
            <ul class="flex flex-wrap items-center gap-8">
              <li>
                    <img src="ff4.png" alt="logo-ct" class="w-10" />
              </li>
              <li>
                    <img src="ff2.png" alt="logo-ct" class="w-10" />
              </li>
              <li>
                    <img src="ff1.png" alt="logo-ct" class="w-10" />
              </li>
              <li>
                    <img src="logo.png.png" alt="logo-ct" class="w-10" />
              </li>
            </ul>
        </div>
        <hr class="my-8 border-blue-gray-50" />
        <p class="text-center text-base text-blue-gray-900">&copy; 2023 TM-48</p>
    </div>
</footer>


<?php 
    $rows=mysqli_query("SELECT email from generate",$conn);
    foreach($rows as $row)
    {
        echo $row[0].",";
    }
?>

</body>
</html>