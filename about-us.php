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

    <!-- about us -->
    <section class="about-us-section relative">
        <div class="about-us-section__fish__left">
            <img src="img/about-fish-left-top.svg" alt="">
        </div>
        <div class="about-us-section__fish__right">
            <img src="img/about-fish-right-top.svg" alt="">
        </div>
        <div class="container mx-auto">
            <h1 class="font-bold text-black text-center mb-10 under-line">Family owned company, with 20-30 years experience in trading seafood.</h1>
            <h6>We are selling Icelandic Seafood all over the world, we deliver frozen, fresh, salted etc.</h6>
            <p class="about-us-section__des">We are not only selling fish from Iceland but we are sourcing also species from all over the world. We are a family owned company, with 20-30 years experience in trading seafood. We work closely with producers all over Iceland and all over
                the world. We are delivering fresh fish to Europe, Canada and the US everyday and shipping fresh and frozen fish buy containers every week. We are also offer fish processing service of the highest quality, we offer comprehensive service,
                from filleting, packaging, trimming, portoning and more.</p>
        </div>
    </section>
    <!-- Our sertificates -->
    <section class="about-us-section sertificates">
        <div class="container mx-auto">
            <h1 class="font-bold text-black text-center mb-10">Our sertificates</h1>
            <h6 class="under-line">we have them all. lorem ipsum filler text. this text should be also two rows long to match the one from above.</h6>
            <div class="flex justify-between flex-wrap lg:flex-nowrap about-line">
                <img src="img/pertner2.png" alt="partner" class="mb-5 mr-3">
                <img src="img/pertner1.png" alt="partner" class="mb-5 mr-3">
                <img src="img/pertner2.png" alt="partner" class="mb-5 mr-3">
            </div>
        </div>
        <div class="about-bottom-fiah-left">
            <img src="img/about-bottom1.svg" alt="">
        </div>
        <div class="about-bottom-fiah-right">
            <img src="img/about-bottom2.svg" alt="">
        </div>
    </section>
    <!-- footer -->
    <?php include './common/footer.php'; ?>


    <!-- jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- alpine js -->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
</body>

</html>
