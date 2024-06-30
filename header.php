<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body>
    <!-- Top header area start here -->
    <div class="header-top d-none d-lg-block">
      <div class="container">
        <div class="header-top-wrp">
          <ul class="info">
            <li>
              <i class="fa-solid fa-paper-plane"></i>
              <a href="#0">info.company@gmail.com</a>
            </li>
            <li class="bor-left ms-4 ps-4">
              <i class="fa-solid fa-location-dot"></i>
              <a href="#0">85 Ketch Harbour RoadBensalem, PA 19020</a>
            </li>
          </ul>
          <ul class="link-info">
            <li class="bor-right">
              <a href="#0"><i class="fa-brands fa-facebook-f"></i></a>
            </li>
            <li class="bor-right">
              <a href="#0"><i class="fa-brands fa-instagram"></i></a>
            </li>
            <li class="bor-right">
              <a href="#0"><i class="fa-brands fa-linkedin-in"></i></a>
            </li>
            <li>
              <a href="#0"><i class="fa-brands fa-youtube"></i></a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <!-- Top header area end here -->

    <!-- Header area start here -->
    <header class="header-area">
      <div class="container">
        <div class="header__main">
          <a href="index.html" class="logo">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/logo/logo.svg" alt="logo" />
          </a>
          <a href="index.html" class="logo logo-light">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/logo/logo.svg" alt="logo" />
          </a>
          <div class="main-menu">
            <nav>
              <ul>
              <?php wp_nav_menu( array( 'theme_location' => 'primary', 'container_id' => 'navbar-collapse-1',
										'container_class'=>'navbar-collapse collapse navbar-right',
										'menu_class'=>'nav navbar-nav',
										'fallback_cb'=>false,
										'items_wrap' => '%3$s',
										'container'=>false,
										'depth'=>'5', 
									)); ?>
              </ul>
            </nav>
          </div>
          <a href="contact.html" class="btn-menu d-none d-lg-inline-block"
            >Get in Touch<i class="fa-regular fa-circle-arrow-right ml-10"></i
          ></a>
          <div class="bars d-block d-lg-none">
            <i id="openButton" class="fa-solid fa-bars"></i>
          </div>
        </div>
      </div>
    </header>
    <!-- Header area end here -->
    <main>
      <!-- Banner area start here -->
      <section
        class="banner-area bg-image paralax__animation"
        data-background="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/banner/banner-bg.png"
      >
        <div class="banner__hero">
          <img
            class="sway__animation"
            src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/banner/hero-image.png"
            alt="image"
          />
        </div>
        <div class="banner__hero-info">
          <img
            data-depth="0.03"
            src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/banner/banner-info.png"
            alt="image"
          />
        </div>
        <div class="container">
          <div class="banner__content">
            <h1
              class="wow fadeInUp"
              data-wow-delay="200ms"
              data-wow-duration="1000ms"
            >
              The Digital
              <img
                src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/banner/banner-tittle-star.png"
                alt="image"
              />
              <br />
              Marketing Agency For <span>Higher ROI</span>
            </h1>
            <p
              class="mt-50 wow fadeInUp"
              data-wow-delay="400ms"
              data-wow-duration="1000ms"
            >
              Choose success with our digital marketing agency, dedicated to
              delivering higher ROI that propels your business to new heights.
            </p>
            <div class="d-flex align-items-center gap-4 mt-40">
              <a
                href="pricing.html"
                class="btn-one wow fadeInDown"
                data-wow-delay="200ms"
                data-wow-duration="1000ms"
                >Try it Now<i class="fa-regular fa-circle-arrow-right ml-10"></i
              ></a>
              <a
                href="about.html"
                class="explore-btn wow fadeInDown"
                data-wow-delay="400ms"
                data-wow-duration="1000ms"
                ><span>Explore More</span>
                <i class="fa-regular fa-arrow-right"></i
              ></a>
            </div>
          </div>
        </div>
      </section>
      <!-- Banner area end here -->

      <!-- Brand area start here -->
      <div class="brand-area pt-70">
        <div class="container">
          <h5 class="brand__title mb-40">Used by World Leading Companies</h5>
          <div class="swiper brand__slider">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/brand/brand-image1.png" alt="image" />
              </div>
              <div class="swiper-slide">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/brand/brand-image2.png" alt="image" />
              </div>
              <div class="swiper-slide">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/brand/brand-image3.png" alt="image" />
              </div>
              <div class="swiper-slide">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/brand/brand-image4.png" alt="image" />
              </div>
              <div class="swiper-slide">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/brand/brand-image5.png" alt="image" />
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Brand area end here -->