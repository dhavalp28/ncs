<!doctype html>
<html class="no-js" lang="zxx">

<head>
      <meta charset="utf-8">
      <meta http-equiv="x-ua-compatible" content="ie=edge">
      <title>NCS - Novasha Consulting Services India LLP</title>
      <meta name="description" content="">
      <meta name="viewport" content="width=device-width, initial-scale=1">

      <!-- Place favicon.ico in the root directory -->
      <link rel="shortcut icon" type="image/x-icon" href="assets/img/logo/favicon.png">

      <!-- CSS here -->
      <link rel="stylesheet" href="assets/css/bootstrap.css">
      <link rel="stylesheet" href="assets/css/meanmenu.css">
      <link rel="stylesheet" href="assets/css/animate.css">
      <link rel="stylesheet" href="assets/css/swiper-bundle.css">
      <link rel="stylesheet" href="assets/css/slick.css">
      <link rel="stylesheet" href="assets/css/nouislider.css">
      <link rel="stylesheet" href="assets/css/backtotop.css">
      <link rel="stylesheet" href="assets/css/magnific-popup.css">
      <link rel="stylesheet" href="assets/css/nice-select.css">
      <link rel="stylesheet" href="assets/css/font-awesome-pro.css">
      <link rel="stylesheet" href="assets/css/elegant-icon.css">
      <link rel="stylesheet" href="assets/css/spacing.css">
      <link rel="stylesheet" href="assets/css/main.css">
      <style>
        .tp-theme-settings{
            display:none;
        }
        </style>        
   </head>
   <body>
      <!--[if lte IE 9]>
      <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
      <![endif]-->


      <!-- pre loader area start -->
      <div id="loading">
         <div id="loading-center">
            <div id="loading-center-absolute">
               <!-- loading content here -->
               <div class="preloader__content text-center">
                  <div class="preloader__logo">
                     <img src="assets/img/logo/logo-preloader.png" alt="">
                  </div>
                  <div id="tp-loading-bar" class="preloader__bar">
                     <div id="tp-loading-line" class="preloader__bar-inner"></div>
                  </div>
                  <h3 class="preloader__title">NCS</h3>
                  <div class="preloader__with-text ">
                     <div class="preloader__with-text-wrapper">
                         <span data-text-preloader="h" class="preloader__title-2">N</span>
                         <span data-text-preloader="a" class="preloader__title-2">C</span>
                         <span data-text-preloader="r" class="preloader__title-2">S</span>
                     </div>
                 </div>
                  <p class="preloader__loading">Loading</p>
               </div>
            </div>
         </div>  
      </div>
      <!-- pre loader area end -->

      <!-- back to top start -->
      <div class="back-to-top-wrapper">
         <button id="back_to_top" type="button" class="back-to-top-btn">
            <svg width="12" height="7" viewBox="0 0 12 7" fill="none" xmlns="http://www.w3.org/2000/svg">
               <path d="M11 6L6 1L1 6" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>               
         </button>
      </div>
      <!-- back to top end -->

      <!-- header area start -->
      <header>
         <div class="header__area">
            <div class="header__bottom-6 header__padding-6 header-box-plr-245 header__sticky header__sticky-white" id="header-sticky">
               <div class="container-fluid">
                  <div class="mega-menu-wrapper p-relative">
                     <div class="row align-items-center">
                        <div class="col-xxl-3 col-xl-2 col-lg-2 col-md-4 col-sm-5 col-8">
                           <div class="logo">
                              <a href="index.php">
                                 <img src="assets/img/logo/logo.gif" style="height:100px" alt="logo">
                              </a>
                           </div>
                        </div>
                        <div class="col-xxl-7 col-xl-8 col-lg-7 d-none d-lg-block">
                           <div class="main-menu main-menu-6">
                              <nav id="mobile-menu">
                                 <?php 
                                 $current_url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
                                 $file_name = basename($current_url);
                                 ?>
                                 <ul>
                                 <li><a <?php echo ($file_name=="index.php" || $file_name=="")?'class="active"':''; ?> href="index.php">Home</a></li>
                                 <li><a <?php echo ($file_name=="about.php")?'class="active"':''; ?> href="about.php">About Us</a></li>
                                 <li><a <?php echo ($file_name=="services.php")?'class="active"':''; ?> href="services.php">IT Services</a></li>
                                 <li><a <?php echo ($file_name=="media.php")?'class="active"':''; ?> href="media.php">Media</a></li>
                                 <li><a <?php echo ($file_name=="contact.php")?'class="active"':''; ?> href="contact.php">Contact Us</a></li>
                                 </ul>
                              </nav>
                              <!-- for wp -->
                              <div class="header__hamburger ml-50 d-none">
                                 <button type="button" class="hamburger-btn offcanvas-open-btn">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                 </button>
                              </div>
                           </div>
                        </div>
                        <div class="col-xxl-2 col-xl-2 col-lg-3 col-md-8 col-sm-7 col-4">
                           <div class="header__bottom-right-6 d-flex justify-content-end align-items-center pl-30">
                              <div class="header__btn-6 d-none d-sm-block">
                                 <a href="https://novusha-consulting-services-india-llp.odoo.com/book/ac750565" target="_blank" class="tp-btn-blue-2 tp-link-btn-3">
                                    Schedule a Demo
                                    <span>
                                       <i class="fa-regular fa-arrow-right"></i>
                                    </span>
                                 </a>
                              </div>
                              <div class="header__hamburger ml-50 d-lg-none">
                                 <button type="button" class="hamburger-btn hamburger-btn-black offcanvas-open-btn">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                 </button>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </header>
      <!-- header area end -->

       <!-- offcanvas area start -->
       <div class="offcanvas__area offcanvas__area-1 ">
         <div class="offcanvas__shape">
            <img class="offcanvas__shape-1" src="assets/img/shape/offcanvas-shape-1.png" alt="">
         </div>
         <div class="offcanvas__wrapper">
            <div class="offcanvas__close">
               <button class="offcanvas__close-btn offcanvas-close-btn">
                  <i class="fa-regular fa-xmark"></i>
               </button>
            </div>
            <div class="offcanvas__content">
               <div class="offcanvas__top mb-40 d-flex justify-content-between align-items-center">
                  <div class="offcanvas__logo logo">
                     <a href="home-main.html">
                     <img src="assets/img/logo/logo-black.svg" alt="logo">
                     </a>
                  </div>
               </div>
               <div class="mobile-menu fix mb-40"></div>
               <div class="offcanvas__menu offcanvas__menu-ff-space d-none d-lg-block">
                  <nav>
                     <ul>
                        <li><a <?php echo ($file_name=="index.php" || $file_name=="")?'class="active"':''; ?> href="index.php">Home</a></li>
                        <li><a <?php echo ($file_name=="about.php")?'class="active"':''; ?> href="about.php">About Us</a></li>
                        <li><a <?php echo ($file_name=="services.php")?'class="active"':''; ?> href="services.php">IT Services</a></li>
                        <li><a <?php echo ($file_name=="media.php")?'class="active"':''; ?> href="media.php">Media</a></li>
                        <li><a <?php echo ($file_name=="contact.php")?'class="active"':''; ?> href="contact.php">Contact Us</a></li>
                     </ul>
                  </nav>
               </div>
               <div class="offcanvas__btn">
                  <a href="https://novusha-consulting-services-india-llp.odoo.com/book/ac750565" target="_blank" class="tp-btn-offcanvas">Schedule a Demo<i class="fa-regular fa-chevron-right"></i></a>
               </div>
               <div class="offcanvas__social">
                  <h3 class="offcanvas__social-title">Follow :</h3>
                  <a target="_blank" href="https://www.facebook.com/people/Next-Wavee/61558461765719/?sk=videos&video_upload_notif=1&notif_id=1713868974471891&notif_t=video_processed&ref=notif"><i class="fab fa-facebook-f"></i></a>
                  <a target="_blank" href="https://twitter.com/next_wavee"><i class="fab fa-twitter"></i></a>
                  <a target="_blank" href="https://www.instagram.com/next_wavee/"><i class="fab fa-instagram"></i></a>
                  <a target="_blank" href="https://www.youtube.com/channel/UCxpSvKhzKcRa9kgOXb5Bi2w"><i class="fab fa-youtube"></i></a>
                  <a target="_blank" href="https://www.linkedin.com/company/next-wavee/"><i class="fab fa-linkedin"></i></a>
               </div>
               <div class="offcanvas__contact">
                  <p class="offcanvas__contact-call"><a href="tel:+919662370774">+91 96623 70774</a></p>
                  <p class="offcanvas__contact-mail"><a href="mailto:hi@novusha.com">hi@novusha.com</a></p>
               </div>
            </div>
         </div>
      </div>
      <div class="body-overlay"></div>
      <!-- offcanvas area end -->