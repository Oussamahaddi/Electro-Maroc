
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.5/dist/flowbite.min.css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- For favicon png -->
    <link rel="shortcut icon" type="image/icon" href="<?php echo URLROOT; ?>/img/logo/electromaroclogo.png"/>
    <title>Dashboard</title>
</head>
<body>


<div>
    <div class="overflow-y-scroll h-screen grid grid-cols-[auto_1fr] antialiased bg-gray-700">

        <!-- Header -->
        <div class="fixed w-full h-12 flex items-center justify-between z-20 bg-gray-800  md:h-18">
            <div class="flex items-center justify-start md:justify-center pl-3 w-22 md:w-64 border-none">
                <a href="<?= URLROOT . '/Pages/index'; ?>" class="w-full flex justify-center p-2">
                    <img class="w-7 h-5 md:w-2/6 md:h-full mr-2 rounded-md overflow-hidden hidden sm:block" src="<?= URLROOT . '/img/logo/electromaroclogo.png';?>" />
                    <img class="w-7 h-5 md:w-2/6 md:h-full mr-2 rounded-md overflow-hidden max-sm:block hidden" src="<?= URLROOT . '/img/logo/electromaroclogomobile.png';?>" />
                </a>
            </div>
            <div class="flex justify-between items-center h-full header-right">
                <ul class="flex items-center">
                    <li class="rounded-full border-2 border-blue-500 w-7 h-7 overflow-hidden">
                        <img src="<?= URLROOT . '/img/admins/admin.jpg';?>" alt="">
                    </li>
                    <li>
                        <div class="block w-px h-6 mx-3 bg-gray-400 dark:bg-gray-700"></div>
                    </li>
                    <li>
                        <a href="<?= URLROOT . '/Authentification/logOutAdmin';?>" class="flex items-center mr-4 text-white hover:text-blue-100">
                            <span class="inline-flex mr-1">
                                <i class="fa-solid fa-arrow-right-from-bracket"></i>
                            </span>
                            Logout
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- ./Header -->
    
        <!-- Sidebar -->
        <div class="mt-12 flex flex-col top-14 left-0 hover:w-40 md:w-40 bg-gray-900 h-full text-white transition-all duration-300 border-none z-10 sidebar">
            <div class="overflow-y-auto overflow-x-hidden flex flex-col justify-between flex-grow">
                <ul class="flex flex-col py-4 space-y-1">
                    <li class="px-5 hidden md:block">
                    <div class="flex flex-row items-center h-8">
                        <div class="text-sm font-light tracking-wide text-gray-400 uppercase">Main</div>
                    </div>
                    </li>
                    <li>
                    <a href="<?= URLROOT . '/Dashboards/Statistique'; ?>" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-blue-800 dark:hover:bg-gray-600 text-white-600 hover:text-white-800 border-l-4 border-transparent hover:border-blue-500 dark:hover:border-gray-800 pr-6">
                        <span class="inline-flex justify-center items-center ml-4">
                            <i class="fa-solid fa-gauge"></i>
                        </span>
                        <span class="ml-2 text-sm tracking-wide truncate">Statistiques</span>
                    </a>
                    </li>
                    <li>
                        <a href="<?= URLROOT . '/Dashboards/products'; ?>" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-blue-800 dark:hover:bg-gray-600 text-white-600 hover:text-white-800 border-l-4 border-transparent hover:border-blue-500 dark:hover:border-gray-800 pr-6">
                            <span class="inline-flex justify-center items-center ml-4">
                                <i class="fa-sharp fa-solid fa-boxes-stacked"></i>
                            </span>
                            <span class="ml-2 text-sm tracking-wide truncate">Products</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?= URLROOT . '/Dashboards/category'; ?>" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-blue-800 dark:hover:bg-gray-600 text-white-600 hover:text-white-800 border-l-4 border-transparent hover:border-blue-500 dark:hover:border-gray-800 pr-6">
                            <span class="inline-flex justify-center items-center ml-4">
                                <i class="fa-sharp fa-solid fa-bars-progress"></i>
                            </span>
                            <span class="ml-2 text-sm tracking-wide truncate">Categories</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?= URLROOT . '/Dashboards/client'; ?>" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-blue-800 dark:hover:bg-gray-600 text-white-600 hover:text-white-800 border-l-4 border-transparent hover:border-blue-500 dark:hover:border-gray-800 pr-6">
                            <span class="inline-flex justify-center items-center ml-4">
                                <i class="fa-solid fa-users"></i>
                            </span>
                            <span class="ml-2 text-sm tracking-wide truncate">Clients</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?= URLROOT . '/Dashboards/Commandes'; ?>" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-blue-800 dark:hover:bg-gray-600 text-white-600 hover:text-white-800 border-l-4 border-transparent hover:border-blue-500 dark:hover:border-gray-800 pr-6">
                            <span class="inline-flex justify-center items-center ml-4">
                                <i class="fa-solid fa-money-bill-wave"></i>
                            </span>
                            <span class="ml-2 text-sm tracking-wide truncate">Commandes</span>
                        </a>
                    </li>
                    <li class="px-5 hidden md:block">
                    <div class="flex flex-row items-center mt-5 h-8">
                        <div class="text-sm font-light tracking-wide text-gray-400 uppercase">Settings</div>
                    </div>
                    </li>
                    <li>
                    <a href="#" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-blue-800 dark:hover:bg-gray-600 text-white-600 hover:text-white-800 border-l-4 border-transparent hover:border-blue-500 dark:hover:border-gray-800 pr-6">
                        <span class="inline-flex justify-center items-center ml-4">
                            <i class="fa-solid fa-user"></i>
                        </span>
                        <span class="ml-2 text-sm tracking-wide truncate">Profile</span>
                    </a>
                    </li>
                    <li>
                    <a href="#" class="relative flex flex-row items-center h-11 focus:outline-none hover:bg-blue-800 dark:hover:bg-gray-600 text-white-600 hover:text-white-800 border-l-4 border-transparent hover:border-blue-500 dark:hover:border-gray-800 pr-6">
                        <span class="inline-flex justify-center items-center ml-4">
                            <i class="fa-solid fa-gear"></i>
                        </span>
                        <span class="ml-2 text-sm tracking-wide truncate">Settings</span>
                    </a>
                    </li>
                </ul>
                <p class="mb-14 px-5 py-3 hidden md:block text-center text-xs">Copyright @2022 By OussamaHaddi</p>
            </div>
        </div>
        <!-- ./Sidebar -->

        <!-- body -->
        <div class="mt-24 relative">

            <!-- component -->
            <?php if($data['clients']) { ?>
                <div class=" rounded-lg border border-gray-200 shadow-md m-5">
                    <table class="w-full border-collapse bg-white text-left text-sm text-gray-500 ">
                        <thead class="bg-gray-100">
                            <tr class="">
                                <th scope="col" class="px-6 py-4 font-bold text-gray-900">Name</th>
                                <th scope="col" class="px-6 py-4 font-bold text-gray-900">Mobile</th>
                                <th scope="col" class="px-6 py-4 font-bold text-gray-900">Sddress</th>
                                <th scope="col" class="px-6 py-4 font-bold text-gray-900">City</th>
                                <th scope="col" class="px-6 py-4 font-bold text-gray-900">Email</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-100 border-t border-gray-100">
                            <?php foreach($data['clients'] as $client) : ?>
                                <tr class="hover:bg-gray-50">
                                    <td class="flex items-center gap-3 px-6 py-4 font-normal text-gray-900">
                                        <div class="relative h-10 w-10">
                                            <img class="h-full w-full object-cover object-center" src="<?= URLROOT . '/img/admins/admin.jpg'; ?>" alt=""/>
                                        </div>
                                        <div class="text-sm">
                                            <div class="font-medium text-gray-700"><?= $client->full_name ?></div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 ">
                                        <div class="overflow-hidden text-ellipsis"><?= $client->mobile ?></div>
                                    </td>
                                    <td class="px-6 py-4 ">
                                        <div class="overflow-hidden text-ellipsis"><?= $client->address ?></div>
                                    </td>
                                    <td class="px-6 py-4 ">
                                        <div class="overflow-hidden text-ellipsis"><?= $client->city ?></div>
                                    </td>
                                    <td class="px-6 py-4 ">
                                        <div class="overflow-hidden text-ellipsis"><?= $client->email ?></div>
                                    </td>
                                </tr>
                            <?php endforeach ; ?>
                        </tbody>
                    </table>
                </div>
            <?php } else { ?>
                <div class="text-xl text-center text-white">there is no Client</div>
            <?php } ?>

        </div>
        <!-- ./body -->
    </div>
  </div>

