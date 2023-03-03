
<?php $__env->startSection('title', $viewData['title']); ?>
<?php $__env->startSection('content'); ?>
<div class="card mb-4">
    <div class="card-header fw-bold">
        Create Abouts
    </div>
    <div class="card-body">
        <?php if($errors->any()): ?>
        <ul class="alert alert-danger list-unstyled">
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li>- <?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
        <?php endif; ?>
        <form method="POST" action="<?php echo e(route('admin.about.store')); ?>" enctype="multipart/form-data">
            <?php echo csrf_field(); ?> <!-- bảo vệ sự tấn công CSRF-->
            <div class="row mb-3">
                <label class="col-lg-2 col-md-8 col-sm-12 col-form-label text-end" for="name"><i>Name:<span class="text-danger fw-bold">*</span></i></label>
                <div class="col-lg-3 col-md-4 col-sm-12 text-start">
                    <input name="name" value="<?php echo e(old('name')); ?>" type="text" class="form-control form-control-sm" placeholder="Nhập tiêu đề" id="name">
                </div>
            </div>

            <div class="row mb-3">
                <label class="col-lg-2 col-md-6 col-sm-12 col-form-label text-end" for="ratio1"><i>Ratio Link 1:<span class="text-danger fw-bold">*</span></i></label>
                <div class="col-lg-5 col-md-6 col-sm-12 text-start">
                    <input name="ratio1" value="<?php echo e(old('ratio1')); ?>" type="text" class="form-control form-control-sm" placeholder="Nhập Link Ratio" id="ratio1">
                </div>
            </div>

            <div class="row mb-3">
                <label class="col-lg-2 col-form-label text-end" for="maindes"><i>Main Description:<span class="text-danger fw-bold">*</span></i></label>
                <div class="col-lg-6 text-start">
                    <textarea class="form-control form-control-sm" name="maindes" rows="3" id="maindes"><?php echo e(old('maindes')); ?>

                    </textarea>
                </div>
            </div>

            <div class="row mb-3">
                <label class="col-lg-2 col-md-6 col-sm-12 col-form-label text-end" for="ratio2"><i>Ratio Link 2:<span class="text-danger fw-bold">*</span></i></label>
                <div class="col-lg-5 col-md-6 col-sm-12 text-start">
                    <input name="ratio2" value="<?php echo e(old('ratio2')); ?>" type="text" class="form-control form-control-sm" placeholder="Nhập Link Ratio" id="ratio2">
                </div>
            </div>

            <div class="row mb-3">
                <label class="col-lg-2 col-form-label text-end" for="description"><i>Description:<span class="text-danger fw-bold">*</span></i></label>
                <div class="col-lg-6 text-start">
                    <textarea class="form-control form-control-sm" name="description" rows="3" id="description"><?php echo e(old('description')); ?>

                    </textarea>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-2"></div>
                <div class="col-lg-2 text-end">
                    <button type="submit" class="btn btn-outline-danger form-control form-control-sm">Submit</button>
                </div>
            </div>
        </form>
    </div>
</div>

<div class="card">
    <div class="card-header fw-bold">
        Manage Abouts
    </div>
    <div class="card-body">
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Ratio Link 1</th>
                    <th scope="col">Main Description</th>
                    <th scope="col">Ratio Link 2</th>
                    <th scope="col">Description</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $viewData['abouts']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $about): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($about->getId()); ?></td>
                    <td><?php echo e($about->getName()); ?></td>
                    <td><?php echo e($about->getRatio1()); ?></td>
                    <td><?php echo e($about->getMainDescription()); ?></td>
                    <td><?php echo e($about->getRatio2()); ?></td>
                    <td><?php echo e($about->getDescription()); ?></td>
                    <td>
                        <a class="btn btn-primary" href="<?php echo e(route('admin.about.edit', ['id' => $about->getId()])); ?>">
                            <i class="bi-pencil"></i>
                        </a>
                    </td>
                    <td>
                        <form action="<?php echo e(route('admin.about.delete', $about->getId())); ?>" method="POST">
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
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ShopBanGiay-Php\shopbangiay\resources\views/admin/about/index.blade.php ENDPATH**/ ?>