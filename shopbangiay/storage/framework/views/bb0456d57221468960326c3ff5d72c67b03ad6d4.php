
<?php $__env->startSection('title', $viewData['title']); ?>
<?php $__env->startSection('subtitle', $viewData['subtitle']); ?>
<?php $__env->startSection('content'); ?>
<div class="card my-3">
    <div class="card-header">
        Giao dịch thành công!
    </div>
    <div class="card-body">
        <div class="alert alert-success" role="alert">
            Xin chúc mừng, giao dịch mua đã hoàn tất. số thứ tự là
            <b>#<?php echo e($viewData['order']->getId()); ?></b>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ShopBanGiay-Php\shopbangiay\resources\views/cart/purchase.blade.php ENDPATH**/ ?>