<!DOCTYPE html>
<html lang="en">
<?php
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>wikis management</title>
    <link rel="stylesheet" href="<?= URL_DIR ?>public/assets/dist/output.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>



</head>

<body class="bg-gray-300 dark:bg-gray-900">
    <?php

    use Carbon\Carbon;

    include "../app/View/includes/Dash_navigation.php"; ?>
    <main id="main" class=" pt-16 px-28">
        <h2 class="my-6 text-4xl font-semibold text-center font-poppins tracking-widest text-gray-700 dark:text-gray-200">
            <span class="text-primary-100 dark:text-orange">UPDATE</span> - CATEGORIE
        </h2>

        <form  action="\wikis\categories\submitUpdateCategorie" method="post">
            <button type="submit" class="px-4 py-2 my-2 bg-orange rounded  text-white hover:bg-primary-100 focus:outline-none transition-colors">
                SUBMIT
            </button>

            <div class="overflow-x-auto dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                <table class="w-full border-collapse border border-gray-300 dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                    <thead>
                        <tr class="bg-gray-200">
                            <th class="border-y border-gray-100 bg-gray-50/50 p-2 dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800"> UPDATE  Categorie</th>
                        </tr>
                    </thead>
                    <tbody id="attendees-list">
                        <tr>

                            <td class="border border-gray-300 px-3 py-2 dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                            <input class="p-2 px-10 rounded border dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800" name="id" value="<?=$categories['id']?>" type="hidden" />
   
                            <input class="p-2 px-10 rounded border dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800" name="NAME" value="<?= $categories['NAME']?>" type="text" />
                            </td>
                        </tr>

                    </tbody>
                </table>

            </div>
        </form>
    </main>

</body>
<script src="../path/to/flowbite/dist/datepicker.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/datepicker.min.js"></script>
<script src="public/assets/js/navigation.js"></script>
<script src="public/assets/js/theme.js"></script>

</html>