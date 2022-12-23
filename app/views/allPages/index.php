<?php
	include_once APPROOT . '/views/inc/header.php';
?>

<!-- nav bar start -->
<section class="nav_section bg-s  items-center h-14 w-full flex justify-center">
    <div class="nav_container h-full w-5/6">
        <!-- nav list -->
        <ul class="bg-zinc-800 text-black flex justify-center items-center list-none h-full font-semibold">
            <li class="h-full"><a href="<?= URLROOT; ?>/Pages/index" class="text-white hover:bg-white hover:text-black trasition-all ease-linear duration-300 h-full flex gap-2 items-center px-4 cursor-pointer"> HOME  <i class="fa-solid fa-chevron-down"></i></a></li>
            <li class="h-full"><a href="<?= URLROOT; ?>/Pages/shop" class="text-white hover:bg-white hover:text-black trasition-all ease-linear duration-300 h-full flex gap-2 items-center px-4 cursor-pointer">SHOP <i class="fa-solid fa-chevron-down"></i></a></li>
            <li class="h-full"><a href="#" class="text-white hover:bg-white hover:text-black trasition-all ease-linear duration-300 h-full flex gap-2 items-center px-4 cursor-pointer">BLOG </a></li>
            <li class="h-full"><a href="#" class="nav_bar">CONTACT US </a></li>
        </ul>
    </div>
</section>
<!-- nav bar end -->

<!-- home page start -->
<section class="sliders w-full flex justify-center">
    <div class="slider_container w-5/6 grid grid-cols-4 gap-4">
        <div class="big_img bg-yellow-500 col-span-3 flex relative p-12 ">
            <div class="flex flex-col gap-4 w-5/6">
                <p>PC</p>
                <h1 class=" text-white font-bold text-2xl">
                    ASUS TUF Gaming F15 Gaming Laptop, 15.6" 144Hz FHD IPS-Type Display,
                </h1>
                <p>Ships to Morocco</p>
                <div class="flex justify-center my-4">
                    <button class="bg-gray-200 w-fit">SEE DETAIL</button>
                </div>
            </div>
            <div class="absolute w-4/6 ">
                <img src="<?= URLROOT . '/img/product/pc/p3.png'?>" alt="pc" class="">
            </div>
            <div class="absolute bottom-2 right-1/2 my-2 flex gap-4">
                <span>o</span>
                <span>o</span>
                <span>o</span>
            </div>
        </div>
        <div class="small_img bg-red-500 col-span-1">
            <div class="img">
                <img src="<?= URLROOT . '/img/product/mouse/m2.png'?>" alt="pc">
            </div>
            <div class="info">
                <p>PC</p>
                <h1>
                    ASUS TUF Gaming F15 Gaming Laptop, 15.6" 144Hz FHD IPS-Type Display, 
                    Intel Core i5-10300H Processor, GeForce GTX 1650,
                </h1>
                <p>Ships to Morocco</p>
                <button class="">SEE DETAIL</button>
            </div>
        </div>
        <div class="small_img bg-gray-500 col-span-2">
            <div class="img">
                <img src="<?= URLROOT . '/img/product/monitor/m2.png'?>" alt="pc">
            </div>
            <div class="info">
                <p>PC</p>
                <h1>
                    ASUS TUF Gaming F15 Gaming Laptop, 15.6" 144Hz FHD IPS-Type Display, 
                    Intel Core i5-10300H Processor, GeForce GTX 1650,
                </h1>
                <p>Ships to Morocco</p>
                <button class="">SEE DETAIL</button>
            </div>
        </div>
        <div class="small_img bg-green-500 col-span-2">
            <div class="img">
                <img src="<?= URLROOT . '/img/product/headphone/h2.png'?>" alt="pc">
            </div>
            <div class="info">
                <p>PC</p>
                <h1>
                    ASUS TUF Gaming F15 Gaming Laptop, 15.6" 144Hz FHD IPS-Type Display, 
                    Intel Core i5-10300H Processor, GeForce GTX 1650,
                </h1>
                <p>Ships to Morocco</p>
                <button class="">SEE DETAIL</button>
            </div>
        </div>
    </div>
</section>





<?php
	include_once APPROOT . '/views/inc/footer.php';
?>

