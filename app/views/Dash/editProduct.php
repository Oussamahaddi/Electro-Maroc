<?php
    print_r($data);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.5/dist/flowbite.min.css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- For favicon png -->
    <link rel="shortcut icon" type="image/icon" href="<?php echo URLROOT; ?>/img/logo/GlowGuru.png"/>
    <title>Dashboard</title>
</head>
<body class="h-screen w-full bg-no-repeat bg-cover bg-gray-900" style="background-image: url(<?= URLROOT . '/img/bg.png';?>);">
    
    <div class=" h-screen w-full grid place-items-center -mt-">
        <div class="block p-6 rounded-lg shadow-lg bg-white/50 relative">
            <a href="<?= URLROOT . '/Dashboards/products'; ?>" class="">
                <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Back to Home</button>
            </a>
            <form action="<?= URLROOT . '/Dashboards/editProduct/' . $data['id']; ?>" method="POST" enctype="multipart/form-data">
                <div id="formInp">
                    <div class="form-group flex gap-4">
                        <div class="form-group mb-6">
                            <input type="text" name="ref" value="<?= $data['reference']; ?>" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"  placeholder="Reference">
                            <span class="text-red-500 bg-red-200 "><?= $data['reference_err']; ?></span>
                        </div>
                        <div class="form-group mb-6">
                            <input type="text" name="name" value="<?= $data['product_name']; ?>" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"  placeholder="Libelle">
                            <span class="text-red-500 bg-red-200 "><?= $data['product_name_err']; ?></span>
                        </div>
                        <div class="form-group mb-6">
                            <input type="text" name="code_bar" value="<?= $data['bar_code']; ?>" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"  placeholder="Code Bare">
                            <span class="text-red-500 bg-red-200 "><?= $data['bar_code_err']; ?></span>
                        </div>
                    </div>
                    <div class="form-group mb-6 flex gap-4">
                        <div class="">
                            <input type="text" name="r_price" value="<?= $data['retail_price']; ?>" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" placeholder="Retail Price">
                            <span class="text-red-500 bg-red-200 "><?= $data['retail_price_err']; ?></span>
                        </div>
                        <div class="">
                            <input type="text" name="f_price" value="<?= $data['final_price']; ?>" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" placeholder="Final Price">
                            <span class="text-red-500 bg-red-200 "><?= $data['final_price_err']; ?></span>
                        </div>
                        <div class="">
                            <input type="text" name="s_price" value="<?= $data['selling_price']; ?>" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" placeholder="Selling Price">
                            <span class="text-red-500 bg-red-200 "><?= $data['selling_price_err']; ?></span>
                        </div class="text-red-500 bg-red-200 ">
                    </div>
                    <div class="form-group mb-6">
                        <input type="number" name="product_quantity" value="<?= $data['product_quantity']; ?>" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"  placeholder="Quantity">
                        <span class="text-red-500 bg-red-200 "><?= $data['product_quantity_err']; ?></span>
                    </div>
                    <div class="form-group mb-6">
                        <select name="product_category" id="" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none">
                            <?php foreach($data['categories'] as $category) : ?>
                                <option value="<?= $category->name?>"><?= $category->name?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group mb-6">
                        <textarea name="description" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none "  rows="3" placeholder="Product Description" ><?= $data['product_description']; ?></textarea>
                        <span class="text-red-500 bg-red-200 "><?= $data['product_description_err']; ?></span>
                    </div>
                    <div class="form-group mb-6 w-full">
                        <input type="file" name="image" class="block">
                        <span class="text-red-500 bg-red-200 "><?= $data['product_image_err']; ?></span>
                    </div>
                </div>
                <div class="flex gap-2">
                    <button id="submit" type="submit" class=" w-full px-6 py-2.5 bg-blue-600 text-white text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out font-semibold">ADD</button>
                    <a href="<?= URLROOT . '/Dashboards/products'; ?>" class="w-full px-6 py-2.5 bg-blue-600 text-white text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out font-semibold"><button id="add_more" type="button" class="text-center">Cancel</button></a>
                </div>
            </form>
        </div>
    </div>


</body>
    <script src="https://kit.fontawesome.com/e3e5f279fe.js" crossorigin="anonymous"></script>
</html>