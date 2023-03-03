
<?php $__env->startSection('title', $viewData['title']); ?>
<?php $__env->startSection('content'); ?>
<div class="card">
    <div class="card-header fw-bold ">
        Admin Panel - Home Page
    </div>
    <div class="card-body">
        <div class="card-text">
            <i>Chào mừng bạn đã đến với trang Admin của Shoe's Store. Trang Admin được tạo ra để quản lý shop Shoe's Store</i>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ShopBanGiay-Php\shopbangiay\resources\views/admin/home/index.blade.php ENDPATH**/ ?>