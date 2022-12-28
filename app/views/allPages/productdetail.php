<?php
	include_once APPROOT . '/views/inc/header.php';
?>

    <section class="w-full flex justify-center mt-10">
        <div class="w-5/6 grid grid-cols-1 sm:grid-cols-2 justify-items-center gap-6 h-fit">
            <div class="w-5/6 h-full grid grid-cols-1 grid-rows-[1fr_auto] gap-4">
                <div class="col flex justify-center items-center border border-gray-300 product bg-gray-100 overflow-hidden relative after:content-['_'] after:absolute after:bg-gray-500 after:w-1/3 after:h-1/3 after:left-[-5%] after:top-1/2 after:translate-y-[-50%] after:rotate-45 after:rounded-lg after:opacity-20 before:absolute before:bg-gray-500 before:w-2/4 before:h-2/4 before:rounded-lg before:right-[-10%] before:top-1/3 before:translate-y-[-50%] before:rotate-45 before:opacity-20 cursor-pointer">
                    <img src="<?= URLROOT . '/img/product/pc/p1.png' ?>" alt="big img" class="w-5/6 relative z-10">
                </div>
                <div class="grid grid-cols-4 gap-4">
                    <div class="p-2 bg-gray-100 border border-gray-300 cursor-pointer"><img src="<?= URLROOT . '/img/product/pc/p2.png' ?>" alt="img1" class="w-full"></div>
                    <div class="p-2 bg-gray-100 border border-gray-300 cursor-pointer"><img src="<?= URLROOT . '/img/product/pc/p2.png' ?>" alt="img2" class="w-full"></div>
                    <div class="p-2 bg-gray-100 border border-gray-300 cursor-pointer"><img src="<?= URLROOT . '/img/product/pc/p2.png' ?>" alt="img3" class="w-full"></div>
                    <div class="p-2 bg-gray-100 border border-gray-300 cursor-pointer"><img src="<?= URLROOT . '/img/product/pc/p2.png' ?>" alt="img4" class="w-full"></div>
                </div>
            </div>
            <div class="w-5/6 h-full flex flex-col gap-4 justify-around">
                <div>
                    <h1 class="text-xl font-bold">ASUS TUF Gaming F15 Gaming Laptop, 15.6" 144Hz FHD IPS-Type Display,</h1>
                </div>
                <div class="text-red-500 text-lg font-semibold">$<span>499.00</span></div>
                <div>
                    <p class="text-gray-500 text-sm">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                        Placeat ducimus impedit maiores ut pariatur maxime odio, 
                        vero omnis, eveniet itaque nisi corporis porro dolorum. Ducimus 
                        impedit exercitationem laudantium labore rem.
                    </p>
                </div>
                <div>
                    <div><strong>Reference : </strong> <span>Lorem ipsum dolor</span></div>
                    <div><strong>Libelle : </strong> <span>Lorem ipsum dolor</span></div>
                    <div><strong>Code Bare : </strong> <span>Lorem ipsum dolor</span></div>
                </div>
                <div>
                    <label for="quantite">Quantite : </label>
                    <select name="" id="quantite" class="w-14 rounded">
                        <optgroup label="Qts">
                            <option value="" selected>1</option>
                            <option value="">2</option>
                            <option value="">3</option>
                            <option value="">4</option>
                        </optgroup>
                    </select>
                </div>
                <div class="flex gap-4 items-center">
                    <div>
                        <button class="bg-zinc-900 border border-gray-300 text-white  py-2 px-4 flex gap-4 items-center transition-all duration-500 hover:bg-white hover:text-black"><i class="fa-sharp fa-solid fa-bag-shopping"></i>ADD TO CART</button>
                    </div>
                    <div>
                        <button class="py-2 px-4 border border-gray-300 flex gap-4 items-center transition-all duration-500 hover:bg-zinc-900 hover:text-white"><i class="fa-regular fa-heart"></i>ADD TO WISHLESS</button>
                    </div>
                </div>
                <div class="text-sm grid gap-2">
                    <div> <strong>Categorie :</strong> Pc Portable </div>
                    <div> <strong>Available :</strong> 5 Product in stock </div>
                </div>
            </div>
        </div>
    </section>

<?php
    include_once APPROOT . '/views/inc/footer.php';
?>