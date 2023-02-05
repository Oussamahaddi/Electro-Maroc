
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
            <a href="<?= URLROOT . '/Dashboards/Category'; ?>" class="">
                <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Back to Home</button>
            </a>
            <form action="<?= URLROOT . '/Dashboards/addCategory'; ?>" method="POST" enctype="multipart/form-data">
                <div id="formInp">
                    <div class="form-group mb-6">
                        <input type="text" name="name" value="<?= $data['category_name']; ?>" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"  placeholder="Code Bare">
                        <span class="text-red-500 bg-red-200 "><?= $data['category_name_err']; ?></span>
                    </div>
                    <div class="form-group mb-6">
                        <textarea name="description" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none "  rows="3" placeholder="Product Description" ><?= $data['category_description']; ?></textarea>
                        <span class="text-red-500 bg-red-200 "><?= $data['category_description_err']; ?></span>
                    </div>
                    <div class="form-group mb-6 w-full">
                        <input type="file" name="category_image" class="block">
                        <span class="text-red-500 bg-red-200 "><?= $data['category_image_err']; ?></span>
                    </div>
                </div>
                <div class="flex gap-2">
                    <button id="submit" type="submit" class=" w-full px-6 py-2.5 bg-blue-600 text-white text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out font-semibold">ADD</button>
                    <a href="<?= URLROOT . '/Dashboards/Category'; ?>" class="w-full px-6 py-2.5 bg-blue-600 text-white text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out font-semibold"><button id="add_more" type="button" class="text-center">Cancel</button></a>
                </div>
            </form>
        </div>
    </div>


</body>
    <script src="https://kit.fontawesome.com/e3e5f279fe.js" crossorigin="anonymous"></script>
</html>