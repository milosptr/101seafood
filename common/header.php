<?php
  $url = $_SERVER['REQUEST_URI'];

  $isHomepage = strlen($url) === 1 ? 'active' : '';
  $isAboutUs = strpos($url, 'about-us') > 0 ? 'active' : '';
  $ispProducts = strpos($url, 'product') > 0 ? 'active' : '';
  $isServices = strpos($url, 'services') > 0 ? 'active' : '';
  $isContact = strpos($url, 'contact') > 0 ? 'active' : '';
?>
<header class="header">
    <div class="container flex flex-wrap items-center mx-auto">
        <div class="flex-1 flex justify-between items-center">
            <a href="/" class="text-xl"><img src="/img/logo.svg" alt="logo"></a>
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
                    <li><a class="<?php echo $isHomepage; ?> md:p-4 py-3 px-0 block" href="/">HOME</a></li>
                    <li><a class="<?php echo $isAboutUs; ?> md:p-4 py-3 px-0 block" href="/about-us">ABOUT US</a></li>
                    <li><a class="<?php echo $ispProducts; ?> md:p-4 py-3 px-0 block" href="/products">PRODUCTS</a></li>
                    <!-- <li><a class="<?php echo $isServices; ?> md:p-4 py-3 px-0 block md:mb-0 mb-2" href="/service">SERVICE</a></li> -->
                    <li><a class="<?php echo $isContact; ?> md:p-4 py-3 px-0 block md:mb-0 mb-2" href="/contact">CONTACT</a></li>
                </ul>
            </nav>
        </div>
    </div>
</header>
