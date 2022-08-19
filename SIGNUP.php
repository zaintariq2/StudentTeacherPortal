
<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <title>SIGN UP PAGE</title>
    <link href="tailwind.min.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="./app.js"></script>
    <link rel="stylesheet" href="front.css">
</head>
<body >
    <nav class="navbar">
        <div class="navbar__container">
            <a href="./index.html" id="navbar__logo">ITU</a>
            
        </div>
        <!--        NAVBAR-->
        <nav class="md:ml-auto md:mr-auto flex flex-wrap items-center text-base justify-center" >
            <a href="./index.html" target="_self" class="mr-5 hover:text-black">Home</a>
            <a href="" target="_self" class="mr-5 hover:text-black">About</a>
        </nav>
        <a href="./LOGIN.php"  target=""><button class="inline-flex items-center bg-green-400 border-0 py-2 px-6 mx-2 focus:outline-none hover:bg-green-600 rounded text-base mt-4 md:mt-0">Go to back</button></a>
    </nav>
<!--HEADER-->

<form action="PHPSIGNUP.php" method="post">
<section  class="text-gray-800 body-font">
    <div  class="container px-5 py-10 mx-auto flex flex-wrap items-center">

        <div  class="lg:w-2/6 md:w-1/2 bg-gray-100 rounded-lg p-8 flex flex-col md:m-auto w-full mt-10 md:mt-0" >
            <h2 class="text-gray-900 text-lg font-medium title-font mb-5">Sign up</h2>
            <!--            name-->
            <div class="relative mb-4">
                <label for="full-name" class="leading-7 text-sm text-gray-600" >Full Name</label>
                <input required type="text" id="full-name" placeholder="Enter your name" name="full-name" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
            </div>
            <!--            phone-->
            <div class="relative mb-4">
                <label for="full-name" class="leading-7 text-sm text-gray-600">Phone </label>
                <input required type="tel" id="phone" name="phone" pattern="[0-9]{11}" placeholder="eg. 03XXXXXXXXX" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
            </div>
            
            <!--            email-->
            <div class="relative mb-4">
                <label for="email" class="leading-7 text-sm text-gray-600">Email</label>
                <input required type="email" id="email" name="email" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" >
            </div>
            <!--            designation-->
            <div class="relative mb-4">
                <label for="full-name" class="leading-7 text-sm text-gray-600" >Designation </label>
                <select  id="designation" name="designation" class="w-full bg-white rounded border border-gray-300
                focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-2 px-3
                leading-8 transition-colors duration-200 ease-in-out" onchange="if (this.value=='Student'){this.form['security'].style.visibility='hidden'}else {this.form['security'].style.visibility='visible'};">
                    <option value="Student">Student</option>
                    <option value="Teacher">Teacher</option>
                </select>
            </div>
            <!--            password-->
            <div class="relative mb-4">
                <label for="full-name" class="leading-7 text-sm text-gray-600">Password </label>
                <input placeholder="Enter Password" pattern="[0-9]{4}" type="password" id="Password" name="Password" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
            </div>
            <!--            secuirity-->
            <div class="relative mb-4">
                <label for="full-name" class="leading-7 text-sm text-gray-600"></label>
                <input placeholder="Enter Faculty Security "  pattern="[a-zA-Z0-9!@#\$%\^\&*_=+-]{4}" style="visibility:hidden;" type="password" id="security" name="security" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
            </div>
            <!--            submit-->
            <button name="signup" class="text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg" onclick="SIGNUP()">sign up</button>

        </div>
    </div>
</section>
</form>

<!--footer-->
<hr>
<footer class="text-gray-600 body-font ">

    <div class="bg-gray-100">
        <div class="container px-5 py-6 mx-auto flex items-center sm:flex-row flex-col">
            <a class="flex title-font font-medium items-center md:justify-start justify-center text-black-900">    
                <span class="ml-3 text-xl text-color-black">ITU </span>
            </a>
            <p class="text-sm text-gray-500 sm:ml-6 sm:mt-0 mt-4">© 2022 Hamza Hayee
            </p>
            <span class="inline-flex sm:ml-auto sm:mt-0 mt-4 justify-center sm:justify-start">
        <a class="text-gray-500" href="">
          <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
            <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
          </svg>
        </a>
      </span>
        </div>
    </div>
</footer>
</body>
</html>