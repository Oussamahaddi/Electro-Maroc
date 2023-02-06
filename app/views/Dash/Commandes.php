
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
            <?php if($data['Commandes']) { ?>
                <div class=" rounded-lg border border-gray-200 shadow-md m-5">
                    <table class="w-full border-collapse bg-white text-left text-sm text-gray-500 ">
                        <thead class="bg-gray-100">
                            <tr class="font-bold text-gray-900">
                                <th scope="col" class="px-6 py-4">Commande Name</th>
                                <th scope="col" class="px-6 py-4">Creation date</th>
                                <th scope="col" class="px-6 py-4">Quantity</th>
                                <th scope="col" class="px-6 py-4">Unit price</th>
                                <th scope="col" class="px-6 py-4">Total price</th>
                                <th scope="col" class="px-6 py-4">Action</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-100 border-t border-gray-100">
                            <?php foreach($data['Commandes'] as $Commande) : ?>
                                <tr class="hover:bg-gray-50">
                                    <th class="flex items-center gap-3 px-6 py-4 font-normal text-gray-900">
                                        <div class="relative h-10 w-10">
                                            <img class="h-full w-full object-cover object-center" src="<?= URLROOT . '/img/upload/' . $Commande->image; ?>" alt=""/>
                                        </div>
                                        <div class="text-sm">
                                            <div class="font-medium text-gray-700"><?= $Commande->libelle ?></div>
                                        </div>
                                    </th>
                                    <td class="px-6 py-4 ">
                                        <div class="overflow-hidden text-ellipsis"><?= $Commande->creation_date ?></div>
                                    </td>
                                    <td class="px-6 py-4 ">
                                        <div class="overflow-hidden text-ellipsis"><?= $Commande->quantity ?></div>
                                    </td>
                                    <td class="px-6 py-4 ">
                                        <div class="overflow-hidden text-ellipsis"><?= $Commande->unit_price ?></div>
                                    </td>
                                    <td class="px-6 py-4 ">
                                        <div class="overflow-hidden text-ellipsis"><?= $Commande->total_price_product ?></div>
                                    </td>
                                    <!-- table btn -->
                                    <?php if (empty($Commande->status)) { ?>
                                        <td class="px-6 py-4">
                                                <div class="flex gap-8">
                                                    <a href="<?= URLROOT . '/Dashboards/refuseCommande/' . $Commande->id; ?>" class="text-red-500 text-center">
                                                        <i class="fa-solid fa-trash"></i>
                                                        Refuse
                                                    </a>
                                                    <a href="<?= URLROOT . '/Dashboards/acceptCommande/' . $Commande->id; ?>" class="text-green-500 text-center">
                                                        <i class="fa-solid fa-pen"></i>
                                                        Accept
                                                    </a>
                                                </div>
                                        </td>
                                    <?php } else { ?>
                                        <td class="px-6 py-4 ">
                                            <div class="overflow-hidden text-ellipsis"><?= $Commande->status ?></div>
                                        </td>
                                    <?php } ?>
                                </tr>
                            <?php endforeach ; ?>
                        </tbody>
                    </table>
                </div>
            <?php } else { ?>
                <div class="text-xl text-center text-white">there is no items</div>
            <?php } ?>

        </div>
        <!-- ./body -->
    </div>
  </div>



</body>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.3/flowbite.min.js"></script>
    <script src="https://kit.fontawesome.com/e3e5f279fe.js" crossorigin="anonymous"></script>
</html>