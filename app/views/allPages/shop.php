<?php
	include_once APPROOT . '/views/inc/header.php';
?>


    <!-- shop start -->
    <section class="shop mt-8">
        <div class="shop_container grid grid-cols-[2fr_14rem] gap-6 w-5/6 m-auto">
            <div class="shop_items">
                <!-- sort select width text -->
                <div class="sort flex gap-10 justify-end mb-8">
                    <div class=" flex items-center gap-2">
                        <label for="sort">Sort By :</label>
                        <select name="" id="sort" class="rounded py-1 px-2">
                            <option value="Categorie">Catégorie</option>
                            <option value="Prix">Prix</option>
                        </select>
                    </div>
                    <p>Showing 1-12 of 19 results</p>
                </div>
                <!-- all items of shop -->
                <div class="items grid grid-cols-1 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                    <!-- product content -->
                    <div class="product bg-purple-500 overflow-hidden rounded-lg relative after:content-['_'] after:absolute after:bg-gray-200 after:w-1/3 after:h-1/3 after:left-[-5%] after:top-1/2 after:translate-y-[-50%] after:rotate-45 after:rounded-lg after:opacity-20 before:absolute before:bg-gray-200 before:w-2/4 before:h-2/4 before:rounded-lg before:right-[-10%] before:top-1/3 before:translate-y-[-50%] before:rotate-45 before:opacity-20 cursor-pointer">
                        <!-- product img -->
                        <div class="relative z-10 w-full flex justify-center items-center h-52 p-2">
                            <img src="<?= URLROOT; ?>/img/product/desktop/d2.png" alt="" class="w-4/6 h-4/6">
                        </div>
                        <div class="bg-zinc-900 text-white flex justify-around py-4">
                            <!-- product name -->
                            <h3 class="font-semibold test-lg">Product One</h3>
                            <!-- product price -->
                            <strong class=" bg-white rounded-full text-teal-500 text-xs font-bold px-3 py-2 leading-none flex items-center w-fit">$140.00</strong>
                        </div>
                    </div>
                    <div class="product bg-purple-500 overflow-hidden rounded-lg relative after:content-['_'] after:absolute after:bg-gray-200 after:w-1/3 after:h-1/3 after:left-[-5%] after:top-1/2 after:translate-y-[-50%] after:rotate-45 after:rounded-lg after:opacity-20 before:absolute before:bg-gray-200 before:w-2/4 before:h-2/4 before:rounded-lg before:right-[-10%] before:top-1/3 before:translate-y-[-50%] before:rotate-45 before:opacity-20 cursor-pointer">
                        <!-- product img -->
                        <div class="relative z-10 w-full flex justify-center items-center h-52 p-2">
                            <img src="<?= URLROOT; ?>/img/product/pc/p2.png" alt="" class="w-4/6 h-4/6">
                        </div>
                        <div class="bg-zinc-900 text-white flex justify-around py-4">
                            <!-- product name -->
                            <h3 class="font-semibold test-lg">Product One</h3>
                            <!-- product price -->
                            <strong class=" bg-white rounded-full text-teal-500 text-xs font-bold px-3 py-2 leading-none flex items-center w-fit">$140.00</strong>
                        </div>
                    </div>
                    <div class="product bg-purple-500 overflow-hidden rounded-lg relative after:content-['_'] after:absolute after:bg-gray-200 after:w-1/3 after:h-1/3 after:left-[-5%] after:top-1/2 after:translate-y-[-50%] after:rotate-45 after:rounded-lg after:opacity-20 before:absolute before:bg-gray-200 before:w-2/4 before:h-2/4 before:rounded-lg before:right-[-10%] before:top-1/3 before:translate-y-[-50%] before:rotate-45 before:opacity-20 cursor-pointer">
                        <!-- product img -->
                        <div class="relative z-10 w-full flex justify-center items-center h-52 p-2">
                            <img src="<?= URLROOT; ?>/img/product/controller/c2.png" alt="" class="w-4/6 h-4/6">
                        </div>
                        <div class="bg-zinc-900 text-white flex justify-around py-4">
                            <!-- product name -->
                            <h3 class="font-semibold test-lg">Product One</h3>
                            <!-- product price -->
                            <strong class=" bg-white rounded-full text-teal-500 text-xs font-bold px-3 py-2 leading-none flex items-center w-fit">$140.00</strong>
                        </div>
                    </div>
                    <div class="product bg-purple-500 overflow-hidden rounded-lg relative after:content-['_'] after:absolute after:bg-gray-200 after:w-1/3 after:h-1/3 after:left-[-5%] after:top-1/2 after:translate-y-[-50%] after:rotate-45 after:rounded-lg after:opacity-20 before:absolute before:bg-gray-200 before:w-2/4 before:h-2/4 before:rounded-lg before:right-[-10%] before:top-1/3 before:translate-y-[-50%] before:rotate-45 before:opacity-20 cursor-pointer">
                        <!-- product img -->
                        <div class="relative z-10 w-full flex justify-center items-center h-52 p-2">
                            <img src="<?= URLROOT; ?>/img/product/mouse/m2.png" alt="" class="w-4/6 h-4/6">
                        </div>
                        <div class="bg-zinc-900 text-white flex justify-around py-4">
                            <!-- product name -->
                            <h3 class="font-semibold test-lg">Product One</h3>
                            <!-- product price -->
                            <strong class=" bg-white rounded-full text-teal-500 text-xs font-bold px-3 py-2 leading-none flex items-center w-fit">$140.00</strong>
                        </div>
                    </div>
                    <div class="product bg-purple-500 overflow-hidden rounded-lg relative after:content-['_'] after:absolute after:bg-gray-200 after:w-1/3 after:h-1/3 after:left-[-5%] after:top-1/2 after:translate-y-[-50%] after:rotate-45 after:rounded-lg after:opacity-20 before:absolute before:bg-gray-200 before:w-2/4 before:h-2/4 before:rounded-lg before:right-[-10%] before:top-1/3 before:translate-y-[-50%] before:rotate-45 before:opacity-20 cursor-pointer">
                        <!-- product img -->
                        <div class="relative z-10 w-full flex justify-center items-center h-52 p-2">
                            <img src="<?= URLROOT; ?>/img/product/monitor/m2.png" alt="" class="w-4/6 h-4/6">
                        </div>
                        <div class="bg-zinc-900 text-white flex justify-around py-4">
                            <!-- product name -->
                            <h3 class="font-semibold test-lg">Product One</h3>
                            <!-- product price -->
                            <strong class=" bg-white rounded-full text-teal-500 text-xs font-bold px-3 py-2 leading-none flex items-center w-fit">$140.00</strong>
                        </div>
                    </div>
                    <div class="product bg-purple-500 overflow-hidden rounded-lg relative after:content-['_'] after:absolute after:bg-gray-200 after:w-1/3 after:h-1/3 after:left-[-5%] after:top-1/2 after:translate-y-[-50%] after:rotate-45 after:rounded-lg after:opacity-20 before:absolute before:bg-gray-200 before:w-2/4 before:h-2/4 before:rounded-lg before:right-[-10%] before:top-1/3 before:translate-y-[-50%] before:rotate-45 before:opacity-20 cursor-pointer">
                        <!-- product img -->
                        <div class="relative z-10 w-full flex justify-center items-center h-52 p-2">
                            <img src="<?= URLROOT; ?>/img/product/headphone/h2.png" alt="" class="w-4/6 h-4/6">
                        </div>
                        <div class="bg-zinc-900 text-white flex justify-around py-4">
                            <!-- product name -->
                            <h3 class="font-semibold test-lg">Product One</h3>
                            <!-- product price -->
                            <strong class=" bg-white rounded-full text-teal-500 text-xs font-bold px-3 py-2 leading-none flex items-center w-fit">$140.00</strong>
                        </div>
                    </div>
                    <div class="product bg-purple-500 overflow-hidden rounded-lg relative after:content-['_'] after:absolute after:bg-gray-200 after:w-1/3 after:h-1/3 after:left-[-5%] after:top-1/2 after:translate-y-[-50%] after:rotate-45 after:rounded-lg after:opacity-20 before:absolute before:bg-gray-200 before:w-2/4 before:h-2/4 before:rounded-lg before:right-[-10%] before:top-1/3 before:translate-y-[-50%] before:rotate-45 before:opacity-20 cursor-pointer">
                        <!-- product img -->
                        <div class="relative z-10 w-full flex justify-center items-center h-52 p-2">
                            <img src="<?= URLROOT; ?>/img/product/keyboard/k2.png" alt="" class="w-4/6 h-4/6">
                        </div>
                        <div class="bg-zinc-900 text-white flex justify-around py-4">
                            <!-- product name -->
                            <h3 class="font-semibold test-lg">Product One</h3>
                            <!-- product price -->
                            <strong class=" bg-white rounded-full text-teal-500 text-xs font-bold px-3 py-2 leading-none flex items-center w-fit">$140.00</strong>
                        </div>
                    </div>
                    <div class="product bg-purple-500 overflow-hidden rounded-lg relative after:content-['_'] after:absolute after:bg-gray-200 after:w-1/3 after:h-1/3 after:left-[-5%] after:top-1/2 after:translate-y-[-50%] after:rotate-45 after:rounded-lg after:opacity-20 before:absolute before:bg-gray-200 before:w-2/4 before:h-2/4 before:rounded-lg before:right-[-10%] before:top-1/3 before:translate-y-[-50%] before:rotate-45 before:opacity-20 cursor-pointer">
                        <!-- product img -->
                        <div class="relative z-10 w-full flex justify-center items-center h-52 p-2">
                            <img src="<?= URLROOT; ?>/img/product/pc/p4.png" alt="" class="w-4/6 h-4/6">
                        </div>
                        <div class="bg-zinc-900 text-white flex justify-around py-4">
                            <!-- product name -->
                            <h3 class="font-semibold test-lg">Product One</h3>
                            <!-- product price -->
                            <strong class=" bg-white rounded-full text-teal-500 text-xs font-bold px-3 py-2 leading-none flex items-center w-fit">$140.00</strong>
                        </div>
                    </div>
                    <div class="product bg-purple-500 overflow-hidden rounded-lg relative after:content-['_'] after:absolute after:bg-gray-200 after:w-1/3 after:h-1/3 after:left-[-5%] after:top-1/2 after:translate-y-[-50%] after:rotate-45 after:rounded-lg after:opacity-20 before:absolute before:bg-gray-200 before:w-2/4 before:h-2/4 before:rounded-lg before:right-[-10%] before:top-1/3 before:translate-y-[-50%] before:rotate-45 before:opacity-20 cursor-pointer">
                        <!-- product img -->
                        <div class="relative z-10 w-full flex justify-center items-center h-52 p-2">
                            <img src="<?= URLROOT; ?>/img/product/cartmere/cm2.png" alt="" class="w-4/6 h-4/6">
                        </div>
                        <div class="bg-zinc-900 text-white flex justify-around py-4">
                            <!-- product name -->
                            <h3 class="font-semibold test-lg">Product One</h3>
                            <!-- product price -->
                            <strong class=" bg-white rounded-full text-teal-500 text-xs font-bold px-3 py-2 leading-none flex items-center w-fit">$140.00</strong>
                        </div>
                    </div>
                </div>
                <!-- pagination  -->
                <div class="pagination my-8">
                    <nav aria-label="Page navigation example">
                        <ul class="flex">
                            <li>
                            <a href="#" class="px-3 py-2 leading-tight text-gray-500 bg-white border border-gray-300 rounded-l-lg hover:bg-gray-100 hover:text-gray-700">Previous</a>
                            </li>
                            <li>
                            <a href="#" class="px-3 py-2 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700">1</a>
                            </li>
                            <li>
                            <a href="#" class="px-3 py-2 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700">2</a>
                            </li>
                            <li>
                            <a href="#" class="px-3 py-2 text-blue-600 border border-gray-300 bg-blue-50 hover:bg-blue-100 hover:text-blue-700 ">3</a>
                            </li>
                            <li>
                            <a href="#" class="px-3 py-2 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700">4</a>
                            </li>
                            <li>
                            <a href="#" class="px-3 py-2 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700">5</a>
                            </li>
                            <li>
                            <a href="#" class="px-3 py-2 leading-tight text-gray-500 bg-white border border-gray-300 rounded-r-lg hover:bg-gray-100 hover:text-gray-700">Next</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <!-- categorie -->
            <div class="shop_categorie col-start-2 grid h-fit gap-12">
                <div class="categorie bg-gray-100 grid gap-y-4 rounded h-fit border">
                    <h3 class="text-lg font-bold bg-zinc-800 text-white p-2 rounded-t">Categorie</h3>
                    <ul class="list-none grid gap-y-2 text-gray-500 p-4">
                        <li class="flex justify-between items-center">Accessoire<i class="fa-solid fa-chevron-down"></i></li><hr>
                        <li class="flex justify-between items-center">Accessoire<i class="fa-solid fa-chevron-down"></i></li><hr>
                        <li class="flex justify-between items-center">Accessoire<i class="fa-solid fa-chevron-down"></i></li><hr>
                        <li class="flex justify-between items-center">Accessoire<i class="fa-solid fa-chevron-down"></i></li><hr>
                        <li class="flex justify-between items-center">Accessoire<i class="fa-solid fa-chevron-down"></i></li>
                    </ul>
                </div>
                <!-- top product sells -->
                <div class="best_sells bg-gray-100 grid gap-y-4 rounded h-fit border">
                    <h3 class="text-lg font-bold bg-zinc-800 text-white p-2 rounded-t">Top Rated Products</h3>
                    <div class="items_sells flex gap-4 items-center">
                        <div class="img w-2/6 flex justify-center items-center">
                            <img src="<?= URLROOT; ?>/img/product/pc/p6.png" alt="" class="w-4/6 h-full">
                        </div>
                        <div class="info">
                            <h4 class="font-semibold">Pc Desktop</h4>
                            <p class="text-red-600">$600.00</p>
                        </div>
                    </div>
                    <div class="items_sells flex gap-4 items-center">
                        <div class="img w-2/6 flex justify-center items-center">
                            <img src="<?= URLROOT; ?>/img/product/monitor/m4.png" alt="" class="w-4/6 h-full">
                        </div>
                        <div class="info">
                            <h4 class="font-semibold">Pc Desktop</h4>
                            <p class="text-red-600">$600.00</p>
                        </div>
                    </div>
                    <div class="items_sells flex gap-4 items-center">
                        <div class="img w-2/6 flex justify-center items-center">
                            <img src="<?= URLROOT; ?>/img/product/mouse/m6.png" alt="" class="w-4/6 h-full">
                        </div>
                        <div class="info">
                            <h4 class="font-semibold">Pc Desktop</h4>
                            <p class="text-red-600">$600.00</p>
                        </div>
                    </div>
                    <div class="items_sells flex gap-4 items-center">
                        <div class="img w-2/6 flex justify-center items-center">
                            <img src="<?= URLROOT; ?>/img/product/desktop/d6.png" alt="" class="w-4/6 h-full">
                        </div>
                        <div class="info">
                            <h4 class="font-semibold">Pc Desktop</h4>
                            <p class="text-red-600">$600.00</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- shop end -->


<?php
	include_once APPROOT . '/views/inc/footer.php';
?>
