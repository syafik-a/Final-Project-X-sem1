<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="sweetalert2.all.min.js"></script>
    <title>Document</title>

</head>
<body>
<div class="h-screen flex">
  <div class="flex w-1/2 bg-gradient-to-tr from-blue-800 to-orange-700 i justify-around items-center">
    <div>
      <h1 class="text-white font-bold text-4xl font-sans">Anyserv</h1>
      <p class="text-white mt-1">Connect with the right people to support and enhance your work.</p>
      <button type="submit" class="block w-28 bg-white text-indigo-800 mt-4 py-2 rounded-2xl font-bold mb-2">Read More</button>
    </div>
  </div>
  <div class="flex w-1/2 justify-center items-center bg-white">
    <form class="bg-white">
      <h1 class="text-gray-800 font-bold text-2xl mb-1">Hello Again!</h1>
      <p class="text-sm font-normal text-gray-600 mb-7">Please log in according to your role.</p>
      <div class="flex items-center border-2 py-2 px-3 rounded-2xl mb-4">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207" />
        </svg>
        <input class="pl-2 outline-none border-none" type="text" name="" id="" placeholder="Username" />
      </div>
      <div class="flex items-center border-2 py-2 px-3 rounded-2xl">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor">
          <path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd" />
        </svg>
        <input class="pl-2 outline-none border-none" type="text" name="" id="" placeholder="Password" />
      </div>
      <button type="submit" class="block w-full bg-indigo-600 mt-4 py-2 rounded-2xl text-white font-semibold mb-2">Login</button>
      <details class="open">
            <!-- Button to be visible -->
            <summary
                class="rounded-2xl block px-2 py-2 text-sm hover:duration-300 hover:text-blue-600 cursor-pointer">
                Forgot Password?
            </summary>

            <!-- Content it will be hidden, till user clicks on the summary button. -->
            <div class="bg-white rounded-2xl w-[50%] h-[40%] my-auto mx-auto absolute inset-0 text-gray-600 p-4 py-8">

                <!-- Close drop down we use a line of JS code. -->
                <span onclick="document.querySelector('details').removeAttribute('open')"
                    class="bg-blue-600 rounded-full flex items-center justify-center text-3xl font-bold uppercase absolute -right-4 -top-4 w-10 h-10 text-white hover:bg-blue-500 hover:duration-200 cursor-pointer">
                    X
                </span>

                <!-- title -->
                <h1 class="text-2xl text-center text-blue-600 font-bold">
                    Available Usernames
                </h1>

                <p class="text-gray-600 my-3 text-center text-xl">
                  Below are the usernames available to use based on your role:
                  <br>
                  For admins:

                  <br>
                  For Employees:

                  <br> 
                  For Clients:
                </p>
            </div>
        </details>
    </form>
  </div>
</div>
</body>
</html>