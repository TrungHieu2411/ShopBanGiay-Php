<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <link rel="stylesheet" href="http://127.0.0.1:8000/icons/bootstrap-icons-1.5.0/bootstrap-icons.css">
    <link href="<?php echo e(asset('/css/app.css')); ?>" rel="stylesheet">
    <title>Home Page - Shoe's Store</title>

    <style>
        .navbar-brand {
            font-size: 0.7em;
            color: #fff;
            text-decoration: none;
            border: 1px solid #fff;
            text-transform: uppercase;
            font-weight: 350;
            display: block;
            padding: 0;
            text-shadow: 0 1px 2px rgba(0, 0, 0, 0.31);
        }

        .navbar-brand span {
            padding: 0.496em .6em;
            display: inline-block;
            background: #fff;
            color: #2e2f2f;
        }

        .navbar-brand i {
            padding: 0.5em 0.5em 0.5em 0em;
            font-style: normal;
            display: inline-block;
        }

        /*-- footer --*/
        .footer_agileinfo_w3 {
            padding: 4em 0;
            background: #080808;
        }

        .footer_inner_info_w3ls_agileits {
            width: 90%;
            margin: 0 auto;
        }

        ul.social-nav.model-3d-0.footer-social.social.two {
            float: none;
        }

        .footer-left p {
            color: #737070;
            line-height: 2em;
            font-size: 14px;
            margin-top: 22px;
        }

        .sign-gd h4,
        .sign-gd-two h4 {
            color: #fff;
            font-size: 1.2em;
            margin-bottom: 25px;
            font-weight: 700;
            letter-spacing: 1px;
        }

        .sign-gd h4 span,
        .sign-gd-two h4 span {
            font-weight: 300;
        }

        .sign-gd ul li,
        .sign-gd-two ul li {
            color: #848484;
            line-height: 2em;
            font-size: 14px;
            list-style-type: none;
        }

        .sign-gd ul li a,
        .sign-gd-two ul li a {
            color: #737070;
            letter-spacing: 1px;
        }

        .sign-gd ul li a:hover,
        .sign-gd-two ul li a:hover {
            color: #ffffff;
        }

        .post-grid:nth-child(2) {
            margin: 1em 0;
        }

        .address-grid {
            background: #080808;
            padding: 1em;
        }

        .address-left {
            float: left;
            width: 10%;
        }

        .address-left i.fa.fa-phone,
        .address-left i.fa.fa-envelope,
        .address-left i.fa.fa-map-marker {
            color: #FFFFFF;
            font-size: 1em;
        }

        .address-right {
            float: right;
            width: 87%;
        }

        .address-right h6 {
            color: #FFFFFF;
            font-size: 0.9em;
            margin: 0;
            font-weight: 600;
            letter-spacing: 1px;
        }

        .address-right p {
            margin: 1em 0 0 0;
            font-size: .9em;
            color: #565656;
        }

        .address-right p a {
            color: #fb383b;
            text-decoration: none;
        }

        .address-right p a:hover {
            color: #b5b5b5;
        }

        .address-right p span {
            display: block;
            margin: .5em 0;
        }

        ul.social-nav.model-3d-0.footer-social.social.two {
            margin-top: 2em;
        }

        .social-nav li {
            display: inline-block;
            margin: 0 6px;
        }

        .social-nav a {
            display: inline-block;
            float: none;
            width: 30px;
            height: 30px;
            text-decoration: none;
            cursor: pointer;
            text-align: center;
            line-height: 30px;
            background: #000;
            position: relative;
            -webkit-transition: 0.5s;
            -moz-transition: 0.5s;
            -o-transition: 0.5s;
            transition: 0.5s;
        }

        .model-3d-0 a {
            background: #5C5B5B;
            -webkit-transform-style: preserve-3d;
            -moz-transform-style: preserve-3d;
            -ms-transform-style: preserve-3d;
            -o-transform-style: preserve-3d;
            transform-style: preserve-3d;
        }

        .model-3d-0 .front,
        .model-3d-0 .back {
            width: 30px;
            height: 30px;
            position: absolute;
            top: 0;
            left: 0;
            -webkit-transform: translateZ(18px);
            -moz-transform: translateZ(18px);
            -ms-transform: translateZ(18px);
            -o-transform: translateZ(18px);
            transform: translateZ(18px);
            -webkit-backface-visibility: visible;
            -moz-backface-visibility: visible;
            -ms-backface-visibility: visible;
            -o-backface-visibility: visible;
            backface-visibility: visible;
            color: #212121;
            font-size: 12px;
        }

        .model-3d-0 .back {
            -webkit-transform: rotateX(90deg) translateZ(18px);
            -moz-transform: rotateX(90deg) translateZ(18px);
            -ms-transform: rotateX(90deg) translateZ(18px);
            -o-transform: rotateX(90deg) translateZ(18px);
            transform: rotateX(90deg) translateZ(18px);
            -webkit-backface-visibility: hidden;
            -moz-backface-visibility: hidden;
            -ms-backface-visibility: hidden;
            -o-backface-visibility: hidden;
            backface-visibility: hidden;
        }

        a.twitter .front {
            background: #00acee;
        }

        a.facebook .front {
            background: #3b5998;
        }

        a.instagram .front {
            background: #f77737;
        }

        a.pinterest .front {
            background: #bd081c;
        }

        .twitter .back,
        .facebook .back,
        .instagram .back,
        .pinterest .back {
            background: #fff;
        }

        .model-3d-0 a:hover {
            -webkit-transform: rotateX(-90deg);
            -moz-transform: rotateX(-90deg);
            -ms-transform: rotateX(-90deg);
            -o-transform: rotateX(-90deg);
            transform: rotateX(-90deg);
        }

        .model-3d-0 a:hover .back {
            -webkit-backface-visibility: visible;
            -moz-backface-visibility: visible;
            -ms-backface-visibility: visible;
            -o-backface-visibility: visible;
            backface-visibility: visible;
        }

        .social .front i {
            color: #fff;
            font-size: 12px;
        }

        .social .back i {
            color: #000;
            font-size: 12px;
        }

        /*--social icons--*/
        .address-grid:nth-child(2) {
            margin: 0.2em 0;
        }

        .flickr-post ul li {
            display: inline-block;
            margin: 5px 5px;
        }

        .flickr-post ul li {
            display: inline-block;
            margin: 1% 1%;
            width: 28%;
        }

        p.copy-right-w3ls-agileits {
            color: #848484;
            text-align: center;
            margin-top: 55px;
            font-size: 14px;
            border-top: 1px solid #0e0e0e;
            padding-top: 3em;
        }

        p.copy-right-w3ls-agileits a {
            color: #ffffff;
            text-decoration: none;
        }

        p.copy-right-w3ls-agileits a:hover {
            color: #2fdab8;
        }

        .footer-left h2 a {
            font-size: 0.9em;
            color: #fff;
            font-weight: 300;
            letter-spacing: 2px;
        }

        .footer-left h2 a span {
            padding: 6px 10px;
            background: #444242;
            font-weight: 700;
        }

        /*-- //footer --*/
    </style>



