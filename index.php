<?php 
	// Specify the path to your JSON file
	$jsonFile = 'data.json';

	// Read the JSON content from the file
	$jsonData = file_get_contents($jsonFile);

	// Decode the JSON data into a PHP array
	$data = json_decode($jsonData);
?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html lang="en" class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html lang="en" class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html lang="en" class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->

<head>
    <!-- meta charec set -->
    <meta charset="utf-8">
    <!-- Always force latest IE rendering engine or request Chrome Frame -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <!-- Page Title -->
    <title>Ata Painting</title>
    <!-- Meta Description -->
    <meta name="description"
        content="A BBB-accredited family business willing you to have a smooth and professional painting experience">
    <meta name="keywords" content="professional, painting, BBB-accredited, interior, exterior, residential, commercial">
    <meta name="author" content="Emre Kuru">
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="img/logo.png">

    <!-- Google Font -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>

    <!-- 
		CSS
		================================================== 
	-->

    <!-- Fontawesome Icon font -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Twitter Bootstrap css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- jquery.fancybox  -->
    <link rel="stylesheet" href="css/jquery.fancybox.css">
    <!-- animate -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="css/main.css">
    <!-- media-queries -->
    <link rel="stylesheet" href="css/media-queries.css">

    <!-- Modernizer Script for old Browsers -->
    <script src="js/modernizr-2.6.2.min.js"></script>

</head>

