
<?php $__env->startSection('title', $viewData['title']); ?>
<?php $__env->startSection('content'); ?>

<div class="col-md-12 col-lg-12 mb-2 mt-5">
    <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="<?php echo e(asset('/img/4K-Shoes.jpg')); ?>" class="img-fluid d-block w-100">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>

        <div class="container mt-5">
            <h4 class="text-secondary text-center  fw-light"> Bạn Không thể Chọn nơi mình sinh ra</h4>
            <h4 class="text-secondary text-center fw-light">Nhưng bạn có thể chọn cho mình một đôi giày ưng ý và <span class="fw-bold">Shoe Store</span> là lựa chọn tốt nhất</h4>
        </div>

        <div class="container">
            <hr class="text-center text-primary">
            <div class="row mt-5">
                <div class="col-md-6  ">
                    <img src="<?php echo e(asset('/img/nike.png')); ?>" class="img-fluid rounded">
                </div>
                <div class="col-md-6">
                    <h1 class="text-secondary display-1 fw-bold">NIKE</h1>
                    <p class="text-secondary">Là một thương hiệu giày và sản phẩm thể thao hàng đầu trên thế giới, được thành lập vào năm 1964 tại Beaverton, Oregon, Hoa Kỳ.Một trong những
                        chiến lược marketing thành công của NIKE là tạo ra những chiếc giày "iconic" có thiết kế độc đáo và đẹp mắt. Các mẫu giày như Air Max, Air Jordan, Cortez, Dunk, Blazer,
                        và SB Dunk được yêu thích bởi những người yêu thích giày thể thao và cả những người không phải là tín đồ của thể thao.</p>

                </div>
            </div>
        </div>
        <div class="container">
            <div class="row mt-5">
                <div class="col-md-6 ">
                    <h1 class="text-secondary display-1 fw-bold">ADIDAS</h1>
                    <p class="text-secondary">Là một thương hiệu giày và sản phẩm thể thao nổi tiếng trên toàn thế giới, được thành lập vào năm 1949 tại Herzogenaurach, Đức. Thương hiệu này đã trở thành một trong những
                        nhà sản xuất thể thao hàng đầu thế giới, cung cấp các sản phẩm bao gồm giày, quần áo, phụ kiện và các dụng cụ thể thao.Adidas có một số mẫu giày đình đám và được yêu thích như Stan
                        Smith, Superstar, Ultraboost, và Yeezy, đặc biệt là sự hợp tác với nhà thiết kế Kanye West tạo ra dòng giày Yeezy rất được ưa chuộng.
                        Adidas cũng hợp tác với các đội bóng đá và các vận động viên nổi tiếng để thiết kế các sản phẩm thể thao đặc biệt phù hợp với nhu cầu của họ.</p>

                </div>
                <div class="col-md-6">
                    <img src="<?php echo e(asset('/img/adidas.png')); ?>" class="img-fluid rounded">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row mt-5">
                <div class="col-md-6">
                    <img src="<?php echo e(asset('/img/jordan.png')); ?>" class="img-fluid rounded">
                </div>
                <div class="col-md-6">
                    <h1 class="text-secondary display-1 fw-bold">JORDAN</h1>
                    <p class="text-secondary">là một thương hiệu giày thể thao được lấy cảm hứng từ Michael Jordan, cầu thủ bóng rổ huyền thoại của Hoa Kỳ. Thương hiệu này được Nike sản xuất và phát triển từ năm 1984 và được giới trẻ yêu
                        thích trên toàn thế giới.Một trong những sản phẩm nổi tiếng nhất của Jordan là giày Air Jordan, với thiết kế độc đáo, màu sắc bắt mắt và chất lượng tuyệt vời.Từ các sản phẩm đến các chiến dịch quảng
                        cáo và các hoạt động bền vững, Jordan đã xây dựng một thương hiệu thể thao đầy tính cách mạng và được yêu thích trên toàn thế giới.</p>

                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ShopBanGiay-Php\shopbangiay\resources\views/home/index.blade.php ENDPATH**/ ?>