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
                        <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown" class="text-white bg-zinc-900 font-medium rounded-lg text-sm px-4 py-2.5 text-center inline-flex items-center" type="button">Sort By <svg class="w-4 h-4 ml-2" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg></button>
                        <!-- Dropdown menu -->
                        <div id="dropdown" class="z-20 hidden divide-y divide-gray-100 rounded-lg shadow w-44 bg-zinc-900">
                            <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefaultButton">
                            <li>
                                <a href="<?= URLROOT . '/Pages/ascend'; ?>" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Prix</a>
                            </li>
                            <li>
                                <a href="<?= URLROOT . '/Pages/descend'; ?>" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Name </a>
                            </li>
                            </ul>
                        </div>
                    </div>
                    <p>Showing 1-12 of 19 results</p>
                </div>
                    <!-- all items of shop -->
                    <div class="items grid grid-cols-1 sm:grid-cols-1 md:grid-cols-3 lg:grid-cols-3 gap-4">
                        <!-- product content -->
                        <?php foreach ($data['select_by_categorie'] as $product): ?>
                            <div class="product bg-purple-500 overflow-hidden rounded-lg relative after:content-['_'] after:absolute after:bg-gray-200 after:w-1/3 after:h-1/3 after:left-[-5%] after:top-1/2 after:translate-y-[-50%] after:rotate-45 after:rounded-lg after:opacity-20 before:absolute before:bg-gray-200 before:w-2/4 before:h-2/4 before:rounded-lg before:right-[-10%] before:top-1/3 before:translate-y-[-50%] before:rotate-45 before:opacity-20 cursor-pointer">
                                <!-- product img -->
                                <div class="relative z-10 w-full flex justify-center items-center h-52 p-2">
                                    <img src="<?= URLROOT; ?>/img/upload/<?= $product->image ?>" alt="" class="w-4/6 h-4/6">
                                </div>
                                <div class="bg-zinc-900 text-white flex justify-around py-4">
                                    <!-- product name -->
                                    <h3 class="font-semibold test-lg"><?= $product->libelle ?></h3>
                                    <!-- product price -->
                                    <strong class=" bg-white rounded-full text-teal-500 text-xs font-bold px-3 py-2 leading-none flex items-center w-fit">$<?= $product->selling_price; ?></strong>
                                </div>
                                <div class="absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 z-10 flex items-center justify-center w-full h-full bg-black/30 opacity-0 hover:opacity-100 transition-all duration-500 ease-in-out">
                                    <a href="<?php echo URLROOT . '/Products/productdetail/' . $product->id_p ?>"><button class="bg-red-500 font-semibold text-gray-900 bg-gradient-to-r from-red-200 via-red-300 to-yellow-200 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-red-100 dark:focus:ring-red-400 rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">Details</button></a>
                                </div>
                            </div>
                        <?php endforeach; ?>
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
                <!-- ./pagination -->
            </div>

            <!-- categorie -->
            <div class="shop_categorie col-start-2 grid h-fit gap-12">
                <div class="categorie bg-gray-100 grid gap-y-4 rounded h-fit border">
                    <h3 class="text-lg font-bold bg-zinc-800 text-white p-2 rounded-t">Categorie</h3>
                    <ul class="list-none grid gap-y-2 text-gray-500 p-4">
                        <?php foreach($data['categories'] as $categorie) : ?>
                            <a href="<?= URLROOT . '/Pages/category/' . $categorie->id; ?>"> <li class="flex items-center gap-4"><i class="fa-solid fa-chevron-left"></i><?= $categorie->name; ?></li></a><hr>
                        <?php endforeach;?>
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
