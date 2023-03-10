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
                                                            Total_price
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
                                                                <img src="<?= URLROOT . '/img/upload/' . $panierProduct->image;?>" alt="Apple Watch" class="">
                                                            </td>
                                                            <td class="px-6 py-4 font-semibold text-gray-900">
                                                                <?= $panierProduct->libelle?>
                                                            </td>
                                                            <td class="px-6 py-4">
                                                                <input type="number" id="first_product" name="" value="<?= $panierProduct->quantite?>" class="quantite bg-gray-50 w-14 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block px-2.5 py-1 ">
                                                            </td>
                                                            <td class="qte px-6 py-4 font-semibold text-gray-900"><?= '$' . $panierProduct->selling_price?></td>
                                                            <td class="totalPrice px-6 py-4 font-semibold text-gray-900"><?= '$' . $panierProduct->selling_price * $panierProduct->quantite?></td>
                                                            <td class="px-6 py-4">
                                                                <a href="<?= URLROOT . '/commandes/removeComande/' . $panierProduct->id; ?>" class="font-medium text-red-600 dark:text-red-500 hover:underline">Remove</a>
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
                            <form action="<?= URLROOT . '/Commandes/sendCommande' ?>" method="POST">
                                <div class="max-w-lg px-4 mx-auto lg:px-8 grid gap-8">
                                    <div>
                                        <h3 class="font-bold text-2xl">Summary</h3>
                                        <p class="font-semibold ">total iteam costs : </p>
                                        <div class="flex flex-col items-center w-full">
                                            <?php foreach ($data['commandes'] as $panier) : ?>
                                                <p> $<?= $panier->selling_price ?> qty x <span class="hiddenInp"> <?= $panier->quantite ?> </span></p> <br>
                                                <input type="text" name="products[]" value="<?= $panier->id_p ?>" class="hiddenInp" hidden>
                                                <input type="text" name="quantity[]" value="<?= $panier->quantite ?>" id="quantite" hidden>
                                            <?php endforeach ?>
                                        </div>
                                        <hr>
                                        <div class="my-price">
                                            <p id="total">total : </p>
                                        </div>
                                    </div>
                                    <div class="">
                                        <button class="block w-full rounded-md bg-black p-2.5 text-sm text-white transition hover:shadow-lg" > Pay Now </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                <?php } ?>
        </div>
    </section>

    <script>
        let inp = document.querySelectorAll('.quantite');
        let qte = document.querySelector('.qte');
        let hiddenInp = document.querySelector('.hiddenInp');
        let price = document.querySelector('.price');
        let totaText = document.getElementById('total');
        inp.forEach(ele => {
            ele.addEventListener('input', (e) => {
                // qte.textContent()
                let totalPrice = ele.parentElement.nextElementSibling.nextElementSibling;
                test = parseInt(ele.value);
                // hiddenInp.textContent = test;
                totalPrice.textContent = `$${qte.textContent.slice(1) * test}`;
                // total.textContent = `total : ${totalPrice.textContent}`
            })
        });

    </script>

<?php
    include_once APPROOT . '/views/inc/footer.php';
?>