<?php

print_r($data['product_name'])


?>
<!DOCTYPE html>
<html lang="en" class="">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.5/dist/flowbite.min.css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Electro Maroc</title>
</head>
<body>

    <!-- header start -->
    <header class="w-full flex justify-center h-32 relative">
        <div class="flex items-center justify-between w-5/6">
            <div class="w-2/6">
                <a href="<?= URLROOT . '/Pages/index'; ?>" class="w-fit sm:block hidden"><img src="<?= URLROOT; ?>/img/logo/electromaroclogo.png" alt="Electro Maroc" class="w-2/5"></a>
                <a href="<?= URLROOT . '/Pages/index'; ?>" class="w-fit sm:hidden"><img src="<?= URLROOT; ?>/img/logo/electromaroclogomobile.png" alt="Electro Maroc" class="w-2/5"></a>
            </div>
            <div class="flex gap-2 items-center bg-zinc-900 rounded-md sm:pr-2">
                <input type="recherche" placeholder="Search products" class="rounded-l-md pl-2 py-1 border sm:block hidden"><i class="fa-solid fa-magnifying-glass cursor-pointer text-white px-2"></i>
            </div>
            <div class="icons flex items-center gap-4 text-lg">
                <div class="border border-gray-700 rounded px-2 text-gray-700 hover:bg-zinc-800 hover:cursor-pointer hover:text-white ease-linear duration-200"> <i class="fa-regular fa-heart"></i></div>
                
                <!-- cart start -->
                <div class="relative">
                    <div id="cart" type="button" data-dropdown-toggle="cartButton" data-dropdown-placement="bottom-start" class="border cursor-pointer border-gray-700 rounded px-2 text-gray-700 hover:bg-zinc-800 hover:text-white ease-linear duration-200"> <i class="fa-sharp fa-solid fa-bag-shopping"></i></div>

                    <!-- component -->
                    <div id="cartButton" class="hidden z-50 absolute left-0 top-8 border border-gray-200">
                        <div class="flex  justify-center " aria-labelledby="cart">
                            <div class="relative">
                                <div class=" w-full  rounded-b border-t-0 z-10">
                                    <div class="shadow-xl w-64">
                                        <div class="p-2 flex justify-between items-center bg-white hover:bg-gray-100 cursor-pointer border-b border-gray-100">
                                            <div class="p-2 w-14 flex justify-center items-center">
                                                <img src="<?= URLROOT . '/img/product/pc/p1.png'; ?>" alt="img product">
                                            </div>
                                            <div class="flex-auto text-sm w-fit">
                                                <div class="font-bold">Product 1</div>
                                                <div class="text-gray-400">Qt: 2</div>
                                            </div>
                                            <div class="flex flex-col w-18 font-medium items-end">
                                                <div class="w-4 h-4 mb-6 hover:bg-red-200 rounded-full cursor-pointer text-red-700">
                                                    <i class="fa-solid fa-trash"></i>
                                                </div>
                                                <div>$12.22</div>
                                            </div>
                                        </div>
                                        <div class="p-4 justify-center flex bg-slate-300">
                                            <a href="<?php echo URLROOT; ?>/Commandes/commandeDetails">
                                                <button class="text-base  undefined  hover:scale-110 focus:outline-none flex justify-center px-4 py-2 rounded font-bold cursor-pointer hover:bg-teal-700 hover:text-teal-100 bg-teal-100  text-teal-700 border duration-200 ease-in-out border-teal-600 transition">Checkout $36.66</button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- cart end  -->


                <!-- check if there is a session do this condition -->
                <?php if (isLoggedIn()) : ?>

                    <img id="avatarButton" type="button" data-dropdown-toggle="userDropdown" data-dropdown-placement="bottom-start" class="ring-2 ring-blue-300 w-8 h-8 rounded-full cursor-pointer" src="<?= URLROOT . '/img/admins/admin.jpg'; ?>" alt="User dropdown">

                    <!-- Dropdown menu -->
                    <div id="userDropdown" class="hidden z-10 w-44 bg-white rounded border border-gray-300 divide-y divide-gray-100 shadow">
                        <div class="py-3 px-4 text-sm text-gray-900 ">
                            <div> <span class="font-bold"> <?= $_SESSION['name'] ?></span></div>
                            <div class="font-semibold truncate"><?= $_SESSION['Email'] ?></div>
                        </div>
                        <ul class="py-1 text-sm text-gray-700 " aria-labelledby="avatarButton">
                            <li>
                                <a href="#" class="block py-2 px-4 hover:bg-gray-100 ">Dashboard</a>
                            </li>
                            <li>
                                <a href="#" class="block py-2 px-4 hover:bg-gray-100 ">Settings</a>
                            </li>
                        </ul>
                        <div class="py-1">
                            <a href="<?php echo URLROOT; ?>/Authentification/logOutAdmin" class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100 ">Sign out</a>
                        </div>
                    </div>
                <?php else : ?>

                    <div id="avatarButton" type="button" data-dropdown-toggle="userDropdown" data-dropdown-placement="bottom-start" class="border cursor-pointer border-gray-700 rounded px-2 text-gray-700 hover:bg-zinc-800 hover:text-white ease-linear duration-200"> <i class="fa-regular fa-user"></i> </div>

                    <!-- Dropdown menu -->
                    <div id="userDropdown" class="hidden z-10 w-44 bg-white rounded border border-gray-300 divide-y divide-gray-100 shadow">
                        <ul class="py-1 text-sm text-gray-700 " aria-labelledby="avatarButton">
                            <li>
                                <a href="<?= URLROOT . '/Authentification/login' ?>" class="block py-2 px-4 hover:bg-gray-200 ">Login</a>
                            </li>
                            <li>
                                <a href="<?= URLROOT . '/Authentification/registre' ?>" class="block py-2 px-4 hover:bg-gray-200 ">Registre</a>
                            </li>
                        </ul>
                    </div>

                <?php endif;?>
            </div>
        </div>
    </header>
    <!-- header end -->


    <!-- nav bar start -->
    <section class="nav_section bg-s  items-center h-14 w-full flex justify-center">
        <div class="nav_container h-full w-5/6">
            <!-- nav list -->
            <ul class="bg-zinc-800 text-black flex justify-center items-center list-none h-full font-semibold">
                <li class="h-full"><a href="<?= URLROOT; ?>/Pages/index" class="text-white hover:bg-white hover:text-black ease-linear duration-300 h-full flex items-center px-4 cursor-pointer gap-2"> Accueil</a></li>
                <li class="h-full"><a href="<?= URLROOT; ?>/Pages/shop" class="text-white hover:bg-white hover:text-black ease-linear duration-300 h-full flex items-center px-4 cursor-pointer gap-2">SHOP <i class="fa-solid fa-chevron-down"></i></a></li>
                <li class="h-full"><a href="#" class="text-white hover:bg-white hover:text-black ease-linear duration-300 h-full flex gap-2 items-center px-4 cursor-pointer">BLOG </a></li>
                <li class="h-full"><a href="<?= URLROOT; ?>/Pages/contact" class="text-white hover:bg-white hover:text-black ease-linear duration-300 h-full flex gap-2 items-center px-4 cursor-pointer">CONTACT US </a></li>
            </ul>
        </div>
    </section>
    <!-- nav bar end -->



    <hr class="w-5/6 mx-auto">

    <!-- panier -->
    <section>
        
    </section>