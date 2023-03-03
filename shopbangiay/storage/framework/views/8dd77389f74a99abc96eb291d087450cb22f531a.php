
<?php $__env->startSection('title', $viewData['title']); ?>
<?php $__env->startSection('content'); ?>
<div class="card mb-4">
    <div class="card-header fw-bold">
        Edit Type Product
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
        <form method="POST" action="<?php echo e(route('admin.typepdt.update', ['id' => $viewData['typepdt']->getId()])); ?>" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>
            <!-- ---- -->
            <div class="row mb-2">
                <label class="col-lg-2 col-md-6 col-sm-12 col-form-label text-end" for="type"><i>Type:<span class="text-danger fw-bold">*</span></i></label>
                <div class="col-lg-3 col-md-6 col-sm-12 text-start">
                    <input name="type" value="<?php echo e($viewData['typepdt']->getType()); ?>" type="text" class="form-control form-control-sm" id="type">
                </div>
            </div>
            <!-- ---- -->
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
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ShopBanGiay-Php\shopbangiay\resources\views/admin/typepdt/edit.blade.php ENDPATH**/ ?>