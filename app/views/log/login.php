
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= URLROOT . '/dist/output.css' ?>">
    <title>Login</title>
</head>
<body>
    <section class="h-screen w-5/6 m-auto">
        <div class="container px-6 py-12 h-full">
            <div class="w-fit flex items-center gap-2">
                <a href="<?= URLROOT . '/Pages/index' ?>" class="flex gap-2 items-center text-gray-600 "><i class="fa-solid fa-arrow-left-long"></i> Back To Home</a>
            </div>
            <div class="flex flex-col md:flex-row lg:flex-row justify-center items-center  h-full g-6 text-gray-800 ">
                <div class="w-4/6 hidden sm:hidden md:block lg:block">
                    <img src="<?= URLROOT . '/img/draw2.webp' ?>" alt="">
                </div>
                <div class="md:w-8/12 lg:w-5/12 lg:ml-20">
                    <form action="<?= URLROOT . '/Authentification/login' ?>" method="POST">
                        <!-- Email input -->
                        <div class="mb-6 grid gap-2">
                            <label for="examplecheck3" class="text-lg font-semibold">Email</label>
                            <input type="email" name="Email" value="<?= $data['Email'] ?>" class="mb-0 form-control block w-full px-4 py-2 text-xl font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" placeholder="Email address"/>
                            <!-- error message if email empty or not found -->
                            <span class="text-red-500"><?php echo $data['Password_err'] ?></span>
                        </div>

                        <!-- Password input -->
                        <div class="mb-6 grid gap-2">
                            <label for="examplecheck3" class="text-lg font-semibold">Password</label>
                            <input type="password" name="Password" class="mb-0 form-control block w-full px-4 py-2 text-xl font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" placeholder="Password"/>
                            <!-- error message if email empty or not found -->
                            <span class="text-red-500"><?php echo $data['Password_err'] ?></span>
                        </div>

                        <!-- Submit button -->
                        <button
                            type="submit"
                            class="inline-block px-7 py-3 bg-blue-600 text-white font-medium text-sm leading-snug uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out w-full"
                            data-mdb-ripple="true"
                            data-mdb-ripple-color="light"
                        >
                            Login
                        </button>

                        <div
                            class="flex items-center my-4 before:flex-1 before:border-t before:border-gray-300 before:mt-0.5 after:flex-1 after:border-t after:border-gray-300 after:mt-0.5"
                        >
                            <p class="text-center font-semibold mx-4 mb-0">OR</p>
                        </div>

                        <a class="px-7 py-3 text-white font-medium text-sm leading-snug uppercase rounded shadow-md hover:shadow-lg focus:shadow-lg focus:outline-none focus:ring-0 active:shadow-lg transition duration-150 ease-in-out w-full flex justify-center items-center mb-3" style="background-color: #3b5998" href="#!">
                            Sign Up
                        </a>
                    </form>
                </div>
            </div>
        </div>
    </section>


<?php
    include_once APPROOT . '/views/inc/footer.php';
?>