<?php
	include_once APPROOT . '/views/inc/header.php';
?>

    <!-- nav bar start -->
    <section class="nav_section items-center h-14 w-full flex justify-center">
        <div class="nav_container h-full w-5/6">
            <!-- nav list -->
            <ul class="bg-zinc-800 flex justify-center items-center list-none h-full text-black font-semibold">
                <li class="h-full"><a href="<?= URLROOT; ?>/Pages/index" class="nav_bar"> HOME <i class="fa-solid fa-chevron-down"></i></a></li>
                <li class="h-full"><a href="<?= URLROOT; ?>/Pages/shop" class="nav_bar">SHOP <i class="fa-solid fa-chevron-down"></i></a></li>
                <li class="h-full"><a href="#" class="nav_bar">BLOG </a></li>
                <li class="h-full"><a href="#" class="nav_bar">CONTACT US </a></li>
            </ul>
        </div>
    </section>
    <!-- nav bar end -->

    <!-- shop start -->
    <section class="shop mt-8">
        <div class="shop_container grid grid-cols-[2fr_14rem] gap-6 w-5/6 m-auto">
            <div class="shop_items">
                <!-- sort select width text -->
                <div class="sort flex gap-12 justify-end mb-8">
                    <div class="select_box">
                        <label for="sort">Sort By :</label>
                        <select name="" id="sort" class="rounded py-1 px-2">
                            <option value="Categorie">Catégorie</option>
                            <option value="Prix">Prix</option>
                        </select>
                    </div>
                    <p>Showing 1-12 of 19 results</p>
                </div>
                <!-- all items of shop -->
                <div class="items grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
                    <!-- product content -->
                    <div class="product">
                        <!-- product img -->
                        <div class="product_img bg-gray-100 w-full flex justify-center items-center h-52 p-2">
                            <img src="<?= URLROOT; ?>/img/product/desktop/d2.png" alt="" class="w-4/6 h-4/6">
                        </div>
                        <!-- product name -->
                        <h3>Product One</h3>
                        <!-- product price -->
                        <strong>$140.00</strong>
                    </div>
                    <div class="product">
                        <!-- product img -->
                        <div class="product_img bg-gray-100 w-full flex justify-center items-center h-52 p-2">
                            <img src="<?= URLROOT; ?>/img/product/pc/p2.png" alt="" class="w-4/6 h-4/6">
                        </div>
                        <!-- product name -->
                        <h3>Product One</h3>
                        <!-- product price -->
                        <strong>$140.00</strong>
                    </div>
                    <div class="product">
                        <!-- product img -->
                        <div class="product_img bg-gray-100 w-full flex justify-center items-center h-52 p-2">
                            <img src="<?= URLROOT; ?>/img/product/controller/c2.png" alt="" class="w-4/6 h-4/6">
                        </div>
                        <!-- product name -->
                        <h3>Product One</h3>
                        <!-- product price -->
                        <strong>$140.00</strong>
                    </div>
                    <div class="product">
                        <!-- product img -->
                        <div class="product_img bg-gray-100 w-full flex justify-center items-center h-52 p-2">
                            <img src="<?= URLROOT; ?>/img/product/mouse/m2.png" alt="" class="w-4/6 h-4/6">
                        </div>
                        <!-- product name -->
                        <h3>Product One</h3>
                        <!-- product price -->
                        <strong>$140.00</strong>
                    </div>
                    <div class="product">
                        <!-- product img -->
                        <div class="product_img bg-gray-100 w-full flex justify-center items-center h-52 p-2">
                            <img src="<?= URLROOT; ?>/img/product/monitor/m2.png" alt="" class="w-4/6 h-4/6">
                        </div>
                        <!-- product name -->
                        <h3>Product One</h3>
                        <!-- product price -->
                        <strong>$140.00</strong>
                    </div>
                    <div class="product">
                        <!-- product img -->
                        <div class="product_img bg-gray-100 w-full flex justify-center items-center h-52 p-2">
                            <img src="<?= URLROOT; ?>/img/product/headphone/h2.png" alt="" class="w-4/6 h-4/6">
                        </div>
                        <!-- product name -->
                        <h3>Product One</h3>
                        <!-- product price -->
                        <strong>$140.00</strong>
                    </div>
                    <div class="product">
                        <!-- product img -->
                        <div class="product_img bg-gray-100 w-full flex justify-center items-center h-52 p-2">
                            <img src="<?= URLROOT; ?>/img/product/keyboard/k2.png" alt="" class="w-4/6 h-4/6">
                        </div>
                        <!-- product name -->
                        <h3>Product One</h3>
                        <!-- product price -->
                        <strong>$140.00</strong>
                    </div>
                    <div class="product">
                        <!-- product img -->
                        <div class="product_img bg-gray-100 w-full flex justify-center items-center h-52 p-2">
                            <img src="<?= URLROOT; ?>/img/product/pc/p4.png" alt="" class="w-4/6 h-4/6">
                        </div>
                        <!-- product name -->
                        <h3>Product One</h3>
                        <!-- product price -->
                        <strong>$140.00</strong>
                    </div>
                    <div class="product">
                        <!-- product img -->
                        <div class="product_img bg-gray-100 w-full flex justify-center items-center h-52 p-2">
                            <img src="<?= URLROOT; ?>/img/product/cartmere/cm2.png" alt="" class="w-4/6 h-4/6">
                        </div>
                        <!-- product name -->
                        <h3>Product One</h3>
                        <!-- product price -->
                        <strong>$140.00</strong>
                    </div>
                </div>
                <!-- pagination  -->
                <div class="pagination my-8">
                    <nav aria-label="Page navigation example">
                        <ul class="flex">
                            <li>
                            <a href="#" class="px-3 py-2 leading-tight text-gray-500 bg-white border border-gray-300 rounded-l-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Previous</a>
                            </li>
                            <li>
                            <a href="#" class="px-3 py-2 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">1</a>
                            </li>
                            <li>
                            <a href="#" class="px-3 py-2 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">2</a>
                            </li>
                            <li>
                            <a href="#" class="px-3 py-2 text-blue-600 border border-gray-300 bg-blue-50 hover:bg-blue-100 hover:text-blue-700 dark:border-gray-700 dark:bg-gray-700 dark:text-white">3</a>
                            </li>
                            <li>
                            <a href="#" class="px-3 py-2 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">4</a>
                            </li>
                            <li>
                            <a href="#" class="px-3 py-2 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">5</a>
                            </li>
                            <li>
                            <a href="#" class="px-3 py-2 leading-tight text-gray-500 bg-white border border-gray-300 rounded-r-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Next</a>
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
