@extends('layouts.app')
@section('title', $viewData['title'])
@section('subtitle', $viewData['subtitle'])
@section('content')
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

                @foreach ($viewData['products'] as $product)
                <tr>
                    <td>{{ $product->getId() }}</td>
                    <td>{{ $product->getName() }}</td>
                    <td>${{ $product->getPrice() }}</td>
                    <td>{{ session('products')[$product->getId()] }}</td>
                </tr>
                @endforeach

            </tbody>
        </table>
        <div class="row">
            <div class="text-end">
                <a class="btn btn-outline-secondary mb-2"><b>Tổng tiền phải trả:</b> ${{ $viewData['total'] }}</a>
                @if (count($viewData["products"]) > 0)
                <a href="{{ route('cart.purchase') }}" class="btn bg-primary text-white mb-2">Đặt hàng</a>
                <a href="{{ route('cart.delete') }}">
                    <button class="btn btn-danger mb-2">
                        Xóa tất cả sản phẩm trong giỏ hàng
                    </button>
                </a>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection