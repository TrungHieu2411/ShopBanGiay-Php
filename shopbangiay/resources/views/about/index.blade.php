@extends('layouts.app')
@section('title', $viewData['title'])
@section('content')
<div class="container mt-3 text-center">
    <div class="row">
        @foreach ($viewData['about'] as $about)
        <div class="col-lg-12 ms-auto">
            <div class="col">
                <h4><b>
                        {{ $about ->getName() }}
                        <!-- BÁN GIÀY THỂ THAO SNEAKER CHÍNH HÃNG TẠI TP.HCM -->
                    </b></h4>
                <p>
                    {{ $about ->getMainDescription() }}
                    <!-- Lý do nên mua hàng nhập khẩu từ nhà phân phối chính hãng Khi mua hàng từ nhà phân phối chính
                    hãng, khách hàng sẽ nhận đầy đủ chế độ bảo hành, hậu mãi... Hiện nay, mạng xã hội phổ biến,
                    nhiều người kinh doanh trên facebook, đa phần là mỹ phẩm, thực phẩm, quần áo, đồ điện tử, đồ gia
                    dụng... -->
                </p>
                <p>
                    {{ $about ->getDescription() }}
                    <!-- Nỗi sợ vì mua phải giày kém chất lượng, giày fake, từ nay không còn lo lắng nữa vì đã có hàng
                    chính hãng nhập trực tiếp từ US, fullbox, nguyên tem.<br> -->
                </p>
                </p>
                <p>
                    <b class="text-info">SHOE'S STORE CAM KẾT:</b> <br>
                    ✓15 Ngày Đổi Hàng ✓Giao Hàng Miễn Phí ✓Thanh Toán Khi Nhận Hàng ✓Bảo Hành Hàng Chính Hãng.!!!
                </p>
                <div class="ratio ratio-16x9">
                    <iframe width="560" height="315" src="{{ $about ->getRatio1() }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>

                <p class="mt-4">
                    <b class="text-info">⇒ Để cải thiện chất lượng hàng ship đến tay Quý Khách NGUYÊN VẸN - ĐẸP -
                        CHUẨN HÀNG và CHUYÊN
                        NGHIỆP:</b> <br>
                    ☑ Shoe's Store sử dụng #Doublebox với lớp thùng carton nhãn hiệu uy tín để bảo vệ
                    hộp giày chính hãng.
                </p>
                <p>
                    <b class="text-info">⇒
                        Tất cả sản phẩm giày tại Shoe's Store được đổi hàng trong vòng 15 ngày kể
                        từ ngày nhận hàng</b>
                    khi chưa qua sử dụng còn full tag, hộp và kèm bill mua hàng.(do lỗi từ nhà sản xuất hoặc không
                    vừa size). Chỉ áp dụng đổi hàng với SP không SALE ( MỨC ck 5% TRỞ XUỐNG ).
                </p>
                <div class="ratio ratio-16x9">
                    <iframe width="560" height="315" src="{{ $about ->getRatio2() }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
                <!-- https://www.youtube.com/embed/sQck4wNYwA8 -->
                <p class="mt-4">
                    - Shoe's Store <b>CAM KẾT</b> sản phẩm đưa đến khách hàng là <b>CHÍNH HÃNG</b>, thẻ có giá trị
                    đảm bảo
                    <b>CHÍNH
                        HÃNG
                        TRỌN ĐỜI SẢN PHẨM</b>. Và chỉ chấp nhận bảo hành là hàng <b>CHÍNH HÃNG</b> với SP còn nguyên
                    tem và
                    Tag bảo
                    hành.
                </p>
                <p>
                    <b class="text-info">⇒ Thời Gian Giao Hàng:</b> <br>

                    ☑ Khu vực TP. Hồ Chí Minh: Giao hàng từ 1 - 2 ngày. <br>

                    ☑ Khu vực Tỉnh : Giao hàng từ 2 - 6 ngày. <br>

                </p>
                <p>
                    <b class="text-info">⇒ Bảng Giá Vận Chuyển:</b> <br>

                    ☑ Khu vực TP. Hồ Chí Minh: Miễn phí chi phí vận chuyển (Free ship). <br>

                    ☑ Khu vực Tỉnh : Hỗ trợ khách hàng 50k chi phí vận chuyển phát sinh từ các đơn vị
                    vận chuyển như: Giao Hàng Nhanh, VN Post, Viettel.
                </p>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection