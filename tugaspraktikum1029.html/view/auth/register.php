
<body class="flex h-[100vh] justify-center bg-[#8f755f] ">
    <div class="flex flex-col justify-center items-center ">
        <div class="container flex flex-col justify-center items-center w-[500px] h-[600px] border-orange-950 border shadow bg-[#d2c1b0] rounded-[16px]">
            <div class="flex flex-col sm:mx-auto sm:w-full sm:max-w-sm items-center">
                <img src="public/Vector.png" alt="coffeality">
               
              </div>
            
              <div class="mt-6 sm:mx-auto sm:w-full sm:max-w-sm flex flex-col">
                  <form class="flex flex-col " action="<?= urlpath('register') ?>" method="POST">           
                        <label for="username"   class="block text-sm font-medium leading-6 text-gray-900 font-[poppins]">Username</label>
                            <div class="mt-1">
                                <input type="text" name="username" class="block w-full rounded-[12px] border-0 px-[12px] py-[8px] font-[poppins] text-gray-900 shadow-sm placeholder:text-gray-200 focus:ring-2 focus:ring-inset focus:ring-[#80411e] sm:text-sm sm:leading-6" placeholder="Masukkan Username" required="">
                            </div>
                        <label for="password" class="block text-sm font-medium leading-6 text-gray-900 mt-4 font-[poppins]">Password</label>
                            <div class="mt-1 ">
                                <input type="password" name="password" class="block w-full rounded-[12px] border-0 px-[12px] py-[8px] font-[poppins] text-gray-900 shadow-sm placeholder:text-gray-200 focus:ring-2 focus:ring-inset focus:ring-[#80411e] sm:text-sm sm:leading-6" placeholder="Masukkan Username" required="">
                            </div>

                        <label for="confirm-pass" class="block text-sm font-medium leading-6 text-gray-900 mt-4 font-[poppins]">Confirm Password</label>
                            <div class="mt-1 ">
                                <input type="password" name="confirm_password" class="block w-full rounded-[12px] border-0 px-[12px] py-[8px] font-[poppins] text-gray-900 shadow-sm placeholder:text-gray-200 focus:ring-2 focus:ring-inset focus:ring-[#80411e] sm:text-sm sm:leading-6" placeholder="Masukkan Username" required="">
                            </div>

                        </div>

                        <button type="submit" class="flex w-[300px] justify-center rounded-[12px] bg-[#80411e] opacity-70 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-[#37251b] focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-[#76f51] mt-8">Register</button>
                  </form>
                  <div>
                      
                  <div>
                   
                  </div>
            
                <p class="mt-4 text-center text-sm text-[#ad6d2f] font-[poppins]">
                  Have member account ?
                  <a href="login.php" class="font-semibold leading-6 text-[#37251b] hover:text-[#80411e] font-[poppins]">Login here</a>
                </p>
              </div>
        </div>
    </div>
</body>
