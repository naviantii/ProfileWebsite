<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="TemplateMo">

    <title>My Profile</title>

    <!-- CSS FILES -->
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&display=swap" rel="stylesheet">

    <link href="<?php echo e(asset('assets/css/bootstrap.min.css')); ?>" rel="stylesheet">

    <link href="<?php echo e(asset('assets/css/bootstrap-icons.css')); ?>" rel="stylesheet">

    <link href="<?php echo e(asset('assets/css/magnific-popup.css')); ?>" rel="stylesheet">

    <link href="<?php echo e(asset('assets/css/templatemo-first-portfolio-style.css')); ?>" rel="stylesheet">


    <!--

TemplateMo 578 First Portfolio

https://templatemo.com/tm-578-first-portfolio

-->
</head>

<body>

    <section class="preloader">
        <div class="spinner">
            <span class="spinner-rotate"></span>
        </div>
    </section>

    <nav class="navbar navbar-expand-lg">
        <div class="container">

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <a href="<?php echo e(route('profile')); ?>" class="navbar-brand mx-auto mx-lg-0">My Profile</a>

            <div class="d-flex align-items-center d-lg-none">
                <i class="navbar-icon bi-telephone-plus me-3"></i>
                <a class="custom-btn btn" href="#section_5">
                    Contact
                </a>
            </div>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-lg-5">
                    <li class="nav-item">
                        <a class="nav-link <?php echo e($active1); ?>" href="<?php echo e(route('profile')); ?>">Profile</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link <?php echo e($active2); ?>" href="<?php echo e(route('portofolio')); ?>">Portfolio</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link <?php echo e($active3); ?>" href="<?php echo e(route('gallery')); ?>">Gallery</a>
                    </li>
                </ul>

                <div class="d-lg-flex align-items-center d-none ms-auto">
                    <a class="custom-btn btn" href="<?php echo e(route('profile')); ?>#section_5">
                        Contact
                    </a>
                </div>
            </div>

        </div>
    </nav>

    <main>
        <section class="hero d-flex justify-content-center align-items-center" id="section_1">
            <div class="container">
                <div class="row">

                    <div class="col-lg-7 col-12">
                        <div class="hero-text">
                            <h1 class="hero-title mb-4">Hello!</h1>
                            <br>
                            <h2 class="mb-4">My name is <?php echo e($name); ?></h2>
                            <p class="mb-4"><a class="custom-btn btn custom-link" href="#section_2">Here's my <?php echo e($status); ?> section!</a>
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-5 col-12 position-relative">
                        <div class="hero-image-wrap">
                            <img src="<?php echo e(asset('assets/images/profile_photo.png')); ?>"
                                class="hero-image img-fluid" alt="">
                            </div>
                    </div>

                </div>
            </div>

            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                <path fill="#535da1" fill-opacity="1"
                    d="M0,160L24,160C48,160,96,160,144,138.7C192,117,240,75,288,64C336,53,384,75,432,106.7C480,139,528,181,576,208C624,235,672,245,720,240C768,235,816,213,864,186.7C912,160,960,128,1008,133.3C1056,139,1104,181,1152,202.7C1200,224,1248,224,1296,197.3C1344,171,1392,117,1416,90.7L1440,64L1440,0L1416,0C1392,0,1344,0,1296,0C1248,0,1200,0,1152,0C1104,0,1056,0,1008,0C960,0,912,0,864,0C816,0,768,0,720,0C672,0,624,0,576,0C528,0,480,0,432,0C384,0,336,0,288,0C240,0,192,0,144,0C96,0,48,0,24,0L0,0Z">
                </path>
            </svg>
        </section>
        <?php echo $__env->yieldContent('content'); ?>
    </main>

    

    <!-- JAVASCRIPT FILES -->
    <script src="<?php echo e(asset('assets/js/jquery.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/bootstrap.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/jquery.sticky.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/click-scroll.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/jquery.magnific-popup.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/magnific-popup-options.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/custom.js')); ?>"></script>

</body>

</html>
<?php /**PATH D:\Document\Kuliah\SMT 7\Pemrograman Web Lanjut\Pertemuan 6\Portofolio\resources\views/page_template.blade.php ENDPATH**/ ?>