</head>

<body>


    <!-- header -->
    <nav class="navbar p-3 mb-2 bg-secondary navbar-expand-lg navbar-dark bg-light py-2">
        <div class="container">

            <h1><a href="<?php echo e(route('home.index')); ?>" class="navbar-brand"><span>Shoe's</span> <i>Store</i></a></h1>

            <button class="navbar-toggler bg-black" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon bg-black"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ms-auto">
                    <a class="nav-link active text-whie" href="<?php echo e(route('product.index')); ?>"><i>Sản phẩm</i></a>

                    <a class="nav-link active text-white" href="<?php echo e(route('cart.index')); ?>"><i>Giỏ hàng </i></a>
                    <a class="nav-link active text-white" href="<?php echo e(route('about.index')); ?>"><i>Giới Thiệu</i></a>
                    <div class="vr bg-black x-2 d-none d-lg-block"></div>
                    <?php if(auth()->guard()->guest()): ?>
                    <a class="nav-link acitve text-white" href="<?php echo e(route('register')); ?>">Admin</a>
                    <?php else: ?>
                    <a class="nav-link active text-black" href="<?php echo e(route('myaccount.orders')); ?>">Hóa đơn</a>
                    <form id="logout" action="<?php echo e(route('logout')); ?>" method="POST">
                        <a role="button" class="nav-link active text-black" onclick="document.getElementById('logout').submit();">Đăng xuất</a>
                        <?php echo csrf_field(); ?>
                    </form>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </nav>




    <!-- header -->
    <section>
        <div class="container">
            <div class="row">
                <?php echo $__env->yieldContent('content'); ?>
            </div>
        </div>
    </section>
    <!-- footer -->
    <footer>
        <!-- footer -->
        <div class="footer_agileinfo_w3 mt-5">
            <div class="row mt-3 footer_inner_info_w3ls_agileits">
                <div class="col-md-4 footer-left">
                    <h2><a href="<?php echo e(route('home.index')); ?>"><span>S</span>hoe's Store </a></h2>
                    <p>Lorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora.</p>
                    <ul class="social-nav model-3d-0 footer-social social two">
                        <li>
                            <a href="#" class="facebook">
                                <div class="front"><i class="fa fa-facebook" aria-hidden="true"></i></div>
                                <div class="back"><i class="fa fa-facebook" aria-hidden="true"></i></div>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="twitter">
                                <div class="front"><i class="fa fa-twitter" aria-hidden="true"></i></div>
                                <div class="back"><i class="fa fa-twitter" aria-hidden="true"></i></div>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="instagram">
                                <div class="front"><i class="fa fa-instagram" aria-hidden="true"></i></div>
                                <div class="back"><i class="fa fa-instagram" aria-hidden="true"></i></div>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="pinterest">
                                <div class="front"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
                                <div class="back"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4 ">
                    <div class="sign-grds">
                        <div class="col-md-4 sign-gd">
                            <h4>Our <span>Information</span> </h4>
                            <ul>
                                <li><a href="<?php echo e(route('home.index')); ?>">Home</a></li>
                                <li><a href="<?php echo e(route('home.index')); ?>">About</a></li>
                                <li><a href="<?php echo e(route('home.index')); ?>">Services</a></li>
                                <li><a href="<?php echo e(route('home.index')); ?>">Short Codes</a></li>
                                <li><a href="<?php echo e(route('home.index')); ?>">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 sign-gd-two">
                    <h4>Store <span>Information</span></h4>
                    <div class="address">
                        <div class="address-grid">
                            <div class="address-left">
                                <i class="fa fa-phone" aria-hidden="true"></i>
                            </div>
                            <div class="address-right">
                                <h6>Phone Number</h6>
                                <p>+1 234 567 8901</p>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                        <div class="address-grid">
                            <div class="address-left">
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                            </div>
                            <div class="address-right">
                                <h6>Email Address</h6>
                                <p>Email :<a href="mailto:example@email.com"> mail@example.com</a></p>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                        <div class="address-grid">
                            <div class="address-left">
                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                            </div>
                            <div class="address-right">
                                <h6>Location</h6>
                                <p>Broome St, NY 10002,California, USA.

                                </p>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
                <hr class="text-white mt-2">

                <p class="text-center mt-3">© 2023 Shoes Store. All rights reserved | Design by: Group4</p>
            </div>
        </div>

        <!-- //footer -->
    </footer>
    <!-- footer -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>

</body>

</html><?php /**PATH C:\xampp\htdocs\ShopBanGiay-Php\shopbangiay\resources\views/layouts/app.blade.php ENDPATH**/ ?>