
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Registre</title>
</head>
<body>

    <section class="bg-gray-900 bg-no-repeat bg-cover" style="background-image: url(<?= URLROOT . '/img/bg.png';?>);">
        <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
            <div class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0">
                <div class="p-2 space-y-4 md:space-y-6 sm:p-6">
                    <div class="flex justify-between items-center">
                        <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl ">
                            Create an account
                        </h1>
                        <a href="<?= URLROOT . '/Pages/index' ?>" class="w-fit py-2 px-4 bg-blue-600 text-white font-medium text-sm rounded-md shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out gap-2 "><i class="fa-solid fa-arrow-left-long"></i> Back To Home</a>
                    </div>
                    <form class="space-y-4 md:space-y-6" action="<?= URLROOT . '/Authentification/registre' ?>" method="POST">
                        <div>
                            <label for="fullname" class="font-semibold block mb-2 text-sm text-gray-900 ">Full Name</label>
                            <input type="text" name="fullname" value="<?php echo $data['fullname'] ?>" id="fullname" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 " placeholder="UserName">

                            <!-- error message if email and password empty or not found -->
                            <span class="text-red-500"><?php echo $data['fullname_err'] ?></span>
                        </div>
                        <div>
                            <label for="email" class="font-semibold block mb-2 text-sm text-gray-900 ">Your email</label>
                            <input type="email" name="email" value="<?php echo $data['email'] ?>" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 " placeholder="name@gmail.com">

                            <!-- error message if email and password empty or not found -->
                            <span class="text-red-500"><?php echo $data['email_err'] ?></span>
                        </div>
                        <div class="flex gap-4">
                            <div>
                                <label for="password" class="font-semibold block mb-2 text-sm text-gray-900 ">Password</label>
                                <input type="password" name="password" id="password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 ">

                                <!-- error message if email and password empty or not found -->
                                <span class="text-red-500"><?php echo $data['password_err'] ?></span>
                            </div>
                            <div>
                                <label for="confirm-password" class="font-semibold block mb-2 text-sm text-gray-900 ">Confirm password</label>
                                <input type="password" name="confirm_password" id="confirm-password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 ">

                                <!-- error message if email and password empty or not found -->
                                <span class="text-red-500"><?php echo $data['confirm_password_err'] ?></span>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="flex items-center h-5">
                                <input id="terms" aria-describedby="terms" type="checkbox" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-primary-300 ">
                            </div>
                            <div class="ml-3 text-sm">
                                <label for="terms" class="font-light text-gray-500 ">I accept the <a class="font-medium text-primary-600 hover:underline dark:text-primary-500" href="#">Terms and Conditions</a></label>
                            </div>
                        </div>
                        <button type="submit" class="inline-block px-7 py-3 bg-blue-600 text-white font-medium text-sm leading-snug uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out w-full">Create an account</button>
                        <p class="text-sm font-light text-gray-500 dark:text-gray-400">
                            Already have an account? <a href="<?= URLROOT . '/Authentification/login' ?>" class="font-medium text-blue-500 hover:underline">Login here</a>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </section>

</body>
    <script src="https://kit.fontawesome.com/e3e5f279fe.js" crossorigin="anonymous"></script>
</html>


