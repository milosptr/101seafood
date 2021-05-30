<?php
  $products = json_decode(file_get_contents('products.json'));
  $populars = [(array)$products[1], (array)$products[2], (array)$products[3]];
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
    <?php include './common/header.php'; ?>
    <!-- display section -->
    <section class="display-section">
        <div class="container mx-auto">
            <div class="grid grid-cols-1 lg:grid-cols-2">
                <div class="display-section__content mb-11 lg:mb-0 lg:m-11">
                    <h1 class="font-bold text-black">More than <br> 20 years in seafood distribution business</h1>
                    <p class="fonts-source text-2xl text-light-black">As importer and distributor, 101 Seafood creates seafood value for our customers by staying ahead in terms of quality, sustainability, dependability and price</p>
                </div>
                <div class="display-section__content">
                    <div class="display-section__content__display-image">
                        <img src="img/display-image.svg" alt="display image" class="w-full">
                        <p class="text-center ">Agneta Guðmundur • Sales Manager @ 101 SeaFood</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="fish w-full">
            <div class="fish__one">
                <img src="img/fish1.svg" alt="fish1">
            </div>
            <div class="fish__two">
                <img src="img/fish2.svg" alt="fish1">
            </div>

        </div>
        <!-- underline -->
        <div class="line">

        </div>
    </section>
    <!-- map section -->
    <section class="map-section">
        <h1 class="font-bold text-black text-center">We deliver all over the world</h1>
        <div class="map-section__map">
            <img src="img/full-map.svg" alt="world map">
        </div>
    </section>

    <!-- product-section -->
    <section class="product-section relative">
        <div class="fish-top">
            <img src="img/fish-2-1.svg" alt="fish">
        </div>
        <div class="container mx-auto">
            <h1 class="font-bold text-black text-center mb-10">Products</h1>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-12 xl:gap-20 ">
              <?php foreach($populars as $popular): ?>
                <div class="product-section__card">
                    <div class="product-section__card__img">
                        <img src="img/products/<?php echo $popular['slug']; ?>.png" alt="product" class="w-full rounded">
                    </div>
                    <h6 class="text-2xl text-black font-bold my-4"><?php echo $popular['title']; ?></h6>
                    <p class="text-light-black mb-5 f-s-22"><?php echo substr($popular['description'],0, 140) . '...'; ?></p>
                    <a href="/product/<?php echo $popular['slug']; ?>" class="btn btn__primary w-56 h-14 rounded-sm relative z-50">Read More</a>
                </div>
              <?php endforeach; ?>
            </div>
        </div>
        <div class="fish-bottom">
            <img src="img/fish-2-2.svg" alt="fish">
        </div>
        <div class="fish-bottom-2">
            <img src="img/fish-2-3.svg" alt="fish">
        </div>
    </section>
    <div class="under-line">
        <div class="container mx-auto">
            <div class="under-line__long-line">

            </div>
        </div>
    </div>
    <!-- footer -->
    <?php include './common/footer.php'; ?>

    <!-- jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- alpine js -->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
</body>

</html>
