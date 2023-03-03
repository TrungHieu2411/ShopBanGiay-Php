<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link href="<?php echo e(asset('/css/admin.css')); ?>" rel="stylesheet" />
    <title><?php echo $__env->yieldContent('title', 'Admin - Shoe Store'); ?></title>
</head>

<body>
    <div class="row g-0">
        <!-- sidebar -->
        <div class="p-3 col fixed text-white bg-dark">
            <a href="<?php echo e(route('admin.home.index')); ?>" class="text-white text-decoration-none">
                <span class="fs-4 fw-bold">Admin Panel</span>
            </a>
            <hr />
            <ul class="nav flex-column">
                <li><a href="<?php echo e(route('admin.home.index')); ?>" class="nav-link text-white">- Admin - Home</a></li>
                <li><a href="<?php echo e(route('admin.typepdt.index')); ?>" class="nav-link text-white">- Admin - Products</a></li>
                <li><a href="<?php echo e(route('admin.about.index')); ?>" class="nav-link text-white">- Admin - About</a></li>

                <li>
                    <a href="<?php echo e(route('home.index')); ?>" class="mt-2 btn bg-primary text-white">Go back to the homepage</a>
                </li>
            </ul>
        </div>
        <!-- sidebar -->
        <div class="col content-grey bg-info">
            <nav class="p-3 shadow text-end bg-danger">
                <span class="text-white">Admin</span>
                <img class="img-profile rounded-circle" src="<?php echo e(asset('/img/shoe-logo.png')); ?>">
            </nav>
            <div class="g-0 m-5">
                <?php echo $__env->yieldContent('content'); ?>
            </div>
        </div>
    </div>
    <!-- footer -->
    <div class="copyright py-4 text-center bg-dark text-white">
        <div class="container">
            <small>
                <span class="fw-bold">SAIGONTECH</span> - <a class="text-reset fw-bold text-decoration-none" target="_blank" href="https://twitter.com/danielgarax">
                    Shoe's Store
                </a>
            </small>
        </div>
    </div>
    <!-- footer -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
</body>

</html><?php /**PATH C:\xampp\htdocs\ShopBanGiay-Php\shopbangiay\resources\views/layouts/admin.blade.php ENDPATH**/ ?>