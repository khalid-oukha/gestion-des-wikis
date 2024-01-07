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
    <div class="relative flex min-h-screen flex-col justify-center overflow-hidden bg-gray-50 py-6 sm:py-12">
        <div class="w-full items-center mx-auto max-w-screen-lg">
            <div class="group grid w-full grid-cols-2">
                <div>
                    <div class="pr-12">
                        <p class="peer mb-6 text-gray-400">
                            Simply Air Conditioning London are fixed system heating and air conditioning installation specialists. Because we’ve tested all heating and air conditioning unit manufacturers before using them there are no hidden surprises for our customers. We only supply air conditioning units from the leading manufacturers so any system we fit will be of the highest quality. We also thoroughly test every type of unit before supplying..
                        </p>
                        <p class="mb-6 text-gray-400">
                            We also provide tailored Air Conditioning installation packages. The Air Conditioning systems we install are all inverter driven therefor are energy efficient, stylish & silent both providing cooling and heating. At Zero Degree AC Limited we only use the best brands.
                        </p>
                        <h3 class="mb-4 font-semibold text-xl text-gray-400">Conditioning installation packages</h3>
                        <ul role="list" class="marker:text-sky-400 list-disc pl-5 space-y-3 text-slate-500">
                            <li>5 cups chopped Porcini mushrooms</li>
                            <li>1/2 cup of olive oil</li>
                            <li>3lb of celery</li>
                        </ul>
                    </div>
                </div>
                <div class="pr-16 relative flex flex-col before:block before:absolute before:h-1/6 before:w-4 before:bg-blue-500 before:bottom-0 before:right-0 before:rounded-lg  before:transition-all group-hover:before:bg-orange-300 overflow-hidden">
                    <div class="absolute top-0 right-0 bg-blue-500 w-4/6 px-12 py-14 flex flex-col justify-center rounded-xl group-hover:bg-sky-600 transition-all ">
                        <span class="block mb-10 font-bold group-hover:text-orange-300">HERE WE ARE</span>
                        <h2 class="text-white font-bold text-3xl">
                            What started as a tiny team mostly dedicated to Air Quality has grown.
                        </h2>
                    </div>
                    <a class="font-bold text-sm flex mt-2 mb-8 items-center gap-2" href="">
                        <span>MORE ABOUT US</span>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                        </svg>
                    </a>
                    <div class="rounded-xl overflow-hidden">
                        <img src="https://picsum.photos/800/800" alt="">
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