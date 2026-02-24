<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Thank You - Shyamala Heritage Homes</title>
    <!-- favicons Icons -->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/shymlalogo-1.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/shymlalogo-1.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/shymlalogo-1.png">
    <link rel="shortcut icon" href="assets/images/shymlalogo-1.png">

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="assets/vendors/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/vendors/fontawesome/css/all.min.css" />
    <link rel="stylesheet" href="assets/vendors/animate/animate.min.css" />
    <link rel="stylesheet" href="assets/css/villoz.css" />
    
    <style>
        :root {
            --shyamala-gold: #c1a766;
            --shyamala-blue: #1e2a39;
        }

        .thanks-section {
            padding: 100px 0;
            background: #f8f9fa;
            min-height: 60vh;
            display: flex;
            align-items: center;
        }

        .thanks-card {
            background: #fff;
            padding: 60px 40px;
            border-radius: 20px;
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.05);
            text-align: center;
            max-width: 700px;
            margin: 0 auto;
            position: relative;
            overflow: hidden;
            border-top: 5px solid var(--shyamala-gold);
        }

        .success-icon {
            width: 100px;
            height: 100px;
            background: #f0fdf4;
            color: #22c55e;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 48px;
            margin: 0 auto 30px;
            animation: scaleIn 0.5s cubic-bezier(0.16, 1, 0.3, 1);
        }

        @keyframes scaleIn {
            0% { transform: scale(0); opacity: 0; }
            100% { transform: scale(1); opacity: 1; }
        }

        .thanks-card h1 {
            font-family: 'Plus Jakarta Sans', sans-serif;
            font-weight: 800;
            color: var(--shyamala-blue);
            font-size: 42px;
            margin-bottom: 20px;
        }

        .thanks-card h4 {
            color: #666;
            font-weight: 500;
            margin-bottom: 40px;
        }

        .contact-info {
            background: #fdfaf3;
            border: 1px solid #f1e9d5;
            padding: 25px;
            border-radius: 15px;
            margin-bottom: 40px;
        }

        .contact-info p {
            margin-bottom: 0;
            color: #444;
        }

        .contact-info a {
            color: var(--shyamala-gold);
            font-weight: 700;
            text-decoration: none;
            transition: color 0.3s;
        }

        .contact-info a:hover {
            color: var(--shyamala-blue);
        }

        .back-home {
            display: inline-block;
            background: var(--shyamala-gold);
            color: #fff;
            padding: 15px 35px;
            border-radius: 50px;
            font-weight: 700;
            text-decoration: none;
            transition: all 0.3s;
            text-transform: uppercase;
            letter-spacing: 1px;
            font-size: 14px;
        }

        .back-home:hover {
            background: var(--shyamala-blue);
            color: #fff;
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        .floating-paw {
            position: absolute;
            font-size: 100px;
            color: rgba(193, 167, 102, 0.05);
            z-index: 0;
            pointer-events: none;
        }

        .paw-1 { top: -20px; left: -20px; transform: rotate(-15deg); }
        .paw-2 { bottom: -20px; right: -20px; transform: rotate(15deg); }

        /* Fix invisible navbar */
        .main-header__bottom {
            background-color: var(--shyamala-blue) !important;
        }
        .sticky-header--normal {
            background-color: var(--shyamala-blue) !important;
        }
    </style>
</head>

<body class="custom-cursor">
    <div class="custom-cursor__cursor"></div>
    <div class="custom-cursor__cursor-two"></div>

    <div class="page-wrapper">
        <?php include 'header.php'; ?>

        <section class="thanks-section">
            <div class="container">
                <div class="thanks-card wow fadeInUp" data-wow-delay="100ms">
                    <i class="fas fa-paw floating-paw paw-1"></i>
                    <i class="fas fa-paw floating-paw paw-2"></i>
                    
                    <div class="success-icon">
                        <i class="fas fa-check"></i>
                    </div>
                    
                    <h1>Thank You!</h1>
                    <h4>We have received your request successfully.</h4>
                    
                    <div class="contact-info">
                        <p>Our team will get back to you shortly.</p>
                        <p class="mt-2">For immediate assistance, please call us at <br>
                            <strong><a href="tel:+91 99586 53311">+91 99586 53311</a></strong>
                        </p>
                        <p class="mt-2">or email us at <br>
                            <strong><a href="mailto:info@shyamalaheritagehomes.com">info@shyamalaheritagehomes.com</a></strong>
                        </p>
                    </div>
                    
                    <a href="index.php" class="back-home">Back to Home</a>
                </div>
            </div>
        </section>

        <?php include 'footer.php'; ?>
    </div>

    <!-- Scroll Top -->
    <a href="#" class="scroll-top">
        <svg class="scroll-top__circle" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </a>

    <script src="assets/vendors/jquery/jquery-3.7.0.min.js"></script>
    <script src="assets/vendors/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendors/wow/wow.js"></script>
    <script src="assets/js/villoz.js"></script>
    <script>
        new WOW().init();
    </script>
</body>

</html>
