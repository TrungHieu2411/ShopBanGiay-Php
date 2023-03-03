
<?php $__env->startSection('title', $viewData['title']); ?>
<?php $__env->startSection('content'); ?>
<div class="card mb-4">
    <div class="card-header fw-bold">
        Edit Product
    </div>
    <div class="card-body">
        <?php if($errors->any()): ?>
        <ul class="alert alert-danger list-unstyled">
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li>- <?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
        <?php endif; ?>
        <!-- add form -->
        <form method="POST" action="<?php echo e(route('admin.product.update', ['id' => $viewData['product']->getId()])); ?>" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>
            <!--add element form: name, price, image, description-->
            <div class="row mb-3">
                <label class="col-lg-2 col-md-8 col-sm-12 col-form-label text-end" for="name"><i>Name:<span class="text-danger fw-bold">*</span></i></label>
                <div class="col-lg-3 col-md-4 col-sm-12 text-start">
                    <input name="name" value="<?php echo e($viewData['product']->getName()); ?>" type="text" class="form-control form-control-sm" id="name">
                </div>
            </div>

            <div class="row mb-3">
                <label class="col-lg-2 col-md-6 col-sm-12 col-form-label text-end" for="price"><i>Price:<span class="text-danger fw-bold">*</span></i></label>
                <div class="col-lg-3 col-md-6 col-sm-12 text-start">
                    <input name="price" value="<?php echo e($viewData['product']->getPrice()); ?>" type="number" class="form-control form-control-sm" id="price">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-lg-2 col-md-6 col-sm-12 col-form-label text-end" for="image"><i>Image:</i></label>
                <div class="col-lg-6 col-md-6 col-sm-12 text-start">
                    <input class="form-control form-control-sm" value="<?php echo e($viewData['product']->getImage()); ?>" type="file" name="image" id="image">
                </div>
            </div>

            <div class="row mb-3">
                <label class="col-lg-2 col-md-6 col-sm-12 col-form-label text-end" for="size"><i>Size:<span class="text-danger fw-bold">*</span></i></label>
                <div class="col-lg-3 col-md-6 col-sm-12 text-start">
                    <input name="size" value="<?php echo e($viewData['product']->getSize()); ?>" type="number" class="form-control form-control-sm" id="size">
                </div>
            </div>

            <div class="row mb-3">
                <label class="col-lg-2 col-md-6 col-sm-12 col-form-label text-end" for="trademark"><i>Trademark:<span class="text-danger fw-bold">*</span></i></label>
                <div class="col-lg-3 col-md-6 col-sm-12 text-start">
                    <input name="trademark" value="<?php echo e($viewData['product']->getTrademark()); ?>" type="text" class="form-control form-control-sm" id="trademark">
                </div>
            </div>

            <div class="row mb-3">
                <label class="col-lg-2 col-form-label text-end" for="description"><i>Description:<span class="text-danger fw-bold">*</span></i></label>
                <div class="col-lg-6 text-start">
                    <textarea class="form-control form-control-sm" name="description" rows="3" id="description"><?php echo e($viewData['product']->getDescription()); ?></textarea>
                </div>
            </div>

            <!-- <div class="row mb-3">
                <label class="col-lg-2 col-form-label text-end" for="typepdt"><i>Typepdt ID:<span class="text-danger fw-bold">*</span></i></label>
                <div class="col-lg-6 col-md-6 col-sm-12 text-start">
                    <input class="form-control form-control-sm" value="<?php echo e($viewData['product']->getTypepdt()); ?>" type="string" name="typepdt_id" id="typepdt">
                </div>
            </div> -->

            <div class="row">
                <div class="col-lg-2"></div>
                <div class="col-lg-2 text-end">
                    <button type="submit" class="btn btn-primary form-control form-control-sm">Edit</button>
                </div>
            </div>
        </form>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ShopBanGiay-Php\shopbangiay\resources\views/admin/product/edit.blade.php ENDPATH**/ ?>