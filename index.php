<?php
    session_start();
    include("../meps/administracao/php/config.php");
?>

<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
  <head>
    <title>Home</title>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, height=device-height, initial-scale=1.0"
    />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="icon" href="images/favicon.ico" type="image/x-icon" />
    <link
      rel="stylesheet"
      type="text/css"
      href="//fonts.googleapis.com/css?family=Poppins:300,400,500,600,700%7CLato%7CKalam:300,400,700"
    />
    <link rel="stylesheet" href="css/bootstrap.css" />
    <link rel="stylesheet" href="css/fonts.css" />
    <link rel="stylesheet" href="css/style.css" />
    <style>
      .ie-panel {
        display: none;
        background: #212121;
        padding: 10px 0;
        box-shadow: 3px 3px 5px 0 rgba(0, 0, 0, 0.3);
        clear: both;
        text-align: center;
        position: relative;
        z-index: 1;
      }
      html.ie-10 .ie-panel,
      html.lt-ie-10 .ie-panel {
        display: block;
      }
    </style>
  </head>
  <body>
    <div class="ie-panel">
      <a href="http://windows.microsoft.com/en-US/internet-explorer/"
        ><img
          src="images/ie8-panel/warning_bar_0000_us.jpg"
          height="42"
          width="820"
          alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."
      /></a>
    </div>
    <div class="preloader">
      <div class="preloader-body">
        <div class="cssload-bell">
          <div class="cssload-circle">
            <div class="cssload-inner"></div>
          </div>
          <div class="cssload-circle">
            <div class="cssload-inner"></div>
          </div>
          <div class="cssload-circle">
            <div class="cssload-inner"></div>
          </div>
          <div class="cssload-circle">
            <div class="cssload-inner"></div>
          </div>
          <div class="cssload-circle">
            <div class="cssload-inner"></div>
          </div>
        </div>
      </div>
    </div>
    <div class="page">
      <!-- Page Header-->
      <header class="section page-header header-creative-wrap context-dark">
        <!-- RD Navbar-->
        <div class="rd-navbar-wrap">
          <nav
            class="rd-navbar rd-navbar-creative rd-navbar-creative-2"
            data-layout="rd-navbar-fixed"
            data-sm-layout="rd-navbar-fixed"
            data-md-layout="rd-navbar-fixed"
            data-md-device-layout="rd-navbar-fixed"
            data-lg-layout="rd-navbar-static"
            data-lg-device-layout="rd-navbar-fixed"
            data-xl-layout="rd-navbar-static"
            data-xl-device-layout="rd-navbar-static"
            data-xxl-layout="rd-navbar-static"
            data-xxl-device-layout="rd-navbar-static"
            data-lg-stick-up-offset="100px"
            data-xl-stick-up-offset="112px"
            data-xxl-stick-up-offset="132px"
            data-lg-stick-up="true"
            data-xl-stick-up="true"
            data-xxl-stick-up="true"
          >
            <div
              class="rd-navbar-collapse-toggle rd-navbar-fixed-element-1"
              data-rd-navbar-toggle=".rd-navbar-collapse"
            >
              <span></span>
            </div>
            <div class="rd-navbar-aside-outer">
              <div class="rd-navbar-aside">
                <div class="rd-navbar-collapse">
                  <ul class="contacts-classic">
                    <li>
                      <span class="contacts-classic-title">Fale connosco:</span>
                      <a href="tel:#">+351 91x xxx xxx</a>
                    </li>
                    <li><a href="mailto:#">meps@meps.pt</a></li>
                  </ul>
                  <a
                    class="rd-navbar-basket rd-navbar-basket-mobile fl-bigmug-line-shopping202"
                    href="#"
                    ><span>2</span></a
                  >
                </div>
                <!-- RD Navbar Panel-->
                <div class="rd-navbar-panel">
                  <!-- RD Navbar Toggle-->
                  <button
                    class="rd-navbar-toggle"
                    data-rd-navbar-toggle=".rd-navbar-nav-wrap"
                  >
                    <span></span>
                  </button>
                  <!-- RD Navbar Brand-->
                  <div class="rd-navbar-brand">
                    <!--Brand--><a class="brand" href="index.html"
                      ><img
                        class="brand-logo-dark"
                        src="images/logo-default-3-314x70.png"
                        alt=""
                        width="157"
                        height="35" /><img
                        class="brand-logo-light"
                        src="images/logo-inverse-3-314x70.png"
                        alt=""
                        width="157"
                        height="35"
                    /></a>
                  </div>
                </div>
                <div class="rd-navbar-aside-element">
                  <!-- RD Navbar Search-->
                  <div class="rd-navbar-search rd-navbar-search-2">
                    <button
                      class="rd-navbar-search-toggle rd-navbar-fixed-element-3"
                      data-rd-navbar-toggle=".rd-navbar-search"
                    >
                      <span></span>
                    </button>
                    <form
                      class="rd-search"
                      action="search-results.html"
                      data-search-live="rd-search-results-live"
                      method="GET"
                    >
                      <div class="form-wrap">
                        <input
                          class="rd-navbar-search-form-input form-input"
                          id="rd-navbar-search-form-input"
                          type="text"
                          name="s"
                          autocomplete="off"
                        />
                        <label
                          class="form-label"
                          for="rd-navbar-search-form-input"
                          >Search...</label
                        >
                        <div
                          class="rd-search-results-live"
                          id="rd-search-results-live"
                        ></div>
                        <button
                          class="rd-search-form-submit fl-bigmug-line-search74"
                          type="submit"
                        ></button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
            <div class="rd-navbar-main-outer">
              <div class="rd-navbar-main">
                <div class="rd-navbar-nav-wrap">
                  <ul class="rd-navbar-nav">
                    <li class="rd-nav-item active">
                      <a class="rd-nav-link" href="index.html">Home</a>
                    </li>
                    <li class="rd-nav-item">
                      <a class="rd-nav-link" href="about-us.html">About Us</a>
                    </li>
                    <!-- <li class="rd-nav-item">
                      <a class="rd-nav-link" href="#">Pages</a>
                      <ul class="rd-menu rd-navbar-dropdown">
                        <li class="rd-dropdown-item">
                          <a class="rd-dropdown-link" href="what-we-offer.html"
                            >What We Offer</a
                          >
                        </li>
                        <li class="rd-dropdown-item">
                          <a class="rd-dropdown-link" href="our-team.html"
                            >Our Team</a
                          >
                        </li>
                        <li class="rd-dropdown-item">
                          <a class="rd-dropdown-link" href="pricing-list.html"
                            >Pricing List</a
                          >
                        </li>
                        <li class="rd-dropdown-item">
                          <a class="rd-dropdown-link" href="404-page.html"
                            >404 Page</a
                          >
                        </li>
                        <li class="rd-dropdown-item">
                          <a class="rd-dropdown-link" href="coming-soon.html"
                            >Coming Soon</a
                          >
                        </li>
                        <li class="rd-dropdown-item">
                          <a class="rd-dropdown-link" href="privacy-policy.html"
                            >Privacy Policy</a
                          >
                        </li>
                        <li class="rd-dropdown-item">
                          <a class="rd-dropdown-link" href="search-results.html"
                            >Search Results</a
                          >
                        </li>
                      </ul>
                    </li> -->
                    <!-- <li class="rd-nav-item">
                      <a class="rd-nav-link" href="blog-list.html">Blog</a>
                      <ul class="rd-menu rd-navbar-dropdown">
                        <li class="rd-dropdown-item">
                          <a class="rd-dropdown-link" href="blog-post.html"
                            >Blog Post</a
                          >
                        </li>
                      </ul>
                    </li> -->
                    <!-- <li class="rd-nav-item">
                      <a class="rd-nav-link" href="grid-gallery.html"
                        >Gallery</a
                      >
                    </li> -->
                    <!-- <li class="rd-nav-item">
                      <a class="rd-nav-link" href="grid-shop.html">Shop</a>
                      <ul class="rd-menu rd-navbar-dropdown">
                        <li class="rd-dropdown-item">
                          <a class="rd-dropdown-link" href="grid-shop.html"
                            >Grid Shop</a
                          >
                        </li>
                        <li class="rd-dropdown-item">
                          <a class="rd-dropdown-link" href="single-product.html"
                            >Single Product</a
                          >
                        </li>
                      </ul>
                    </li> -->
                    <li class="rd-nav-item">
                      <a class="rd-nav-link" href="contact-us.html"
                        >Contact Us</a
                      >
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </nav>
        </div>
      </header>
      <!-- Swiper-->
      <section
        class="section swiper-container swiper-slider swiper-slider-4"
        data-loop="true"
      >
        <div class="swiper-wrapper context-dark">
          <div
            class="swiper-slide swiper-slide-1"
            data-slide-bg="images/slide-1.jpg"
          >
            <div class="swiper-slide-caption section-md text-sm-left">
              <div class="container">
                <div class="row">
                  <div class="col-sm-8 col-md-7">
                    <h2
                      class="swiper-title-1"
                      data-caption-animate="fadeInLeft"
                      data-caption-delay="100"
                    >
                      Tasty Way <br />to Healthier Life
                    </h2>
                    <h5
                      class="swiper-title-2 text-width-medium"
                      data-caption-animate="fadeInLeft"
                      data-caption-delay="250"
                    >
                      Our organic drinks contain all necessary elements and
                      vitamins for your health.
                    </h5>
                    <!-- <div
                      class="button-wrap"
                      data-caption-animate="fadeInLeft"
                      data-caption-delay="400"
                    >
                      <a
                        class="button button-lg button-shadow-4 button-secondary-2 button-zakaria"
                        href="grid-shop.html"
                        >Shop now</a
                      >
                    </div> -->
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div
            class="swiper-slide swiper-slide-2"
            data-slide-bg="images/slide-2.jpg"
          >
            <div class="swiper-slide-caption section-md text-center">
              <div class="container">
                <h2
                  class="swiper-title-1"
                  data-caption-animate="fadeInLeft"
                  data-caption-delay="100"
                >
                  New Drink, New Day
                </h2>
                <h5
                  class="swiper-title-2"
                  data-caption-animate="fadeInRight"
                  data-caption-delay="250"
                >
                  With our wide variety of smoothies and healthy drinks, we are
                  sure <br class="d-none d-md-block" />to help you make the
                  right choice to start your day.
                </h5>
                <!-- <div
                  class="button-wrap"
                  data-caption-animate="fadeInUp"
                  data-caption-delay="400"
                >
                  <a
                    class="button button-lg button-shadow-4 button-secondary-2 button-zakaria"
                    href="grid-shop.html"
                    >Shop now</a
                  >
                </div> -->
              </div>
            </div>
          </div>
        </div>
        <!-- Swiper Pagination-->
        <div class="swiper-pagination"></div>
        <!-- Swiper Navigation-->
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
      </section>
      <!-- Services-->
      <section class="section section-xxl bg-image-1">
        <div class="container">
          <div class="row row-xl row-30 row-md-40 row-lg-50 align-items-center">
            <div class="col-md-5 col-xl-4">
              <div class="row row-30 row-md-40 row-lg-50 bordered-2">
                <div class="col-sm-6 col-md-12">
                  <article
                    class="box-icon-classic box-icon-nancy-right text-center text-lg-right wow fadeInLeft"
                  >
                    <div class="unit flex-column flex-lg-row-reverse">
                      <div class="unit-left">
                        <div class="box-icon-classic-svg">
                          <svg
                            class="svg-icon"
                            x="0px"
                            y="0px"
                            width="53px"
                            height="50px"
                            viewBox="0 0 53 50"
                            enable-background="new 0 0 53 50"
                          >
                            <g>
                              <path
                                d="M38.022,50H14.978V31.77h23.044V50z M15.878,49.081h21.243V32.689H15.878V49.081z"
                              ></path>
                              <path
                                d="M26.5,50c-0.152,0-0.294-0.078-0.377-0.208L15.052,32.481c-0.136-0.213-0.077-0.497,0.131-0.636			c0.208-0.139,0.487-0.079,0.623,0.133L26.5,48.7l10.695-16.722c0.136-0.212,0.415-0.272,0.623-0.133			c0.208,0.139,0.267,0.424,0.131,0.636L26.877,49.792C26.794,49.922,26.652,50,26.5,50z"
                              ></path>
                              <path
                                d="M37.572,50c-0.147,0-0.291-0.073-0.377-0.208L26.5,33.07L15.805,49.792c-0.136,0.212-0.415,0.272-0.623,0.133			c-0.208-0.139-0.267-0.424-0.131-0.636l11.072-17.311c0.083-0.13,0.225-0.208,0.377-0.208s0.294,0.078,0.377,0.208l11.072,17.311			c0.136,0.213,0.077,0.497-0.131,0.636C37.742,49.976,37.657,50,37.572,50z"
                              ></path>
                              <path
                                d="M26.5,50c-0.249,0-0.45-0.206-0.45-0.46V32.229c0-0.254,0.201-0.46,0.45-0.46s0.45,0.206,0.45,0.46V49.54			C26.95,49.794,26.749,50,26.5,50z"
                              ></path>
                              <path
                                d="M30.211,20.307h-7.421V14.82h7.421V20.307z M23.689,19.388h5.621v-3.649h-5.621V19.388z"
                              ></path>
                              <path
                                d="M15.879,50H4.973v-27.28c0-0.254,0.201-0.46,0.45-0.46s0.45,0.206,0.45,0.46v26.361h9.105V32.23			c0-0.254,0.201-0.46,0.45-0.46c0.249,0,0.45,0.206,0.45,0.46V50z"
                              ></path>
                              <path
                                d="M48.027,50H37.122V32.23c0-0.254,0.201-0.46,0.45-0.46c0.249,0,0.45,0.206,0.45,0.46v16.851h9.105V22.719			c0-0.254,0.201-0.46,0.45-0.46c0.249,0,0.45,0.206,0.45,0.46V50z"
                              ></path>
                              <path
                                d="M49.903,27.907l-9.427-17.204L26.5,4.003l-13.977,6.699L3.097,27.907L0,26.137l9.984-18.22L26.5,0l16.517,7.916L53,26.137			L49.903,27.907z M26.5,2.988l14.621,7.008l9.128,16.66l1.526-0.872l-9.402-17.16L26.5,1.016L10.628,8.623l-9.403,17.16l1.526,0.872			l9.128-16.66L26.5,2.988z"
                              ></path>
                              <path
                                d="M26.5,13.665c-0.249,0-0.45-0.206-0.45-0.46V6.264c0-0.254,0.201-0.46,0.45-0.46s0.45,0.206,0.45,0.46v6.942			C26.95,13.46,26.749,13.665,26.5,13.665z"
                              ></path>
                              <path
                                d="M26.5,30.165c-0.249,0-0.45-0.206-0.45-0.46V22.92c0-0.254,0.201-0.46,0.45-0.46s0.45,0.206,0.45,0.46v6.785			C26.95,29.959,26.749,30.165,26.5,30.165z"
                              ></path>
                              <path
                                d="M20.813,30.165c-0.249,0-0.45-0.206-0.45-0.46V9.419c0-0.254,0.201-0.46,0.45-0.46c0.249,0,0.45,0.206,0.45,0.46v20.286			C21.263,29.959,21.062,30.165,20.813,30.165z"
                              ></path>
                              <path
                                d="M32.187,30.165c-0.249,0-0.45-0.206-0.45-0.46V9.419c0-0.254,0.201-0.46,0.45-0.46c0.249,0,0.45,0.206,0.45,0.46v20.286			C32.637,29.959,32.435,30.165,32.187,30.165z"
                              ></path>
                              <path
                                d="M15.87,30.165c-0.249,0-0.45-0.206-0.45-0.46V12.103c0-0.254,0.201-0.46,0.45-0.46c0.249,0,0.45,0.206,0.45,0.46v17.602			C16.32,29.959,16.118,30.165,15.87,30.165z"
                              ></path>
                              <path
                                d="M37.13,30.165c-0.249,0-0.45-0.206-0.45-0.46V12.103c0-0.254,0.201-0.46,0.45-0.46c0.249,0,0.45,0.206,0.45,0.46v17.602			C37.58,29.959,37.379,30.165,37.13,30.165z"
                              ></path>
                              <path
                                d="M10.927,47.836c-0.249,0-0.45-0.206-0.45-0.46V17.563c0-0.254,0.201-0.46,0.45-0.46c0.249,0,0.45,0.206,0.45,0.46v29.813			C11.377,47.63,11.175,47.836,10.927,47.836z"
                              ></path>
                              <path
                                d="M42.074,47.836c-0.249,0-0.45-0.206-0.45-0.46V17.563c0-0.254,0.201-0.46,0.45-0.46s0.45,0.206,0.45,0.46v29.813			C42.524,47.63,42.322,47.836,42.074,47.836z"
                              ></path>
                            </g>
                          </svg>
                        </div>
                      </div>
                      <div class="unit-body">
                        <h4 class="box-icon-classic-title">
                          <a href="#">100% organic</a>
                        </h4>
                        <p class="box-icon-classic-text">
                          We make our products from 100% organic and fresh
                          ingredients full of vitamins and nutrients.
                        </p>
                      </div>
                    </div>
                  </article>
                </div>
                <div class="col-sm-6 col-md-12">
                  <article
                    class="box-icon-classic box-icon-nancy-right text-center text-lg-right wow fadeInLeft"
                    data-wow-delay=".1s"
                  >
                    <div class="unit flex-column flex-lg-row-reverse">
                      <div class="unit-left">
                        <div class="box-icon-classic-svg">
                          <svg
                            class="svg-icon"
                            x="0px"
                            y="0px"
                            width="55px"
                            height="55px"
                            viewBox="0 0 55 55"
                            enable-background="new 0 0 55 55"
                          >
                            <g>
                              <path
                                d="M36.205,20.323c-0.119,0-0.238-0.043-0.333-0.129c-0.203-0.184-0.218-0.497-0.034-0.7c3.45-3.797,5.013-8.973,4.273-14.013			c-1.028,0.964-2.129,1.643-3.201,2.304c-1.875,1.157-3.647,2.25-4.859,4.766c-0.078,0.173-0.251,0.293-0.452,0.293			c-0.274,0-0.496-0.221-0.496-0.495v-0.114l0.049-0.102c1.338-2.786,3.32-4.009,5.237-5.192c1.256-0.775,2.554-1.576,3.673-2.828			l0.657-0.736l0.198,0.967c1.155,5.637-0.469,11.55-4.346,15.816C36.474,20.268,36.34,20.323,36.205,20.323z"
                              ></path>
                              <path
                                d="M33.617,18.134c-0.084,0-0.169-0.021-0.247-0.066c-0.237-0.137-0.318-0.44-0.181-0.677l1.718-2.976			c0.137-0.237,0.44-0.318,0.677-0.181c0.237,0.137,0.318,0.44,0.181,0.677l-1.718,2.976C33.955,18.045,33.789,18.134,33.617,18.134z			"
                              ></path>
                              <path
                                d="M38.877,25.703c-0.21,0-0.404-0.134-0.472-0.345c-0.083-0.261,0.06-0.54,0.321-0.623c1.277-0.409,2.518-0.975,3.687-1.684			l0.101-0.061c3.136-1.936,5.563-4.839,6.916-8.253c-1.374,0.322-2.664,0.358-3.919,0.394c-2.198,0.063-4.275,0.123-6.61,1.708			c-0.227,0.154-0.535,0.095-0.688-0.132c-0.154-0.226-0.095-0.535,0.131-0.688c2.574-1.748,4.894-1.815,7.138-1.879			c1.47-0.042,2.99-0.086,4.589-0.612l0.937-0.308l-0.312,0.936c-1.353,4.059-4.112,7.519-7.768,9.742l-0.121,0.072			c-1.201,0.715-2.472,1.29-3.78,1.708C38.978,25.696,38.927,25.703,38.877,25.703z"
                              ></path>
                              <path
                                d="M37.731,22.514c-0.171,0-0.338-0.089-0.43-0.248c-0.137-0.237-0.055-0.54,0.182-0.677l2.975-1.717			c0.237-0.137,0.54-0.056,0.677,0.181c0.137,0.237,0.055,0.54-0.182,0.677l-2.975,1.717C37.9,22.493,37.815,22.514,37.731,22.514z"
                              ></path>
                              <path
                                d="M42.223,32.099c-1.277,0-2.56-0.135-3.828-0.411c-0.267-0.058-0.437-0.322-0.379-0.59c0.058-0.267,0.322-0.437,0.59-0.379			c5.009,1.09,10.272-0.145,14.268-3.306c-1.346-0.408-2.487-1.023-3.598-1.621c-1.949-1.049-3.789-2.04-6.566-1.823l-0.039,0.002			c-0.274,0-0.496-0.222-0.496-0.496c0-0.264,0.206-0.48,0.466-0.495c3.063-0.238,5.117,0.869,7.104,1.939			c1.302,0.701,2.648,1.426,4.288,1.768L55,26.889l-0.738,0.655C50.925,30.502,46.613,32.099,42.223,32.099z"
                              ></path>
                              <path
                                d="M42.536,28.365h-3.437c-0.274,0-0.496-0.222-0.496-0.496c0-0.274,0.222-0.496,0.496-0.496h3.437			c0.274,0,0.496,0.222,0.496,0.496C43.031,28.143,42.809,28.365,42.536,28.365z"
                              ></path>
                              <path
                                d="M47.031,41.284c-3.021,0-6.016-0.756-8.694-2.223l-0.041-0.022c-1.118-0.593-2.405-1.51-3.451-2.459			c-0.203-0.184-0.218-0.497-0.034-0.7c0.184-0.203,0.497-0.218,0.7-0.034c1.001,0.908,2.231,1.783,3.289,2.339l0.071,0.04			c3.259,1.767,7,2.424,10.648,1.888c-0.964-1.028-1.643-2.128-2.304-3.2c-1.158-1.877-2.252-3.649-4.778-4.864l-0.086-0.041			l-0.065-0.07c-0.185-0.202-0.172-0.516,0.03-0.701c0.162-0.149,0.397-0.17,0.578-0.067c2.768,1.34,3.986,3.314,5.164,5.223			c0.774,1.255,1.575,2.553,2.828,3.671l0.736,0.657l-0.967,0.198C49.456,41.163,48.241,41.284,47.031,41.284z"
                              ></path>
                              <path
                                d="M40.337,35.833c-0.084,0-0.169-0.021-0.247-0.066l-2.976-1.718c-0.237-0.137-0.318-0.44-0.181-0.677			c0.137-0.237,0.44-0.318,0.677-0.181l2.976,1.718c0.237,0.137,0.318,0.44,0.181,0.677C40.674,35.744,40.508,35.833,40.337,35.833z"
                              ></path>
                              <path
                                d="M41.778,51.01l-0.936-0.312c-5.458-1.82-9.765-6.181-11.521-11.668c-0.083-0.261,0.06-0.54,0.321-0.623			c0.261-0.083,0.539,0.06,0.623,0.321c1.564,4.886,5.268,8.829,10.005,10.707c-0.284-1.287-0.348-2.66-0.411-3.998			c-0.116-2.459-0.226-4.783-1.601-6.418c-1.11-0.594-2.379-1.501-3.414-2.439c-0.203-0.184-0.218-0.497-0.034-0.7			c0.184-0.203,0.497-0.218,0.7-0.034c1.001,0.908,2.231,1.783,3.289,2.339l0.087,0.046l0.061,0.07			c1.656,1.898,1.78,4.538,1.901,7.09c0.076,1.606,0.154,3.266,0.62,4.682L41.778,51.01z"
                              ></path>
                              <path
                                d="M34.699,41.202c-0.171,0-0.338-0.089-0.43-0.248l-1.717-2.975c-0.137-0.237-0.055-0.54,0.181-0.677			c0.237-0.137,0.54-0.055,0.677,0.181l1.717,2.975c0.137,0.237,0.055,0.54-0.182,0.677C34.868,41.18,34.783,41.202,34.699,41.202z"
                              ></path>
                              <path
                                d="M28.111,55l-0.655-0.738c-3.814-4.3-5.364-10.231-4.146-15.865l0.085-0.391h0.4c0.274,0,0.496,0.222,0.496,0.496			c0,0.045-0.006,0.089-0.017,0.13c-1.075,5.008,0.161,10.26,3.313,14.244c0.407-1.336,1.023-2.485,1.623-3.604			c1.059-1.975,2.059-3.84,1.82-6.558c-0.024-0.273,0.178-0.513,0.45-0.537c0.275-0.023,0.513,0.178,0.537,0.45			c0.264,3.012-0.853,5.096-1.934,7.113c-0.705,1.314-1.433,2.673-1.771,4.294L28.111,55z"
                              ></path>
                              <path
                                d="M27.13,43.032c-0.274,0-0.496-0.222-0.496-0.496v-3.437c0-0.274,0.222-0.496,0.496-0.496s0.496,0.222,0.496,0.496v3.437			C27.626,42.81,27.404,43.032,27.13,43.032z"
                              ></path>
                              <path
                                d="M14.279,51.621l-0.198-0.966c-0.855-4.176-0.204-8.534,1.833-12.276l0.022-0.041c0.628-1.173,1.536-2.447,2.491-3.497			c0.184-0.203,0.497-0.217,0.7-0.033c0.202,0.184,0.217,0.498,0.033,0.7c-0.873,0.96-1.703,2.116-2.292,3.19v0.001l-0.061,0.113			c-1.79,3.268-2.46,7.036-1.92,10.708c1.028-0.964,2.128-1.642,3.198-2.302c1.875-1.156,3.646-2.248,4.867-4.78			c0.119-0.247,0.415-0.35,0.662-0.231c0.247,0.119,0.35,0.415,0.231,0.662c-1.347,2.793-3.326,4.013-5.24,5.193			c-1.254,0.773-2.55,1.572-3.67,2.825L14.279,51.621z"
                              ></path>
                              <path
                                d="M19.662,40.832c-0.084,0-0.169-0.021-0.247-0.066c-0.237-0.137-0.318-0.44-0.181-0.677l1.717-2.975			c0.137-0.237,0.44-0.318,0.677-0.181c0.237,0.137,0.318,0.44,0.181,0.677l-1.717,2.975C20,40.743,19.833,40.832,19.662,40.832z"
                              ></path>
                              <path
                                d="M3.989,41.779l0.312-0.936c1.353-4.058,4.111-7.518,7.769-9.742c1.215-0.736,2.506-1.328,3.838-1.761			c0.259-0.084,0.54,0.058,0.625,0.318c0.085,0.26-0.058,0.54-0.318,0.625c-1.26,0.41-2.481,0.97-3.631,1.666			c-3.184,1.936-5.648,4.864-7.016,8.313c1.373-0.321,2.666-0.359,3.925-0.395c2.204-0.064,4.285-0.124,6.601-1.704			c0.226-0.154,0.535-0.096,0.689,0.13c0.154,0.226,0.096,0.534-0.13,0.689c-2.556,1.744-4.882,1.811-7.131,1.877			C8.047,40.9,6.523,40.944,4.927,41.47L3.989,41.779z"
                              ></path>
                              <path
                                d="M14.294,35.194c-0.171,0-0.338-0.089-0.43-0.248c-0.137-0.237-0.056-0.54,0.181-0.677l2.951-1.703			c0.237-0.137,0.54-0.056,0.677,0.181c0.137,0.237,0.055,0.54-0.182,0.677l-2.951,1.703C14.463,35.173,14.378,35.194,14.294,35.194z			"
                              ></path>
                              <path
                                d="M11.53,32.052c-2.618,0-4.474-1-6.276-1.971c-1.302-0.701-2.647-1.426-4.289-1.768L0,28.112l0.738-0.655			c3.199-2.839,7.317-4.456,11.596-4.554c1.433-0.032,2.869,0.105,4.269,0.409c0.268,0.058,0.438,0.322,0.379,0.589			c-0.058,0.268-0.322,0.438-0.589,0.379c-1.324-0.287-2.682-0.417-4.037-0.386C8.63,23.98,5.033,25.284,2.125,27.587			c1.348,0.408,2.489,1.023,3.6,1.621c1.947,1.049,3.787,2.039,6.564,1.822c0.273-0.021,0.511,0.183,0.533,0.455			c0.021,0.273-0.183,0.511-0.456,0.533C12.079,32.041,11.8,32.052,11.53,32.052z"
                              ></path>
                              <path
                                d="M15.852,27.627h-3.389c-0.274,0-0.496-0.222-0.496-0.496s0.222-0.496,0.496-0.496h3.389c0.274,0,0.496,0.222,0.496,0.496			S16.126,27.627,15.852,27.627z"
                              ></path>
                              <path
                                d="M12.345,23.896c-0.083,0-0.167-0.021-0.242-0.063c-2.771-1.347-3.988-3.318-5.164-5.225			c-0.774-1.254-1.573-2.55-2.828-3.67l-0.736-0.657l0.967-0.198c4.191-0.858,8.567-0.2,12.32,1.854			c0.24,0.131,0.328,0.433,0.197,0.673c-0.131,0.24-0.433,0.328-0.673,0.197c-3.268-1.789-7.037-2.458-10.708-1.917			c0.965,1.028,1.644,2.128,2.304,3.199c1.156,1.874,2.248,3.644,4.777,4.865l0.071,0.034l0.057,0.054			c0.197,0.189,0.205,0.504,0.016,0.702C12.606,23.845,12.476,23.896,12.345,23.896z"
                              ></path>
                              <path
                                d="M19.826,19.289c-0.119,0-0.238-0.043-0.333-0.129c-0.993-0.904-2.073-1.673-3.303-2.353			c-0.24-0.132-0.326-0.434-0.194-0.674c0.133-0.239,0.434-0.326,0.674-0.194c1.298,0.717,2.44,1.531,3.491,2.487			c0.202,0.184,0.217,0.498,0.033,0.7C20.095,19.235,19.961,19.289,19.826,19.289z"
                              ></path>
                              <path
                                d="M17.637,21.877c-0.084,0-0.169-0.021-0.247-0.066l-2.976-1.719c-0.237-0.137-0.318-0.44-0.181-0.677			c0.137-0.237,0.44-0.318,0.677-0.181l2.976,1.719c0.237,0.137,0.318,0.44,0.181,0.677C17.975,21.789,17.809,21.877,17.637,21.877z"
                              ></path>
                              <path
                                d="M16.426,16.867c-0.159,0-0.315-0.076-0.411-0.218c-1.744-2.573-1.81-4.892-1.874-7.133c-0.042-1.47-0.086-2.99-0.612-4.589			L13.22,3.99l0.936,0.312c5.453,1.818,9.756,6.167,11.509,11.634c0.084,0.261-0.06,0.54-0.321,0.623			c-0.261,0.084-0.54-0.06-0.623-0.321c-1.56-4.865-5.256-8.793-9.984-10.67c0.322,1.374,0.358,2.664,0.394,3.919			c0.063,2.197,0.122,4.271,1.704,6.606c0.154,0.227,0.094,0.535-0.132,0.688C16.618,16.84,16.522,16.867,16.426,16.867z"
                              ></path>
                              <path
                                d="M22.01,17.75c-0.171,0-0.338-0.089-0.43-0.248l-1.709-2.96c-0.137-0.237-0.056-0.54,0.181-0.677			c0.237-0.137,0.54-0.055,0.677,0.181l1.71,2.96c0.137,0.237,0.056,0.54-0.181,0.677C22.18,17.729,22.094,17.75,22.01,17.75z"
                              ></path>
                              <path
                                d="M31.203,16.994c-0.035,0-0.07-0.004-0.106-0.011c-0.268-0.058-0.437-0.322-0.379-0.59c0.287-1.32,0.42-2.714,0.385-4.031			l0-0.016l0.001-0.016c0.002-0.055,0.146-5.356-3.692-10.206c-0.407,1.339-1.024,2.489-1.624,3.607			c-1.058,1.972-2.057,3.835-1.819,6.554c0.024,0.273-0.178,0.513-0.45,0.537c-0.271,0.024-0.513-0.178-0.537-0.451			c-0.264-3.014,0.853-5.096,1.933-7.109c0.705-1.314,1.434-2.673,1.773-4.298L26.888,0l0.655,0.738			c4.66,5.253,4.566,11.179,4.552,11.614c0.036,1.39-0.105,2.86-0.408,4.252C31.637,16.836,31.431,16.994,31.203,16.994z"
                              ></path>
                              <path
                                d="M27.868,16.38c-0.274,0-0.496-0.222-0.496-0.496v-3.421c0-0.274,0.222-0.496,0.496-0.496c0.274,0,0.496,0.222,0.496,0.496			v3.421C28.364,16.158,28.142,16.38,27.868,16.38z"
                              ></path>
                              <path
                                d="M27.477,39.599c-3.479,0-6.781-1.495-9.057-4.101c-0.627-0.709-1.169-1.471-1.609-2.263			c-1.049-1.888-1.552-4.007-1.454-6.128c0.187-4.272,2.644-8.214,6.414-10.288c1.741-0.957,3.629-1.443,5.611-1.443			c1.009,0,2.036,0.129,3.052,0.382c0.309,0.076,0.621,0.167,0.927,0.269c0.874,0.292,1.721,0.692,2.519,1.189			c0.727,0.45,1.41,0.982,2.03,1.582c0.236,0.227,0.461,0.463,0.669,0.702c0.617,0.699,1.152,1.467,1.589,2.283			c1.002,1.863,1.495,3.973,1.427,6.101c-0.066,2.129-0.694,4.203-1.814,5.995C35.56,37.461,31.708,39.599,27.477,39.599z			M27.382,16.369c-1.813,0-3.54,0.444-5.133,1.32c-3.416,1.879-5.733,5.594-5.902,9.464c-0.09,1.938,0.37,3.874,1.33,5.602			c0.405,0.729,0.905,1.432,1.487,2.09c2.091,2.393,5.12,3.764,8.313,3.764c3.885,0,7.423-1.963,9.463-5.252			c1.028-1.646,1.604-3.548,1.665-5.503c0.063-1.954-0.39-3.89-1.31-5.6c-0.401-0.749-0.893-1.455-1.46-2.098			c-0.191-0.219-0.397-0.435-0.613-0.643c-0.57-0.551-1.197-1.039-1.865-1.453c-0.733-0.457-1.51-0.824-2.31-1.091			c-0.281-0.094-0.567-0.177-0.851-0.247C29.256,16.487,28.31,16.369,27.382,16.369z"
                              ></path>
                              <path
                                d="M22.961,26.785c-1.275,0-2.566-0.875-2.566-2.547c0-1.414,1.15-2.564,2.565-2.564c1.414,0,2.565,1.15,2.565,2.564			C25.524,25.91,24.235,26.785,22.961,26.785z M22.959,22.664c-0.867,0-1.573,0.706-1.573,1.573c0,1.075,0.791,1.556,1.575,1.556			c0.782,0,1.572-0.481,1.572-1.556C24.533,23.37,23.827,22.664,22.959,22.664z"
                              ></path>
                              <path
                                d="M31.063,25.707c-1.414,0-2.565-1.15-2.565-2.565c0-1.672,1.291-2.547,2.565-2.547c1.274,0,2.564,0.875,2.564,2.547			C33.628,24.557,32.478,25.707,31.063,25.707z M31.064,21.587c-0.784,0-1.574,0.481-1.574,1.556c0,0.868,0.706,1.573,1.573,1.573			c0.867,0,1.573-0.706,1.573-1.573C32.637,22.068,31.847,21.587,31.064,21.587z"
                              ></path>
                              <path
                                d="M27.097,33.591c-1.414,0-2.565-1.15-2.565-2.565c0-1.414,1.15-2.564,2.565-2.564c1.414,0,2.565,1.15,2.565,2.564			C29.662,32.44,28.512,33.591,27.097,33.591z M27.097,29.453c-0.868,0-1.573,0.706-1.573,1.573c0,0.868,0.706,1.573,1.573,1.573			c0.868,0,1.573-0.706,1.573-1.573C28.671,30.159,27.965,29.453,27.097,29.453z"
                              ></path>
                            </g>
                          </svg>
                        </div>
                      </div>
                      <div class="unit-body">
                        <h4 class="box-icon-classic-title">
                          <a href="#">Good for health</a>
                        </h4>
                        <p class="box-icon-classic-text">
                          Our drinks are exceptionally good for boosting your
                          health and increasing your energy level.
                        </p>
                      </div>
                    </div>
                  </article>
                </div>
              </div>
            </div>
            <div class="col-md-2 col-xl-4 d-none d-md-block wow fadeScale">
              <img
                src="images/index-1-399x407.png"
                alt=""
                width="399"
                height="407"
              />
            </div>
            <div class="col-md-5 col-xl-4">
              <div class="row row-30 row-md-40 row-lg-50 bordered-2">
                <div class="col-sm-6 col-md-12">
                  <article
                    class="box-icon-classic box-icon-nancy-left text-center text-lg-left wow fadeInRigth"
                  >
                    <div class="unit flex-column flex-lg-row">
                      <div class="unit-left">
                        <div class="box-icon-classic-svg">
                          <svg
                            class="svg-icon"
                            x="0px"
                            y="0px"
                            width="54px"
                            height="58px"
                            viewBox="0 0 54 58"
                            enable-background="new 0 0 54 58"
                          >
                            <g>
                              <g>
                                <path
                                  d="M22.866,18.9c-0.174,0-0.344-0.088-0.444-0.248c-0.153-0.247-0.079-0.573,0.166-0.727c0.584-0.369,1.083-0.854,1.482-1.44				c0.759-1.122,1.04-2.476,0.792-3.812c-0.249-1.338-0.998-2.496-2.11-3.262c-1.112-0.766-2.454-1.05-3.777-0.8				c-0.927,0.176-1.782,0.608-2.472,1.249c-0.212,0.197-0.543,0.184-0.739-0.031c-0.196-0.214-0.182-0.548,0.03-0.746				c0.834-0.775,1.867-1.298,2.987-1.51c1.598-0.303,3.217,0.04,4.56,0.965c1.343,0.925,2.248,2.324,2.548,3.939				c0.3,1.612-0.04,3.247-0.956,4.603c-0.481,0.708-1.083,1.293-1.79,1.739C23.056,18.874,22.96,18.9,22.866,18.9z"
                                ></path>
                                <path
                                  d="M25.375,13.103c-0.247,0-0.466-0.177-0.513-0.43c-0.053-0.286,0.133-0.562,0.417-0.616l2.453-0.465				c0.282-0.054,0.557,0.135,0.61,0.421c0.053,0.286-0.133,0.562-0.417,0.616l-2.453,0.465C25.439,13.1,25.407,13.103,25.375,13.103z				"
                                ></path>
                                <path
                                  d="M26.561,18.732c-0.102,0-0.204-0.03-0.295-0.092l-2.061-1.422c-0.238-0.164-0.299-0.493-0.136-0.733				c0.163-0.241,0.488-0.302,0.727-0.138l2.061,1.422c0.238,0.164,0.3,0.493,0.136,0.733C26.891,18.652,26.728,18.732,26.561,18.732z				"
                                ></path>
                                <path
                                  d="M18.877,8.62c-0.247,0-0.466-0.177-0.513-0.43l-0.461-2.476c-0.053-0.286,0.133-0.562,0.417-0.616				c0.284-0.054,0.557,0.135,0.61,0.421l0.461,2.476c0.053,0.286-0.133,0.562-0.417,0.616C18.942,8.617,18.909,8.62,18.877,8.62z"
                                ></path>
                                <path
                                  d="M23.046,9.503c-0.102,0-0.204-0.03-0.294-0.092c-0.238-0.164-0.3-0.493-0.137-0.733l1.409-2.08				c0.163-0.241,0.488-0.302,0.726-0.138c0.238,0.164,0.3,0.493,0.137,0.733l-1.409,2.08C23.377,9.423,23.213,9.503,23.046,9.503z"
                                ></path>
                                <path
                                  d="M19.448,24.133H4.217C1.892,24.133,0,22.223,0,19.876c0-2.229,1.706-4.062,3.868-4.239				c-0.254-2.059,0.328-4.124,1.637-5.752c1.443-1.793,3.582-2.821,5.87-2.821c4.171,0,7.564,3.425,7.564,7.634				c0,0.304-0.018,0.608-0.054,0.911c0.19-0.026,0.381-0.04,0.572-0.04c2.333,0,4.232,1.921,4.232,4.282				C23.689,22.212,21.786,24.133,19.448,24.133z M4.211,16.678c-1.745,0-3.165,1.434-3.165,3.198c0,1.765,1.423,3.201,3.172,3.201				h15.23c1.762,0,3.195-1.447,3.195-3.225c0-1.779-1.429-3.226-3.186-3.226c-0.355,0-0.709,0.061-1.053,0.181l-0.894,0.312				l0.213-0.93c0.113-0.491,0.17-0.992,0.17-1.49c0-3.628-2.924-6.579-6.518-6.579c-1.972,0-3.815,0.886-5.059,2.431				c-1.244,1.546-1.726,3.552-1.321,5.502l0.142,0.684l-0.691-0.05C4.367,16.681,4.289,16.678,4.211,16.678z"
                                ></path>
                              </g>
                              <path
                                d="M10.458,58c-0.17,0-0.337-0.084-0.437-0.238c-0.159-0.243-0.092-0.571,0.149-0.731l42.58-28.303			c0.241-0.16,0.565-0.093,0.724,0.151c0.159,0.243,0.092,0.571-0.149,0.731l-42.58,28.303C10.656,57.972,10.556,58,10.458,58z"
                              ></path>
                              <path
                                d="M24.021,58c-0.17,0-0.337-0.084-0.437-0.238c-0.159-0.243-0.092-0.571,0.149-0.731l29.016-19.288			c0.241-0.16,0.565-0.093,0.724,0.15c0.159,0.243,0.092,0.571-0.149,0.731L24.308,57.913C24.22,57.972,24.12,58,24.021,58z"
                              ></path>
                              <path
                                d="M37.582,58c-0.17,0-0.337-0.084-0.437-0.238c-0.159-0.243-0.092-0.571,0.149-0.731l15.455-10.274			c0.241-0.16,0.565-0.093,0.724,0.15c0.159,0.243,0.092,0.571-0.149,0.731L37.869,57.913C37.78,57.972,37.68,58,37.582,58z"
                              ></path>
                              <path
                                d="M32.616,43.271c-0.052,0-0.104-0.008-0.157-0.024L1.165,33.346c-0.276-0.087-0.429-0.383-0.342-0.661			c0.086-0.278,0.379-0.433,0.655-0.346l31.295,9.901c0.276,0.087,0.429,0.383,0.342,0.661			C33.045,43.127,32.839,43.271,32.616,43.271z"
                              ></path>
                              <path
                                d="M24.575,48.615c-0.052,0-0.104-0.008-0.157-0.024L3.62,42.011c-0.276-0.087-0.429-0.383-0.342-0.661			c0.086-0.278,0.38-0.433,0.655-0.346l20.799,6.58c0.275,0.087,0.429,0.383,0.342,0.661C25.004,48.471,24.798,48.615,24.575,48.615z			"
                              ></path>
                              <path
                                d="M16.531,53.962c-0.052,0-0.104-0.008-0.157-0.024l-10.3-3.26c-0.276-0.087-0.429-0.383-0.342-0.661			c0.086-0.278,0.38-0.433,0.655-0.346l10.3,3.26c0.276,0.087,0.429,0.383,0.342,0.661C16.96,53.818,16.754,53.962,16.531,53.962z"
                              ></path>
                              <g>
                                <path
                                  d="M35.845,32.694c-0.91,0-1.783-0.343-2.456-0.967c-2.237-2.08-4.904-5.171-4.904-8.092c0-4.5,6.61-17.98,6.891-18.552				l0.468-0.951l0.468,0.951c0.027,0.054,2.702,5.502,4.692,10.616l0.036,0.093v0.1c0,0.291-0.234,0.529-0.523,0.529				c-0.233,0-0.431-0.153-0.498-0.366c-1.474-3.784-3.323-7.748-4.175-9.532c-1.535,3.217-6.314,13.523-6.314,17.112				c0,2.672,2.86,5.73,4.565,7.315c0.479,0.444,1.1,0.688,1.749,0.688c0.648,0,1.269-0.244,1.747-0.686				c1.64-1.524,3.73-3.811,4.371-6.044c0.08-0.28,0.37-0.441,0.648-0.36c0.277,0.081,0.437,0.374,0.357,0.654				c-0.708,2.467-2.93,4.911-4.668,6.527C37.627,32.352,36.756,32.694,35.845,32.694z"
                                ></path>
                                <path
                                  d="M35.845,41.126c-0.289,0-0.523-0.236-0.523-0.528v-8.431c0-0.291,0.234-0.528,0.523-0.528s0.523,0.236,0.523,0.528v8.431				C36.368,40.889,36.134,41.126,35.845,41.126z"
                                ></path>
                                <path
                                  d="M38.018,24.571c-0.289,0-0.523-0.236-0.523-0.528v-2.235c0-0.291,0.234-0.528,0.523-0.528				c0.289,0,0.523,0.236,0.523,0.528v2.235C38.541,24.334,38.307,24.571,38.018,24.571z"
                                ></path>
                                <path
                                  d="M34.648,24.571c-0.289,0-0.523-0.236-0.523-0.528v-2.235c0-0.291,0.234-0.528,0.523-0.528				c0.289,0,0.523,0.236,0.523,0.528v2.235C35.171,24.334,34.937,24.571,34.648,24.571z"
                                ></path>
                                <path
                                  d="M35.419,17.185c-0.289,0-0.523-0.236-0.523-0.528v-2.235c0-0.291,0.234-0.528,0.523-0.528				c0.289,0,0.523,0.236,0.523,0.528v2.235C35.941,16.948,35.707,17.185,35.419,17.185z"
                                ></path>
                              </g>
                              <g>
                                <path
                                  d="M46.643,28.563c-0.911,0-1.784-0.344-2.457-0.968c-2.237-2.074-4.903-5.162-4.903-8.09c0-4.5,6.609-17.982,6.89-18.553				L46.642,0l0.468,0.951C47.391,1.523,54,15.005,54,19.505c0,2.929-2.668,6.018-4.906,8.093				C48.423,28.22,47.553,28.563,46.643,28.563z M46.642,2.392c-1.535,3.218-6.313,13.524-6.313,17.113				c0,2.679,2.86,5.732,4.565,7.313c0.479,0.445,1.101,0.69,1.749,0.69c0.647,0,1.266-0.244,1.744-0.687				c1.706-1.582,4.567-4.636,4.567-7.316C52.954,15.915,48.177,5.61,46.642,2.392z"
                                ></path>
                                <path
                                  d="M46.642,33.948c-0.289,0-0.523-0.236-0.523-0.528v-5.385c0-0.291,0.234-0.528,0.523-0.528				c0.289,0,0.523,0.236,0.523,0.528v5.385C47.165,33.711,46.931,33.948,46.642,33.948z"
                                ></path>
                                <path
                                  d="M48.815,20.44c-0.289,0-0.523-0.236-0.523-0.528v-2.235c0-0.291,0.234-0.528,0.523-0.528c0.289,0,0.523,0.236,0.523,0.528				v2.235C49.338,20.204,49.104,20.44,48.815,20.44z"
                                ></path>
                                <path
                                  d="M45.445,20.44c-0.289,0-0.523-0.236-0.523-0.528v-2.235c0-0.291,0.234-0.528,0.523-0.528c0.289,0,0.523,0.236,0.523,0.528				v2.235C45.968,20.204,45.734,20.44,45.445,20.44z"
                                ></path>
                                <path
                                  d="M46.215,13.054c-0.289,0-0.523-0.236-0.523-0.528v-2.235c0-0.291,0.234-0.528,0.523-0.528				c0.289,0,0.523,0.236,0.523,0.528v2.235C46.738,12.818,46.504,13.054,46.215,13.054z"
                                ></path>
                              </g>
                            </g>
                          </svg>
                        </div>
                      </div>
                      <div class="unit-body">
                        <h4 class="box-icon-classic-title">
                          <a href="#">No additives</a>
                        </h4>
                        <p class="box-icon-classic-text">
                          Our smoothies, healthy drinks, and energy bowls
                          contain no artificial additives, only vital elements.
                        </p>
                      </div>
                    </div>
                  </article>
                </div>
                <div class="col-sm-6 col-md-12">
                  <article
                    class="box-icon-classic box-icon-nancy-left text-center text-lg-left wow fadeInRight"
                    data-wow-delay=".1s"
                  >
                    <div class="unit flex-column flex-lg-row">
                      <div class="unit-left">
                        <div class="box-icon-classic-svg">
                          <svg
                            class="svg-icon"
                            x="0px"
                            y="0px"
                            width="54px"
                            height="52px"
                            viewBox="0 0 54 52"
                            enable-background="new 0 0 54 52"
                          >
                            <g>
                              <g>
                                <path
                                  d="M7.924,38.012H7.008c0-2.282-0.391-3.96-2.392-5.78c-0.108-0.098-0.33-0.269-0.586-0.467				c-1.053-0.811-3.014-2.322-3.967-4.015L0,27.638v-7.517l0.853,1.516c0.858,1.525,2.72,2.959,3.721,3.73				c0.295,0.227,0.508,0.392,0.644,0.515c1.176,1.07,1.861,2.114,2.248,3.223c0.387-1.109,1.072-2.153,2.248-3.223				c0.136-0.123,0.349-0.287,0.644-0.514c1.001-0.771,2.864-2.205,3.722-3.731l0.853-1.516v7.517l-0.063,0.112				c-0.953,1.694-2.914,3.204-3.968,4.016c-0.257,0.198-0.478,0.368-0.586,0.466C8.315,34.053,7.924,35.73,7.924,38.012z				M0.916,27.375c0.883,1.484,2.681,2.868,3.658,3.621c0.295,0.228,0.509,0.392,0.645,0.516c1.176,1.07,1.861,2.114,2.248,3.223				c0.387-1.109,1.072-2.153,2.248-3.223c0.136-0.123,0.349-0.288,0.644-0.515c0.977-0.752,2.775-2.137,3.658-3.621v-4.049				c-1.006,1.188-2.32,2.2-3.116,2.813c-0.256,0.197-0.478,0.368-0.585,0.466c-2.001,1.82-2.392,3.498-2.392,5.78H7.008				c0-2.282-0.391-3.959-2.392-5.78c-0.108-0.098-0.329-0.269-0.586-0.466c-0.796-0.613-2.109-1.624-3.115-2.812V27.375z"
                                ></path>
                                <path
                                  d="M4.05,26.037c-0.197,0-0.38-0.134-0.439-0.342c-0.617-2.167-0.718-4.141,0.794-6.734c0.093-0.16,0.248-0.382,0.462-0.688				c0.604-0.867,1.615-2.317,2.174-3.763l0.425-1.098l0.425,1.098c0.559,1.446,1.57,2.896,2.174,3.763				c0.214,0.307,0.368,0.528,0.461,0.687c1.512,2.593,1.411,4.568,0.795,6.735c-0.072,0.253-0.327,0.398-0.57,0.322				c-0.242-0.075-0.38-0.342-0.308-0.595c0.563-1.977,0.642-3.664-0.698-5.963c-0.074-0.126-0.234-0.356-0.42-0.623				c-0.499-0.715-1.263-1.813-1.859-3.011c-0.595,1.198-1.36,2.296-1.858,3.011c-0.186,0.267-0.347,0.497-0.421,0.624				c-1.34,2.298-1.261,3.985-0.698,5.962c0.072,0.253-0.066,0.52-0.308,0.595C4.138,26.031,4.094,26.037,4.05,26.037z"
                                ></path>
                                <path
                                  d="M9.456,27.268c-0.202,0-0.387-0.14-0.442-0.354c-0.173-0.669-0.467-1.352-0.897-2.09				c-0.075-0.128-0.238-0.362-0.427-0.634c-0.069-0.099-0.144-0.207-0.224-0.323c-0.08,0.116-0.156,0.225-0.224,0.324				c-0.189,0.272-0.352,0.506-0.427,0.634c-0.43,0.737-0.724,1.421-0.897,2.09C5.852,27.17,5.6,27.32,5.356,27.251				c-0.244-0.069-0.388-0.332-0.322-0.587c0.196-0.758,0.523-1.522,0.999-2.338c0.094-0.161,0.251-0.386,0.468-0.699				c0.175-0.252,0.374-0.538,0.589-0.861l0.376-0.564l0.376,0.564c0.215,0.323,0.414,0.608,0.589,0.86				c0.217,0.312,0.375,0.538,0.469,0.699c0.476,0.816,0.803,1.58,0.999,2.338c0.066,0.255-0.078,0.518-0.322,0.587				C9.536,27.263,9.496,27.268,9.456,27.268z"
                                ></path>
                                <path
                                  d="M7.924,43.64H7.008c0-2.282-0.391-3.96-2.392-5.78c-0.108-0.098-0.33-0.269-0.586-0.467				c-1.053-0.811-3.014-2.322-3.967-4.015L0,33.267v-7.517l0.853,1.516c0.858,1.525,2.72,2.959,3.721,3.73				c0.295,0.227,0.508,0.392,0.644,0.515c1.176,1.07,1.861,2.114,2.248,3.223c0.387-1.109,1.072-2.153,2.248-3.223				c0.136-0.123,0.349-0.287,0.644-0.515c1.001-0.771,2.864-2.205,3.722-3.731l0.853-1.516v7.517l-0.063,0.112				c-0.953,1.694-2.914,3.204-3.968,4.016c-0.257,0.198-0.478,0.368-0.586,0.466C8.315,39.681,7.924,41.358,7.924,43.64z				M0.916,33.003c0.883,1.484,2.681,2.868,3.658,3.621c0.295,0.228,0.509,0.392,0.645,0.516c1.176,1.07,1.861,2.114,2.248,3.223				c0.387-1.109,1.072-2.153,2.248-3.223c0.136-0.123,0.349-0.288,0.644-0.515c0.977-0.752,2.775-2.137,3.658-3.621v-4.049				c-1.006,1.188-2.32,2.2-3.116,2.813c-0.256,0.197-0.478,0.368-0.585,0.466c-2.001,1.82-2.392,3.498-2.392,5.78H7.008				c0-2.282-0.391-3.959-2.392-5.78c-0.108-0.098-0.329-0.269-0.586-0.466c-0.796-0.613-2.109-1.624-3.115-2.812V33.003z"
                                ></path>
                                <path
                                  d="M7.924,49.269H7.008c0-2.282-0.391-3.96-2.392-5.78c-0.108-0.098-0.33-0.269-0.587-0.467				c-0.52-0.4-1.231-0.948-1.944-1.604C0.76,40.198,0,38.439,0,36.592v-5.215l0.853,1.516c0.858,1.525,2.72,2.959,3.721,3.73				c0.295,0.227,0.508,0.392,0.644,0.515c1.176,1.07,1.861,2.114,2.248,3.223c0.387-1.109,1.072-2.153,2.248-3.223				c0.136-0.123,0.349-0.287,0.643-0.515c1.001-0.771,2.864-2.205,3.722-3.731l0.853-1.516v5.214c0,1.847-0.76,3.606-2.086,4.826				c-0.713,0.656-1.425,1.204-1.945,1.605c-0.257,0.198-0.479,0.368-0.586,0.466C8.315,45.309,7.924,46.987,7.924,49.269z				M0.916,34.582v2.01c0,1.572,0.647,3.069,1.775,4.107c0.683,0.629,1.376,1.162,1.882,1.552c0.296,0.228,0.509,0.392,0.645,0.516				c1.176,1.07,1.861,2.114,2.248,3.223c0.387-1.109,1.072-2.153,2.248-3.223c0.136-0.124,0.349-0.288,0.644-0.515				c0.506-0.39,1.199-0.924,1.883-1.552c1.128-1.038,1.775-2.535,1.775-4.107v-2.01c-1.006,1.188-2.32,2.2-3.116,2.813				c-0.256,0.197-0.478,0.368-0.585,0.466c-2.001,1.82-2.392,3.498-2.392,5.78H7.008c0-2.282-0.391-3.96-2.392-5.78				c-0.108-0.098-0.329-0.269-0.586-0.466C3.235,36.781,1.921,35.77,0.916,34.582z"
                                ></path>
                                <path
                                  d="M0.458,22.358C0.205,22.358,0,22.144,0,21.88v-9.71c0-0.264,0.205-0.479,0.458-0.479c0.253,0,0.458,0.214,0.458,0.479				v9.71C0.916,22.144,0.711,22.358,0.458,22.358z"
                                ></path>
                                <path
                                  d="M7.466,15.168c-0.253,0-0.458-0.214-0.458-0.479V8.985c0-0.264,0.205-0.479,0.458-0.479c0.253,0,0.458,0.214,0.458,0.479				v5.704C7.924,14.953,7.719,15.168,7.466,15.168z"
                                ></path>
                                <path
                                  d="M14.475,22.358c-0.253,0-0.458-0.214-0.458-0.479v-9.71c0-0.264,0.205-0.479,0.458-0.479c0.253,0,0.458,0.214,0.458,0.479				v9.71C14.933,22.144,14.728,22.358,14.475,22.358z"
                                ></path>
                                <path
                                  d="M7.466,52c-0.253,0-0.458-0.214-0.458-0.479V31.347c0-0.264,0.205-0.479,0.458-0.479c0.253,0,0.458,0.214,0.458,0.479				v20.175C7.924,51.786,7.719,52,7.466,52z"
                                ></path>
                              </g>
                              <g>
                                <path
                                  d="M27.458,35.31h-0.916c0-2.766-0.475-4.8-2.902-7.008c-0.132-0.12-0.387-0.316-0.709-0.565				c-1.259-0.97-3.602-2.774-4.736-4.79l-0.063-0.112v-8.643l0.853,1.516c1.039,1.847,3.284,3.576,4.49,4.505				c0.339,0.261,0.607,0.467,0.767,0.613c1.489,1.355,2.317,2.677,2.758,4.093c0.441-1.416,1.268-2.738,2.758-4.093				c0.16-0.146,0.428-0.352,0.767-0.613c1.206-0.929,3.452-2.658,4.49-4.505l0.853-1.516v8.643l-0.063,0.112				c-1.134,2.016-3.477,3.82-4.736,4.79c-0.322,0.248-0.577,0.444-0.709,0.564C27.933,30.511,27.458,32.544,27.458,35.31z				M19.048,22.573c1.064,1.805,3.245,3.484,4.427,4.395c0.339,0.261,0.607,0.468,0.767,0.613c1.489,1.355,2.317,2.677,2.758,4.093				c0.441-1.416,1.268-2.738,2.758-4.093c0.16-0.146,0.428-0.352,0.767-0.613c1.182-0.91,3.363-2.59,4.427-4.395V17.43				c-1.217,1.501-2.889,2.788-3.884,3.554c-0.322,0.248-0.577,0.444-0.709,0.564c-2.427,2.208-2.901,4.242-2.901,7.008h-0.916				c0-2.766-0.475-4.799-2.902-7.008c-0.132-0.12-0.387-0.316-0.709-0.564c-0.995-0.766-2.666-2.053-3.884-3.554V22.573z"
                                ></path>
                                <path
                                  d="M31.099,20.845c-0.043,0-0.087-0.006-0.131-0.02c-0.242-0.075-0.38-0.342-0.308-0.595				c0.682-2.398,0.779-4.444-0.848-7.233c-0.09-0.154-0.275-0.419-0.509-0.755C28.684,11.354,27.721,9.972,27,8.476				c-0.721,1.496-1.684,2.878-2.304,3.767c-0.234,0.335-0.418,0.6-0.509,0.755c-1.626,2.788-1.53,4.834-0.847,7.232				c0.072,0.253-0.066,0.52-0.308,0.595c-0.242,0.075-0.497-0.069-0.569-0.322c-0.733-2.576-0.854-4.923,0.943-8.004				c0.11-0.188,0.304-0.467,0.55-0.82c0.727-1.044,1.944-2.79,2.619-4.535L27,6.046l0.425,1.098c0.675,1.745,1.892,3.492,2.619,4.535				c0.246,0.353,0.44,0.631,0.55,0.819c1.797,3.081,1.677,5.428,0.944,8.004C31.479,20.71,31.296,20.845,31.099,20.845z"
                                ></path>
                                <path
                                  d="M29.388,22.322c-0.202,0-0.387-0.14-0.442-0.354c-0.21-0.811-0.566-1.639-1.086-2.532				c-0.091-0.156-0.278-0.425-0.515-0.766c-0.104-0.149-0.22-0.316-0.345-0.497c-0.124,0.181-0.241,0.348-0.344,0.496				c-0.237,0.341-0.425,0.61-0.516,0.767c-0.521,0.893-0.876,1.721-1.086,2.532c-0.066,0.255-0.317,0.406-0.562,0.337				c-0.244-0.069-0.388-0.332-0.322-0.587c0.233-0.899,0.622-1.809,1.188-2.78c0.111-0.19,0.308-0.473,0.557-0.831				c0.211-0.303,0.45-0.646,0.709-1.035L27,16.507l0.376,0.565c0.259,0.389,0.498,0.733,0.709,1.036				c0.249,0.358,0.446,0.641,0.557,0.83c0.567,0.971,0.955,1.881,1.188,2.781c0.066,0.255-0.078,0.518-0.322,0.587				C29.468,22.316,29.428,22.322,29.388,22.322z"
                                ></path>
                                <path
                                  d="M27.458,42.064h-0.916c0-2.766-0.475-4.8-2.902-7.008c-0.132-0.12-0.387-0.316-0.709-0.565				c-1.259-0.97-3.602-2.774-4.736-4.79l-0.063-0.112v-8.643l0.853,1.516c1.039,1.847,3.284,3.576,4.49,4.505				c0.339,0.261,0.607,0.467,0.767,0.613c1.489,1.355,2.317,2.677,2.758,4.093c0.441-1.416,1.268-2.738,2.758-4.093				c0.16-0.146,0.428-0.352,0.767-0.613c1.206-0.929,3.452-2.658,4.49-4.505l0.853-1.516v8.643l-0.063,0.112				c-1.134,2.016-3.477,3.82-4.736,4.79c-0.322,0.248-0.577,0.444-0.709,0.565C27.933,37.265,27.458,39.298,27.458,42.064z				M19.048,29.327c1.064,1.805,3.244,3.484,4.427,4.395c0.339,0.261,0.607,0.468,0.767,0.614c1.489,1.355,2.317,2.677,2.758,4.093				c0.441-1.416,1.268-2.738,2.758-4.093c0.16-0.146,0.428-0.352,0.767-0.613c1.182-0.91,3.363-2.59,4.427-4.395v-5.143				c-1.217,1.501-2.889,2.788-3.884,3.554c-0.322,0.248-0.577,0.444-0.709,0.564c-2.427,2.208-2.901,4.242-2.901,7.008h-0.916				c0-2.766-0.475-4.799-2.902-7.008c-0.132-0.12-0.387-0.316-0.709-0.564c-0.995-0.766-2.666-2.053-3.884-3.554V29.327z"
                                ></path>
                                <path
                                  d="M27.458,48.818h-0.916c0-2.766-0.475-4.8-2.902-7.008c-0.132-0.12-0.387-0.316-0.709-0.565				c-0.622-0.479-1.474-1.135-2.327-1.92c-1.571-1.446-2.472-3.53-2.472-5.719v-5.906l0.853,1.516				c1.039,1.847,3.284,3.576,4.49,4.505c0.339,0.261,0.607,0.467,0.767,0.613c1.489,1.355,2.317,2.677,2.758,4.093				c0.441-1.416,1.268-2.738,2.758-4.093c0.16-0.146,0.428-0.352,0.767-0.613c1.206-0.929,3.452-2.658,4.49-4.505l0.853-1.516v5.906				c0,2.189-0.901,4.273-2.472,5.719c-0.853,0.785-1.705,1.441-2.327,1.92c-0.323,0.248-0.577,0.445-0.709,0.565				C27.933,44.018,27.458,46.052,27.458,48.818z M19.048,30.938v2.669c0,1.914,0.788,3.737,2.161,5				c0.823,0.757,1.657,1.399,2.265,1.868c0.339,0.261,0.607,0.468,0.768,0.614c1.489,1.355,2.317,2.677,2.758,4.093				c0.441-1.416,1.268-2.738,2.758-4.093c0.16-0.146,0.428-0.352,0.767-0.613c0.609-0.469,1.442-1.111,2.265-1.868				c1.374-1.264,2.161-3.087,2.161-5v-2.669c-1.217,1.501-2.889,2.788-3.884,3.554c-0.322,0.248-0.577,0.444-0.709,0.564				c-2.427,2.208-2.901,4.242-2.901,7.008h-0.916c0-2.766-0.475-4.799-2.902-7.008c-0.132-0.12-0.387-0.316-0.709-0.564				C21.937,33.726,20.265,32.439,19.048,30.938z"
                                ></path>
                                <path
                                  d="M18.59,16.43c-0.253,0-0.458-0.214-0.458-0.479V4.3c0-0.264,0.205-0.479,0.458-0.479c0.253,0,0.458,0.214,0.458,0.479				v11.652C19.048,16.216,18.843,16.43,18.59,16.43z"
                                ></path>
                                <path
                                  d="M27,7.801c-0.253,0-0.458-0.214-0.458-0.479V0.479C26.542,0.214,26.747,0,27,0s0.458,0.214,0.458,0.479v6.844				C27.458,7.587,27.253,7.801,27,7.801z"
                                ></path>
                                <path
                                  d="M35.41,16.43c-0.253,0-0.458-0.214-0.458-0.479V4.3c0-0.264,0.205-0.479,0.458-0.479c0.253,0,0.458,0.214,0.458,0.479				v11.652C35.868,16.216,35.663,16.43,35.41,16.43z"
                                ></path>
                                <path
                                  d="M27,52c-0.253,0-0.458-0.214-0.458-0.479v-24.21c0-0.264,0.205-0.479,0.458-0.479s0.458,0.214,0.458,0.479v24.21				C27.458,51.786,27.253,52,27,52z"
                                ></path>
                              </g>
                              <g>
                                <path
                                  d="M46.992,38.012h-0.916c0-2.282-0.391-3.959-2.392-5.78c-0.108-0.098-0.329-0.269-0.586-0.466				c-1.054-0.811-3.015-2.322-3.968-4.016l-0.063-0.112v-7.517l0.853,1.516c0.858,1.525,2.721,2.96,3.722,3.731				c0.295,0.227,0.508,0.391,0.644,0.515c1.176,1.07,1.861,2.115,2.248,3.223c0.387-1.109,1.072-2.153,2.248-3.223				c0.136-0.123,0.349-0.288,0.644-0.515c1.001-0.771,2.864-2.205,3.721-3.73L54,20.121v7.517l-0.063,0.112				c-0.953,1.694-2.913,3.204-3.967,4.015c-0.257,0.198-0.479,0.369-0.586,0.467C47.383,34.053,46.992,35.73,46.992,38.012z				M39.983,27.375c0.883,1.484,2.681,2.869,3.658,3.621c0.295,0.227,0.508,0.391,0.644,0.515c1.176,1.07,1.861,2.114,2.248,3.223				c0.387-1.109,1.072-2.153,2.248-3.223c0.136-0.124,0.349-0.288,0.644-0.515c0.977-0.752,2.775-2.137,3.658-3.621v-4.049				c-1.006,1.188-2.319,2.199-3.115,2.812c-0.257,0.198-0.478,0.368-0.586,0.466c-2,1.82-2.392,3.498-2.392,5.78h-0.916				c0-2.282-0.391-3.959-2.392-5.78c-0.108-0.098-0.329-0.268-0.585-0.466c-0.796-0.613-2.11-1.624-3.116-2.813V27.375z"
                                ></path>
                                <path
                                  d="M49.95,26.037c-0.043,0-0.087-0.006-0.131-0.02c-0.242-0.075-0.38-0.342-0.308-0.595c0.563-1.977,0.642-3.664-0.698-5.963				c-0.074-0.126-0.234-0.356-0.42-0.623c-0.498-0.715-1.263-1.812-1.858-3.011c-0.595,1.199-1.36,2.296-1.859,3.011				c-0.186,0.267-0.346,0.497-0.42,0.623c-1.34,2.298-1.261,3.985-0.698,5.962c0.072,0.253-0.066,0.52-0.308,0.595				c-0.242,0.076-0.497-0.069-0.57-0.322c-0.617-2.167-0.718-4.141,0.794-6.734c0.094-0.16,0.248-0.381,0.462-0.688				c0.604-0.867,1.615-2.318,2.174-3.763l0.425-1.098l0.425,1.098c0.559,1.445,1.57,2.896,2.174,3.763				c0.214,0.307,0.368,0.529,0.462,0.688c1.513,2.593,1.412,4.568,0.794,6.735C50.329,25.903,50.147,26.037,49.95,26.037z"
                                ></path>
                                <path
                                  d="M48.524,27.268c-0.202,0-0.387-0.14-0.442-0.354c-0.173-0.669-0.467-1.352-0.897-2.09				c-0.074-0.128-0.238-0.362-0.426-0.633c-0.069-0.099-0.145-0.208-0.225-0.324c-0.081,0.117-0.157,0.226-0.226,0.325				c-0.189,0.271-0.352,0.505-0.426,0.633c-0.43,0.738-0.724,1.421-0.897,2.09c-0.066,0.255-0.317,0.406-0.562,0.337				c-0.244-0.069-0.388-0.332-0.322-0.587c0.196-0.757,0.522-1.521,0.999-2.338c0.094-0.161,0.251-0.386,0.467-0.697				c0.176-0.252,0.375-0.538,0.59-0.862l0.376-0.565l0.376,0.565c0.215,0.323,0.414,0.609,0.59,0.861				c0.217,0.312,0.374,0.537,0.468,0.698c0.476,0.816,0.803,1.58,0.999,2.338c0.066,0.255-0.078,0.518-0.322,0.587				C48.604,27.263,48.563,27.268,48.524,27.268z"
                                ></path>
                                <path
                                  d="M46.992,43.64h-0.916c0-2.282-0.391-3.96-2.392-5.78c-0.108-0.098-0.329-0.269-0.586-0.466				c-1.054-0.811-3.015-2.322-3.968-4.016l-0.063-0.112V25.75l0.853,1.516c0.858,1.525,2.721,2.96,3.722,3.731				c0.295,0.227,0.508,0.391,0.644,0.515c1.176,1.07,1.861,2.115,2.248,3.223c0.387-1.109,1.072-2.153,2.248-3.223				c0.136-0.123,0.349-0.288,0.644-0.515c1.001-0.771,2.864-2.205,3.721-3.73L54,25.749v7.517l-0.063,0.112				c-0.953,1.694-2.913,3.204-3.967,4.015c-0.257,0.198-0.479,0.369-0.586,0.467C47.383,39.681,46.992,41.358,46.992,43.64z				M39.983,33.003c0.883,1.484,2.681,2.869,3.658,3.621c0.295,0.227,0.508,0.391,0.644,0.515c1.176,1.07,1.861,2.114,2.248,3.223				c0.387-1.109,1.072-2.153,2.248-3.223c0.136-0.124,0.349-0.288,0.644-0.515c0.977-0.752,2.775-2.137,3.658-3.621v-4.049				c-1.006,1.188-2.319,2.199-3.115,2.812c-0.257,0.198-0.478,0.368-0.586,0.466c-2,1.82-2.392,3.498-2.392,5.78h-0.916				c0-2.282-0.391-3.959-2.392-5.78c-0.108-0.098-0.329-0.268-0.585-0.466c-0.796-0.613-2.11-1.624-3.116-2.813V33.003z"
                                ></path>
                                <path
                                  d="M46.992,49.269h-0.916c0-2.282-0.391-3.96-2.392-5.78c-0.108-0.098-0.329-0.269-0.586-0.467				c-0.52-0.4-1.231-0.948-1.945-1.605c-1.326-1.22-2.086-2.979-2.086-4.826v-5.214l0.853,1.516c0.858,1.525,2.721,2.96,3.722,3.731				c0.295,0.227,0.508,0.391,0.644,0.515c1.176,1.07,1.861,2.114,2.248,3.223c0.387-1.109,1.072-2.153,2.248-3.223				c0.136-0.123,0.349-0.288,0.644-0.515c1.001-0.771,2.864-2.205,3.721-3.73L54,31.378v5.215c0,1.847-0.76,3.606-2.086,4.826				c-0.713,0.656-1.425,1.205-1.945,1.605c-0.257,0.198-0.478,0.368-0.586,0.466C47.383,45.309,46.992,46.986,46.992,49.269z				M39.983,34.582v2.01c0,1.572,0.647,3.069,1.775,4.107c0.683,0.629,1.377,1.163,1.883,1.552c0.295,0.227,0.509,0.392,0.644,0.515				c1.176,1.07,1.861,2.114,2.248,3.223c0.387-1.109,1.072-2.153,2.248-3.223c0.136-0.123,0.349-0.288,0.644-0.515				c0.506-0.39,1.199-0.924,1.883-1.553c1.128-1.038,1.775-2.535,1.775-4.107v-2.01c-1.006,1.188-2.319,2.199-3.115,2.812				c-0.257,0.198-0.478,0.368-0.586,0.466c-2,1.82-2.392,3.498-2.392,5.78h-0.916c0-2.282-0.391-3.959-2.392-5.78				c-0.108-0.098-0.329-0.268-0.585-0.466C42.303,36.782,40.989,35.77,39.983,34.582z"
                                ></path>
                                <path
                                  d="M39.525,22.358c-0.253,0-0.458-0.214-0.458-0.479v-9.71c0-0.264,0.205-0.479,0.458-0.479c0.253,0,0.458,0.214,0.458,0.479				v9.71C39.983,22.144,39.778,22.358,39.525,22.358z"
                                ></path>
                                <path
                                  d="M46.534,15.168c-0.253,0-0.458-0.214-0.458-0.479V8.985c0-0.264,0.205-0.479,0.458-0.479s0.458,0.214,0.458,0.479v5.704				C46.992,14.953,46.787,15.168,46.534,15.168z"
                                ></path>
                                <path
                                  d="M53.542,22.358c-0.253,0-0.458-0.214-0.458-0.479v-9.71c0-0.264,0.205-0.479,0.458-0.479S54,11.906,54,12.17v9.71				C54,22.144,53.795,22.358,53.542,22.358z"
                                ></path>
                                <path
                                  d="M46.534,52c-0.253,0-0.458-0.214-0.458-0.479V31.347c0-0.264,0.205-0.479,0.458-0.479s0.458,0.214,0.458,0.479v20.175				C46.992,51.786,46.787,52,46.534,52z"
                                ></path>
                              </g>
                            </g>
                          </svg>
                        </div>
                      </div>
                      <div class="unit-body">
                        <h4 class="box-icon-classic-title">
                          <a href="#">A lot of energy</a>
                        </h4>
                        <p class="box-icon-classic-text">
                          We designed our products as the universal organic
                          energetics that can quench your thirst.
                        </p>
                      </div>
                    </div>
                  </article>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- New Flavors-->
      <section class="section section-xxl bg-default">
        <div class="container">
          <h2 class="text-transform-capitalize wow fadeScale">Os Nossos Produtos</h2>
          <div class="row row-lg row-30 row-lg-50">

          <?php
                                        $res_produto = $pdo->prepare("SELECT * FROM produto");
                                        $res_produto->execute();
                                        $row_produto = $res_produto->fetch();
                                        if ($res_produto->rowCount()>0) {

                                            for ($i=1; $i<=$res_produto->rowCount(); $i++) {

                                              $url = './produtos/'.$row_produto['id_produto'].'/1.jpg';
                                                echo '
                                                <div class="col-sm-6 col-md-4 col-lg-3">
              <!-- Product-->
              <article class="product wow fadeInRight">
                <div class="product-body">
                  <div class="product-figure">
                    <img
                      src='.$url.'
                      alt='.$row_produto['nome'].'
                      width="1100"
                      height="1100"
                    />
                  </div>
                  
                  <h5 class="product-title">
                    <a href="single-product.html">'.$row_produto['nome'].'</a>
                  </h5>
                  <!-- <div class="product-price-wrap">
                    <div class="product-price product-price-old">$30.00</div>
                    <div class="product-price">$23.00</div>
                  </div> -->
                </div>
                <!-- <span class="product-badge product-badge-sale">Sale</span> -->
                <div class="product-button-wrap">
                  <div class="product-button">
                    <a
                      class="button button-secondary button-zakaria fl-bigmug-line-search74"
                      href="single-product.html"
                    ></a>
                  </div>
                  <!-- <div class="product-button">
                    <a
                      class="button button-primary button-zakaria fl-bigmug-line-shopping202"
                      href="#"
                    ></a>
                  </div> -->
                </div>
              </article>
            </div>';
                                                $row_produto = $res_produto->fetch();
                                            }
                                        }
                                    ?>
            
          </div>
        </div>
      </section>
      <!-- Counter Modern-->
      <section
        class="parallax-container"
        data-parallax-img="images/parallax-2.jpg"
      >
        <div class="parallax-content section-xxl context-dark">
          <div class="container">
            <div class="row row-30 justify-content-center">
              <div class="col-6 col-sm-3">
                <div class="counter-modern">
                  <h2 class="counter-modern-number">
                    <span class="counter">245</span>
                  </h2>
                  <div class="counter-modern-decor"></div>
                  <h5 class="counter-modern-title">
                    New drinks and<br class="d-none d-sm-block" />
                    smoothies
                  </h5>
                </div>
              </div>
              <div class="col-6 col-sm-3">
                <div class="counter-modern">
                  <h2 class="counter-modern-number">
                    <span class="counter">182</span>
                  </h2>
                  <div class="counter-modern-decor"></div>
                  <h5 class="counter-modern-title">
                    Special<br class="d-none d-sm-block" />
                    offers
                  </h5>
                </div>
              </div>
              <div class="col-6 col-sm-3">
                <div class="counter-modern">
                  <h2 class="counter-modern-number">
                    <span class="counter">1267</span>
                  </h2>
                  <div class="counter-modern-decor"></div>
                  <h5 class="counter-modern-title">
                    Satisfied<br class="d-none d-sm-block" />
                    clients
                  </h5>
                </div>
              </div>
              <div class="col-6 col-sm-3">
                <div class="counter-modern">
                  <h2 class="counter-modern-number">
                    <span class="counter">47</span>
                  </h2>
                  <div class="counter-modern-decor"></div>
                  <h5 class="counter-modern-title">
                    Partners throughout<br class="d-none d-sm-block" />
                    the USA
                  </h5>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Section Product and Clients-->
      <section class="section section-xxl bg-default text-md-left">
        <div class="container">
          <div
            class="row row-30 row-md-60 row-lg-70 justify-content-center align-items-md-center"
          >
            <div class="col-sm-8 col-md-5 col-xl-6">
              <div class="inset-xl-right-20">
                <div class="product-wrap-1 bg-image-1 block-1">
                  <!-- Owl Carousel-->
                  <div
                    class="owl-carousel owl-style-5"
                    data-items="1"
                    data-margin="30"
                    data-dots="true"
                    data-autoplay="true"
                  >
                    <article class="product-creative">
                      <div class="product-figure">
                        <img
                          src="images/product-big-1-470x324.png"
                          alt=""
                          width="470"
                          height="324"
                        />
                      </div>
                      <h4 class="product-creative-title">
                        <a href="single-product.html">Aurore Grape</a>
                      </h4>
                      <!-- <div class="product-creative-price-wrap">
                        <div
                          class="product-creative-price product-creative-price-old"
                        >
                          $20.00
                        </div>
                        <div class="product-creative-price">$15.00</div>
                      </div> -->
                    </article>
                    <article class="product-creative">
                      <div class="product-figure">
                        <img
                          src="images/product-big-2-470x324.png"
                          alt=""
                          width="470"
                          height="324"
                        />
                      </div>
                      <h4 class="product-creative-title">
                        <a href="single-product.html">Banana Berry</a>
                      </h4>
                      <!-- <div class="product-creative-price-wrap">
                        <div
                          class="product-creative-price product-creative-price-old"
                        >
                          $18.00
                        </div>
                        <div class="product-creative-price">$13.00</div>
                      </div> -->
                    </article>
                    <article class="product-creative">
                      <div class="product-figure">
                        <img
                          src="images/product-big-3-470x324.png"
                          alt=""
                          width="470"
                          height="324"
                        />
                      </div>
                      <h4 class="product-creative-title">
                        <a href="single-product.html">Chili Mango</a>
                      </h4>
                      <!-- <div class="product-creative-price-wrap">
                        <div
                          class="product-creative-price product-creative-price-old"
                        >
                          $30.00
                        </div>
                        <div class="product-creative-price">$23.00</div>
                      </div> -->
                    </article>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-7 col-xl-6">
              <h2 class="text-transform-capitalize wow fadeInRight">
                Why Organic?
              </h2>
              <!-- Bootstrap collapse-->
              <div
                class="card-group-custom card-group-corporate"
                id="accordion1"
                role="tablist"
                aria-multiselectable="false"
              >
                <!-- Bootstrap card-->
                <article
                  class="card card-custom card-corporate wow fadeInRight"
                  data-wow-delay=".1s"
                >
                  <div class="card-header" role="tab">
                    <div class="card-title">
                      <a
                        id="accordion1-card-head-qteehppu"
                        data-toggle="collapse"
                        data-parent="#accordion1"
                        href="#accordion1-card-body-unqfdlnh"
                        aria-controls="accordion1-card-body-unqfdlnh"
                        aria-expanded="true"
                        role="button"
                        >Organic drinks contain more antioxidants.
                        <div class="card-arrow">
                          <div class="icon"></div></div
                      ></a>
                    </div>
                  </div>
                  <div
                    class="collapse show"
                    id="accordion1-card-body-unqfdlnh"
                    aria-labelledby="accordion1-card-head-qteehppu"
                    data-parent="#accordion1"
                    role="tabpanel"
                  >
                    <div class="card-body">
                      <p>
                        There are many substances that can act as antioxidants;
                        chief among them are vitamins A and C, as well as
                        beta-carotene and manganese. A lack of antioxidant-rich
                        foods can lead to a greater risk of atherosclerosis.
                      </p>
                    </div>
                  </div>
                </article>
                <!-- Bootstrap card-->
                <article
                  class="card card-custom card-corporate wow fadeInRight"
                  data-wow-delay=".2s"
                >
                  <div class="card-header" role="tab">
                    <div class="card-title">
                      <a
                        class="collapsed"
                        id="accordion1-card-head-iebkfbxx"
                        data-toggle="collapse"
                        data-parent="#accordion1"
                        href="#accordion1-card-body-eephkkca"
                        aria-controls="accordion1-card-body-eephkkca"
                        aria-expanded="false"
                        role="button"
                        >Organic drinks are better for the environment.
                        <div class="card-arrow">
                          <div class="icon"></div></div
                      ></a>
                    </div>
                  </div>
                  <div
                    class="collapse"
                    id="accordion1-card-body-eephkkca"
                    aria-labelledby="accordion1-card-head-iebkfbxx"
                    data-parent="#accordion1"
                    role="tabpanel"
                  >
                    <div class="card-body">
                      <p>
                        While you’re helping yourself be as healthy as can be,
                        how about helping the environment and your fellow
                        humans? Organic farming practices help conserve water
                        and improve soil quality. Given the droughts we see
                        occurring every year and the dire reports from
                        environmental experts, these are no small reasons to go
                        organic.
                      </p>
                    </div>
                  </div>
                </article>
                <!-- Bootstrap card-->
                <article
                  class="card card-custom card-corporate wow fadeInRight"
                  data-wow-delay=".3s"
                >
                  <div class="card-header" role="tab">
                    <div class="card-title">
                      <a
                        class="collapsed"
                        id="accordion1-card-head-crpnkjpm"
                        data-toggle="collapse"
                        data-parent="#accordion1"
                        href="#accordion1-card-body-qbvvnoxx"
                        aria-controls="accordion1-card-body-qbvvnoxx"
                        aria-expanded="false"
                        role="button"
                        >They’re higher in nutrients.
                        <div class="card-arrow">
                          <div class="icon"></div></div
                      ></a>
                    </div>
                  </div>
                  <div
                    class="collapse"
                    id="accordion1-card-body-qbvvnoxx"
                    aria-labelledby="accordion1-card-head-crpnkjpm"
                    data-parent="#accordion1"
                    role="tabpanel"
                  >
                    <div class="card-body">
                      <p>
                        Along with fewer pesticides, this is probably the No. 1
                        reason folks decide to eat organic. Studies have shown
                        that organic drinks are often higher in vitamin C, iron,
                        magnesium, and phosphorous than their non-organic
                        counterparts.
                      </p>
                    </div>
                  </div>
                </article>
              </div>
            </div>
            <!-- <div class="col-xl-12">
              <div class="row row-30">
                <div
                  class="col-sm-6 col-lg-4 wow fadeInLeft"
                  data-wow-delay=".2s"
                >
                  <article class="box-icon-creative">
                    <div
                      class="unit flex-column flex-md-row flex-lg-column flex-xl-row align-items-md-center align-items-lg-start align-items-xl-center"
                    >
                      <div class="unit-left">
                        <div
                          class="box-icon-creative-icon fl-bigmug-line-big104"
                        ></div>
                      </div>
                      <div class="unit-body">
                        <h5 class="box-icon-creative-title">
                          <a href="#">Free Shipping</a>
                        </h5>
                        <p class="box-icon-creative-text">
                          Enjoy our fast &amp; free delivery
                        </p>
                      </div>
                    </div>
                  </article>
                </div>
                <div
                  class="col-sm-6 col-lg-4 wow fadeInLeft"
                  data-wow-delay=".1s"
                >
                  <article class="box-icon-creative">
                    <div
                      class="unit flex-column flex-md-row flex-lg-column flex-xl-row align-items-md-center align-items-lg-start align-items-xl-center"
                    >
                      <div class="unit-left">
                        <div
                          class="box-icon-creative-icon fl-bigmug-line-chat55"
                        ></div>
                      </div>
                      <div class="unit-body">
                        <h5 class="box-icon-creative-title">
                          <a href="#">Customer care</a>
                        </h5>
                        <p class="box-icon-creative-text">
                          Always ready to help you
                        </p>
                      </div>
                    </div>
                  </article>
                </div>
                <div class="col-sm-6 col-lg-4 wow fadeInLeft">
                  <article class="box-icon-creative">
                    <div
                      class="unit flex-column flex-md-row flex-lg-column flex-xl-row align-items-md-center align-items-lg-start align-items-xl-center"
                    >
                      <div class="unit-left">
                        <div
                          class="box-icon-creative-icon fl-bigmug-line-like51"
                        ></div>
                      </div>
                      <div class="unit-body">
                        <h5 class="box-icon-creative-title">
                          <a href="#">Healthy &amp; energetic</a>
                        </h5>
                        <p class="box-icon-creative-text">
                          Our drinks are very nutritious.
                        </p>
                      </div>
                    </div>
                  </article>
                </div>
              </div>
            </div> -->
          </div>
        </div>
      </section>
      <!-- What People Say-->
      <section class="section section-xxl bg-image-1">
        <div class="container">
          <h2 class="text-transform-capitalize wow fadeScale">
            What People Say
          </h2>
          <div class="row row-sm row-30 justify-content-center">
            <div class="col-xl-9">
              <div class="slick-quote">
                <!-- Slick Carousel-->
                <div
                  class="slick-slider carousel-parent"
                  id="carousel-parent"
                  data-autoplay="true"
                  data-swipe="true"
                  data-items="1"
                  data-child="#child-carousel"
                  data-for="#child-carousel"
                >
                  <div class="item">
                    <p class="quote-minimal-text">
                      I’m very grateful to you for introducing me and my whole
                      family to your extensive range of smoothies and organic
                      juices. We are true fans and regular customers of your
                      store!
                    </p>
                  </div>
                  <div class="item">
                    <p class="quote-minimal-text">
                      I am amazed and extremely satisfied by your smoothies,
                      their taste, and the customer service you provide to
                      unexperienced clients who know nothing about organic
                      drinks.
                    </p>
                  </div>
                  <div class="item">
                    <p class="quote-minimal-text">
                      Your healthy drinks have a wonderful taste and the amazing
                      selection of their flavors is what really attracts me in
                      your store. Thank you for fast delivery and your fresh
                      drinks!
                    </p>
                  </div>
                </div>
                <div class="slick-quote-nav">
                  <div
                    class="slick-slider child-carousel"
                    id="child-carousel"
                    data-arrows="true"
                    data-for="#carousel-parent"
                    data-items="1"
                    data-sm-items="1"
                    data-md-items="3"
                    data-lg-items="3"
                    data-xl-items="3"
                    data-xxl-items="3"
                  >
                    <div class="item">
                      <div class="quote-minimal-figure">
                        <img
                          src="images/user-7-87x87.jpg"
                          alt=""
                          width="87"
                          height="87"
                        />
                      </div>
                      <div class="quote-minimal-author">Patrick Goodman</div>
                      <div class="quote-minimal-status">Client</div>
                    </div>
                    <div class="item">
                      <div class="quote-minimal-figure">
                        <img
                          src="images/user-8-87x87.jpg"
                          alt=""
                          width="87"
                          height="87"
                        />
                      </div>
                      <div class="quote-minimal-author">Kate Smith</div>
                      <div class="quote-minimal-status">Client</div>
                    </div>
                    <div class="item">
                      <div class="quote-minimal-figure">
                        <img
                          src="images/user-9-87x87.jpg"
                          alt=""
                          width="87"
                          height="87"
                        />
                      </div>
                      <div class="quote-minimal-author">Sam Wilson</div>
                      <div class="quote-minimal-status">Client</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Masonry Gallery-->
      <section class="section section-xxl bg-default">
        <div class="container">
          <h2 class="text-transform-capitalize wow fadeScale">Our Gallery</h2>
          <div class="isotope-wrap">
            <div class="isotope-filters">
              <button
                class="isotope-filters-toggle button button-sm button-icon button-icon-right button-default-outline"
                data-custom-toggle=".isotope-filters-list"
                data-custom-toggle-disable-on-blur="true"
                data-custom-toggle-hide-on-blur="true"
              >
                <span class="icon mdi mdi-chevron-down"></span>Filter
              </button>
              <div class="isotope-filters-list-wrap">
                <ul class="isotope-filters-list">
                  <li>
                    <a class="active" href="#" data-isotope-filter="*">All</a>
                  </li>
                  <li><a href="#" data-isotope-filter="Type 1">Fruits</a></li>
                  <li>
                    <a href="#" data-isotope-filter="Type 2">Vegetables</a>
                  </li>
                </ul>
              </div>
            </div>
            <div
              class="row row-30 isotope isotope-custom-1"
              data-lightgallery="group"
            >
              <div
                class="col-sm-6 col-lg-4 col-xl-3 isotope-item"
                data-filter="Type 1"
              >
                <!-- Thumbnail Classic-->
                <article class="thumbnail-classic block-1">
                  <div class="thumbnail-classic-figure">
                    <img
                      src="images/masonry-gallery-1-270x250.jpg"
                      alt=""
                      width="270"
                      height="250"
                    />
                  </div>
                  <div class="thumbnail-classic-caption">
                    <div>
                      <h5 class="thumbnail-classic-title">
                        <a href="single-product.html"
                          >Lemon &amp; apple smoothie</a
                        >
                      </h5>
                      <div class="thumbnail-classic-price">$12.99</div>
                      <div class="thumbnail-classic-button-wrap">
                        <div class="thumbnail-classic-button">
                          <a
                            class="button button-gray-6 button-zakaria fl-bigmug-line-search74"
                            href="images/grid-gallery-4-1200x800-original.jpg"
                            data-lightgallery="item"
                            ><img
                              src="images/masonry-gallery-1-270x250.jpg"
                              alt=""
                              width="270"
                              height="250"
                          /></a>
                        </div>
                        <!-- <div class="thumbnail-classic-button">
                          <a
                            class="button button-primary button-zakaria fl-bigmug-line-shopping202"
                            href="#"
                          ></a>
                        </div> -->
                      </div>
                    </div>
                  </div>
                </article>
              </div>
              <div
                class="col-sm-6 col-lg-4 col-xl-3 isotope-item"
                data-filter="Type 2"
              >
                <!-- Thumbnail Classic-->
                <article class="thumbnail-classic block-1">
                  <div class="thumbnail-classic-figure">
                    <img
                      src="images/masonry-gallery-2-270x530.jpg"
                      alt=""
                      width="270"
                      height="530"
                    />
                  </div>
                  <div class="thumbnail-classic-caption">
                    <div>
                      <h5 class="thumbnail-classic-title">
                        <a href="single-product.html">Avocado smoothie</a>
                      </h5>
                      <div class="thumbnail-classic-price">$13.99</div>
                      <div class="thumbnail-classic-button-wrap">
                        <div class="thumbnail-classic-button">
                          <a
                            class="button button-gray-6 button-zakaria fl-bigmug-line-search74"
                            href="images/masonry-gallery-2-1200x800-original.jpg"
                            data-lightgallery="item"
                            ><img
                              src="images/masonry-gallery-2-270x530.jpg"
                              alt=""
                              width="270"
                              height="530"
                          /></a>
                        </div>
                        <!-- <div class="thumbnail-classic-button">
                          <a
                            class="button button-primary button-zakaria fl-bigmug-line-shopping202"
                            href="#"
                          ></a>
                        </div> -->
                      </div>
                    </div>
                  </div>
                </article>
              </div>
              <div
                class="col-sm-6 col-lg-4 col-xl-3 isotope-item"
                data-filter="Type 1"
              >
                <!-- Thumbnail Classic-->
                <article class="thumbnail-classic block-1">
                  <div class="thumbnail-classic-figure">
                    <img
                      src="images/masonry-gallery-3-270x250.jpg"
                      alt=""
                      width="270"
                      height="250"
                    />
                  </div>
                  <div class="thumbnail-classic-caption">
                    <div>
                      <h5 class="thumbnail-classic-title">
                        <a href="single-product.html">Grapefruit smoothie</a>
                      </h5>
                      <div class="thumbnail-classic-price">$10.99</div>
                      <div class="thumbnail-classic-button-wrap">
                        <div class="thumbnail-classic-button">
                          <a
                            class="button button-gray-6 button-zakaria fl-bigmug-line-search74"
                            href="images/masonry-gallery-3-1200x800-original.jpg"
                            data-lightgallery="item"
                            ><img
                              src="images/masonry-gallery-3-270x250.jpg"
                              alt=""
                              width="270"
                              height="250"
                          /></a>
                        </div>
                        <!-- <div class="thumbnail-classic-button">
                          <a
                            class="button button-primary button-zakaria fl-bigmug-line-shopping202"
                            href="#"
                          ></a>
                        </div> -->
                      </div>
                    </div>
                  </div>
                </article>
              </div>
              <div
                class="col-sm-6 col-lg-4 col-xl-3 isotope-item"
                data-filter="Type 2"
              >
                <!-- Thumbnail Classic-->
                <article class="thumbnail-classic block-1">
                  <div class="thumbnail-classic-figure">
                    <img
                      src="images/masonry-gallery-4-270x250.jpg"
                      alt=""
                      width="270"
                      height="250"
                    />
                  </div>
                  <div class="thumbnail-classic-caption">
                    <div>
                      <h5 class="thumbnail-classic-title">
                        <a href="single-product.html">Raspberry smoothie</a>
                      </h5>
                      <div class="thumbnail-classic-price">$8.99</div>
                      <div class="thumbnail-classic-button-wrap">
                        <div class="thumbnail-classic-button">
                          <a
                            class="button button-gray-6 button-zakaria fl-bigmug-line-search74"
                            href="images/masonry-gallery-4-1200x800-original.jpg"
                            data-lightgallery="item"
                            ><img
                              src="images/masonry-gallery-4-270x250.jpg"
                              alt=""
                              width="270"
                              height="250"
                          /></a>
                        </div>
                        <!-- <div class="thumbnail-classic-button">
                          <a
                            class="button button-primary button-zakaria fl-bigmug-line-shopping202"
                            href="#"
                          ></a>
                        </div> -->
                      </div>
                    </div>
                  </div>
                </article>
              </div>
              <div
                class="col-sm-6 col-lg-4 col-xl-3 isotope-item"
                data-filter="Type 1"
              >
                <!-- Thumbnail Classic-->
                <article class="thumbnail-classic block-1">
                  <div class="thumbnail-classic-figure">
                    <img
                      src="images/masonry-gallery-5-270x250.jpg"
                      alt=""
                      width="270"
                      height="250"
                    />
                  </div>
                  <div class="thumbnail-classic-caption">
                    <div>
                      <h5 class="thumbnail-classic-title">
                        <a href="single-product.html">Kiwi &amp; avocado mix</a>
                      </h5>
                      <div class="thumbnail-classic-price">$14.99</div>
                      <div class="thumbnail-classic-button-wrap">
                        <div class="thumbnail-classic-button">
                          <a
                            class="button button-gray-6 button-zakaria fl-bigmug-line-search74"
                            href="images/grid-gallery-2-1200x800-original.jpg"
                            data-lightgallery="item"
                            ><img
                              src="images/masonry-gallery-5-270x250.jpg"
                              alt=""
                              width="270"
                              height="250"
                          /></a>
                        </div>
                        <!-- <div class="thumbnail-classic-button">
                          <a
                            class="button button-primary button-zakaria fl-bigmug-line-shopping202"
                            href="#"
                          ></a>
                        </div> -->
                      </div>
                    </div>
                  </div>
                </article>
              </div>
              <div
                class="col-sm-6 col-lg-4 col-xl-6 isotope-item"
                data-filter="Type 2"
              >
                <!-- Thumbnail Classic-->
                <article class="thumbnail-classic block-1">
                  <div class="thumbnail-classic-figure">
                    <img
                      src="images/masonry-gallery-6-570x530.jpg"
                      alt=""
                      width="570"
                      height="530"
                    />
                  </div>
                  <div class="thumbnail-classic-caption">
                    <div>
                      <h5 class="thumbnail-classic-title">
                        <a href="single-product.html">Green fruit mix</a>
                      </h5>
                      <div class="thumbnail-classic-price">$16.99</div>
                      <div class="thumbnail-classic-button-wrap">
                        <div class="thumbnail-classic-button">
                          <a
                            class="button button-gray-6 button-zakaria fl-bigmug-line-search74"
                            href="images/grid-gallery-6-1200x800-original.jpg"
                            data-lightgallery="item"
                            ><img
                              src="images/masonry-gallery-6-570x530.jpg"
                              alt=""
                              width="570"
                              height="530"
                          /></a>
                        </div>
                        <!-- <div class="thumbnail-classic-button">
                          <a
                            class="button button-primary button-zakaria fl-bigmug-line-shopping202"
                            href="#"
                          ></a>
                        </div> -->
                      </div>
                    </div>
                  </div>
                </article>
              </div>
              <div
                class="col-sm-6 col-lg-8 col-xl-6 isotope-item"
                data-filter="Type 1"
              >
                <!-- Thumbnail Classic-->
                <article class="thumbnail-classic block-1">
                  <div class="thumbnail-classic-figure">
                    <img
                      src="images/masonry-gallery-7-570x250.jpg"
                      alt=""
                      width="570"
                      height="250"
                    />
                  </div>
                  <div class="thumbnail-classic-caption">
                    <div>
                      <h5 class="thumbnail-classic-title">
                        <a href="single-product.html">Watermelon energy bowl</a>
                      </h5>
                      <div class="thumbnail-classic-price">$10.99</div>
                      <div class="thumbnail-classic-button-wrap">
                        <div class="thumbnail-classic-button">
                          <a
                            class="button button-gray-6 button-zakaria fl-bigmug-line-search74"
                            href="images/grid-gallery-1-1200x800-original.jpg"
                            data-lightgallery="item"
                            ><img
                              src="images/masonry-gallery-7-570x250.jpg"
                              alt=""
                              width="570"
                              height="250"
                          /></a>
                        </div>
                        <!-- <div class="thumbnail-classic-button">
                          <a
                            class="button button-primary button-zakaria fl-bigmug-line-shopping202"
                            href="#"
                          ></a>
                        </div> -->
                      </div>
                    </div>
                  </div>
                </article>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Subscribe to Our Newsletter-->
      <section
        class="parallax-container"
        data-parallax-img="images/parallax-4.jpg"
      >
        <div class="parallax-content section-xxl context-dark text-md-left">
          <div class="container">
            <div
              class="row row-30 justify-content-center align-items-center align-items-md-end"
            >
              <div class="col-lg-3">
                <h3 class="text-spacing-100 wow fadeInLeft">
                  Stay <span class="font-weight-light">connected</span>
                </h3>
                <p class="wow fadeInLeft" data-wow-delay=".1s">
                  Subscribe to our newsletter
                </p>
              </div>
              <div class="col-lg-9 inset-lg-bottom-10">
                <!-- RD Mailform-->
                <form
                  class="rd-form rd-mailform rd-form-inline form-lg rd-form-text-center"
                  data-form-output="form-output-global"
                  data-form-type="subscribe"
                  method="post"
                  action="bat/rd-mailform.php"
                >
                  <div class="form-wrap wow fadeInUp">
                    <input
                      class="form-input"
                      id="subscribe-form-0-email"
                      type="email"
                      name="email"
                      data-constraints="@Email @Required"
                    />
                    <label class="form-label" for="subscribe-form-0-email"
                      >Enter your e-mail address</label
                    >
                  </div>
                  <div class="form-button wow fadeInRight">
                    <button
                      class="button button-shadow-2 button-zakaria button-lg button-primary"
                      type="submit"
                    >
                      Subscribe
                    </button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Our Team-->
      <section class="section section-xxl bg-default">
        <div class="container">
          <h2 class="text-transform-capitalize wow fadeScale">Our Team</h2>
          <!-- Owl Carousel-->
          <div
            class="owl-carousel owl-style-9"
            data-items="1"
            data-sm-items="2"
            data-md-items="3"
            data-lg-items="4"
            data-margin="30"
            data-dots="true"
            data-mouse-drag="false"
          >
            <article class="team-modern box-sm wow slideInUp">
              <a class="team-modern-figure" href="#"
                ><img
                  src="images/team-4-270x227.jpg"
                  alt=""
                  width="270"
                  height="227"
              /></a>
              <h5 class="team-modern-name"><a href="#">Rebecca Martinez</a></h5>
              <p class="team-modern-text">
                Rebecca is the Founder and CEO of Livedrink
              </p>
              <ul
                class="list-inline team-modern-list-social list-social-2 list-inline-sm"
              >
                <li><a class="icon mdi mdi-facebook" href="#"></a></li>
                <li><a class="icon mdi mdi-twitter" href="#"></a></li>
                <li><a class="icon mdi mdi-instagram" href="#"></a></li>
                <li><a class="icon mdi mdi-google-plus" href="#"></a></li>
              </ul>
            </article>
            <article
              class="team-modern box-sm wow slideInUp"
              data-wow-delay=".1s"
            >
              <a class="team-modern-figure" href="#"
                ><img
                  src="images/team-5-270x227.jpg"
                  alt=""
                  width="270"
                  height="227"
              /></a>
              <h5 class="team-modern-name"><a href="#">Peter McMillan</a></h5>
              <p class="team-modern-text">
                Peter is the Head of Livedrink’s Supply Chain
              </p>
              <ul
                class="list-inline team-modern-list-social list-social-2 list-inline-sm"
              >
                <li><a class="icon mdi mdi-facebook" href="#"></a></li>
                <li><a class="icon mdi mdi-twitter" href="#"></a></li>
                <li><a class="icon mdi mdi-instagram" href="#"></a></li>
                <li><a class="icon mdi mdi-google-plus" href="#"></a></li>
              </ul>
            </article>
            <article
              class="team-modern box-sm wow slideInUp"
              data-wow-delay=".2s"
            >
              <a class="team-modern-figure" href="#"
                ><img
                  src="images/team-6-270x227.jpg"
                  alt=""
                  width="270"
                  height="227"
              /></a>
              <h5 class="team-modern-name"><a href="#">Jane Smith</a></h5>
              <p class="team-modern-text">
                Jane Smith is our leading Customer Care specialist.
              </p>
              <ul
                class="list-inline team-modern-list-social list-social-2 list-inline-sm"
              >
                <li><a class="icon mdi mdi-facebook" href="#"></a></li>
                <li><a class="icon mdi mdi-twitter" href="#"></a></li>
                <li><a class="icon mdi mdi-instagram" href="#"></a></li>
                <li><a class="icon mdi mdi-google-plus" href="#"></a></li>
              </ul>
            </article>
            <article
              class="team-modern box-sm wow slideInUp"
              data-wow-delay=".3s"
            >
              <a class="team-modern-figure" href="#"
                ><img
                  src="images/team-7-270x227.jpg"
                  alt=""
                  width="270"
                  height="227"
              /></a>
              <h5 class="team-modern-name"><a href="#">Sam Williams</a></h5>
              <p class="team-modern-text">
                Sam is our #1 expert in domestic Sales Management.
              </p>
              <ul
                class="list-inline team-modern-list-social list-social-2 list-inline-sm"
              >
                <li><a class="icon mdi mdi-facebook" href="#"></a></li>
                <li><a class="icon mdi mdi-twitter" href="#"></a></li>
                <li><a class="icon mdi mdi-instagram" href="#"></a></li>
                <li><a class="icon mdi mdi-google-plus" href="#"></a></li>
              </ul>
            </article>
          </div>
        </div>
      </section>
      <!-- Section Clients-->
      <section class="section section-xxl bg-image-1">
        <div class="container">
          <h2 class="text-transform-capitalize wow fadeScale">Blog Posts</h2>
          <!-- Owl Carousel-->
          <div
            class="owl-carousel"
            data-items="1"
            data-sm-items="2"
            data-lg-items="3"
            data-margin="30"
            data-dots="true"
            data-mouse-drag="false"
          >
            <!-- Post Classic-->
            <article class="post post-classic box-md wow slideInDown">
              <a class="post-classic-figure" href="blog-post.html"
                ><img
                  src="images/post-1-370x239.jpg"
                  alt=""
                  width="370"
                  height="239"
              /></a>
              <div class="post-classic-content">
                <div class="post-classic-time">
                  <time datetime="2020-08-09">August 9, 2020</time>
                </div>
                <h5 class="post-classic-title">
                  <a href="blog-post.html"
                    >Can a Smoothie Supercharge Your Day?</a
                  >
                </h5>
                <p class="post-classic-text">
                  Most of us would agree – mornings are hectic. Getting yourself
                  and possibly others ready for the day ahead may...
                </p>
              </div>
            </article>
            <!-- Post Classic-->
            <article class="post post-classic box-md wow slideInUp">
              <a class="post-classic-figure" href="blog-post.html"
                ><img
                  src="images/post-2-370x239.jpg"
                  alt=""
                  width="370"
                  height="239"
              /></a>
              <div class="post-classic-content">
                <div class="post-classic-time">
                  <time datetime="2020-08-09">August 9, 2020</time>
                </div>
                <h5 class="post-classic-title">
                  <a href="blog-post.html"
                    >How to Make Your Breakfast Easy and Yummy</a
                  >
                </h5>
                <p class="post-classic-text">
                  Overloading your breakfast with calories may not be the best
                  idea but when you need a boost for the upcoming...
                </p>
              </div>
            </article>
            <!-- Post Classic-->
            <article class="post post-classic box-md wow slideInDown">
              <a class="post-classic-figure" href="blog-post.html"
                ><img
                  src="images/post-3-370x239.jpg"
                  alt=""
                  width="370"
                  height="239"
              /></a>
              <div class="post-classic-content">
                <div class="post-classic-time">
                  <time datetime="2020-08-09">August 9, 2020</time>
                </div>
                <h5 class="post-classic-title">
                  <a href="blog-post.html"
                    >Tips from Our Team: Making Yoghurts with Fresh Fruits</a
                  >
                </h5>
                <p class="post-classic-text">
                  Combining milk and fruits is the best solution for your daily
                  meal, whether it’s breakfast, lunch, or any other...
                </p>
              </div>
            </article>
          </div>
        </div>
      </section>
      <!-- Section Clients-->
      <section class="section section-lg bg-default">
        <div class="container">
          <div
            class="owl-carousel owl-style-2"
            data-items="2"
            data-sm-items="3"
            data-md-items="4"
            data-lg-items="5"
            data-margin="30"
            data-dots="true"
          >
            <a class="clients-classic" href="#"
              ><img
                src="images/clients-1-120x114.png"
                alt=""
                width="120"
                height="114" /></a
            ><a class="clients-classic" href="#"
              ><img
                src="images/clients-2-105x118.png"
                alt=""
                width="105"
                height="118" /></a
            ><a class="clients-classic" href="#"
              ><img
                src="images/clients-3-111x98.png"
                alt=""
                width="111"
                height="98" /></a
            ><a class="clients-classic" href="#"
              ><img
                src="images/clients-4-122x92.png"
                alt=""
                width="122"
                height="92" /></a
            ><a class="clients-classic" href="#"
              ><img
                src="images/clients-5-112x112.png"
                alt=""
                width="112"
                height="112"
            /></a>
          </div>
        </div>
      </section>
      <!-- Page Footer-->
      <footer class="section footer-modern footer-modern-2">
        <div class="footer-modern-body section-xl context-dark">
          <div class="container">
            <div class="row row-40 row-md-50 justify-content-xl-between">
              <div class="col-md-10 col-lg-3 col-xl-4 wow fadeInRight">
                <div class="inset-xl-right-70 block-1">
                  <h5 class="footer-modern-title">Gallery</h5>
                  <div class="row row-10 gutters-10" data-lightgallery="group">
                    <div class="col-4 col-sm-2 col-lg-4">
                      <!-- Thumbnail Minimal--><a
                        class="thumbnail-minimal"
                        href="images/grid-gallery-footer-1-1200x800-original.jpg"
                        data-lightgallery="item"
                        ><img
                          src="images/grid-gallery-1-93x93.jpg"
                          alt=""
                          width="93"
                          height="93"
                      /></a>
                    </div>
                    <div class="col-4 col-sm-2 col-lg-4">
                      <!-- Thumbnail Minimal--><a
                        class="thumbnail-minimal"
                        href="images/masonry-gallery-4-1200x800-original.jpg"
                        data-lightgallery="item"
                        ><img
                          src="images/grid-gallery-2-93x93.jpg"
                          alt=""
                          width="93"
                          height="93"
                      /></a>
                    </div>
                    <div class="col-4 col-sm-2 col-lg-4">
                      <!-- Thumbnail Minimal--><a
                        class="thumbnail-minimal"
                        href="images/grid-gallery-2-1200x800-original.jpg"
                        data-lightgallery="item"
                        ><img
                          src="images/grid-gallery-3-93x93.jpg"
                          alt=""
                          width="93"
                          height="93"
                      /></a>
                    </div>
                    <div class="col-4 col-sm-2 col-lg-4">
                      <!-- Thumbnail Minimal--><a
                        class="thumbnail-minimal"
                        href="images/grid-gallery-1-1200x800-original.jpg"
                        data-lightgallery="item"
                        ><img
                          src="images/grid-gallery-4-93x93.jpg"
                          alt=""
                          width="93"
                          height="93"
                      /></a>
                    </div>
                    <div class="col-4 col-sm-2 col-lg-4">
                      <!-- Thumbnail Minimal--><a
                        class="thumbnail-minimal"
                        href="images/grid-gallery-footer-5-1200x800-original.jpg"
                        data-lightgallery="item"
                        ><img
                          src="images/grid-gallery-5-93x93.jpg"
                          alt=""
                          width="93"
                          height="93"
                      /></a>
                    </div>
                    <div class="col-4 col-sm-2 col-lg-4">
                      <!-- Thumbnail Minimal--><a
                        class="thumbnail-minimal"
                        href="images/grid-gallery-4-1200x800-original.jpg"
                        data-lightgallery="item"
                        ><img
                          src="images/grid-gallery-6-93x93.jpg"
                          alt=""
                          width="93"
                          height="93"
                      /></a>
                    </div>
                  </div>
                </div>
              </div>
              <div
                class="col-sm-6 col-md-7 col-lg-5 wow fadeInRight"
                data-wow-delay=".1s"
              >
                <h5 class="footer-modern-title">Quick Links</h5>
                <ul
                  class="footer-modern-list footer-modern-list-2 d-sm-inline-block d-md-block"
                >
                  <li><a href="our-team.html">Our Team</a></li>
                  <li><a href="grid-shop.html">New Products</a></li>
                  <li><a href="blog-list.html">Blog</a></li>
                  <li><a href="about-us.html">About Us</a></li>
                  <li><a href="#">FAQ</a></li>
                  <li><a href="contact-us.html">Contact Us</a></li>
                  <li><a href="#">Smoothies</a></li>
                  <li><a href="#">Energy Bowls</a></li>
                  <li><a href="#">Juices</a></li>
                  <li><a href="#">Ingredients</a></li>
                  <li><a href="#">Delivery</a></li>
                </ul>
              </div>
              <div
                class="col-sm-6 col-md-5 col-lg-4 col-xl-3 wow fadeInRight"
                data-wow-delay=".2s"
              >
                <h5 class="footer-modern-title">Get in touch</h5>
                <ul class="contacts-creative">
                  <li>
                    <div class="unit unit-spacing-sm flex-column flex-md-row">
                      <div class="unit-left">
                        <span class="icon mdi mdi-map-marker"></span>
                      </div>
                      <div class="unit-body">
                        <a href="#"
                          >523 Sylvan Ave, 5th Floor<br />Mountain View, CA
                          94041 USA</a
                        >
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="unit unit-spacing-sm flex-column flex-md-row">
                      <div class="unit-left">
                        <span class="icon mdi mdi-phone"></span>
                      </div>
                      <div class="unit-body">
                        <a href="tel:#">+1 (844) 123 456 78</a>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="unit unit-spacing-sm flex-column flex-md-row">
                      <div class="unit-left">
                        <span class="icon mdi mdi-email-outline"></span>
                      </div>
                      <div class="unit-body">
                        <a href="mailto:#">info@demolink.org</a>
                      </div>
                    </div>
                  </li>
                </ul>
                <ul class="list-inline list-social-3 list-inline-sm">
                  <li>
                    <a class="icon mdi mdi-facebook icon-xxs" href="#"></a>
                  </li>
                  <li>
                    <a class="icon mdi mdi-twitter icon-xxs" href="#"></a>
                  </li>
                  <li>
                    <a class="icon mdi mdi-instagram icon-xxs" href="#"></a>
                  </li>
                  <li>
                    <a class="icon mdi mdi-google-plus icon-xxs" href="#"></a>
                  </li>
                  <li><a class="icon mdi mdi-skype icon-xxs" href="#"></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="footer-modern-panel text-center">
          <div class="container">
            <p class="rights">
              <span>&copy;&nbsp; </span><span class="copyright-year"></span
              ><span>&nbsp;</span><span>Livedrink</span
              ><span>.&nbsp; All rights reserved.</span><span>&nbsp;</span
              ><a href="privacy-policy.html">Privacy Policy</a><span>.</span>
            </p>
          </div>
        </div>
      </footer>
    </div>
    <div class="snackbars" id="form-output-global"></div>
    <script src="js/core.min.js"></script>
    <script src="js/script.js"></script>
  </body>
</html>