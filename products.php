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
    <link rel="stylesheet" href="css/app.css">
</head>

<body>
    <!-- nav -->
    <?php include './common/header.php'; ?>

    <section class="popular-product">
        <div class="container mx-auto ">
            <h1 class="font-bold text-black text-center mb-5 sm:mb-10">Most popular products</h1>
            <h6 class="text-brown-light text-center">Here’s the selction of our most ordered products</h6>
            <!-- product list -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-12 xl:gap-20">
              <?php foreach($populars as $popular): ?>
                <a href="/product/<?php echo $popular['slug']; ?>" class="block">
                    <div class="popular-product__card">
                        <div class="popular-product__card__img">
                            <img src="/img/products/<?php echo $popular['slug']; ?>.png" onerror="this.src='/img/products/default.png'" class="w-full rounded">
                        </div>
                        <h6 class="text-2xl text-black font-bold my-4 text-center"><?php echo $popular['title']; ?></h6>
                        <p class="text-light-black mb-5 f-s-22 text-center"><?php echo substr($popular['description'], 0, 140) . '...'; ?></p>
                    </div>
                </a>
              <?php endforeach; ?>
            </div>
        </div>
    </section>
    <!-- product name -->
    <section class="product-name-section">
        <div class="container mx-auto ">
            <h1 class="font-bold text-black text-center mb-10">All our products</h1>
            <!-- product list -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-y-5 xl:gap-y-8 gap-x-12 xl:gap-x-20">
              <?php
                foreach ($products as $product):
                  $product = (array) $product;
              ?>
                  <a href="<?php echo 'product/'. $product['slug']; ?>" class="block">
                      <div class="popular-product__card">
                          <div class="popular-product__card__img p-8">
                              <img src="/img/products/<?php echo $product['slug']; ?>.png" onerror="this.src='/img/products/default.png'" alt="product fish" class="w-full rounded" />
                              <h6 class="product-name font-bold text-brown-light text-2xl text-center uppercase">
                                <?php echo $product['title']; ?>
                              </h6>
                          </div>
                      </div>
                  </a>
              <?php
                endforeach;
                ?>
            </div>
        </div>
    </section>

    <?php include './common/footer.php'; ?>

    <!-- jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- alpine js -->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
</body>

</html>
