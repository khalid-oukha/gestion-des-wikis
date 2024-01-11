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
                    <div id="articleContainer">
                        <?php
                        foreach ($wikis as $wiki) :
                        ?>
                            <div class="mt-6 ">
                                <div class="max-w-4xl px-10 py-6 mx-auto bg-white rounded-lg shadow-md dark:bg-gray-800 ">
                                    <div class="flex items-center justify-between"><span class="font-light  text-gray-600"><?= $wiki['created_at'] ?>
                                        </span><a href="#" class="px-2 py-1 font-bold text-gray-100 bg-gray-600 rounded hover:bg-gray-500"><?= $wiki['NAME'] ?></a>
                                    </div>
                                    <div class="mt-2"><a href="#" class="text-2xl font-bold dark:text-neutral-50 text-gray-700 hover:underline">Build
                                            <?= $wiki['title'] ?></a>
                                        <p class="mt-2 dark:text-neutral-50 text-gray-600"><?= $wiki['description'] ?></p>
                                    </div>
                                    <div class="flex items-center justify-between mt-4"><a href="#" class="text-blue-500 dark:text-neutral-50 hover:underline ">Read more</a>
                                        <div><a href="#" class="flex items-center"><img src="<? ?>" alt="avatar" class="hidden object-cover w-10 h-10 mx-4 rounded-full sm:block">
                                                <h1 class="font-bold text-gray-700 hover:underline dark:text-neutral-50"><?= $wiki['full_Name'] ?></h1>
                                            </a></div>
                                    </div>
                                </div>
                            </div>
                        <?php
                        endforeach;
                        ?>
                    </div>
                </div>
                <div class="hidden w-4/12 -mx-8 lg:block">
                    <div class="px-8">
                        <h1 class="mb-4 text-xl font-bold dark:text-neutral-50 text-gray-700">Authors</h1>
                        <div class="flex flex-col max-w-sm px-6 py-4 mx-auto bg-white rounded-lg shadow-md dark:bg-gray-800">
                            <ul class="-mx-4">
                                <?php
                                foreach ($topauthors as $author) :
                                ?>
                                    <li class="flex items-center"><img src="https://images.unsplash.com/photo-1492562080023-ab3db95bfbce?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=731&amp;q=80" alt="avatar" class="object-cover w-10 h-10 mx-4 rounded-full">
                                        <p><a href="#" class="mx-1 font-bold text-gray-700 hover:underline dark:text-neutral-50"><?= $author->full_Name ?></a><span class="text-sm font-light text-gray-700 dark:text-neutral-50">Created <?= $author->number_wikis ?> Articles</span></p>
                                    </li>
                                <?php
                                endforeach;
                                ?>
                            </ul>
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
<script src="<?= URL_DIR ?>public/assets/js/liveSearch.js"></script>
<script src="public/assets/js/theme.js"></script>
<script src="public/assets/js/home.js"></script>

</html>