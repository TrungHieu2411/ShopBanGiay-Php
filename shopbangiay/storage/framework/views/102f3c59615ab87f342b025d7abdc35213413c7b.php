
<?php $__env->startSection('title', $viewData['title']); ?>
<?php $__env->startSection('subtitle', $viewData['subtitle']); ?>
<?php $__env->startSection('content'); ?>
<div class="card my-5">
    <div class="card-header">
        Sản phẩm trong giỏ hàng
    </div>
    <div class="card-body">
        <table class="table table-bordered table-striped text-center">
            <thead>
                <tr>
                    <th scope="col">Mã giày</th>
                    <th scope="col">Tên giày</th>
                    <th scope="col">Giá tiền</th>
                    <th scope="col">Số lượng</th>
                </tr>
            </thead>
            <tbody>

                <?php $__currentLoopData = $viewData['products']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($product->getId()); ?></td>
                    <td><?php echo e($product->getName()); ?></td>
                    <td>$<?php echo e($product->getPrice()); ?></td>
                    <td><?php echo e(session('products')[$product->getId()]); ?></td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </tbody>
        </table>
        <div class="row">
            <div class="text-end">
                <a class="btn btn-outline-secondary mb-2"><b>Tổng tiền phải trả:</b> $<?php echo e($viewData['total']); ?></a>
                <?php if(count($viewData["products"]) > 0): ?>
                <a href="<?php echo e(route('cart.purchase')); ?>" class="btn bg-primary text-white mb-2">Đặt hàng</a>
                <a href="<?php echo e(route('cart.delete')); ?>">
                    <button class="btn btn-danger mb-2">
                        Xóa tất cả sản phẩm trong giỏ hàng
                    </button>
                </a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ShopBanGiay-Php\shopbangiay\resources\views/cart/index.blade.php ENDPATH**/ ?>