<?php
	include_once APPROOT . '/views/inc/header.php';
?>

    <section class="w-full flex justify-center items-center mt-10 h-full my-20">
        <div class="w-5/6">
                <?php if ($data['commandes'] === false) { ?>
                    <div class="flex flex-col items-center gap-6">
                        <h3 class="font-semibold text-xl">You don't have any items in your cart.</h3>
                        <?php if (!isset($_SESSION['Email'])) : ?>
                            <p>Have an account? Sign in to see your items.</p>
                        <?php endif; ?>
                        <div>
                            <a href="<?php echo URLROOT; ?>/Pages/Shop"><button type="button" class="text-blue-600 text-lg font-semibold bg-white border border-blue-600 hover:bg-blue-600 hover:text-white focus:outline-none focus:ring-4 focus:ring-blue-300 rounded-full px-5 py-2.5 text-center mr-2 mb-2 ">Start Shopping</button></a>
                            <?php if (!isset($_SESSION['Email'])) : ?>
                                <a href="<?php echo URLROOT; ?>/Authentification/login"><button type="button" class="text-white text-lg font-semibold bg-blue-600 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300  rounded-full px-5 py-2.5 text-center mr-2 mb-2 ">Sign In</button></a>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php } else { ?>
                    <div class="grid grid-cols-1 mx-auto max-w-screen-2xl md:grid-cols-2">
                        <div class="py-12 bg-gray-50">
                            <div class="max-w-lg px-4 mx-auto space-y-8 lg:px-4">
                                <div>
                                    <strong class="text-2xl">Shopping Cart.</strong>
                                </div>
                                
                                <div>
                                    <div class="">

                                        <!-- table of product -->
                                        
                                        <div class="relative sm:rounded-lg">
                                            <table class="w-full text-sm text-left text-gray-500 ">
                                                <thead class="text-xs text-gray-700 uppercase bg-gray-200 ">
                                                    <tr>
                                                        <th scope="col" class="px-6 py-3">
                                                            <span class="sr-only">Image</span>
                                                        </th>
                                                        <th scope="col" class="px-6 py-3">
                                                            Product
                                                        </th>
                                                        <th scope="col" class="px-6 py-3">
                                                            Qty
                                                        </th>
                                                        <th scope="col" class="px-6 py-3">
                                                            Price
                                                        </th>
                                                        <th scope="col" class="px-6 py-3">
                                                            Action
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php foreach($data['commandes'] as $panierProduct) : ?>
                                                        <tr class="bg-white border-b ">
                                                            <td class="p-2">
                                                                <img src="<?= URLROOT . '/img/product/pc/p1.png';?>" alt="Apple Watch" class="">
                                                            </td>
                                                            <td class="px-6 py-4 font-semibold text-gray-900">
                                                                <?= $panierProduct->libelle?>
                                                            </td>
                                                            <td class="px-6 py-4">
                                                                <div class="flex items-center space-x-3">
                                                                    <input type="number" id="first_product" name="" value="<?= $panierProduct->quantity?>" class="bg-gray-50 w-14 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block px-2.5 py-1 ">
                                                                </div>
                                                            </td>
                                                            <td class="px-6 py-4 font-semibold text-gray-900">
                                                                <?= $panierProduct->total_price_product?>
                                                            </td>
                                                            <td class="px-6 py-4">
                                                                <a href="#" class="font-medium text-red-600 dark:text-red-500 hover:underline">Remove</a>
                                                            </td>
                                                        </tr>
                                                    <?php endforeach; ?>
                                                </tbody>
                                            </table>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="py-12 bg-white">
                            <div class="max-w-lg px-4 mx-auto lg:px-8">

                                <!-- information form -->
                                <form action="<?= URLROOT . '/Commandes/setCommande'; ?>" method="POST" class="grid grid-cols-6 gap-4">
                                    <div class="col-span-3">
                                        <label for="FirstName" class="block text-xs font-medium text-gray-700"> First Name </label>

                                        <input type="text" id="FirstName" class="w-full mt-1 border-gray-200 rounded-md shadow-sm sm:text-sm" />
                                    </div>

                                    <div class="col-span-3">
                                        <label for="LastName" class="block text-xs font-medium text-gray-700" > Last Name </label>

                                        <input type="text" id="LastName" class="w-full mt-1 border-gray-200 rounded-md shadow-sm sm:text-sm" />
                                    </div>

                                    <div class="col-span-6">
                                        <label for="Email" class="block text-xs font-medium text-gray-700"> Email </label>

                                        <input type="email" id="Email" class="w-full mt-1 border-gray-200 rounded-md shadow-sm sm:text-sm" />
                                    </div>

                                    <div class="col-span-6">
                                        <label for="Phone" class="block text-xs font-medium text-gray-700"> Phone </label>

                                        <input type="tel" id="Phone" class="w-full mt-1 border-gray-200 rounded-md shadow-sm sm:text-sm" />
                                    </div>

                                    <fieldset class="col-span-6">
                                        <legend class="block text-sm font-medium text-gray-700"> Billing Address </legend>

                                        <div class="mt-1 -space-y-px bg-white rounded-md shadow-sm grid gap-4">
                                            <div>
                                                <label for="Country" class="block text-xs font-medium text-gray-700 mb-2">Country</label>
                                                <input type="text" name="country" id="" class="relative w-full border-gray-200 rounded-b-md focus:z-10 sm:text-sm">
                                            </div>

                                            <div>
                                                <label class="block text-xs font-medium text-gray-700 mb-2" for="PostalCode"> ZIP/Post Code </label>
                                                <input type="text" id="PostalCode" placeholder="ZIP/Post Code" class="relative w-full border-gray-200 rounded-b-md focus:z-10 sm:text-sm" />
                                            </div>
                                        </div>
                                    </fieldset>

                                    <div class="col-span-6">
                                        <button class="block w-full rounded-md bg-black p-2.5 text-sm text-white transition hover:shadow-lg" > Pay Now </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                <?php } ?>
        </div>
    </section>

<?php
    include_once APPROOT . '/views/inc/footer.php';
?>