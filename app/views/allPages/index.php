<?php
	include_once APPROOT . '/views/inc/header.php';
?>

<!-- nav bar start -->
<section class="nav_section bg-s  items-center h-14 w-full flex justify-center">
    <div class="nav_container h-full w-5/6">
        <!-- nav list -->
        <ul class="bg-zinc-800 text-black flex justify-center items-center list-none h-full font-semibold">
            <li class="h-full"><a href="<?= URLROOT; ?>/Pages/index" class="nav_bar gap-2"> HOME  <i class="fa-solid fa-chevron-down"></i></a></li>
            <li class="h-full"><a href="<?= URLROOT; ?>/Pages/shop" class="nav_bar gap-2">SHOP <i class="fa-solid fa-chevron-down"></i></a></li>
            <li class="h-full"><a href="#" class="nav_bar">BLOG </a></li>
            <li class="h-full"><a href="#" class="nav_bar">CONTACT US </a></li>
        </ul>
    </div>
</section>
<!-- nav bar end -->

<!-- home page start -->
<section class="w-full flex justify-center">
    <div class="w-5/6 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 ">
        <div class="big_img bg-gradient-to-r from-slate-900 to-purple-900 col-span-3 flex relative p-12 h-fit">
            <div class="flex flex-col gap-4 w-5/6  relative z-10">
                <p class="text-white font-semibold">PC</p>
                <h1 class=" text-white font-bold text-2xl w-5/6">
                    ASUS TUF Gaming F15 Gaming Laptop, 15.6" 144Hz FHD IPS-Type Display,
                </h1>
                <p class="text-gray-200 ">Ships to Morocco</p>
                <div class="flex my-4">
                    <button class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 shadow-lg shadow-blue-500/50 dark:shadow-lg dark:shadow-blue-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">SEE DETAIL</button>
                </div>
            </div>
            <div class=" w-5/6 right-8">
                <img src="<?= URLROOT . '/img/product/pc/p3.png'?>" alt="pc" class="">
            </div>
            <div class="text-white absolute bottom-2 right-1/2 my-2 flex gap-4">
                <span>o</span>
                <span>o</span>
                <span>o</span>
            </div>
        </div>
        <div class="small_img bg-[conic-gradient(at_top,_var(--tw-gradient-stops))] from-gray-900 via-gray-100 to-gray-900 col-span-1 flex flex-col justify-around">
            <div class="info grid place-items-center">
                <h2 class="text-black font-bold w-5/6 text-center">
                    Logitech SOURIS GAMING OPTIQUE G300S - Noir/Bleu
                </h2>
                <div class="flex my-4 w-fit">
                    <button class="text-black">>> Buy Now <<</button>
                </div>
            </div>
            <div class="w-full flex justify-center items-center">
                <img src="<?= URLROOT . '/img/product/mouse/m2.png'?>" alt="pc" class="w-6/12">
            </div>
        </div>
        <div class="small_img bg-[conic-gradient(at_right,_var(--tw-gradient-stops))] from-indigo-200 via-slate-600 to-indigo-200 relative max-h-60 col-span-4 p-4">
            <div class="w-full h-full flex justify-around items-center">
                <img src="<?= URLROOT . '/img/product/desktop/d2.png'?>" alt="pc" class="h-full">
                <div class="w-3/6 flex flex-col gap-4">
                    <strong class="text-gray-300 text-sm w-fit">DESKTOP GAMER</strong>
                    <h2 class="text-white font-bold text-lg w-fit">
                        Vibox VI-20 PC Gamer - 24" Écran Pack - AMD Athlon PRO 300GE - Radeon Vega 3 - 16Go RAM - 1To HDD - Win11 - WiFi
                    </h2>
                    <button class="w-fit text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 shadow-lg shadow-blue-500/50 dark:shadow-lg dark:shadow-blue-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2"><i class="fa-solid fa-cart-shopping"></i> Buy Now</button>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- home page end -->

<!-- shipping start -->
<section class="w-full flex justify-center my-8">
    <div class="w-5/6 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        <div class="flex gap-6 items-center bg-gray-100 rounded p-2">
            <div>
                <i class="fa-solid fa-truck-fast text-4xl"></i>
            </div>
            <div class="flex flex-col gap-2">
                <strong>Free shipping & Return</strong>
                <p class="text-gray-400 text-sm w-5/6">free shipping on order our truth we say more? </p>
            </div>
        </div>
        <div class="flex gap-6 items-center bg-gray-100 rounded p-2">
            <div>
                <i class="fa-solid fa-truck-fast text-4xl"></i>
            </div>
            <div class="flex flex-col gap-2">
                <strong>Free shipping & Return</strong>
                <p class="text-gray-400 text-sm w-5/6">free shipping on order our truth we say more? </p>
            </div>
        </div>
        <div class="flex gap-6 items-center bg-gray-100 rounded p-2">
            <div>
                <i class="fa-solid fa-truck-fast text-4xl"></i>
            </div>
            <div class="flex flex-col gap-2">
                <strong>Free shipping & Return</strong>
                <p class="text-gray-400 text-sm w-5/6">free shipping on order our truth we say more? </p>
            </div>
        </div>
    </div>
</section>






<?php
	include_once APPROOT . '/views/inc/footer.php';
?>

