<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

$pattern_uri = '/' . preg_quote($pattern_document_root, '/') . '(.*)$/';

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="row type-3188">
    <!-- Logo -->
    <div class="col-sm-3 logo">
        <img src="3188-screenshot.jpg" alt="Logo">
    </div>

    <!-- Navigation -->
    <nav class="col-sm-6 Navigation ">
        <div id="Home" class="hovernav">
            <a id="lightHome" href="#">Home <span></span></a>

            <div class="dropdown" id="dropdownHome">
                <a href="#">Main Home</a>
                <a href="#">Organic Food Store</a>
                <a href="#">Products Home</a>
                <a href="#">Divided Showcase</a>
                <a href="#">Animated Showcase</a>
                <a href="#">Cosmetics Home</a>
                <a href="#">Tea Shop Home</a>
                <a href="#">Organic Pasta</a>
            </div>
        </div>
        <div id="Pages" class="hovernav">
            <a id="lightPages" href="#">Pages <span></span></a>
            <div class="dropdown" id="dropdownPages">
                <a href="#">Main Home</a>
                <a href="#">Organic Food Store</a>
                <a href="#">Products Home</a>
                <a href="#">Divided Showcase</a>
                <a href="#">Animated Showcase</a>
                <a href="#">Cosmetics Home</a>
                <a href="#">Tea Shop Home</a>
                <a href="#">Organic Pasta</a>
            </div>
        </div>
        <div id="Shop" class="focusnav">
            <a id="lightShop" href="#">Shop</a>
            <span class="vuong"></span>
        </div>
        <div class="row labala">
            <div class="col-sm-2 column">
                <h4>Shop Types</h4>
                <a href="#">Right Sidebar</a>
                <a href="#">Left Sidebar</a>
                <a href="#">Shop Slider</a>
                <a href="#">Info Bellow</a>
                <a href="#">Info Bellow Centered</a>
                <a href="#">Single Category</a>
            </div>

            <div class="col-sm-2 column">
                <h4>Shop Layouts</h4>
                <a href="#">Three Columns Grid</a>
                <a href="#">Four Columns Grid</a>
                <a href="#">Four Columns Wide</a>
                <a href="#">Five Columns Wide</a>
                <a href="#">Six Columns Wide</a>
            </div>

            <div class="col-sm-2 column">
                <h4>Product Types</h4>
                <a href="#">Standard Product</a>
                <a href="#">Variable Product</a>
                <a href="#">External Product</a>
                <a href="#">Grouped Product</a>
                <a href="#">Downloadable Product</a>
                <a href="#">Virtual Product</a>
                <a href="#">On Sale Product</a>
                <a href="#">Sold Out Product</a>
                <a href="#">New Product</a>
            </div>

            <div class="col-sm-2 column">
                <h4>Shop Pages</h4>
                <a href="#">My Account</a>
                <a href="#">Cart</a>
                <a href="#">Checkout</a>
                <a href="#">Wishlist</a>
                <a href="#">Order Tracking</a>
            </div>
        </div>
        <div id="Store" class="focusnav">
            <a id="lightStore" href=" #">Store</a>
            <span class="vuong"></span>
            <!-- <div class="dropdown" id="dropdownStore">
                <a href="#">Main Home</a>
                <a href="#">Organic Food Store</a>
                <a href="#">Products Home</a>
                <a href="#">Divided Showcase</a>
                <a href="#">Animated Showcase</a>
                <a href="#">Cosmetics Home</a>
                <a href="#">Tea Shop Home</a>
                <a href="#">Organic Pasta</a>
            </div> -->
        </div>
        <div id="Blog" class="hovernav">
            <a id="lightBlog" href="#">Blog <span></span></a>

            <div class="dropdown" id="dropdownBlog">
                <a href="#">Main Home</a>
                <a href="#">Organic Food Store</a>
                <a href="#">Products Home</a>
                <a href="#">Divided Showcase</a>
                <a href="#">Animated Showcase</a>
                <a href="#">Cosmetics Home</a>
                <a href="#">Tea Shop Home</a>
                <a href="#">Organic Pasta</a>
            </div>
        </div>
        <div id="Landing" class="hovernav">
            <a id="lightLanding" href="#">Landing <span></span></a>

            <div class="dropdown" id="dropdownLanding">
                <a href="#">Main Home</a>
                <a href="#">Organic Food Store</a>
                <a href="#">Products Home</a>
                <a href="#">Divided Showcase</a>
                <a href="#">Animated Showcase</a>
                <a href="#">Cosmetics Home</a>
                <a href="#">Tea Shop Home</a>
                <a href="#">Organic Pasta</a>
            </div>
        </div>
    </nav>
    <!-- Icons -->
    <div class="col-sm-3 icons">
        <div class="login">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-lock"
                viewBox="0 0 16 16">
                <path
                    d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2m3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2M5 8h6a1 1 0 0 1 1 1v5a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V9a1 1 0 0 1 1-1" />
            </svg>
            <a href="#">Login</a>
        </div>
        <div class="cart">
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-bag"
                viewBox="0 0 16 16">
                <path
                    d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1m3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1z" />
            </svg>
            <span>0</span>
        </div>
        <div class="pointhover">
            <div class="gridpoint">
                <div class="dot">•</div>
                <div class="dot">•</div>
                <div class="dot">•</div>
                <div class="dot">•</div>
                <div class="dot">•</div>
                <div class="dot">•</div>
                <div class="dot">•</div>
                <div class="dot">•</div>
                <div class="dot">•</div>
            </div>
        </div>
    </div>
</div>
<div class="Healthy">
    <h1>Healthy</h1>
    <div class="breadcrumbs">
        <a href="#">Home</a> \ <span>Healthy</span>
    </div>
</div>