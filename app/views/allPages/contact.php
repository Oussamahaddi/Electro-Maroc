<?php
	include_once APPROOT . '/views/inc/header.php';
?>


<!-- nav bar start -->
<section class="nav_section bg-s  items-center h-14 w-full flex justify-center">
    <div class="nav_container h-full w-5/6">
        <!-- nav list -->
        <ul class="bg-zinc-800 text-black flex justify-center items-center list-none h-full font-semibold">
            <li class="h-full"><a href="<?= URLROOT; ?>/Pages/index" class="text-white hover:bg-white hover:text-black ease-linear duration-300 h-full flex items-center px-4 cursor-pointer gap-2"> Accueil  <i class="fa-solid fa-chevron-down"></i></a></li>
            <li class="h-full"><a href="<?= URLROOT; ?>/Pages/shop" class="text-white hover:bg-white hover:text-black ease-linear duration-300 h-full flex items-center px-4 cursor-pointer gap-2">SHOP <i class="fa-solid fa-chevron-down"></i></a></li>
            <li class="h-full"><a href="#" class="text-white hover:bg-white hover:text-black ease-linear duration-300 h-full flex gap-2 items-center px-4 cursor-pointer">BLOG </a></li>
            <li class="h-full"><a href="/Pages/contact" class="text-white hover:bg-white hover:text-black ease-linear duration-300 h-full flex gap-2 items-center px-4 cursor-pointer">CONTACT US </a></li>
        </ul>
    </div>
</section>
<!-- nav bar end -->

<section class="w-full flex justify-center my-8">
    <div class="w-5/6 grid gap-12">
        <div class="flex justify-center">
            <h1 class="text-2xl font-bold">Contact Us</h1>
        </div>
        <div class="w-full grid grid-cols-1 md:grid-cols-2 gap-6 place-items-around">
            <form action="" method="POST" class="">
                <div class="grid md:grid-cols-2 md:gap-6">
                    <div class="relative z-0 mb-6 w-full group">
                        <input type="text" name="floating_first_name" id="floating_first_name" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                        <label for="floating_first_name" class="peer-focus:font-medium absolute text-sm text-gray-500  duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">First name</label>
                    </div>
                    <div class="relative z-0 mb-6 w-full group">
                        <input type="text" name="floating_last_name" id="floating_last_name" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                        <label for="floating_last_name" class="peer-focus:font-medium absolute text-sm text-gray-500  duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Last name</label>
                    </div>
                </div>
                <div class="relative z-0 mb-6 w-full group">
                    <input type="email" name="floating_email" id="floating_email" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required >
                    <label for="floating_email" class="peer-focus:font-medium absolute text-sm text-gray-500  duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Message</label>
                </div>
                <div class="relative z-0 mb-6 w-full group">
                    <textarea rows="4" name="floating_email" id="floating_email" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required ></textarea>
                    <label for="floating_email" class="peer-focus:font-medium absolute text-sm text-gray-500  duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Message</label>
                </div>
            </form>
            <div class="w-full">
                <iframe scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=asfi%20youcode+(My%20Business%20Name)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed" width="100%" height="100%" frameborder="0"><a href="https://www.maps.ie/distance-area-calculator.html">measure distance on map</a></iframe>
            </div>
        </div>
    </div>
</section>


<?php
	include_once APPROOT . '/views/inc/footer.php';
?>