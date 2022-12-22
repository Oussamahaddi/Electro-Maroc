<?php
	include_once APPROOT . '/views/inc/header.php';
?>

    <!-- khasni n3ti l body width 90% bach bla manb9a n3awd fiha -->

    <!-- header start -->
    <header class="w-full flex justify-center h-32 relative">
        <div class="flex w-full items-center justify-between w-5/6">
            <div class="logo">
                <img src="" alt="Electro Maroc" width="60px">
            </div>
            <div class="recherch_bar flex gap-2 items-center">
                <input type="recherche" placeholder="Search products" class="rounded-md pl-2 py-1 border"><i class="fa-solid fa-magnifying-glass"></i>
            </div>
            <div class="icons flex items-center gap-4 text-lg">
                <i class="fa-regular fa-heart hover:text-white trasition-all ease-linear duration-300"></i>
                <i class="fa-sharp fa-solid fa-bag-shopping hover:text-white trasition-all ease-linear duration-300"></i>
                <i class="fa-regular fa-user hover:text-white trasition-all ease-linear duration-300"></i>
            </div>
        </div>
    </header>
    <!-- header end -->

    <hr class="w-5/6 m-auto">

    <!-- nav bar start -->
    <section class="nav_section items-center h-14 w-full flex justify-center">
        <div class="nav_container h-full w-5/6">
            <!-- nav list -->
            <ul class="flex justify-center items-center list-none bg-yellow-00 h-full text-black font-semibold">
                <li class="h-full"><a href="#" class="hover:bg-white hover:text-black trasition-all ease-linear duration-300 h-full flex gap-2 items-center px-4 cursor-pointer"> HOME  <i class="fa-solid fa-chevron-down"></i></a></li>
                <li class="h-full"><a href="#" class="hover:bg-white hover:text-black trasition-all ease-linear duration-300 h-full flex gap-2 items-center px-4 cursor-pointer">SHOP <i class="fa-solid fa-chevron-down"></i></a></li>
                <li class="h-full"><a href="#" class="hover:bg-white hover:text-black trasition-all ease-linear duration-300 h-full flex items-center px-4 cursor-pointer">BLOG </a></li>
                <li class="h-full"><a href="#" class="hover:bg-white hover:text-black trasition-all ease-linear duration-300 h-full flex items-center px-4 cursor-pointer">CONTACT US </a></li>
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
                <div class="items flex flex-wrap justify-between gap-6">
                    <!-- product content -->
                    <div class="product border w-[calc(90%/3)] flex flex-col items-center gap-px">
                        <!-- product img -->
                        <div class="product_img  w-full flex justify-center items-center h-52 p-2">
                            <img src="./img/product/desktop/d2.png" alt="" class="w-4/6 h-4/6">
                        </div>
                        <!-- product name -->
                        <h3>Product One</h3>
                        <!-- product price -->
                        <strong>$140.00</strong>
                    </div>
                    <div class="product  w-[calc(90%/3)] flex flex-col items-center gap-px">
                        <!-- product img -->
                        <div class="product_img bg-gray-100 w-full flex justify-center items-center h-52 p-2">
                            <img src="./img/product/pc/p2.png" alt="" class="w-4/6 h-4/6">
                        </div>
                        <!-- product name -->
                        <h3>Product One</h3>
                        <!-- product price -->
                        <strong>$140.00</strong>
                    </div>
                    <div class="product  w-[calc(90%/3)] flex flex-col items-center gap-px">
                        <!-- product img -->
                        <div class="product_img bg-gray-100 w-full flex justify-center items-center h-52 p-2">
                            <img src="./img/product/controller/c2.png" alt="" class="w-4/6 h-4/6">
                        </div>
                        <!-- product name -->
                        <h3>Product One</h3>
                        <!-- product price -->
                        <strong>$140.00</strong>
                        <!-- add to product btn -->
                        <div class="add_btn">
                            <button>ADD TO CART</button>
                        </div>
                    </div>
                    <div class="product  w-[calc(90%/3)] flex flex-col items-center gap-px">
                        <!-- product img -->
                        <div class="product_img bg-gray-100 w-full flex justify-center items-center h-52 p-2">
                            <img src="./img/product/mouse/m2.png" alt="" class="w-4/6 h-4/6">
                        </div>
                        <!-- product name -->
                        <h3>Product One</h3>
                        <!-- product price -->
                        <strong>$140.00</strong>
                    </div>
                    <div class="product  w-[calc(90%/3)] flex flex-col items-center gap-px">
                        <!-- product img -->
                        <div class="product_img bg-gray-100 w-full flex justify-center items-center h-52 p-2">
                            <img src="./img/product/monitor/m2.png" alt="" class="w-4/6 h-4/6">
                        </div>
                        <!-- product name -->
                        <h3>Product One</h3>
                        <!-- product price -->
                        <strong>$140.00</strong>
                    </div>
                    <div class="product  w-[calc(90%/3)] flex flex-col items-center gap-px">
                        <!-- product img -->
                        <div class="product_img bg-gray-100 w-full flex justify-center items-center h-52 p-2">
                            <img src="./img/product/headphone/h2.png" alt="" class="w-4/6 h-4/6">
                        </div>
                        <!-- product name -->
                        <h3>Product One</h3>
                        <!-- product price -->
                        <strong>$140.00</strong>
                    </div>
                    <div class="product  w-[calc(90%/3)] flex flex-col items-center gap-px">
                        <!-- product img -->
                        <div class="product_img bg-gray-100 w-full flex justify-center items-center h-52 p-2">
                            <img src="./img/product/keyboard/k2.png" alt="" class="w-4/6 h-4/6">
                        </div>
                        <!-- product name -->
                        <h3>Product One</h3>
                        <!-- product price -->
                        <strong>$140.00</strong>
                    </div>
                    <div class="product  w-[calc(90%/3)] flex flex-col items-center gap-px">
                        <!-- product img -->
                        <div class="product_img bg-gray-100 w-full flex justify-center items-center h-52 p-2">
                            <img src="./img/product/pc/p4.png" alt="" class="w-4/6 h-4/6">
                        </div>
                        <!-- product name -->
                        <h3>Product One</h3>
                        <!-- product price -->
                        <strong>$140.00</strong>
                    </div>
                    <div class="product w-[calc(90%/3)] flex flex-col items-center gap-px">
                        <!-- product img -->
                        <div class="product_img bg-gray-100 w-full flex justify-center items-center h-52 p-2">
                            <img src="./img/product/cartmere/cm2.png" alt="" class="w-4/6 h-4/6">
                        </div>
                        <!-- product name -->
                        <h3>Product One</h3>
                        <!-- product price -->
                        <strong>$140.00</strong>
                    </div>
                </div>
                <!-- pagination  -->
                <div class="pagination">

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
                            <img src="./img/product/pc/p6.png" alt="" class="w-4/6 h-full">
                        </div>
                        <div class="info">
                            <h4 class="font-semibold">Pc Desktop</h4>
                            <p class="text-red-600">$600.00</p>
                        </div>
                    </div>
                    <div class="items_sells flex gap-4 items-center">
                        <div class="img w-2/6 flex justify-center items-center">
                            <img src="./img/product/monitor/m4.png" alt="" class="w-4/6 h-full">
                        </div>
                        <div class="info">
                            <h4 class="font-semibold">Pc Desktop</h4>
                            <p class="text-red-600">$600.00</p>
                        </div>
                    </div>
                    <div class="items_sells flex gap-4 items-center">
                        <div class="img w-2/6 flex justify-center items-center">
                            <img src="./img/product/mouse/m6.png" alt="" class="w-4/6 h-full">
                        </div>
                        <div class="info">
                            <h4 class="font-semibold">Pc Desktop</h4>
                            <p class="text-red-600">$600.00</p>
                        </div>
                    </div>
                    <div class="items_sells flex gap-4 items-center">
                        <div class="img w-2/6 flex justify-center items-center">
                            <img src="./img/product/desktop/d6.png" alt="" class="w-4/6 h-full">
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
