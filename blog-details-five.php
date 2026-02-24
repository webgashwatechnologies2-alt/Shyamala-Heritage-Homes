<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Blog list 5</title>
    <!-- favicons Icons -->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/shymlalogo-1.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/shymlalogo-1.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/shymlalogo-1.png">
    <link rel="shortcut icon" href="assets/images/shymlalogo-1.png">
    <meta name="description" />

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
    <!-- reey font -->
    <link rel="stylesheet" href="assets/vendors/reey-font/stylesheet.css">


    <link rel="stylesheet" href="assets/vendors/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/vendors/bootstrap-select/bootstrap-select.min.css" />
    <link rel="stylesheet" href="assets/vendors/animate/animate.min.css" />
    <link rel="stylesheet" href="assets/vendors/fontawesome/css/all.min.css" />
    <link rel="stylesheet" href="assets/vendors/jquery-ui/jquery-ui.css" />
    <link rel="stylesheet" href="assets/vendors/jarallax/jarallax.css" />
    <link rel="stylesheet" href="assets/vendors/jquery-magnific-popup/jquery.magnific-popup.css" />
    <link rel="stylesheet" href="assets/vendors/nouislider/nouislider.min.css" />
    <link rel="stylesheet" href="assets/vendors/nouislider/nouislider.pips.css" />
    <link rel="stylesheet" href="assets/vendors/tiny-slider/tiny-slider.css" />
    <link rel="stylesheet" href="assets/vendors/villoz-icons/style.css" />
    <link rel="stylesheet" href="assets/vendors/owl-carousel/css/owl.carousel.min.css" />
    <link rel="stylesheet" href="assets/vendors/owl-carousel/css/owl.theme.default.min.css" />

    <!-- template styles -->
    <link rel="stylesheet" href="assets/css/villoz.css" />

    <style>
        .blog-card__image {
            height: 500px;
            /* Reduce height (change as per your design) */
            overflow: hidden;
            border-radius: 12px;
            position: relative;
        }

        .blog-card__image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            /* Makes image fit nicely */
            display: block;
        }


        /* SECTION */
        .heritage-taeragh-section {
            padding: 0px 0;
            /* background: #eef2f0; */
        }

        /* GRID */
        .heritage-taeragh-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(330px, 1fr));
            gap: 38px;
        }

        /* CARD */
        .heritage-taeragh-card {
            background: #ffffff;
            border-radius: 20px;
            overflow: hidden;
            border: 1px solid #e2e8e5;
            box-shadow: 0px 12px 40px rgba(0, 0, 0, 0.06);
            transition: 0.35s ease;
        }

        .heritage-taeragh-card:hover {
            transform: translateY(-10px);
            box-shadow: 0px 18px 50px rgba(0, 0, 0, 0.12);
        }

        /* IMAGE */
        .heritage-taeragh-img img {
            width: 100%;
            height: 250px;
            object-fit: cover;
            transition: 0.4s ease;
        }

        .heritage-taeragh-card:hover img {
            transform: scale(1.05);
        }

        /* CONTENT */
        .heritage-taeragh-content {
            padding: 28px;
        }

        .heritage-taeragh-content h3 a {
            font-size: 21px;
            color: #14322a;
            font-weight: 600;
            line-height: 1.4;
            text-decoration: none;
            transition: 0.3s;
        }

        .heritage-taeragh-content h3 a:hover {
            color: #226e4c;
        }

        .heritage-taeragh-content p {
            margin-top: 12px;
            font-size: 15px;
            color: #5b6c65;
            line-height: 1.7;
        }

        /* QUOTE CARD */
        .heritage-taeragh-quote {
            background: linear-gradient(135deg, #c1a766, #8f7f56ff);
            padding: 40px;
            border-radius: 20px;
            text-align: center;
            color: #fff;
            box-shadow: 0px 15px 55px rgba(0, 0, 0, 0.2);
        }

        .heritage-taeragh-quote i {
            font-size: 40px;
            margin-bottom: 18px;
        }

        .heritage-taeragh-quote h3 a {
            color: #fff;
            font-size: 22px;
            text-decoration: none;
        }

        /* LOAD MORE */
        .heritage-load-more {
            text-align: center;
            margin-top: 20px;
        }

        /* QUOTE CARD */
        .premium-quote-card-v2 {
            background: linear-gradient(135deg, #c1a766, #8f7f56ff);
            padding: 40px 28px;
            border-radius: 18px;
            text-align: center;
            color: #fff;
            box-shadow: 0px 14px 50px rgba(0, 0, 0, 0.18);
        }

        .premium-quote-card-v2 i {
            font-size: 38px;
            margin-bottom: 20px;
        }

        .premium-quote-card-v2 h3 a {
            color: #fff;
            font-size: 22px;
            line-height: 1.5;
            text-decoration: none;
        }

        .premium-quote-card-v2 {
            background: #f5f7f6;
            padding: 90px 20px;
            text-align: center;
            border-radius: 18px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
            border: 1px solid #e2e8e5;
        }

        .premium-quote-card-v2 i.fa-paw {
            font-size: 65px;
            color: #c1a766;
            margin-bottom: 15px;
        }

        .premium-quote-card-v2 h3 {
            font-size: 18px;
            line-height: 1.6;
            color: #14422a;
            margin-bottom: 20px;
        }

        .premium-quote-card-v2 h3 a {
            text-decoration: none;
            color: inherit;
        }

        .quote-images {
            display: flex;
            justify-content: center;
            /* Centers images horizontally */
            gap: 10px;
            /* Space between images */
            margin-top: 15px;
        }

        .quote-images img {
            width: 60px;
            /* Adjust size as needed */
            height: 60px;
            object-fit: cover;
            border-radius: 10px;
            border: 2px solid #c1a766;
        }

        /* RESPONSIVE */
        @media (max-width: 768px) {
            .heritage-taeragh-img img {
                height: 200px;
            }
        }
    </style>
</head>

<body class="custom-cursor">

    <div class="custom-cursor__cursor"></div>
    <div class="custom-cursor__cursor-two"></div>
    <div class="page-wrapper">
        <div class="main-header">
            <?php include 'header.php'; ?>
        </div>
        <section class="page-header">
            <div class="page-header__bg"></div>
            <!-- /.page-header__bg -->
            <div class="container">
                <ul class="villoz-breadcrumb list-unstyled">
                    <li><a href="index.php">Home</a></li>
                    <li><span>our news</span></li>
                </ul><!-- /.thm-breadcrumb list-unstyled -->
                <h2 class="page-header__title">Therapy Tales: How Dogs at Shyamala Bring Healing & Happiness</h2>
            </div><!-- /.container -->
        </section><!-- /.page-header -->

        <section class="blog-one blog-one--page">
            <section class="heritage-taeragh-section">
                <div class="container">
                    <div class="heritage-taeragh-grid">

                        <!-- CARD 1 -->
                        <div class="heritage-taeragh-card">
                            <div class="heritage-taeragh-img">
                                <img src="assets/Shyamalaimages/PrivateWoodenCabinPetCafe/seconddd.jpeg" alt="">
                            </div>
                            <div class="heritage-taeragh-content">
                                <h3><a href="blog-details-second.php">Emotional Comfort Through Presence</a></h3>
                                <p>A soft nuzzle, a warm cuddle, a wagging tail — therapy dogs offer unconditional love that instantly eases stress, anxiety, and loneliness.</p>
                            </div>
                        </div>

                        <!-- CARD 2 -->
                        <div class="heritage-taeragh-card">
                            <div class="heritage-taeragh-img">
                                <img src="assets/Shyamalaimages/PrivateWoodenCabinPetCafe/bdh.jpeg" alt="">
                            </div>
                            <div class="heritage-taeragh-content">
                                <h3><a href="blog-details-right.html">Safe, Guided Interactions</a></h3>
                                <p>Whether you’re a first-time dog lover or someone who misses having a pet, our team ensures gentle, respectful interactions that feel natural and joyful.</p>
                            </div>
                        </div>

                        <!-- CARD 3 -->
                        <div class="heritage-taeragh-card">
                            <div class="heritage-taeragh-img">
                                <img src="assets/Shyamalaimages/PrivateWoodenCabinPetCafe/pett.jpeg" alt="">
                            </div>
                            <div class="heritage-taeragh-content">
                                <h3><a href="blog-details-right.html">Each Therapy Dog Has a Story</a></h3>
                                <p>From Cocaine’s dramatic charm to Jerry’s gentle cuddles, Dot’s shy sweetness, and Scotch’s playful innocence — every dog brings a unique kind of healing.</p>
                            </div>
                        </div>

                        <!-- CARD 4 -->
                        <div class="heritage-taeragh-card">
                            <div class="heritage-taeragh-img">
                                <img src="assets/Shyamalaimages/PrivateWoodenCabinPetCafe/dg.jpeg" alt="">
                            </div>
                            <div class="heritage-taeragh-content">
                                <h3><a href="blog-details-right.html">Perfect for Kids and Adults Alike</a></h3>
                                <p>Children learn empathy, confidence, and kindness. Adults find emotional release, grounding, and genuine happiness.</p>
                            </div>
                        </div>

                        <!-- CARD 5 -->
                        <div class="heritage-taeragh-card">
                            <div class="heritage-taeragh-img">
                                <img src="assets/Shyamalaimages/PrivateWoodenCabinPetCafe/bdb.jpeg" alt="">
                            </div>
                            <div class="heritage-taeragh-content">
                                <h3><a href="blog-details-right.html">A Healing Space, Not Just an Activity</a></h3>
                                <p>Therapy Tales isn’t entertainment — it’s a mindful experience. A chance to breathe, let go, and connect with another living being who asks for nothing but love.</p>
                            </div>
                        </div>

                        <!-- QUOTE CARD -->
                        <div class="premium-quote-card-v2">
                            <i class="fa fa-paw"></i>
                            <h3>
                                <a href="blog-details-first.php">
                                    In the quiet hills of Shimla, these dogs help people feel lighter — one cuddle at a time.
                                </a>
                            </h3>
                            <!-- Flex images at the bottom -->
                            <div class="quote-images">
                                <img src="assets/Shyamalaimages/peticons/dog-in-front-of-a-man.png" alt="Pet Image 1">
                                <img src="assets/Shyamalaimages/peticons/cat.png" alt="Pet Image 2">
                                <img src="assets/Shyamalaimages/peticons/paw.png" alt="Pet Image 4">
                                <img src="assets/Shyamalaimages/peticons/rabbit.png" alt="Pet Image 3">
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </section>

        <?php include 'footer.php'; ?>

    </div><!-- /.page-wrapper -->



    <div class="mobile-nav__wrapper">
        <div class="mobile-nav__overlay mobile-nav__toggler"></div>
        <!-- /.mobile-nav__overlay -->
        <div class="mobile-nav__content">
            <span class="mobile-nav__close mobile-nav__toggler"><i class="fa fa-times"></i></span>

            <div class="logo-box">
                <a href="index.html" aria-label="logo image"><img src="assets/images/shymlalogo-1.png" width="155" alt="" /></a>
            </div>
            <!-- /.logo-box -->
            <div class="mobile-nav__container"></div>
            <!-- /.mobile-nav__container -->

            <ul class="mobile-nav__contact list-unstyled">
                <li>
                    <i class="fa fa-envelope"></i>
                    <a href="mailto:reservations@shamlaheritagehomes.com">reservations@shamlaheritagehomes.com</a>
                </li>
                <li>
                    <i class="fa fa-phone-alt"></i>
                    <a href="tel:666-888-0000">+91 99586 53311</a>
                </li>
            </ul><!-- /.mobile-nav__contact -->
            <div class="mobile-nav__social">
                <a href="https://twitter.com">
                    <i class="fab fa-twitter" aria-hidden="true"></i>
                    <span class="sr-only">Twitter</span>
                </a>
                <a href="https://facebook.com">
                    <i class="fab fa-facebook" aria-hidden="true"></i>
                    <span class="sr-only">Facebook</span>
                </a>
                <a href="https://pinterest.com">
                    <i class="fab fa-pinterest-p" aria-hidden="true"></i>
                    <span class="sr-only">Pinterest</span>
                </a>
                <a href="https://instagram.com">
                    <i class="fab fa-instagram" aria-hidden="true"></i>
                    <span class="sr-only">Instagram</span>
                </a>
            </div><!-- /.mobile-nav__social -->
        </div>
        <!-- /.mobile-nav__content -->
    </div>
    <!-- /.mobile-nav__wrapper -->
    <div class="search-popup">
        <div class="search-popup__overlay search-toggler"></div>
        <!-- /.search-popup__overlay -->
        <div class="search-popup__content">
            <form role="search" method="get" class="search-popup__form" action="#">
                <input type="text" id="search" placeholder="Search Here..." />
                <button type="submit" aria-label="search submit" class="villoz-btn villoz-btn--base">
                    <i><i class="icon-magnifying-glass"></i></i>
                    <span><i class="icon-magnifying-glass"></i></span>
                </button>
            </form>
        </div>
        <!-- /.search-popup__content -->
    </div>
    <!-- /.search-popup -->


    <a href="#" class="scroll-top">
        <svg class="scroll-top__circle" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </a>


    <script src="assets/vendors/jquery/jquery-3.7.0.min.js"></script>
    <script src="assets/vendors/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendors/bootstrap-select/bootstrap-select.min.js"></script>
    <script src="assets/vendors/jarallax/jarallax.min.js"></script>
    <script src="assets/vendors/jquery-ui/jquery-ui.js"></script>
    <script src="assets/vendors/jquery-ajaxchimp/jquery.ajaxchimp.min.js"></script>
    <script src="assets/vendors/jquery-appear/jquery.appear.min.js"></script>
    <script src="assets/vendors/jquery-circle-progress/jquery.circle-progress.min.js"></script>
    <script src="assets/vendors/jquery-magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="assets/vendors/jquery-validate/jquery.validate.min.js"></script>
    <script src="assets/vendors/nouislider/nouislider.min.js"></script>
    <script src="assets/vendors/tiny-slider/tiny-slider.js"></script>
    <script src="assets/vendors/wnumb/wNumb.min.js"></script>
    <script src="assets/vendors/owl-carousel/js/owl.carousel.min.js"></script>
    <script src="assets/vendors/wow/wow.js"></script>
    <script src="assets/vendors/tilt/tilt.jquery.js"></script>
    <script src="assets/vendors/simpleParallax/simpleParallax.min.js"></script>
    <script src="assets/vendors/imagesloaded/imagesloaded.min.js"></script>
    <script src="assets/vendors/isotope/isotope.js"></script>
    <script src="assets/vendors/countdown/countdown.min.js"></script>
    <script src="assets/vendors/jquery-circleType/jquery.circleType.js"></script>
    <script src="assets/vendors/jquery-lettering/jquery.lettering.min.js"></script>
    <!-- template js -->
    <script src="assets/js/villoz.js"></script>
</body>

</html>
