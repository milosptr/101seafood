<?php
  $request = $_SERVER['REQUEST_URI'];
  $request = str_replace('\/product/', '', $request);
  echo $request;
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- tailwind css -->
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <!-- custome css -->
    <link rel="stylesheet" href="/css/app.css">
</head>

<body>
    <!-- nav -->
    <header class="header">
        <div class="container flex flex-wrap items-center mx-auto">
            <div class="flex-1 flex justify-between items-center">
                <a href="#" class="text-xl"><img src="/img/logo.svg" alt="logo"></a>
            </div>

            <label for="menu-toggle" class="pointer-cursor md:hidden block">
              <svg class="fill-current text-gray-900"
                xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
                <title>menu</title>
                <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
              </svg>
            </label>
            <input class="hidden" type="checkbox" id="menu-toggle" />

            <div class="hidden md:flex md:items-center md:w-auto w-full" id="menu">
                <nav>
                    <ul class="md:flex items-center justify-between text-base text-gray-700 pt-4 md:pt-0 header__nav-list">
                        <li><a class="md:p-4 py-3 px-0 block " href="index.html">HOME</a></li>
                        <li><a class="md:p-4 py-3 px-0 block" href="about-us.html">ABOUT US</a></li>
                        <li><a class="md:p-4 py-3 px-0 block active" href="product.html">PRODUCTS</a></li>
                        <li><a class="md:p-4 py-3 px-0 block md:mb-0 mb-2" href="#">SERVICE</a></li>
                        <li><a class="md:p-4 py-3 px-0 block md:mb-0 mb-2" href="#">CONTACT</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>

    <!-- product-deatils -->
    <section class="product-details-section">
        <div class="container mx-auto">
            <div class="grid grid-cols-1 lg:grid-cols-2">
                <div class="flex-1">
                    <h1 class="font-bold text-black mb-2">Atlantic Cod</h1>
                    <h6 class="font-bold text-brown-light text-2xl">ground-fish</h6>
                    <span class="line"></span>
                    <p class="product-description">The Atlantic cod is one of the best-studied marine fishes and most well known stories of marine fisheries management in the world. It’s common size ranges between 40-90 cm and common weight is around 2-10 kg. The species is parcticularly
                        well known for its white, flaky flesh.</p>
                    <div class="flex items-center">
                        <div class="flex items-center mr-12">
                            <svg width="41" height="22" viewBox="0 0 41 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M23.6875 0C17.4375 0 12 3.8125 8.9375 7L2.875 2.5C2.625 2.3125 2.375 2.25 2.125 2.25C1.4375 2.25 0.8125 2.75 1 3.5L2.6875 11L1 18.5625C0.8125 19.3125 1.4375 19.8125 2.125 19.8125C2.375 19.8125 2.625 19.75 2.875 19.5625L8.9375 15.0625C12 18.25 17.4375 22 23.6875 22C33.25 22 41 13.25 41 11C41 8.8125 33.25 0 23.6875 0ZM23.6875 20C18.3125 20 13.3125 16.75 10.375 13.6875L9.1875 12.375L7.75 13.4375L3.5 16.625L4.625 11.4375L4.75 11.0625L4.625 10.625L3.5 5.4375L7.75 8.625L9.1875 9.6875L10.375 8.375C13.3125 5.3125 18.3125 2 23.6875 2C31.5625 2 38.1875 9 38.9375 11C38.1875 13.0625 31.5625 20 23.6875 20ZM29 9.5C28.125 9.5 27.5 10.1875 27.5 11C27.5 11.875 28.125 12.5 29 12.5C29.8125 12.5 30.5 11.875 30.5 11C30.5 10.1875 29.8125 9.5 29 9.5Z" fill="#C4D9DE"/>
                                </svg>
                            <p class="text-light-black f-s-22 ml-4">40-90 cm</p>
                        </div>
                        <div class="flex items-center">
                            <svg width="36" height="29" viewBox="0 0 36 29" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M35.1719 21.0625L29.2109 11.4375C29.0469 11.1641 28.7734 11 28.5 11C28.1719 11 27.8984 11.1641 27.7344 11.4375L21.7734 21.0625C21.5547 21.3359 21.4453 21.7188 21.5 22.1016C21.7734 25.7109 24.7812 28.5 28.5 28.5C32.1641 28.5 35.1719 25.7109 35.4453 22.1016C35.5 21.7188 35.3906 21.3359 35.1719 21.0625ZM28.4453 13.5703L33.4219 21.5H23.5234L28.4453 13.5703ZM28.5 26.75C26.2031 26.75 24.2891 25.3281 23.5234 23.25H33.4219C32.7109 25.2734 30.7422 26.75 28.5 26.75ZM29.4297 9.41406L29.7031 8.59375C29.8125 8.375 29.7031 8.10156 29.4297 8.04688L21.2266 5.3125C21.3906 4.875 21.5 4.49219 21.5 4C21.5 2.08594 19.9141 0.5 18 0.5C16.3594 0.5 15.0469 1.59375 14.6094 3.07031L7.0625 0.554688C6.84375 0.5 6.57031 0.609375 6.51562 0.828125L6.24219 1.64844C6.13281 1.86719 6.24219 2.14062 6.51562 2.19531L14.6094 4.92969C14.9375 6.13281 15.8672 7.0625 17.125 7.39062V26.75H6.1875C5.91406 26.75 5.75 26.9688 5.75 27.1875V28.0625C5.75 28.3359 5.91406 28.5 6.1875 28.5H18.4375C18.6562 28.5 18.875 28.3359 18.875 28.0625V7.39062C19.3125 7.28125 19.75 7.0625 20.1328 6.78906L28.8828 9.6875C29.1016 9.79688 29.375 9.63281 29.4297 9.41406ZM18 5.75C17.0156 5.75 16.25 4.98438 16.25 4C16.25 3.07031 17.0156 2.25 18 2.25C18.9297 2.25 19.75 3.07031 19.75 4C19.75 4.98438 18.9297 5.75 18 5.75ZM14.4453 15.1016C14.5 14.7188 14.3906 14.3359 14.1719 14.0625L8.21094 4.4375C8.04688 4.16406 7.77344 4 7.5 4C7.17188 4 6.89844 4.16406 6.73438 4.4375L0.773438 14.0625C0.554688 14.3359 0.445312 14.7188 0.5 15.1016C0.773438 18.7109 3.78125 21.5 7.5 21.5C11.1641 21.5 14.1719 18.7109 14.4453 15.1016ZM7.44531 6.57031L12.4219 14.5H2.52344L7.44531 6.57031ZM2.52344 16.25H12.4219C11.7109 18.2734 9.74219 19.75 7.5 19.75C5.20312 19.75 3.28906 18.3281 2.52344 16.25Z" fill="#C4D9DE"/>
                                </svg>
                            <p class="text-light-black f-s-22 ml-4">2-10kg</p>
                        </div>
                    </div>

                </div>
                <div class="flex-1">
                    <div class="iceland-bg">
                        <div class="product-details-section__img flex items-center justify-center">
                            <img src="/img/product-fish.png" alt="product fish">
                        </div>
                    </div>
                </div>
                <!--  -->
                <div class="flex flex-col sm:flex-row justify-between col-span-full border-bottom">
                    <div class="product-category flex mb-5 sm:mb-0">
                        <div class="product-category__list">
                            <p>msc</p>
                            <span class="correct"></span>
                        </div>
                        <div class="product-category__list">
                            <p>msc</p>
                            <span class="correct"></span>
                        </div>
                        <div class="product-category__list">
                            <p>msc</p>
                            <span class="correct"></span>
                        </div>
                        <div class="product-category__list rejected">
                            <p>msc</p>
                            <span class="not-correct"></span>
                        </div>
                    </div>
                    <div class="product-category__text mb-5 sm:mb-0">
                        <div class="product-category__text__top mb-6">
                            <p class="text-light-black text-base font-bold">low season</p>
                            <p class="text-light-black text-xl">June - August</p>
                        </div>
                        <div class="product-category__text__top">
                            <p class="text-light-black text-base font-bold">High season</p>
                            <p class="text-light-black text-xl">Septembar - May</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- other product -->
    <section class="other-product">
        <div class="container mx-auto">
            <h1 class="font-bold text-black mb-2">Atlantic Cod</h1>
            <p class="other-product-des">Iceland has created one of the most modern and competitive seafood industries in the world, based on sustainable harvest and protection of the marine ecosystem. The fisheries.</p>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-y-5 xl:gap-y-8 gap-x-12 xl:gap-x-20">
                <a href="#" class="block">
                    <div class="popular-product__card">
                        <div class="popular-product__card__img p-8">
                            <img src="/img/product-fish.png" alt="product" class="w-full rounded">
                            <h6 class="product-name font-bold text-brown-light text-2xl text-center">PRODUCT NAME</h6>
                        </div>
                    </div>
                </a>
                <a href="#" class="block">
                    <div class="popular-product__card">
                        <div class="popular-product__card__img p-8">
                            <img src="/img/product-fish.png" alt="product" class="w-full rounded">
                            <h6 class="product-name font-bold text-brown-light text-2xl text-center">PRODUCT NAME</h6>
                        </div>
                    </div>
                </a>
                <a href="#" class="block">
                    <div class="popular-product__card">
                        <div class="popular-product__card__img p-8">
                            <img src="/img/product-fish.png" alt="product" class="w-full rounded">
                            <h6 class="product-name font-bold text-brown-light text-2xl text-center">PRODUCT NAME</h6>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </section>



    <!-- jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- alpine js -->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
</body>

</html>
