
<?php $__env->startSection('title', $viewData['title']); ?>
<?php $__env->startSection('subtitle', $viewData['subtitle']); ?>
<?php $__env->startSection('content'); ?>
<div class="row mb-3">
    <?php $__currentLoopData = $viewData['products']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="col-md-3 col-lg-3 mt-3 shadow-lg">
        <div class="card">
            <a href="<?php echo e(route('product.show', ['id' => $product -> getId()])); ?>" class="bg-danger text-white fw-bold">
                <img src="<?php echo e(asset('/storage/' . $product->getImage())); ?>" style="height: 230px;" class="card-img-top">
            </a>
            <div class="card-body bg-secondary shadow-lg">
                <h4 class="card-header text-center">
                    <a href="<?php echo e(route('product.show', ['id' => $product -> getId()])); ?>" class="btn btn-outline-info text-warning fw-bold">
                        <?php echo e($product ->getName()); ?>

                    </a>
                </h4>
            </div>
        </div>
    </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ShopBanGiay-Php\shopbangiay\resources\views/product/index.blade.php ENDPATH**/ ?>