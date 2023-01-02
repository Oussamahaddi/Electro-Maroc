
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    
    <title>Login</title>
</head>
<body>

    <section class="bg-gray-900 bg-no-repeat bg-cover" style="background-image: url(<?= URLROOT . '/img/bg.png';?>);">
        <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
            <div class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0">
                <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                    <div class="flex justify-between items-center">
                        <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl ">
                            Login
                        </h1>
                        <a href="<?= URLROOT . '/Pages/index' ?>" class="w-fit py-2 px-4 bg-blue-600 text-white font-medium text-sm rounded-md shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out gap-2 "><i class="fa-solid fa-arrow-left-long"></i> Back To Home</a>
                    </div>
                    <form class="space-y-4 md:space-y-6" action="<?= URLROOT . '/Authentification/login' ?>" method="POST">
                        <div>
                            <label for="email" class="font-semibold block mb-2 text-sm text-gray-900 ">Your email</label>
                            <input type="email" name="Email" value="<?php echo $data['Email'] ?>" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 " placeholder="name@gmail.com">

                            <!-- error message if email empty or not found -->
                            <span class="text-red-500"><?php echo $data['Email_err'] ?></span>
                        </div>

                        <div>
                            <label for="password" class="font-semibold block mb-2 text-sm text-gray-900 ">Password</label>
                            <div class="relative h-fit flex items-center">
                                <input type="password" name="Password" id="password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 ">
                                <div class="cursor-pointer absolute right-3">
                                    <i id="password_eye" class="fa-solid fa-eye-slash"></i>
                                </div>
                            </div>
                            <!-- error message if password empty or not found -->
                            <span class="text-red-500"><?php echo $data['Password_err'] ?></span>
                        </div>
                        <div>
                            <!-- error message if email and password empty or not found -->
                            <span class="text-red-500"><?php echo $data['Email_Password_err'] ?></span>
                        </div>

                        <button type="submit" class="inline-block px-7 py-3 bg-blue-600 text-white font-medium text-sm leading-snug uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out w-full">Login</button>
                        <p class="text-sm font-light text-gray-500 dark:text-gray-400">
                            Don't have an account yet? <a href="<?= URLROOT . '/Authentification/registre' ?>" class="font-medium text-blue-500 hover:underline">Registre</a>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </section>

</body>
    <script src="https://kit.fontawesome.com/e3e5f279fe.js" crossorigin="anonymous"></script>
    <script src="<?= URLROOT . '/js/password.js"'; ?>" type="module"></script>
</html>


