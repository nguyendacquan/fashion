<!doctype html>
<html class="no-js" lang="zxx">


<!-- Mirrored from wphix.com/html/ecomart-prev/ecomart/shop.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 16 Nov 2023 14:04:23 GMT -->

<head>
   <meta charset="utf-8">
   <meta http-equiv="x-ua-compatible" content="ie=edge">
   <title>Ecomart - Fashion eCommerce HTML Template</title>
   <meta name="description" content="">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <!-- Place favicon.ico in the root directory -->
   <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
   <!-- CSS here -->
   <link rel="stylesheet" href="assets/css/preloader.css">
   <link rel="stylesheet" href="assets/css/bootstrap.min.css">
   <link rel="stylesheet" href="assets/css/meanmenu.css">
   <link rel="stylesheet" href="assets/css/animate.min.css">
   <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
   <link rel="stylesheet" href="assets/css/swiper-bundle.css">
   <link rel="stylesheet" href="assets/css/backToTop.css">
   <link rel="stylesheet" href="assets/css/magnific-popup.css">
   <link rel="stylesheet" href="assets/css/ui-range-slider.css">
   <link rel="stylesheet" href="assets/css/nice-select.css">
   <link rel="stylesheet" href="assets/css/fontAwesome5Pro.css">
   <link rel="stylesheet" href="assets/css/flaticon.css">
   <link rel="stylesheet" href="assets/css/default.css">
   <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
   <!--[if lte IE 9]>
      <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
      <![endif]-->

   <!-- header area start  -->
   <header class="header1">
      <div class="header-top d-none d-md-block">
         <?php
         if (isset($_SESSION['user'])) {
            extract($_SESSION['user']);
         ?>
            <li><a href="#" style="color:black"> <?= $user ?></a> --- <a href="index.php?act=thoat" style="color:black">Logout</a></li>
            <!-- <li></li> -->
            <li><a href="index.php?act=mybill" class="text-btn">My account</a></li>
         <?php
         } else {
         ?>

            <div class="container header-container">
               <div class="row align-items-center">
                  <div class="col-xl-6 col-lg-6 col-md-6">
                     <div class="header-top-link">
                        <a href="about.html" class="text-btn">About Us</a>
                        <a href="register.html" class="text-btn">My account</a>
                     </div>
                  </div>
                  <div class="col-xl-6 col-lg-6 col-md-6">
                     <div class="header-top-right">
                        <a href="index.php?act=dangnhap" class="text-btn"><i class="flaticon-avatar"></i>Sign in</a>
                        <select name="lan-select" id="lan-select" class="language-select border-left">
                           <option value="1">English</option>
                           <option value="2">Hindi</option>
                           <option value="3">Arabic</option>
                           <option value="3">Bengali</option>
                           <option value="3">French</option>
                        </select>
                        <select name="currency-select" id="currency-select" class="currency-select border-left">
                           <option value="1">USD</option>
                           <option value="2">EUR</option>
                           <option value="3">JPY</option>
                           <option value="4">GBP</option>
                        </select>
                     </div>
                  </div>
               </div>
            </div>
      </div>
   <?php
         }

   ?>



   <div id="header-sticky" class="header-main header-main1">
      <div class="container">
         <div class="row align-items-center">
            <div class="col-xl-12 col-lg-12">
               <div class="header-main-content-wrapper">
                  <div class="header-main-left header-main-left-header1">
                     <div class="header-logo header1-logo">
                        <a href="index.php" class="logo-bl"><img width="150px" src="assets/img/logo/GroupThree.png" alt="logo-img"></a>
                     </div>
                     <div class="main-menu main-menu1 d-none d-lg-block">
                        <nav id="mobile-menu">
                           <ul>
                              <li class="menu-item-has-children"><a href="index.php">Home</a>

                              </li>
                              <li class="menu-item-has-children"><a href="index.php?act=shops">Shop</a>

                           
                           </ul>
                        </nav>
                     </div>
                  </div>
                  <div class="header-main-right header-main-right-header1">
                     <form action="index.php?act=sanpham" method="POST" class="filter-search-input header-search d-none d-xl-inline-block">
                        <input type="text" name="keyw" placeholder="Search Products.....">
                        <button><i class="fal fa-search"></i></button>
                     </form>
                     <div class="action-list d-none d-md-flex action-list-header1">
                        <div class="action-item action-item-cart">
                           <a href="index.php?act=addtocart" class="view-cart-button">
                              <i class="fal fa-shopping-bag"></i>
                            
                        </div>
                     
                     </div>
                     <div class="menu-bar d-xl-none ml-20">
                        <a class="side-toggle" href="javascript:void(0)">
                           <div class="bar-icon">
                              <span></span>
                              <span></span>
                              <span></span>
                           </div>
                        </a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   </header>
   <!-- header area end -->

   <!-- Add your site or application content here -->
   <main>


      <!-- side toggle start -->
      <div class="fix">
         <div class="side-info">
            <div class="side-info-content">
               <div class="offset-widget offset-logo mb-40">
                  <div class="row align-items-center">
                     <div class="col-9">
                        <a href="index.html">
                           <img src="assets/img/logo/logo-bl.png" alt="Logo">
                        </a>
                     </div>
                     <div class="col-3 text-end"><button class="side-info-close"><i class="fal fa-times"></i></button>
                     </div>
                  </div>
               </div>
               <div class="mobile-menu d-lg-none fix"></div>
               <div class="offset-profile-action d-md-none">
                  <div class="offset-widget mb-40">
                     <div class="action-list action-list-header1">
                        <div class="action-item action-item-cart">
                           <a href="javascript:void(0)" class="view-cart-button">
                              <i class="fal fa-shopping-bag"></i>
                              <span class="action-item-number">3</span></a>
                        </div>
                        <div class="action-item action-item-wishlist">
                           <a href="javascript:void(0)" class="view-wishlist-button">
                              <i class="fal fa-heart"></i>
                              <span class="action-item-number">2</span></a>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="offset-widget offset_searchbar mb-30">
                  <form action="#" class="filter-search-input">
                     <input type="text" placeholder="Search keyword">
                     <button><i class="fal fa-search"></i></button>
                  </form>
               </div>
            </div>
         </div>
      </div>
      <div class="offcanvas-overlay"></div>
      <div class="offcanvas-overlay-white"></div>

      <div class="fix">
         <div class="sidebar-action sidebar-cart">
            <button class="close-sidebar">Close<i class="fal fa-times"></i></button>
            <h4 class="sidebar-action-title">Shopping Cart</h4>
            <div class="sidebar-action-list">
               <div class="sidebar-list-item">
                  <div class="product-image pos-rel">
                     <a href="shop-details.html" class=""><img src="assets/img/shirt/3/1.jpg" alt="img"></a>
                  </div>
                  <div class="product-desc">
                     <div class="product-name"><a href="shop-details.html">Felted Shirt for Man</a></div>
                     <div class="product-pricing">
                        <span class="item-number">1 &times;</span>
                        <span class="price-now">$24.00</span>
                     </div>
                     <button class="remove-item"><i class="fal fa-times"></i></button>
                  </div>
               </div>
               <div class="sidebar-list-item">
                  <div class="product-image pos-rel">
                     <a href="shop-details.html" class=""><img src="assets/img/pant/1/4.jpg" alt="img"></a>
                  </div>
                  <div class="product-desc">
                     <div class="product-name"><a href="shop-details.html">Denim Jeans Pant</a></div>
                     <div class="product-pricing">
                        <span class="item-number">1 &times;</span>
                        <span class="price-now">$12.00</span>
                     </div>
                     <button class="remove-item"><i class="fal fa-times"></i></button>
                  </div>
               </div>
               <div class="sidebar-list-item">
                  <div class="product-image pos-rel">
                     <a href="shop-details.html" class=""><img src="assets/img/jacket/2/2.jpg" alt="img"></a>
                  </div>
                  <div class="product-desc">
                     <div class="product-name"><a href="shop-details.html">Denim Official Jacket</a></div>
                     <div class="product-pricing">
                        <span class="item-number">1 &times;</span>
                        <span class="price-now">$42.00</span>
                     </div>
                     <button class="remove-item"><i class="fal fa-times"></i></button>
                  </div>
               </div>

            </div>
            <div class="product-price-total">
               <span>Subtotal :</span>
               <span class="subtotal-price">$78.00</span>
            </div>
            <div class="sidebar-action-btn">
               <a href="cart.html" class="fill-btn">View cart</a>
               <a href="checkout.html" class="border-btn">Checkout</a>
            </div>
         </div>
      </div>
      <div class="fix">
         <div class="sidebar-action sidebar-wishlist">
            <button class="close-sidebar">Close<i class="fal fa-times"></i></button>
            <h4 class="sidebar-action-title">Wishlist</h4>
            <div class="sidebar-action-list">
               <div class="sidebar-list-item">
                  <div class="product-image pos-rel">
                     <a href="shop-details.html" class=""><img src="assets/img/shirt/1/1.jpg" alt="img"></a>
                  </div>
                  <div class="product-desc">
                     <div class="product-name"><a href="shop-details.html">Women's Faux-Trim Shirt</a></div>
                     <div class="product-pricing">
                        <span class="price-now">$20.00</span>
                     </div>
                     <button class="remove-item"><i class="fal fa-times"></i></button>
                  </div>
               </div>
               <div class="sidebar-list-item">
                  <div class="product-image pos-rel">
                     <a href="shop-details.html" class=""><img src="assets/img/pant/1/1.jpg" alt="img"></a>
                  </div>
                  <div class="product-desc">
                     <div class="product-name"><a href="shop-details.html">Skinny Jeans Pant</a></div>
                     <div class="product-pricing">
                        <span class="price-now">$24.00</span>
                     </div>
                     <button class="remove-item"><i class="fal fa-times"></i></button>
                  </div>
               </div>

            </div>
            <div class="product-price-total">
               <span>Subtotal :</span>
               <span class="subtotal-price">$44.00</span>
            </div>
            <div class="sidebar-action-btn">
               <a href="cart.html" class="fill-btn">View cart</a>
               <a href="cart.html" class="border-btn">Checkout</a>
            </div>
         </div>
      </div>
      <div class="fix">
         <div class="sidebar-action sidebar-filter">
            <button class="close-sidebar">Close<i class="fal fa-times"></i></button>
            <h4 class="sidebar-action-title">Filter Items</h4>
            <div class="product-filters mb-0">
               <!-- <div class="filter-widget">
                  <h4 class="filter-widget-title drop-btn">Search</h4>
                  <div class="filter-widget-content">
                     <div class="filter-widget-search">
                        <input type="text" placeholder="Search here..">
                        <button type="submit"><i class="fal fa-search"></i></button>
                     </div>

                  </div>
               </div> -->
               <div class="filter-widget">
                  <h4 class="filter-widget-title drop-btn">Category</h4>
                  <div class="filter-widget-content">
                     <div class="category-items">
                        <a href="shop.html" class="category-item">
                           <div class="category-name">Shirts</div> <span class="category-items-number">8</span>
                        </a>
                        <a href="shop.html" class="category-item">
                           <div class="category-name">Pants</div> <span class="category-items-number">12</span>
                        </a>
                        <a href="shop.html" class="category-item">
                           <div class="category-name">Jackets</div> <span class="category-items-number">17</span>
                        </a>
                        <a href="shop.html" class="category-item">
                           <div class="category-name">Leggings</div> <span class="category-items-number">6</span>
                        </a>
                        <a href="shop.html" class="category-item">
                           <div class="category-name">Beachware</div> <span class="category-items-number">25</span>
                        </a>
                        <a href="shop.html" class="category-item">
                           <div class="category-name">Underwear</div> <span class="category-items-number">17</span>
                        </a>
                        <a href="shop.html" class="category-item">
                           <div class="category-name">Bag</div> <span class="category-items-number">15</span>
                        </a>
                        <a href="shop.html" class="category-item">
                           <div class="category-name">Belt</div> <span class="category-items-number">9</span>
                        </a>
                     </div>
                  </div>
               </div>
               <div class="filter-widget">
                  <h4 class="filter-widget-title drop-btn">Size</h4>
                  <div class="filter-widget-content">
                     <div class="category-sizes">
                        <div class="category-size">
                           <input class="check-box" type="checkbox" id="s-ex-s">
                           <label class="check-label" for="s-ex-s">Extra Small</label>
                        </div>
                        <div class="category-size">
                           <input class="check-box" type="checkbox" id="s-sm">
                           <label class="check-label" for="s-sm">Small</label>
                        </div>
                        <div class="category-size">
                           <input class="check-box" type="checkbox" id="s-md">
                           <label class="check-label" for="s-md">Medium</label>
                        </div>
                        <div class="category-size">
                           <input class="check-box" type="checkbox" id="s-large">
                           <label class="check-label" for="s-large">Large</label>
                        </div>
                        <div class="category-size">
                           <input class="check-box" type="checkbox" id="s-ex-l">
                           <label class="check-label" for="s-ex-l">Extra Large</label>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="filter-widget">
                  <h4 class="filter-widget-title drop-btn">Rating</h4>
                  <div class="filter-widget-content">
                     <div class="category-ratings">
                        <div class="category-rating">
                           <input class="radio-box" type="radio" id="s-st-5" name="rating">
                           <label class="radio-star" for="s-st-5">
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                           </label>
                        </div>
                        <div class="category-rating">
                           <input class="radio-box" type="radio" id="s-st-4" name="rating">
                           <label class="radio-star" for="s-st-4">
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="fal fa-star"></i>
                           </label>
                        </div>
                        <div class="category-rating">
                           <input class="radio-box" type="radio" id="s-st-3" name="rating">
                           <label class="radio-star" for="s-st-3">
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="fal fa-star"></i>
                              <i class="fal fa-star"></i>
                           </label>
                        </div>
                        <div class="category-rating">
                           <input class="radio-box" type="radio" id="s-st-2" name="rating">
                           <label class="radio-star" for="s-st-2">
                              <i class="fas fa-star"></i>
                              <i class="fas fa-star"></i>
                              <i class="fal fa-star"></i>
                              <i class="fal fa-star"></i>
                              <i class="fal fa-star"></i>
                           </label>
                        </div>
                        <div class="category-rating">
                           <input class="radio-box" type="radio" id="s-st-1" name="rating">
                           <label class="radio-star" for="s-st-1">
                              <i class="fas fa-star"></i>
                              <i class="fal fa-star"></i>
                              <i class="fal fa-star"></i>
                              <i class="fal fa-star"></i>
                              <i class="fal fa-star"></i>
                           </label>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="filter-widget">
                  <h4 class="filter-widget-title drop-btn">Colour</h4>
                  <div class="filter-widget-content">
                     <div class="category-colours">
                        <div class="category-color">
                           <ul class="product-color-nav">
                              <li class="cl-pink active">
                                 <img src="assets/img/product/product-img1.jpg" alt="img">
                              </li>
                              <li class="cl-black">
                                 <img src="assets/img/product/product-img2.jpg" alt="img">
                              </li>
                              <li class="cl-blue">
                                 <img src="assets/img/product/product-img3.jpg" alt="img">
                              </li>
                              <li class="cl-red">
                                 <img src="assets/img/product/product-img4.jpg" alt="img">
                              </li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="filter-widget">
                  <h4 class="filter-widget-title drop-btn">Brand</h4>
                  <div class="filter-widget-content">
                     <div class="category-brands">
                        <div class="category-brand">
                           <input class="check-box" type="checkbox" id="s-b-next">
                           <label class="check-label" for="s-b-next">Next</label>
                        </div>
                        <div class="category-size">
                           <input class="check-box" type="checkbox" id="s-b-ri">
                           <label class="check-label" for="s-b-ri">River Island</label>
                        </div>
                        <div class="category-size">
                           <input class="check-box" type="checkbox" id="s-b-geox">
                           <label class="check-label" for="s-b-geox">Geox</label>
                        </div>
                        <div class="category-size">
                           <input class="check-box" type="checkbox" id="s-b-eco">
                           <label class="check-label" for="s-b-eco">Ecomart</label>
                        </div>
                        <div class="category-size">
                           <input class="check-box" type="checkbox" id="s-b-abby">
                           <label class="check-label" for="s-b-abby">Abby</label>
                        </div>
                        <div class="category-size">
                           <input class="check-box" type="checkbox" id="s-b-nike">
                           <label class="check-label" for="s-b-nike">Nike</label>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="filter-widget">
                  <h4 class="filter-widget-title drop-btn">Price</h4>
                  <div class="filter-widget-content">
                     <div class="filter-price">
                        <div class="slider-range">
                           <div class="slider-range-bar"></div>
                           <p>
                              <label for="s-amount">Price :</label>
                              <input type="text" id="s-amount" class="amount" readonly>
                           </p>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="filter-widget">
                  <h4 class="filter-widget-title drop-btn">Tags</h4>
                  <div class="filter-widget-content">
                     <div class="category-tags">
                        <a href="#" class="category-tag">Fashion</a>
                        <a href="#" class="category-tag">Hats</a>
                        <a href="#" class="category-tag">Sandal</a>
                        <a href="#" class="category-tag">Bags</a>
                        <a href="#" class="category-tag">Snacker</a>
                        <a href="#" class="category-tag">Denim</a>
                        <a href="#" class="category-tag">Sunglasses</a>
                        <a href="#" class="category-tag">Beachwear</a>
                        <a href="#" class="category-tag">Vagabond</a>
                        <a href="#" class="category-tag">Trend</a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- side toggle end -->

      <!-- page title area start  -->
      <section class="page-title-area" data-background="assets/img/bg/page-title-bg.jpg">
         <div class="container">
            <div class="row">
               <div class="col-lg-12">
                  <div class="page-title-wrapper text-center">
                     <h1 class="page-title mb-10">Shop</h1>
                     <div class="breadcrumb-menu">
                        <nav aria-label="Breadcrumbs" class="breadcrumb-trail breadcrumbs">
                           <ul class="trail-items">
                              <li class="trail-item trail-begin"><a href="index.php"><span>Home</span></a></li>
                              <li class="trail-item trail-end"><span>Shop</span></li>
                           </ul>
                        </nav>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- page title area end  -->

      <!-- shop main area start  -->
      <div class="shop-main-area pt-120 pb-10">
         <div class="container">
            <div class="row">
               <div class="col-xl-9 col-lg-8 col-md-12">
                  <div class="shop-main-wrapper mb-60">
                     <div class="shop-main-wrapper-head mb-30">
                        <div class="swowing-list"></div>
                        <!-- <div class="sort-type-filter">
                           <div class="sorting-type">
                              <span>Sort by : </span>
                              <select class="sorting-list" name="sorting-list" id="sorting-list">
                                 <option value="1">Default</option>
                                 <option value="2">Most popular</option>
                                 <option value="3">Date</option>
                                 <option value="4">Trending</option>
                                 <option value="4">Featured</option>
                                 <option value="4">Discounted</option>
                              </select>
                           </div>
                           <div class="action-item action-item-filter d-lg-none">
                              <a href="javascript:void(0)" class="view-filter-button">
                                 <i class="flaticon-filter"></i>
                              </a>
                           </div>
                        </div> -->
                     </div>
                     <div class="products-wrapper">


                        <?php
                        foreach ($listproducts as $sanpham) {
                           extract($sanpham);
                           $linksp = "index.php?act=sanphamct&idsp=" . $id;
                           $hinh = $img_path . $img;
                           echo ' <div class="single-product">
<div class="product-image pos-rel">
<a href="' . $linksp . '" class=""><img src="' . $hinh . '" alt="img"></a>

<div class="product-action-bottom">


</div>
</div>
<div class="product-desc">
<div class="product-name"><a href="' . $linksp . '">' . $name . '</a></div>
<div class="product-price">
<span class="price-now">$' . $price . '</span>
</div>



</div>
</div>';
                        }
                        ?>

                     </div>

                  </div>
               </div>
               <div class="col-xl-3 col-lg-4 col-md-6">
                  <div class="sidebar-widget-wrapper mb-110 d-none d-lg-block">
                     <div class="product-filters mb-50">
                        <div class="filter-widget">
                           <h4 class="filter-widget-title drop-btn">Search</h4>
                           <div class="filter-widget-content">
                           <form action="index.php?ac=shops" method="post"></form>   
                           
                           <div class="filter-widget-search">
                                 <input type="text" name="keyw" placeholder="Search here..">
                                 <button type="submit" name="keyw"><i class="fal fa-search"></i></button>
                              </div>

                           </div>
                        </div>
                        <div class="filter-widget">
                           <h4 class="filter-widget-title drop-btn">Group Proucts</h4>
                           <div class="filter-widget-content">
                              <div class="category-items">


                              <a href="index.php?act=shops">All</a>
                                 <?php
                                 foreach ($dsdm as $dm) {
                                    extract($dm);
                                    $linkdm = "index.php?act=sanpham&id_groupproduct=" . $id;
                                    echo '  <a href="' . $linkdm . '" class="category-item">' . $name . ' </a>';
                                 }
                                 ?>
                           

                              </div>
                           </div>
                        </div>

                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- shop main area end  -->







   </main>

   <!-- footer area start  -->
   <footer data-background="" class="footer1-bg">
      <section class="footer-area footer-area1 footer-area1-bg pt-95 pb-55">
         <div class="container">
            <div class="row">
               <div class="col-lg-3 col-md-6 col-sm-6">
                  <div class="footer-widget footer1-widget footer1-widget1 mb-40">
                     <div class="footer-widget-title">
                        <h4>Information</h4>
                     </div>
                     <ul>
                        <li><a href="#">About Company</a></li>
                        <li><a href="#">Payment Type</a></li>
                        <li><a href="#">Awards Winning</a></li>
                        <li><a href="#">World Media Partner</a></li>
                        <li><a href="#">Become an Agent</a></li>
                        <li><a href="#">Refund Policy</a></li>
                     </ul>
                  </div>
               </div>
               <div class="col-lg-3 col-md-6 col-sm-6">
                  <div class="footer-widget footer1-widget footer1-widget2 mb-40">
                     <div class="footer-widget-title">
                        <h4>Category</h4>
                     </div>
                     <ul>
                        <li><a href="#">Handbags & Wallets</a></li>
                        <li><a href="#">Women's Clothing</a></li>
                        <li><a href="#">Plus Sizes</a></li>
                        <li><a href="#">Complete Your Look</a></li>
                        <li><a href="#">Baby Corner</a></li>
                        <li><a href="#">Man & Woman Shoe</a></li>
                     </ul>
                  </div>
               </div>
               <div class="col-lg-3 col-md-6 col-sm-6">
                  <div class="footer-widget footer1-widget footer1-widget3 mb-40 ">
                     <div class="footer-widget-title">
                        <h4>Help & Support</h4>
                     </div>
                     <ul>
                        <li><a href="#">Dealers & Agents</a></li>
                        <li><a href="#">FAQ Information</a></li>
                        <li><a href="#">Return Policy</a></li>
                        <li><a href="#">Shipping & Delivery</a></li>
                        <li><a href="#">Order Tranking</a></li>
                        <li><a href="#">List of Shops</a></li>
                     </ul>
                  </div>
               </div>
               <div class="col-lg-3 col-md-6 col-sm-6">
                  <div class="footer-widget footer1-widget footer1-widget4 mb-40 ">
                     <div class="footer-widget-title">
                        <h4>Newsletter</h4>
                     </div>
                     <p class="mb-20">Enter your email below to be the first to know about
                        new collections and product launches.</p>
                     <form action="#" class="subscribe-form subscribe-form-footer1">
                        <input type="text" placeholder="Enter your email">
                        <button type="submit">Subscribe Now<i class="fas fa-long-arrow-right"></i></button>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <div class="footer-bottom-area footer-bottom1-area">
         <div class="container">
            <div class="footer-bottom1-inner">
               <div class="irc-item footer-support">
                  <div class="irc-item-icon">
                     <svg xmlns="http://www.w3.org/2000/svg" width="43.051" height="42.064" viewBox="0 0 43.051 42.064">
                        <g id="customer-support" transform="translate(-0.643 -1.361)">
                           <path id="Path_51" data-name="Path 51" d="M41.05,19.581a18.893,18.893,0,0,0-37.763,0A4.444,4.444,0,0,0,.643,23.639v4.985a4.445,4.445,0,0,0,4.44,4.44,2.876,2.876,0,0,0,2.873-2.873v-8.12a2.867,2.867,0,0,0-2.591-2.845,16.834,16.834,0,0,1,33.605,0,2.867,2.867,0,0,0-2.588,2.844V30.19a2.866,2.866,0,0,0,2.626,2.847V35.09a4.2,4.2,0,0,1-4.191,4.19h-3.1a3.085,3.085,0,0,0-2.929-2.085h-3.2a3.071,3.071,0,0,0-1.3.286,3.122,3.122,0,0,0-1.812,2.83,3.12,3.12,0,0,0,3.116,3.116h3.2a3.128,3.128,0,0,0,2.931-2.086h3.1a6.257,6.257,0,0,0,6.25-6.25V32.671a4.443,4.443,0,0,0,2.626-4.049V23.637a4.444,4.444,0,0,0-2.644-4.056ZM5.9,22.071V30.19A.814.814,0,0,1,5.082,31,2.384,2.384,0,0,1,2.7,28.623V23.638a2.383,2.383,0,0,1,2.381-2.381A.814.814,0,0,1,5.9,22.071ZM29.818,40.53a1.061,1.061,0,0,1-1.034.837h-3.2a1.056,1.056,0,0,1-.438-2.017,1.023,1.023,0,0,1,.438-.1h3.2a1.061,1.061,0,0,1,1.034,1.275ZM41.634,28.623A2.384,2.384,0,0,1,39.254,31a.814.814,0,0,1-.813-.813V22.071a.814.814,0,0,1,.813-.813,2.384,2.384,0,0,1,2.381,2.381Z" transform="translate(0 0)" fill="#171717" />
                           <path id="Path_52" data-name="Path 52" d="M33.629,33.546a4.368,4.368,0,0,0,4.363-4.363v-8.89a4.369,4.369,0,0,0-4.363-4.363H20.294a4.368,4.368,0,0,0-4.363,4.363v8.89a4.368,4.368,0,0,0,4.363,4.363h.082v2.3a2.139,2.139,0,0,0,2.136,2.145,2.094,2.094,0,0,0,1.507-.636l3.833-3.812ZM26.7,31.786l-4.148,4.125a.052.052,0,0,1-.071.016.069.069,0,0,1-.047-.078V32.516a1.03,1.03,0,0,0-1.03-1.03H20.295a2.306,2.306,0,0,1-2.3-2.3v-8.89a2.306,2.306,0,0,1,2.3-2.3H33.63a2.309,2.309,0,0,1,2.3,2.3v8.89a2.306,2.306,0,0,1-2.3,2.3h-6.2a1.031,1.031,0,0,0-.726.3Z" transform="translate(-4.793 -4.568)" fill="#171717" />
                           <path id="Path_53" data-name="Path 53" d="M24.019,26.787a1.519,1.519,0,1,0,1.521,1.519A1.522,1.522,0,0,0,24.019,26.787Z" transform="translate(-6.853 -7.972)" fill="#171717" />
                           <path id="Path_54" data-name="Path 54" d="M31.305,26.787a1.519,1.519,0,1,0,1.521,1.519A1.522,1.522,0,0,0,31.305,26.787Z" transform="translate(-9.137 -7.972)" fill="#171717" />
                           <path id="Path_55" data-name="Path 55" d="M38.591,26.787a1.519,1.519,0,1,0,1.521,1.519A1.522,1.522,0,0,0,38.591,26.787Z" transform="translate(-11.422 -7.972)" fill="#171717" />
                        </g>
                     </svg>

                  </div>
                  <div class="irc-item-content">
                     <p>8:30 AM - 10:30</p>
                     <div class="support-number"><a href="tel:555-900-888">555 - 900 - 888</a></div>
                  </div>
               </div>
               <div class="cards-wrapper cards-wrapper-lines">
                  <p>We Support</p>
                  <div class="card-links">
                     <ul>
                        <li><a href="#"><img src="assets/img/cards/card-1.png" alt="card-img"></a></li>
                        <li><a href="#"><img src="assets/img/cards/card-2.png" alt="card-img"></a></li>
                        <li><a href="#"><img src="assets/img/cards/card-3.png" alt="card-img"></a></li>
                        <li><a href="#"><img src="assets/img/cards/card-4.png" alt="card-img"></a></li>
                     </ul>
                  </div>
               </div>
               <div class="apps-download">
                  <div class="apps-download-text">
                     <h5>Download App on Mobile</h5>
                     <p>Free home delivery on your first purchase</p>
                  </div>
                  <div class="app-links">
                     <ul>
                        <li><a href="#"><img src="assets/img/apps/app-store-1.png" alt="app-img"></a></li>
                        <li><a href="#"><img src="assets/img/apps/app-store-2.png" alt="app-img"></a></li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="copyright-area copyright1-area">
         <div class="container">
            <div class="copyright1-inner">
               <div class="copyright-text copyright1-text">
                  Copyright by <a href="https://themeforest.net/user/bdevs/portfolio">BDevs</a>. All Rights Reserved
               </div>
               <div class="copyright-link">
                  <a href="#" class="text-btn">Privacy Policy</a>
                  <a href="#" class="text-btn">Terms & Conditions</a>
                  <a href="#" class="text-btn">Sitemap</a>
               </div>
               <div class="social-wrapper">
                  <p>Follow Us:</p>
                  <div class="social__links">
                     <ul>
                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </footer>
   <!-- footer area end  -->

   <!-- pre loader area start -->
   <div id="loading">
      <div id="loading-center">
         <div id="loading-center-absolute">
            <div class="loading-icon text-center d-flex flex-column align-items-center justify-content-center">
               <img src="assets/img/logo/logo-text.png" alt="logo-img">
               <img class="loading-logo" src="assets/img/logo/preloader.svg" alt="img">
            </div>
         </div>
      </div>
   </div>
   <!-- pre loader area end -->

   <!-- back to top start -->
   <div class="progress-wrap">
      <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
         <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
      </svg>
   </div>
   <!-- back to top end -->


   <!-- JS here -->
   <script src="assets/js/vendor/jquery-3.6.0.min.js"></script>
   <script src="assets/js/vendor/waypoints.min.js"></script>
   <script src="assets/js/bootstrap.bundle.min.js"></script>
   <script src="assets/js/meanmenu.js"></script>
   <script src="assets/js/swiper-bundle.min.js"></script>
   <script src="assets/js/owl.carousel.min.js"></script>
   <script src="assets/js/magnific-popup.min.js"></script>
   <script src="assets/js/parallax.min.js"></script>
   <script src="assets/js/backToTop.js"></script>
   <script src="assets/js/jquery-ui-slider-range.js"></script>
   <script src="assets/js/nice-select.min.js"></script>
   <script src="assets/js/counterup.min.js"></script>
   <script src="assets/js/ajax-form.js"></script>
   <script src="assets/js/wow.min.js"></script>
   <script src="assets/js/isotope.pkgd.min.js"></script>
   <script src="assets/js/imagesloaded.pkgd.min.js"></script>
   <script src="assets/js/main.js"></script>
</body>


<!-- Mirrored from wphix.com/html/ecomart-prev/ecomart/shop.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 16 Nov 2023 14:04:27 GMT -->

</html>