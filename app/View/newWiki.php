<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>wikis management</title>
    <link rel="stylesheet" href="<?= URL_DIR ?>public/assets/dist/output.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <script src="https://cdn.tiny.cloud/1/tae69tv15q8646ee9ytsznj2x6mphimtyeq9b9nhu5iyo6jg/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>

    <script>
        tinymce.init({
            selector: '#mytextarea'
        });
    </script>

</head>

<body class="bg-gray-300 dark:bg-gray-900">
    <?php

    include "../app/View/includes/Dash_navigation.php"; ?>
    <main id="main" class="pt-16 h-screen px-28">
        <h2 class="my-6 text-4xl font-semibold text-center font-poppins tracking-widest text-gray-700 dark:text-gray-200">
            <span class="text-primary-100 dark:text-orange">ADD </span> A NEW wiki
        </h2>
        <div class="w-full overflow-hidden rounded-lg shadow-xs">
            <div class="w-full overflow-x-auto">

                <div class="bg-gray-100 dark:bg-gray-800 transition-colors duration-300">
                    <div class="container mx-auto p-4">
                        <div class="bg-white dark:bg-gray-700 shadow rounded-lg p-6">
                            <h1 class="text-xl font-semibold mb-4 text-gray-900 dark:text-gray-100">wiki Data</h1>
                            <p class="text-gray-600 dark:text-gray-300 mb-6">Here you can add wiki's informations.</p>
                            <form action="insertWiki" method="POST">
                                <select name="categorie_id" class="p-2 px-20 mb-2 rounded border dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                                    <?php
                                    foreach ($categories as $categorie) { ?>
                                        <option value="<?= $categorie['id'] ?>"><?= $categorie['NAME'] ?></option>
                                    <?php
                                    }
                                    ?>
                                </select>

                                <div class="mb-4">
                                    <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Title</label>
                                    <input type="text" placeholder="your title here" name="title" class="border p-2 rounded w-full">
                                </div>
                                <div class="md:grid-cols-2 gap-4 mb-4">

                                    <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description</label>
                                    <textarea name="description" id="message" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Write your thoughts here..."></textarea>

                                </div>
                                <div class="md:grid-cols-2 gap-4 mb-4">
                                    <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">article</label>
                                    <textarea name="content" id="mytextarea"></textarea>
                                </div>
                                <div class="mb-4">

                                    <button type="submit" class="px-4 py-2 bg-primary-100 rounded  text-white hover:bg-blue-600 focus:outline-none transition-colors">
                                        Confirm And Submit
                                    </button>

                                    <button type="button" class="px-4 py-2 bg-orange rounded  text-white hover:bg-blue-600 focus:outline-none transition-colors">
                                        Cancel
                                    </button>

                            </form>
                        </div>
                    </div>

                </div>

            </div>

        </div>
    </main>

</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/datepicker.min.js"></script>
<script src="<?= URL_DIR ?>public/assets/js/navigation.js"></script>
<script src="<?= URL_DIR ?>public/assets/js/theme.js"></script>

</html>