<!-- delete modal -->
  <div id="deleteModal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-modal md:h-full">
    <div class="relative p-4 w-full max-w-md h-full md:h-auto">
        <!-- Modal content -->
        <div class="relative p-4 text-center bg-white rounded-lg shadow dark:bg-gray-800 sm:p-5">
            <button type="button" class="text-gray-400 absolute top-2.5 right-2.5 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="deleteModal">
                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                <span class="sr-only">Close modal</span>
            </button>
            <svg class="text-gray-400 dark:text-gray-500 w-11 h-11 mb-3.5 mx-auto" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd"></path></svg>
            <p class="mb-4 text-gray-500 dark:text-gray-300">Are you sure you want to delete this item?</p>
            <div class="flex justify-center items-center space-x-4">
                <button data-modal-toggle="deleteModal" type="button" class="py-2 px-3 text-sm font-medium text-gray-500 bg-white rounded-lg border border-gray-200 hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-primary-300 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">
                    No, cancel
                </button>
                <a href="" id="confirm-delete" class="py-2 px-3 text-sm font-medium text-center text-white bg-red-600 rounded-lg hover:bg-red-700 focus:ring-4 focus:outline-none focus:ring-red-300 dark:bg-red-500 dark:hover:bg-red-600 dark:focus:ring-red-900">
                    Yes, I'm sure
                </a>
            </div>
        </div>
    </div>
</div>


</body>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.3/flowbite.min.js"></script>
    <script src="https://kit.fontawesome.com/e3e5f279fe.js" crossorigin="anonymous"></script>
    <script src="<?= URLROOT . '/js/deleteCategory.js'; ?>"></script>
</html>