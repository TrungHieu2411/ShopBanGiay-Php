
<?php $__env->startSection('title', $viewData['title']); ?>
<?php $__env->startSection('content'); ?>
<div class="card mb-4">
    <div class="card-header fw-bold">
        Create Type Products
    </div>
    <div class="card-body">
        <?php if($errors->any()): ?>
        <ul class="alert alert-danger list-unstyled">
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li>- <?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
        <?php endif; ?>
        <form method="POST" action="<?php echo e(route('admin.typepdt.store')); ?>" enctype="multipart/form-data">
            <?php echo csrf_field(); ?> <!-- bảo vệ sự tấn công CSRF-->
            <!-- ---- -->
            <div class="row mb-3">
                <label class="col-lg-2 col-md-6 col-sm-12 col-form-label text-end" for="type"><i>Type:<span class="text-danger fw-bold">*</span></i></label>
                <div class="col-lg-3 col-md-6 col-sm-12 text-start">
                    <input name="type" value="<?php echo e(old('type')); ?>" type="text" class="form-control form-control-sm" placeholder="Nhập loại giày" id="type">
                </div>
            </div>

            <div class="row">
                <div class="col-lg-2"></div>
                <div class="col-lg-2 text-end">
                    <button type="submit" class="btn btn-outline-danger form-control form-control-sm">Submit</button>
                </div>

            </div>
        </form>
        <div class="mt-2">
            <a href="<?php echo e(route('admin.product.index')); ?>" class="link-info text-decoration-none"><button class="btn btn-outline-danger form-control form-control-sm">Chuyển sang trang sản phẩm</button></a>
        </div>
    </div>
</div>

<div class="card">
    <div class="card-header fw-bold">
        Manage Type Product
    </div>
    <div class="card-body">
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Type</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $viewData['typepdts']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $typepdt): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($typepdt->getId()); ?></td>
                    <td><?php echo e($typepdt->getType()); ?></td>
                    <td>
                        <a class="btn btn-primary" href="<?php echo e(route('admin.typepdt.edit', ['id' => $typepdt->getId()])); ?>">
                            <i class="bi-pencil"></i>
                        </a>
                    </td>
                    <td>
                        <form action="<?php echo e(route('admin.typepdt.delete', $typepdt->getId())); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button class="btn btn-danger">
                                <i class="bi-trash"></i>
                            </button>
                        </form>
                    </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ShopBanGiay-Php\shopbangiay\resources\views/admin/typepdt/index.blade.php ENDPATH**/ ?>