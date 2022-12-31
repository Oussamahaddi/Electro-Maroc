<?php
	include_once APPROOT . '/views/inc/header.php';
?>

    <section class="w-full flex justify-center items-center mt-10 h-full my-20">
        <div class="w-5/6">
                <?php if ($data['commandes'] === false) {
                    print_r($data['commandes']);?>
                    <div class="flex flex-col items-center gap-6">
                        <h3 class="font-semibold text-xl">You don't have any items in your cart.</h3>
                        <p>Have an account? Sign in to see your items.</p>
                        <div>
                            <a href="<?php echo URLROOT; ?>/Pages/Shop"><button type="button" class="text-blue-600 text-lg font-semibold bg-white border border-blue-600 hover:bg-blue-600 hover:text-white focus:outline-none focus:ring-4 focus:ring-blue-300 rounded-full px-5 py-2.5 text-center mr-2 mb-2 ">Start Shopping</button></a>
                            <a href="<?php echo URLROOT; ?>/Authentification/login"><button type="button" class="text-white text-lg font-semibold bg-blue-600 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300  rounded-full px-5 py-2.5 text-center mr-2 mb-2 ">Sign In</button></a>
                        </div>
                    </div>
                <?php } else { ?>
                    <?php foreach($data['commandes'] as $commande) : ?>
                    <div><?php echo $commande->id; ?></div>
                    <?php endforeach; ?>
                <?php } ?>
        </div>
    </section>

<?php
    include_once APPROOT . '/views/inc/footer.php';
?>