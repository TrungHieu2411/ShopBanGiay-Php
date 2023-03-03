
<?php $__env->startSection('title', $viewData['title']); ?>
<?php $__env->startSection('subtitle', $viewData['subtitle']); ?>
<?php $__env->startSection('content'); ?>
<div class="row my-3">
    <?php $__currentLoopData = $viewData['typepdts']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $typepdt): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="col-md-3 col-lg-3 mt-2">
        <div class="card">
            <div class="card-body text-center">
                <?php echo e($typepdt->getType()); ?>


            </div>
        </div>
    </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <div class="col-12 mt-2">
        <a href="<?php echo e(route('product.index')); ?>" class="btn btn-info active text-white">Quay trở về trang sản phẩm</a>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ShopBanGiay-Php\shopbangiay\resources\views/typepdt/index.blade.php ENDPATH**/ ?>