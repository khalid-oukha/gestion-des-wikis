<!DOCTYPE html>
<html lang="en">

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
            <span class="text-primary-100 dark:text-orange">Wikis</span> - Management
        </h2>
        <a href="Wikis\addWiki" class="px-4 py-2 my-2 bg-orange rounded  text-white hover:bg-primary-100 focus:outline-none transition-colors">
            Add a Wiki
        </a>


        <div class="w-full py-2 overflow-hidden rounded-lg shadow-xs">
            <div class="w-full overflow-x-auto">
                <table class="w-full whitespace-no-wrap">
                    <thead>
                        <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                            <th class="px-4 py-3">user</th>
                            <th class="px-4 py-3">title</th>
                            <th class="px-1 py-3">description</th>
                            <th class="px-4 py-3">created_at</th>
                            <th class="px-4 py-3">status</th>
                            <th class="px-4 py-3">actions</th>

                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                        <?php foreach ($articles as $article) { ?>
                            
                            <tr class="text-gray-700 dark:text-gray-400">
                                <td class="px-4 py-3 text-sm">
                                    <?= $article->full_Name ?>
                                </td>
                                <td class="px-4 py-3 text-sm">
                                    <?= $article->title ?>
                                </td>
                                <td class="px-1 py-2 text-sm">

                                    <?php
                                    $description = $article->description;
                                    if (strlen($description) > 50) {
                                        $description = substr($description, 0, 50) . '...';
                                    }
                                    echo $description;
                                    ?> </td>
                                <td class="px-4 py-3 text-xs">
                                    <?php
                                    $createdAt = Carbon::parse($article->created_at);
                                    ?>
                                    <span class="px-2 py-1 font-semibold leading-tight text-gray-500 rounded-full dark:bg-green-700 dark:text-green-100">
                                        <?= $createdAt->diffForHumans() ?>
                                    </span>
                                </td>
                                <td class="px-4 py-3 text-xs">
                                    <?php
                                    $statusStyles = [
                                        'pending' => 'bg-blue-200 text-white',
                                        'archived' => 'bg-gray-300 text-white',
                                        'draft' => 'bg-red-400 text-white',
                                        'published' => 'bg-green-100 text-green-700'
                                    ];

                                    $status = $article->status;
                                    if (array_key_exists($status, $statusStyles)) {
                                        $styleClasses = $statusStyles[$status];
                                    ?>
                                        <span class="px-2 py-1 font-semibold leading-tight rounded-full <?= $styleClasses ?>">
                                            <?= $status ?>
                                        </span>
                                    <?php
                                    }
                                    ?>
                                </td>

                                <td class="px-4 py-3">
                                    <div class="flex items-center space-x-4 text-sm">
                                        <a href="Wikis/updateWiki/<?= $article->id ?>">
                                            <button class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray" aria-label="Edit">
                                                <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                                                    <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z"></path>
                                                </svg>
                                            </button>
                                        </a>
                                        <a href="Wikis/deleteWiki/<?= $article->id ?>" onclick="return confirm('Do you really want to Delete ?');">
                                            <button class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray" aria-label="Delete">
                                                <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                                                    <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd"></path>
                                                </svg>
                                            </button>
                                        </a>
                                        <?php
                                        if ($article->status == "published") :

                                        ?>
                                            <a href="Wikis/ArchiveWiki/<?= $article->id ?>" onclick="return confirm('Do you really want to Delete ?');">
                                                <span class="px-2 py-1 font-semibold leading-tight rounded-full  text-purple-600">
                                                    Archive
                                                </span>
                                            </a>
                                        <?php
                                        endif
                                        ?>
                                        <?php
                                        if ($article->status == "pending") :

                                        ?>
                                            <a href="Wikis/acceptWiki/<?= $article->id ?>" onclick="return confirm('Do you really want to Accept ?');">
                                                <span class="px-2 py-1 font-semibold leading-tight rounded-full  text-purple-600">
                                                    Accept
                                                </span>
                                            </a>
                                            <a href="Wikis/RejectWiki/<?= $article->id ?>" onclick="return confirm('Do you really want to Reject ?');">
                                                <span class="px-2 py-1 font-semibold leading-tight rounded-full  text-red-600">
                                                    Reject
                                                </span>
                                            </a>
                                        <?php
                                        endif
                                        ?>
                                        <?php
                                        if ($article->status == "archived") :

                                        ?>
                                            <a href="Wikis/acceptWiki/<?= $article->id ?>" onclick="return confirm('Do you really want to Accept ?');">
                                                <span class="px-2 py-1 font-semibold leading-tight rounded-full  text-purple-600">
                                                    unarchive
                                                </span>
                                            </a>
                                            <a href="Wikis/RejectWiki/<?= $article->id ?>" onclick="return confirm('Do you really want to Reject ?');">
                                                <span class="px-2 py-1 font-semibold leading-tight rounded-full  text-red-600">
                                                    draft
                                                </span>
                                            </a>
                                        <?php
                                        endif
                                        ?>
                                        <?php
                                        if ($article->status == "draft") :

                                        ?>
                                            <a href="Wikis/acceptWiki/<?= $article->id ?>" onclick="return confirm('Do you really want to Accept ?');">
                                                <span class="px-2 py-1 font-semibold leading-tight rounded-full  text-purple-600">
                                                    accept
                                                </span>
                                            </a>

                                        <?php
                                        endif
                                        ?>


                                    </div>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>

        </div>
    </main>

</body>
<script src="../path/to/flowbite/dist/datepicker.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/datepicker.min.js"></script>
<script src="public/assets/js/navigation.js"></script>
<script src="public/assets/js/theme.js"></script>

</html>