<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coffeality | Dashboard</title>
    <link rel="stylesheet" href="css/style.css">

    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />

</head>



<body class="flex flex-col ">
    <!-- Sidebar -->
    <div class="flex h-screen overflow-hidden bg-gray-100">
        <!-- Sidebar -->
        <div class="flex flex-col bg-transparent 0 w-80">
            <div class="flex items-center justify-center">
                <img class="w-[200px] h-[50px] mt-[50px] mb-[88px]" src="public/Vector 2.png" alt="coffeality">
            </div>

            <div class="">
                <!-- Sidebar links -->
                <ul class="space-y-2">
                    <li>
                        <a href="#" class="text-[#f4f4f4]  bg-[#37251b] hover:bg-[#ad6d2f] hover:text-white rounded-md px-4 py-2  text-sm font-medium flex items-center space-x-2 justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={1.5} stroke="currentColor" class="w-6 h-6">
                                <path strokeLinecap="round" strokeLinejoin="round" d="M15.666 3.888A2.25 2.25 0 0 0 13.5 2.25h-3c-1.03 0-1.9.693-2.166 1.638m7.332 0c.055.194.084.4.084.612v0a.75.75 0 0 1-.75.75H9a.75.75 0 0 1-.75-.75v0c0-.212.03-.418.084-.612m7.332 0c.646.049 1.288.11 1.927.184 1.1.128 1.907 1.077 1.907 2.185V19.5a2.25 2.25 0 0 1-2.25 2.25H6.75A2.25 2.25 0 0 1 4.5 19.5V6.257c0-1.108.806-2.057 1.907-2.185a48.208 48.208 0 0 1 1.927-.184" />
                            </svg>

                            <span class="text-[16px]">Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class=" text-[#37251b] hover:bg-[#ad6d2f] hover:text-white rounded-md px-4 py-2  text-sm font-medium flex items-center space-x-2 justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={1.5} stroke="currentColor" class="w-6 h-6">
                                <path strokeLinecap="round" strokeLinejoin="round" d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                            </svg>

                            <span class="text-[16px]">Profile</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class=" text-[#37251b] hover:bg-[#ad6d2f]  hover:text-white rounded-md px-4 py-2  text-sm font-medium flex items-center space-x-2 justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={1.5} stroke="currentColor" class="w-6 h-6">
                                <path strokeLinecap="round" strokeLinejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 0 1 2.25-2.25h13.5A2.25 2.25 0 0 1 21 7.5v11.25m-18 0A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75m-18 0v-7.5A2.25 2.25 0 0 1 5.25 9h13.5A2.25 2.25 0 0 1 21 11.25v7.5" />
                            </svg>

                            <span class="text-[16px]">Schedule</span>
                        </a>
                    </li>

                    <hr class="border-2 border-[#37251b] mt-4">
                    <li class="">
                        <a href="#" class="text-[#37251b] hover:bg-[#ad6d2f]  hover:text-white rounded-md px-4 py-2 text-sm font-medium flex items-center space-x-2 justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={1.5} stroke="currentColor" class="w-6 h-6">
                                <path strokeLinecap="round" strokeLinejoin="round" d="M9.594 3.94c.09-.542.56-.94 1.11-.94h2.593c.55 0 1.02.398 1.11.94l.213 1.281c.063.374.313.686.645.87.074.04.147.083.22.127.325.196.72.257 1.075.124l1.217-.456a1.125 1.125 0 0 1 1.37.49l1.296 2.247a1.125 1.125 0 0 1-.26 1.431l-1.003.827c-.293.241-.438.613-.43.992a7.723 7.723 0 0 1 0 .255c-.008.378.137.75.43.991l1.004.827c.424.35.534.955.26 1.43l-1.298 2.247a1.125 1.125 0 0 1-1.369.491l-1.217-.456c-.355-.133-.75-.072-1.076.124a6.47 6.47 0 0 1-.22.128c-.331.183-.581.495-.644.869l-.213 1.281c-.09.543-.56.94-1.11.94h-2.594c-.55 0-1.019-.398-1.11-.94l-.213-1.281c-.062-.374-.312-.686-.644-.87a6.52 6.52 0 0 1-.22-.127c-.325-.196-.72-.257-1.076-.124l-1.217.456a1.125 1.125 0 0 1-1.369-.49l-1.297-2.247a1.125 1.125 0 0 1 .26-1.431l1.004-.827c.292-.24.437-.613.43-.991a6.932 6.932 0 0 1 0-.255c.007-.38-.138-.751-.43-.992l-1.004-.827a1.125 1.125 0 0 1-.26-1.43l1.297-2.247a1.125 1.125 0 0 1 1.37-.491l1.216.456c.356.133.751.072 1.076-.124.072-.044.146-.086.22-.128.332-.183.582-.495.644-.869l.214-1.28Z" />
                                <path strokeLinecap="round" strokeLinejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                            </svg>

                            <span class="text-[16px]">Settings</span>
                        </a>
                    </li>

                </ul>
            </div>
        </div>

        <!-- Content area -->
        <div class="flex flex-col w-0 flex-1 overflow-hidden bg-[#37251b] bg-opacity-5 items-center">
            <!-- Top bar -->
            <div class="flex h-[44px] justify-center items-center content-center mt-[63px]">
                <!-- Top bar content -->

                <div class="flex justify-between flex-1 px-4">
                    <div class="flex flex-1">
                    </div>

                    <div class="flex items-center ml-4 md:ml-6">
                        <!-- Profile dropdown -->
                        <div class="absolute right-20">
                            <a href="<?= urlpath('Logout') ?>" class="text-[#37251b] text-bold text-[16px] border py-1 px-4 border-[#37251b] rounded-[6px] font-[poppins] hover:text-[#f4f4f4] hover:bg-[#ad6d2f]">Sign Out</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Main content area -->
            <div class="flex z-0 overflow-y-auto focus:outline-none w-[1400px] justify-center flex-col" tabindex="0">
                <!-- Your content goes here -->
                <div class="flex justify-center mt-8">
                    <!-- Table content -->
                    <div class="flex justify-center p-4 ">
                        <!-- <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700"> -->
                        <div class="relative overflow-x-auto  border-2 border-[#37251b] ">
                            <table class="w-full text-sm  rtl:text-right text-[#37251b] text-center dark:text-gray-400">
                                <thead class="font-[poppins]">
                                    <tr>
                                        <th scope="col" class="px-6 py-3 font-medium text-[16px]">
                                            No
                                        </th>
                                        <th scope="col" class="px-6 py-3 font-medium text-[16px] w-[300px]">
                                            Owner
                                        </th>
                                        <th scope="col" class="px-6 py-3 font-medium text-[16px] w-[200px]">
                                            No. Hp
                                        </th>
                                        <th scope="col" class="px-6 py-3 font-medium text-[16px] w-[200px]">
                                            Email
                                        </th>
                                        <th scope="col" class="px-6 py-3 font-medium text-[16px] w-[200px]">
                                            Option
                                        </th>
                                    </tr>
                                </thead>
                                <?php if (isset($contacts)) {
                                    $count = 0;
                                    $i = 1;
                                    echo "<script>console.log(" . json_encode($contacts) . ")</script>";
                                    foreach ($contacts as $contact) {

                                        if ($contact['id_credentials'] == $_SESSION['user']['id']) {

                                            $count++;
                                ?>
                                            <tbody>
                                                <tr class="font-[poppins]">
                                                    <th scope="row" class="px-6 py-4 font-medium text-[16px] text-[#37251b] whitespace-nowrap dark:text-white">
                                                        <?php echo $i; ?>
                                                    </th>
                                                    <td class="px-6 py-4 text-[16px] font-medium text-[#37251b]">
                                                        <?php echo $contact['owner']; ?>
                                                    </td>
                                                    <td class="px-6 py-4 text-[16px] font-medium text-[#37251b]">
                                                        <?php echo $contact['no_hp'] ?>
                                                    </td>
                                                    <td class="px-6 py-4 text-[16px] font-medium text-[#37251b]">
                                                        <?php echo $contact['email'] ?>
                                                    </td>
                                                    <td class="flex justify-center px-6 py-4 gap-x-3">
                                                        <!-- Edit button -->
                                                        <button onclick="showEditButton(<?php echo $contact['id']; ?>)" class="text-lg font-medium bg-transparent border-t-2 border-b-4 border-l-2 border-r-4 border-green-600 rounded-md">
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={1.5} stroke="currentColor" class="w-6 h-6">
                                                                <path strokeLinecap="round" strokeLinejoin="round" d="M10.5 6h9.75M10.5 6a1.5 1.5 0 1 1-3 0m3 0a1.5 1.5 0 1 0-3 0M3.75 6H7.5m3 12h9.75m-9.75 0a1.5 1.5 0 0 1-3 0m3 0a1.5 1.5 0 0 0-3 0m-3.75 0H7.5m9-6h3.75m-3.75 0a1.5 1.5 0 0 1-3 0m3 0a1.5 1.5 0 0 0-3 0m-9.75 0h9.75" />
                                                            </svg>
                                                        </button>
                                                        <button onclick="showDelButton(<?php echo $contact['id']; ?>)" class="text-lg font-medium bg-transparent border-t-2 border-b-4 border-l-2 border-r-4 border-red-600 rounded-md">
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={1.5} stroke="currentColor" class="w-6 h-6">
                                                                <path strokeLinecap="round" strokeLinejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                                                            </svg>
                                                        </button>
                                                    </td>
                                                    <!-- Edit Modal -->
                                                    <div id="editbutton_<?php echo $contact['id']; ?>" class="fixed top-0 left-0 flex items-center justify-center hidden w-screen h-screen transition-opacity duration-500 bg-black opacity-0 bg-opacity-40">
                                                        <div class="bg-[#d2c1b0] relative flex flex-col min-w-0 break-words  mb-6 shadow-lg rounded-[16px] bg-blueGray-100 border-0">
                                                            <button onclick="hideEditButton(<?php echo $contact['id']; ?>)" class="relative top-0 left-0 mt-3 ml-3 text-[#37251b] hover:text-[#80411e]">
                                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-6 h-6">
                                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                                                                </svg>
                                                            </button>

                                                            <div class="flex flex-col items-center justify-center px-4 py-4 pt-0 lg:px-10">
                                                                <div class="flex items-center justify-center mt-10">
                                                                    <img src="public/Vector.png" alt="">
                                                                </div>
                                                                <form id="editForm_<?php echo $contact['id']; ?>" class="flex flex-col items-center justify-center" action="<?= urlpath('dashboard/edit') ?>" method="POST" enctype="multipart/form-data">

                                                                    <h6 class="text-blueGray-400 text-sm mt-3 mb-6 font-bold uppercase font-[poppins] text-[#37251b]">
                                                                        Edit Contact
                                                                    </h6>
                                                                    <div class="flex flex-wrap text-center font-[poppins]">


                                                                        <div class="w-full px-4">
                                                                            <div class="w-full mb-3">


                                                                                <input type="text" name="id" id="id" class="text-[#37251b] border-0 px-3  placeholder-blueGray-300 text-blueGray-600 bg-[#f4f4f4] rounded-[8px] text-sm shadow focus:outline-none focus:ring focus:ring-[#37251b] w-[500px] ease-linear transition-all duration-150 hidden" value="<?php echo $contact['id']; ?>" placeholder=>
                                                                                </input>
                                                                                <label class="block uppercase text-blueGray-600 text-xs font-bold  mt-4 text-[#37251b]" htmlfor="grid-password">
                                                                                    Owner
                                                                                </label>

                                                                                <input type="text" name="owner" id="owner" class="text-[#37251b] border-0 px-3  placeholder-blueGray-300 text-blueGray-600 bg-[#f4f4f4] rounded-[8px] text-sm shadow focus:outline-none focus:ring focus:ring-[#37251b] w-[500px] ease-linear transition-all duration-150 font-[poppins]" value="<?php echo $contact['owner']; ?>" placeholder=>
                                                                                </input>
                                                                                <label class="block uppercase text-blueGray-600 text-xs font-bold  mt-4 text-[#37251b]" htmlfor="grid-password">
                                                                                    No. Handphone
                                                                                </label>

                                                                                <input type="text" name="no_hp" id="no_hp" class="text-[#37251b] border-0 px-3  placeholder-blueGray-300 text-blueGray-600 bg-[#f4f4f4] rounded-[8px] text-sm shadow focus:outline-none focus:ring focus:ring-[#37251b] w-[500px] ease-linear transition-all duration-150 font-[poppins]" value="<?php echo $contact['no_hp']; ?>" placeholder=>
                                                                                </input>
                                                                                <label class="block uppercase text-blueGray-600 text-xs font-bold  mt-4 text-[#37251b]" htmlfor="grid-password">
                                                                                    Email
                                                                                </label>

                                                                                <input type="text" name="email" id="email" class="text-[#37251b] border-0 px-3  placeholder-blueGray-300 text-blueGray-600 bg-[#f4f4f4] rounded-[8px] text-sm shadow focus:outline-none focus:ring focus:ring-[#37251b] w-[500px] ease-linear transition-all duration-150 font-[poppins]" value="<?php echo $contact['email']; ?>" placeholder=>
                                                                                </input>

                                                                            </div>
                                                                        </div>


                                                                    </div>

                                                                    <button type="submit" class="flex w-[300px] justify-center rounded-[12px] bg-[#37251b] opacity-70 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-[#80411e] focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-[#76f51] mt-8">Edit</button>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Delete Modal -->
                                                    <div id="delbutton_<?php echo $contact['id']; ?>" class="fixed top-0 left-0 flex items-center justify-center hidden w-screen h-screen transition-opacity duration-500 bg-black opacity-0 bg-opacity-40">
                                                        <div class="bg-white rounded shadow-md p-8 w-[25%] gap-5 flex-col overflow-hidden">
                                                            <div class="flex gap-3">
                                                                <div class="flex items-center justify-center h-10 text-red-600 bg-red-100 rounded-full min-w-10">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126ZM12 15.75h.007v.008H12v-.008Z" />
                                                                    </svg>
                                                                </div>
                                                                <div class="flex-grow">
                                                                    <h1 class="mb-2 text-lg font-bold text-gray-700">Menghapus Data</h1>
                                                                    <p class="text-gray-600">Apakah anda ingin menghapus data ?</p>
                                                                </div>
                                                            </div>
                                                            <div class="flex justify-end mt-3 ">
                                                                <button onclick="hideDelButton(<?php echo $contact['id']; ?>)" class="px-4 py-2 mr-3 text-black bg-white rounded cursor-pointer hover:bg-gray-300">Batal</button>
                                                                <form class="flex" id="deleteForm_<?php echo $contact['id']; ?>" action="<?= urlpath('dashboard/delete'); ?>" method="POST">
                                                                    <input type="hidden" name="id" value="<?php echo $contact['id']; ?>">
                                                                    <button type="submit" class="px-4 py-2 font-semibold text-white bg-red-600 rounded hover:bg-red-700">Hapus</button>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </tr>
                                                <?php $i++; ?>
                                            </tbody>
                                        <?php
                                        }
                                    }
                                    if ($count == 0) {
                                        ?>
                                        <tbody>
                                            <tr>
                                                <td colspan="5" class=" py-4 text-[16px] font-medium text-[#37251b] text-center">Tidak Ada Data</td>
                                            </tr>
                                        </tbody>
                                <?php
                                    }
                                }

                                ?>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex justify-center">
                <button class="flex justify-center items-center py-3 px-8 bg-[#37251b] text-[#f4f4f4] font-[poppins] hover:bg-[#ad6d2f] rounded-[16px]" href="#" onclick="showCreateButton()">Tambahkan Data Baru</button>
            </div>
        </div>
    </div>
    </div>

    <!--Modal Create-->
    <div id="createbutton" class="absolute top-0 left-0 flex items-center justify-center hidden w-screen h-screen transition-opacity duration-500 bg-black opacity-0 bg-opacity-40">
        <div class="bg-[#d2c1b0] relative flex flex-col min-w-0 break-words  mb-6 shadow-lg rounded-[16px] bg-blueGray-100 border-0">
            <button onclick="hideCreateButton()" class="absolute top-0 left-0 mt-3 ml-3 text-[#37251b] hover:text-[#80411e]">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>

            <div class="flex flex-col items-center justify-center px-4 py-4 pt-0 lg:px-10">
                <div class="flex items-center justify-center mt-10">
                    <img src="public/Vector.png" alt="">
                </div>
                <form class="flex flex-col items-center justify-center" action="<?= urlpath('dashboard/insert') ?>" method="POST" enctype="multipart/form-data">

                    <h6 class="text-blueGray-400 text-sm mt-3 mb-6 font-bold uppercase font-[poppins] text-[#37251b]">
                        Tambahkan Contact Baru
                    </h6>
                    <div class="flex flex-wrap text-center font-[poppins]">


                        <div class="w-full px-4">
                            <div class="w-full mb-3">

                                <label class="block uppercase text-blueGray-600 text-xs font-bold  mt-4 text-[#37251b]" htmlfor="grid-password">
                                    Owner
                                </label>

                                <input type="text" name="owner" id="owner" class="text-[#37251b] border-0 px-3  placeholder-blueGray-300 text-blueGray-600 bg-[#f4f4f4] rounded-[8px] text-sm shadow focus:outline-none focus:ring focus:ring-[#37251b] w-[500px] ease-linear transition-all duration-150 font-[poppins]" value="" placeholder=>
                                </input>
                                <label class="block uppercase text-blueGray-600 text-xs font-bold  mt-4 text-[#37251b]" htmlfor="grid-password">
                                    No. Handphone
                                </label>

                                <input type="text" name="no_hp" id="no_hp" class="text-[#37251b] border-0 px-3  placeholder-blueGray-300 text-blueGray-600 bg-[#f4f4f4] rounded-[8px] text-sm shadow focus:outline-none focus:ring focus:ring-[#37251b] w-[500px] ease-linear transition-all duration-150 font-[poppins]" value="" placeholder=>
                                </input>
                                <label class="block uppercase text-blueGray-600 text-xs font-bold  mt-4 text-[#37251b]" htmlfor="grid-password">
                                    Email
                                </label>

                                <input type="text" name="email" id="email" class="text-[#37251b] border-0 px-3  placeholder-blueGray-300 text-blueGray-600 bg-[#f4f4f4] rounded-[8px] text-sm shadow focus:outline-none focus:ring focus:ring-[#37251b] w-[500px] ease-linear transition-all duration-150 font-[poppins]" value="" placeholder=>
                                </input>

                            </div>
                        </div>


                    </div>

                    <button type="submit" class="flex w-[300px] justify-center rounded-[12px] bg-[#37251b] opacity-70 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-[#80411e] focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-[#76f51] mt-8">Tambahkan</button>
                </form>
            </div>
        </div>
    </div>

    <!--Modal Delete-->





    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    <script>
        function showCreateButton() {
            let createbutton = document.getElementById('createbutton')

            createbutton.classList.remove('hidden')
            createbutton.classList.add('flex')
            setTimeout(() => {
                createbutton.classList.add('opacity-100')
            }, 20);

        }

        function hideCreateButton() {
            let delbutton = document.getElementById('createbutton')
            delbutton.classList.add('opacity-0')
            setTimeout(() => {
                delbutton.classList.add('hidden')
                delbutton.classList.remove('flex')
            }, 500);
        }



        function showEditButton(id) {
            console.log("ID received:", id);
            let delbutton = document.getElementById('editbutton_' + id)


            delbutton.classList.remove('hidden')
            delbutton.classList.add('flex')
            setTimeout(() => {
                delbutton.classList.add('opacity-100')
            }, 20);

        }


        function hideEditButton(id) {
            let delbutton = document.getElementById('editbutton_' + id);
            delbutton.classList.add('opacity-0')
            setTimeout(() => {
                delbutton.classList.add('hidden')
                delbutton.classList.remove('flex')
            }, 500);
        }

        function showDelButton(id) {
            console.log("ID received:", id);
            let delbutton = document.getElementById('delbutton_' + id)


            delbutton.classList.remove('hidden')
            delbutton.classList.add('flex')
            setTimeout(() => {
                delbutton.classList.add('opacity-100')
            }, 20);

        }


        function hideDelButton(id) {
            let delbutton = document.getElementById('delbutton_' + id);
            delbutton.classList.add('opacity-0')
            setTimeout(() => {
                delbutton.classList.add('hidden')
                delbutton.classList.remove('flex')
            }, 500);
        }
    </script>
</body>

</html>