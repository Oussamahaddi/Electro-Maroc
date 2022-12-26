

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
            <div class="logo">
                <img src="<?= URLROOT; ?>/img/admins/" alt="Electro Maroc" class="w-2/4">
            </div>
            <div class="recherch_bar flex gap-2 items-center">
                <input type="recherche" placeholder="Search products" class="rounded-md pl-2 py-1 border"><i class="fa-solid fa-magnifying-glass"></i>
            </div>
            <div class="icons flex items-center gap-4 text-lg">
                <div class="border border-gray-700 rounded px-2 text-gray-700 hover:bg-zinc-800 hover:cursor-pointer hover:text-white ease-linear duration-200"> <i class="fa-regular fa-heart"></i></div>
                <div class="border border-gray-700 rounded px-2 text-gray-700 hover:bg-zinc-800 hover:cursor-pointer hover:text-white ease-linear duration-200"><i class="fa-sharp fa-solid fa-bag-shopping"></i></div>
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
                    <div class="border border-gray-700 rounded px-2 text-gray-700 hover:bg-zinc-800 hover:text-white ease-linear duration-200"><a href="<?= URLROOT . '/Authentification/login' ?>"> <i class="fa-regular fa-user"></i></a></div>
                <?php endif;?>
            </div>
        </div>
    </header>
    <!-- header end -->



    <hr class="w-5/6 mx-auto">

    <!-- panier -->
    <section>
        
    </section>