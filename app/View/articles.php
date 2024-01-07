<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
    <link rel="stylesheet" href="public/assets/dist/output.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body class="dark:bg-gray-900">
    <?php
    include '../app/View/includes/navbar.php';
    ?>
    <div class="overflow-x-hidden bg-gray-100">


        <div class="px-6 py-8 dark:bg-gray-900">
            <div class="container flex justify-between mx-auto">
                <div class="w-full lg:w-8/12">
                    <div class="flex items-center justify-between">
                        <h2 class="text-xl font-bold text-gray-700 md:text-2xl dark:text-neutral-50">Articels</h2>
                        <form class="flex items-center">
                            <label for="simple-search" class="sr-only">Search Match</label>
                            <div class="relative w-full">
                                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                    <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                                <input type="text" id="searchinput" class="block w-full p-2 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Search For Match" required="">
                            </div>
                        </form>
                    </div>
                    <div class="mt-6 ">
                        <div class="max-w-4xl px-10 py-6 mx-auto bg-white rounded-lg shadow-md dark:bg-gray-800 ">
                            <div class="flex items-center justify-between"><span class="font-light  text-gray-600">Jun 1,
                                    2020</span><a href="#" class="px-2 py-1 font-bold text-gray-100 bg-gray-600 rounded hover:bg-gray-500">Laravel</a>
                            </div>
                            <div class="mt-2"><a href="#" class="text-2xl font-bold dark:text-neutral-50 text-gray-700 hover:underline">Build
                                    Your New Idea with Laravel Freamwork.</a>
                                <p class="mt-2 dark:text-neutral-50 text-gray-600">Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                                    Tempora expedita dicta totam aspernatur doloremque. Excepturi iste iusto eos enim
                                    reprehenderit nisi, accusamus delectus nihil quis facere in modi ratione libero!</p>
                            </div>
                            <div class="flex items-center justify-between mt-4"><a href="#" class="text-blue-500 dark:text-neutral-50 hover:underline ">Read more</a>
                                <div><a href="#" class="flex items-center"><img src="https://images.unsplash.com/photo-1492562080023-ab3db95bfbce?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=731&amp;q=80" alt="avatar" class="hidden object-cover w-10 h-10 mx-4 rounded-full sm:block">
                                        <h1 class="font-bold text-gray-700 hover:underline dark:text-neutral-50">Alex John</h1>
                                    </a></div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="hidden w-4/12 -mx-8 lg:block">
                    <div class="px-8">
                        <h1 class="mb-4 text-xl font-bold dark:text-neutral-50 text-gray-700">Authors</h1>
                        <div class="flex flex-col max-w-sm px-6 py-4 mx-auto bg-white rounded-lg shadow-md dark:bg-gray-800">
                            <ul class="-mx-4">
                                <li class="flex items-center"><img src="https://images.unsplash.com/photo-1492562080023-ab3db95bfbce?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=731&amp;q=80" alt="avatar" class="object-cover w-10 h-10 mx-4 rounded-full">
                                    <p><a href="#" class="mx-1 font-bold text-gray-700 hover:underline dark:text-neutral-50">Alex John</a><span class="text-sm font-light text-gray-700 dark:text-neutral-50">Created 23 Posts</span></p>
                                </li>
                                <li class="flex items-center mt-6"><img src="https://images.unsplash.com/photo-1464863979621-258859e62245?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=333&amp;q=80" alt="avatar" class="object-cover w-10 h-10 mx-4 rounded-full">
                                    <p><a href="#" class="mx-1 font-bold text-gray-700 hover:underline dark:text-neutral-50">Jane Doe</a><span class="text-sm font-light text-gray-700 dark:text-neutral-50">Created 52 Posts</span></p>
                                </li>
                                <li class="flex items-center mt-6"><img src="https://images.unsplash.com/photo-1531251445707-1f000e1e87d0?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=281&amp;q=80" alt="avatar" class="object-cover w-10 h-10 mx-4 rounded-full">
                                    <p><a href="#" class="mx-1 font-bold text-gray-700 hover:underline dark:text-neutral-50">Lisa Way</a><span class="text-sm font-light text-gray-700 dark:text-neutral-50">Created 73 Posts</span></p>
                                </li>
                                <li class="flex items-center mt-6"><img src="https://images.unsplash.com/photo-1500757810556-5d600d9b737d?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=735&amp;q=80" alt="avatar" class="object-cover w-10 h-10 mx-4 rounded-full">
                                    <p><a href="#" class="mx-1 font-bold text-gray-700 hover:underline dark:text-neutral-50">Steve Matt</a><span class="text-sm font-light text-gray-700 dark:text-neutral-50">Created 245 Posts</span></p>
                                </li>
                                <li class="flex items-center mt-6"><img src="https://images.unsplash.com/photo-1502980426475-b83966705988?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=373&amp;q=80" alt="avatar" class="object-cover w-10 h-10 mx-4 rounded-full">
                                    <p><a href="#" class="mx-1 font-bold text-gray-700 hover:underline dark:text-neutral-50">Khatab
                                            Wedaa</a><span class="text-sm font-light text-gray-700 dark:text-neutral-50">Created 332 Posts</span>
                                    </p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="px-8 mt-10">
                        <h1 class="mb-4 text-xl font-bold text-gray-700 dark:text-neutral-50">Categories</h1>
                        <div class="flex flex-col max-w-sm px-4 py-6 mx-auto bg-white rounded-lg shadow-md dark:bg-gray-800">
                            <ul>
                                <li><a href="#" class="mx-1 font-bold text-gray-700 hover:text-gray-600 hover:underline dark:text-neutral-50">-
                                        AWS</a></li>
                                <li class="mt-2"><a href="#" class="mx-1 font-bold text-gray-700 hover:text-gray-600 hover:underline dark:text-neutral-50">-
                                        Laravel</a></li>
                                <li class="mt-2"><a href="#" class="mx-1 font-bold text-gray-700 hover:text-gray-600 hover:underline dark:text-neutral-50">- Vue</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="px-8 mt-10">
                        <h1 class="mb-4 text-xl font-bold text-gray-700 dark:text-neutral-50">Recent Post</h1>
                        <div class="flex flex-col max-w-sm px-8 py-6 mx-auto bg-white rounded-lg shadow-md dark:bg-gray-800">
                            <div class="flex items-center justify-center"><a href="#" class="px-2 py-1 text-sm text-green-100 bg-gray-600 rounded hover:bg-gray-500 dark:text-neutral-50">Laravel</a>
                            </div>
                            <div class="mt-4"><a href="#" class="text-lg font-medium text-gray-700 hover:underline dark:text-neutral-50">Build
                                    Your New Idea with Laravel Freamwork.</a></div>
                            <div class="flex items-center justify-between mt-4">
                                <div class="flex items-center"><img src="https://images.unsplash.com/photo-1492562080023-ab3db95bfbce?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=731&amp;q=80" alt="avatar" class="object-cover w-8 h-8 rounded-full"><a href="#" class="mx-3 text-sm text-gray-700 hover:underline dark:text-neutral-50">Alex John</a></div><span class="text-sm font-light text-gray-600 dark:text-neutral-50">Jun 1, 2020</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <?php include "../app/View/includes/footer.php" ?>

</body>
<script src="https://code.jquery.com/jquery-3.7.0.js"></script>
<script src="public/assets/js/navbar.js"></script>
<script src="public/assets/js/searchByDate.js"></script>
<script src="public/assets/js/liveSearch.js"></script>
<script src="public/assets/js/theme.js"></script>
<script src="public/assets/js/home.js"></script>

</html>