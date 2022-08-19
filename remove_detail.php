

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Remove Detail</title>
    <link href="tailwind.min.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <script src="./app.js"></script>
    <link rel="stylesheet" href="front.css">
</head>
<body >
<!--bar-->
<!--HEADER-->
<nav class="navbar">
    <div class="navbar__container">
        <a href="./index.html" id="navbar__logo">ITU</a>
        
    </div>
    <!--        NAVBAR-->
    <nav class="md:ml-auto md:mr-auto flex flex-wrap items-center text-base justify-center" >
        <a href="./index.html" target="_self" class="mr-5 hover:text-black">Home</a>
        <a href="" target="_self" class="mr-5 hover:text-black">About</a>
    </nav>
    <a href="./teacher.html"  target=""><button class="inline-flex items-center bg-green-400 border-0 py-2 px-6 mx-2 focus:outline-none hover:bg-green-600 rounded text-base mt-4 md:mt-0">Go to back</button></a>
</nav>
<hr>

<hr>
<!--under manger-->
<div>



<form action="PHPREMOVE.php" method="post">
<section class="text-gray-600 body-font my-50">
    <div class="container px-5 py-24 mx-auto flex flex-wrap items-center">

        <div class="lg:w-2/6 md:w-1/2 bg-gray-100 rounded-lg p-8 flex flex-col md:m-auto w-full mt-10 md:mt-0">
            <h2 class="text-gray-900 text-lg font-medium title-font mb-5">Remove Detail</h2>
            <!-- email-->
            <div class="relative mb-4">
                <label for="emailPhone" class="leading-7 text-sm text-gray-600">Email</label>
                <input type="email" id="emailPhone" name="emailPhone" placeholder="email" required="" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
            </div>
 <!--            designation-->
            <div class="relative mb-4">
                <label for="designation" class="leading-7 text-sm text-gray-600" >Designation </label>
                <select  id="designation" name="designation" class="w-full bg-white rounded border border-gray-300
                focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-2 px-3
                leading-8 transition-colors duration-200 ease-in-out" onchange="if (this.value=='Student'){this.form['security'].style.visibility='hidden'}else {this.form['security'].style.visibility='visible'};">
                    <option value="Student">Student</option>
                    <option value="Teacher">Teacher</option>
                </select>
            </div>

            <!--  button-->

            <button name="Remove" class="text-white bg-red-500 border-0 py-2 px-8 focus:outline-none hover:bg-red-600 rounded text-lg" >Remove</button>
        </div>
    </div>
</section>
</form>

</body>
</html>