<body id="body">

    <!-- preloader -->
    <!-- <div id="preloader">
        <img src="img/preloader.gif" alt="Preloader">
    </div> -->
    <!-- end preloader -->

    <!-- 
        Fixed Navigation
        ==================================== 
	-->

    <header id="navigation" class="navbar-fixed-top navbar" style="padding: 15px;">
        <div class="container">
            <div class="navbar-header">
                <!-- responsive nav button -->
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <i class="fa fa-bars fa-2x"></i>
                </button>
                <!-- /responsive nav button -->

                <!-- logo -->
                <a class="navbar-brand" href="#body">

                    <h3>
                        <img src="img/logo-nav.png"
                            style="height: 55px; width: 50px; margin-right: 10px ; object-fit: fill;"
                            alt="Ata Painting Logo">
                        Ata Painting
                    </h3>
                </a>
                <!-- /logo -->
            </div>

            <!-- main nav -->
            <nav class="collapse navbar-collapse navbar-right" role="navigation">
                <ul id="nav" class="nav navbar-nav">
                    <li class="current"><a href="#body">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#services">Services</a></li>
                    <li><a href="#works">Work</a></li>
                    <li><a href="#testimonials">Testimonials</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </nav>
            <!-- /main nav -->

        </div>
    </header>

    <!--
        End Fixed Navigation
        ==================================== 
	-->



    <!--
        Home Slider
        ==================================== 
	-->

    <section id="slider">
        <div id="hero-carousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#hero-carousel" data-slide-to="0" class="active"></li>
                <li data-target="#hero-carousel" data-slide-to="1" class=""></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <div class="item active"
                    style="background-image: linear-gradient(rgba(0, 0, 0, 0.527),rgba(0, 0, 0, 0.5)), url(img/hero/hero-1.jpg);">
                    <div class="carousel-caption">
                        <h1 data-wow-duration="700ms" data-wow-delay="500ms" class="wow bounceInDown animated">
                            Meet<span> Ata Painting</span>!
                        </h1>
                        <h3 data-wow-duration="1000ms" class="wow slideInLeft animated">
                            <span class="color">Transforming</span>
                            Spaces with Expert Painting Services
                        </h3>
                        <p data-wow-duration="1000ms" class="wow slideInRight animated">
                            Start Brightening Your Life from Home
                        </p>

                        <ul class="social-links text-center">
                            <li>
                                <a href="https://www.instagram.com/atapainting/">
                                    <i class="fa-brands fa-instagram fa-xl"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.facebook.com/atapaintingandwalldesign/">
                                    <i class="fa-brands fa-facebook fa-xl"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.google.com/search?q=ata+painting">
                                    <i class="fa-brands fa-google fa-xl"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="item"
                    style="background-image: linear-gradient(rgba(0, 0, 0, 0.527),rgba(0, 0, 0, 0.5)), url(img/hero/hero-2.jpg);">
                    <div class="carousel-caption">
                        <h1 data-wow-duration="700ms" data-wow-delay="500ms" class="wow bounceInDown animated">
                            Meet<span> Ata Painting</span>!</h1>
                        <h3 data-wow-duration="1000ms" class="wow slideInLeft animated">
                            <span class="color">Turning</span>
                            Dreams into Reality.
                        </h3>
                        <p data-wow-duration="1000ms" class="wow slideInRight animated">
                            Start Brightening Your Life from Home
                        </p>

                        <ul class="social-links text-center">
                            <li>
                                <a href="https://www.instagram.com/atapainting/">
                                    <i class="fa-brands fa-instagram fa-xl"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.facebook.com/atapaintingandwalldesign/">
                                    <i class="fa-brands fa-facebook fa-xl"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.google.com/search?q=ata+painting">
                                    <i class="fa-brands fa-google fa-xl"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--
        End Home SliderEnd
        ==================================== 
	-->

    <!--
        Features
        ==================================== 
	-->

    <section id="about" class="features">
        <div class="container">
            <div class="row">
                <div class="sec-title text-center mb50 wow bounceInDown animated" data-wow-duration="500ms">
                    <h1>WHO ARE WE?</h1>
                    <div class="devider"><i class="fa-solid fa-question fa-xl"></i></div>
                </div>

                <div class="sec-sub-title text-center wow fadeInRight" style="width: 75%; margin: auto;"
                    data-wow-duration="500ms">
                    <p>
                        With a focus on both residential and commercial projects, Ata Painting delivers exceptional
                        painting services that not only enhance the aesthetics of your property but also protect it from
                        the elements. We're dedicated to providing the highest quality workmanship, backed by years of
                        experience in the industry.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section id="brands" class="facts">
        <div class="parallax-overlay">
            <div class="container">
                <div class="row">
                    <div class="sec-title text-center mb50 wow rubberBand animated" data-wow-duration="1000ms">
                        <h1>Our Brands</h1>
                        <div class="devider"><i class="fa-regular fa-lightbulb fa-xl"></i></i></div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12 text-center wow fadeInUp animated" data-wow-duration="500ms"
                        data-wow-delay="300ms">
                        <img src="img/brands/sherwin_williams.png" />
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12 text-center wow fadeInUp animated" data-wow-duration="500ms"
                        data-wow-delay="600ms">
                        <img src="img/brands/dulux.png" />
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="services" class="features">
        <div class="container">
            <div class="row">
                <div class="sec-title text-center mb50 wow bounceInDown animated" data-wow-duration="500ms">
                    <h1>WHAT WE OFFER</h1>
                    <div class="devider"><i class="fa-solid fa-briefcase fa-xl"></i></div>
                </div>

                <div class="col-md-4 wow fadeInLeft" data-wow-duration="500ms">
                    <div class="service-item">
                        <div class="service-icon">
                            <i class="fa fa-paint-roller fa-2x"></i>
                        </div>

                        <div class="service-desc">
                            <h3>Exterior Painting</h3>
                            <p>
                                Our painters bring life, warmth, and personality into your living and working
                                areas, helping you choose the
                                perfect colors and finishes to reflect your unique style. We also provide
                                not only aesthetic improvements
                                but also long-lasting protection from the elements, creating stunning, durable exteriors
                                that endure.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 wow fadeInUp" data-wow-duration="500ms" data-wow-delay="500ms">
                    <div class="service-item">
                        <div class="service-icon">
                            <i class="fa-solid fa-paintbrush fa-2x"></i>
                        </div>

                        <div class="service-desc">
                            <h3>Residential / Commercial Painting</h3>
                            <p>
                                From residential to commercial, we transform spaces with expert painting. Enhance your
                                home with vibrant, personalized
                                interiors, and elevate your business image with our professional commercial painting
                                solutions.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 wow fadeInRight" data-wow-duration="500ms" data-wow-delay="900ms">
                    <div class="service-item">
                        <div class="service-icon">
                            <i class="fa-solid fa-palette fa-2x"></i>
                        </div>

                        <div class="service-desc">
                            <h3>Custom Painting</h3>
                            <p>
                                Whether it's residential, commercial, or custom painting, we bring spaces to life with
                                our expert touch. Create your
                                dream space with personalized interiors or elevate your business image with our
                                professional commercial solutions. Our
                                custom painting services allow your imagination to run wild, turning your unique vision
                                into reality.
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!--
        End Features
        ==================================== 
	-->


    <!--
        Our Works
        ==================================== 
	-->

    <section id="works" class="works clearfix">
        <div class="container">
            <div class="row">

                <div class="sec-title text-center">
                    <h1>Our Work</h1>
                    <div class="devider"><i class="fa-solid fa-brush fa-xl"></i></i></div>
                </div>

                <div class="sec-sub-title text-center">
                    <p>
                        With a focus on both residential and commercial projects, Ata Painting delivers exceptional
                        painting services that not only enhance the aesthetics of your property but also protect it from
                        the elements. We're dedicated to providing the highest quality workmanship, backed by years of
                        experience in the industry.
                    </p>
                </div>

                <div class="work-filter wow fadeInRight animated" data-wow-duration="500ms">
                    <ul class="text-center">
                        <li><a href="javascript:;" data-filter="all" class="active filter">All</a></li>
                        <li><a href="javascript:;" data-filter=".exterior" class="filter">Exterior</a></li>
                        <li><a href="javascript:;" data-filter=".interior" class="filter">Interior</a></li>
                        <li><a href="javascript:;" data-filter=".residential" class="filter">Residential</a></li>
                        <li><a href="javascript:;" data-filter=".commercial" class="filter">Commercial</a></li>
                </div>

            </div>
        </div>

        <div class="project-wrapper">
            <?php shuffle($data->works) ?>
            <?php foreach ($data->works as $work): ?>
            <figure class="<?= "mix work-item " . $work->type ?>">
                <?php
            // Check if the image file name contains 'ext' or 'int'
            $imageFileName = basename($work->img); // Get the file name from the image URL
            if (strpos($imageFileName, 'ext') === false && strpos($imageFileName, 'int') === false) {
                // If 'ext' and 'int' are not found in the file name, add a custom class
                echo '<img src="' . $work->img . '" alt="' . $work->alt . '" style="object-fit: contain; !important">';
            } else {
                // If 'ext' or 'int' are found in the file name, don't add the custom class
                echo '<img src="' . $work->img . '" alt="' . $work->alt . '">';
            }
            ?>
                <a class="fancybox" rel="works" href="<?= $work->img ?>">
                    <figcaption class="overlay">
                        <i class="fa fa-eye fa-lg"></i>
                        <h4>Click to see the full image</h4>
                    </figcaption>
                </a>
            </figure>
            <?php endforeach; ?>
        </div>

    </section>

    <!--
        End Our Works
        ==================================== 
	-->

    <!--
        Testimonials
        ==================================== 
	-->

    <section id="testimonials">
        <div class="container">
            <div class="row">
                <div class="sec-title text-center wow fadeInUp animated" data-wow-duration="700ms">
                    <h1>Testimonials</h1>
                    <div class="devider"><i class="fa-solid fa-comment fa-xl"></i></div>
                </div>
                <div class="sec-sub-title text-center wow fadeInRight animated" data-wow-duration="500ms">
                    <p>Voices of Satisfaction: Hear What Our Valued Clients Have to Say</p>
                </div>

                <?php foreach ($data->testimonials as $key => $testimonial): ?>

                <figure class="col-md-4 col-sm-6 col-xs-12 text-center wow fadeInUp animated" data-wow-duration="500ms"
                    data-wow-delay="<?= $key * 300 ?>ms">
                    <div class="testimonial">
                        <div class="test-thumb">
                            <i class="fa-solid fa-quote-left fa-3x"></i>
                            <p><?= $testimonial->review ?></p>
                            <a
                                href="https://www.bbb.org/ca/ns/middle-sackville/profile/painting-contractors/ata-painting-0087-73343/customer-reviews">
                                <span class="overlay">
                                    <i class="fa fa-eye fa-lg"></i>
                                    <h4>Click to see the full review</h4>
                                </span>
                            </a>
                        </div>
                        <h4><?= $testimonial->client ?></h4>
                        <span>
                            <i class="fa-solid fa-star" style="color: #F8A926;"></i>
                            <i class="fa-solid fa-star" style="color: #F8A926;"></i>
                            <i class="fa-solid fa-star" style="color: #F8A926;"></i>
                            <i class="fa-solid fa-star" style="color: #F8A926;"></i>
                            <i class="fa-solid fa-star" style="color: #F8A926;"></i>
                        </span>
                    </div>
                </figure>

                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!--
        End Testimonials
        ==================================== 
	-->

    <!--
        Some fun facts
        ==================================== 
	-->

    <section id="facts" class="facts">
        <div class="parallax-overlay">
            <div class="container">
                <div class="row number-counters">
                    <div class="sec-title text-center mb50 wow rubberBand animated" data-wow-duration="1000ms">
                        <h1>Some facts about us...</h1>
                        <div class="devider"><i class="fa-regular fa-lightbulb fa-xl"></i></i></div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12 text-center wow fadeInUp animated" data-wow-duration="500ms"
                        data-wow-delay="300ms">
                        <div class="counters-item">
                            <i class="fa fa-users fa-3x"></i>
                            <strong><span data-to="200"></span>+</strong>
                            <p>Satisfied Clients</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12 text-center wow fadeInUp animated" data-wow-duration="500ms"
                        data-wow-delay="600ms">
                        <div class="counters-item">
                            <i class="fa-solid fa-award fa-3x"></i>
                            <strong>A</strong>
                            <p>On Better Business Bureau®</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12 text-center wow fadeInUp animated" data-wow-duration="500ms"
                        data-wow-delay="900ms">
                        <div class="counters-item">
                            <i class="fa fa-rocket fa-3x"></i>
                            <strong><span data-to="230"></span>+</strong>
                            <p>Projects Delivered</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--
        End Some fun facts
        ==================================== 
	-->


    <!--
        Contact Us
        ==================================== 
	-->

    <section id="contact" class="contact">
        <div class="container">
            <div class="row mb50">
                <div class="sec-title text-center mb50 wow fadeInDown animated" data-wow-duration="500ms">
                    <h1>Get a Quote!</h1>
                    <div class="devider"><i class="fa-solid fa-phone fa-xl"></i></div>
                </div>
                <div class="sec-sub-title text-center wow rubberBand animated" data-wow-duration="1000ms">
                    <p>Tell Us About Your Project: We'll Get Back to You</p>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 wow fadeInLeft animated" data-wow-duration="500ms">
                    <div class="contact-address">
                        <h2>Our Address:</h2>
                        <p>320 Lakeview Ave, Middle Sackville,</p>
                        <p>Nova Scotia, Canada, B4E 3B6,</p>
                        <hr>
                        <h2>Our Number:</h2>
                        <p>+1 (902) 809-8483</p>
                    </div>
                </div>
                <div class="col-lg-8 col-md-8 col-sm-7 col-xs-12 wow fadeInDown animated" data-wow-duration="500ms"
                    data-wow-delay="300ms">
                    <div class="contact-form">
                        <h2>Message Us</h2>
                        <form action="#" id="contact-form">
                            <div class="input-group name-email">
                                <div class="input-field">
                                    <input type="text" name="name" id="name" placeholder="Name" class="form-control">
                                </div>
                                <div class="input-field">
                                    <input type="email" name="email" id="email" placeholder="Email"
                                        class="form-control">
                                </div>
                                <div class="input-field">
                                    <input type="text" name="subject" id="subject" placeholder="Subject"
                                        class="form-control">
                                </div>
                            </div>
                            <div class="input-group">
                                <textarea name="message" id="message" placeholder="Message"
                                    class="form-control"></textarea>
                            </div>
                            <div class="input-group">
                                <button type="submit" id="form-submit" class="pull-right" style="width: 100%;">
                                    <i class="fa-solid fa-paper-plane fa-xl"></i> Send Message!
                                </button>
                            </div>
                        </form>
                        <div id="success">
                            <h4>Message sent successfully!</h4>
                        </div>
                        <div id="error">
                            <h4>Message could not be sent.</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <iframe id="map_canvas" class="wow bounceInDown animated" data-wow-duration="500ms"
            src=" https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2830.3879420130115!2d-63.74269940000001!3d44.81366080000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4b5985bb210eb129%3A0x4fc5cfdadd7c8612!2sAta%20Painting%20and%20Wall%20Design%20Services!5e0!3m2!1sen!2sca!4v1698799151963!5m2!1sen!2sca"
            width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade">
        </iframe>
    </section>

    <!--
        End Contact Us
        ==================================== 
	-->

    <footer id="footer" class="footer">
        <div class="container">
            <div class="row mx-auto">
                <div class="col-md-6 col-sm-6 col-xs-12 wow fadeInUp animated" data-wow-duration="500ms"
                    data-wow-delay="900ms">
                    <div class="footer-single text-center">
                        <h6>Explore</h6>
                        <ul>
                            <li><a href="#about">About</a></li>
                            <li><a href="#services">Services</a></li>
                            <li><a href="#work">Work</a></li>
                            <li><a href="#testimonials">Testimonials</a></li>
                            <li><a href="#contact">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12 wow fadeInUp animated" data-wow-duration="500ms"
                    data-wow-delay="600ms">
                    <div class="footer-single text-center">
                        <h6>Support</h6>
                        <ul>
                            <li><a href="https://www.instagram.com/atapainting/">Instagram</a></li>
                            <li><a href="https://www.facebook.com/atapaintingandwalldesign/">Facebook</a></li>
                            <li><a href="https://www.google.com/search?q=ata+painting">Google</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <hr />
            <div class="row mx-auto">
                <div class="col-md-4 col-sm-4 col-xs-12 wow fadeInUp animated" data-wow-duration="500ms"
                    data-wow-delay="600ms">
                    <div class="footer-single text-center">
                        <img src="img/bbb.png" alt="">
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12 wow fadeInUp animated" data-wow-duration="500ms"
                    data-wow-delay="900ms">
                    <div class="footer-single text-center">
                        <img src="img/logo-white.png" alt="">
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12 wow fadeInUp animated" data-wow-duration="500ms"
                    data-wow-delay="1200ms">
                    <div class="footer-single text-center">
                        <img src="img/chamber.png" alt="">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <p class="copyright text-center">
                        Copyright © 2023 <a href="#">Ata Painting</a>. All rights reserved.</a>
                    </p>
                </div>
            </div>
        </div>
    </footer>

    <a href="javascript:void(0);" id="back-top"><i class="fa fa-angle-up fa-3x"></i></a>

    <!-- 
		Essential jQuery Plugins
		================================================== 
	-->

    <!-- Main jQuery -->
    <script src="js/jquery-1.11.1.min.js"></script>
    <!-- Single Page Nav -->
    <script src="js/jquery.singlePageNav.min.js"></script>
    <!-- Twitter Bootstrap -->
    <script src="js/bootstrap.min.js"></script>
    <!-- jquery.fancybox.pack -->
    <script src="js/jquery.fancybox.pack.js"></script>
    <!-- jquery.mixitup.min -->
    <script src="js/jquery.mixitup.min.js"></script>
    <!-- jquery.parallax -->
    <script src="js/jquery.parallax-1.1.3.js"></script>
    <!-- jquery.countTo -->
    <script src="js/jquery-countTo.js"></script>
    <!-- jquery.appear -->
    <script src="js/jquery.appear.js"></script>
    <!-- Contact form validation -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery.form/3.32/jquery.form.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.11.1/jquery.validate.min.js"></script>
    <!-- jquery easing -->
    <script src="js/jquery.easing.min.js"></script>
    <!-- jquery easing -->
    <script src="js/wow.min.js"></script>
    <!-- Custom Functions -->
    <script src="js/custom.js"></script>
</body>

</html>