<?php

require('partials/head.view.php');

$previous = "javascript:history.go(-1)";
if (isset($_SERVER['HTTP_REFERER'])) {
    $previous = $_SERVER['HTTP_REFERER'];
}

?>

<section class="bg-white ">
    <div class="container flex items-center min-h-screen px-6 py-12 mx-auto">
        <div>
            <p class="text-sm font-medium text-blue-500 ">403 error</p>
            <h1 class="mt-3 text-2xl font-semibold text-gray-800  md:text-3xl">Unauthorized Access</h1>
            <p class="mt-4 text-gray-500 ">Sorry, you do not have permission to access this page.</p>

            <div class="flex items-center mt-6 gap-x-3">
                <a href="<?= $previous ?>">
                    <button class="flex items-center justify-center w-1/2 px-5 py-2 text-sm text-gray-700 transition-colors duration-200 bg-white border rounded-lg gap-x-2 sm:w-auto hover:bg-gray-100 ">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 rtl:rotate-180">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 15.75L3 12m0 0l3.75-3.75M3 12h18" />
                        </svg>

                        Go Back
                    </button>
                </a>
                <a href="/">
                    <button class="w-1/2 px-5 py-2 text-sm tracking-wide text-white transition-colors duration-200 bg-blue-500 rounded-lg shrink-0 sm:w-auto hover:bg-blue-600">
                        Take me home
                    </button>
                </a>
            </div>
        </div>
    </div>
</section>

<?php require('partials/footer.view.php') ?>