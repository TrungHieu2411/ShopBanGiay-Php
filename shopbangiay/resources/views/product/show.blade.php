@extends('layouts.app')
@section('title', $viewData['title'])
@section('subtitle', $viewData['subtitle'])
@section('content')
<div class="card my-3 bg-danger">
    <div class="row g-0 py-1">
        <div class="col-md-4">
            <img src="{{ asset('/storage/'.$viewData["product"]->getImage()) }}" class="img-fluid rounded-start h-100">
        </div>
        <div class="col-md-8 bg-light">
            <div class="card-body">
                <h5 class="card-title">
                    {{ $viewData['product']['name'] }} (${{ $viewData['product']['price'] }})
                </h5>
                <p class="card-text"><span class="fw-bold"><i>Mô tả:</i></span> {{ $viewData['product']['description'] }}</p>
                <a class="btn btn-info btn-outline-danger btn-sm text-white mb-3" href="{{ route('typepdt.index') }}">Thông tin chi tiết</a>

                <form method="POST" action="{{ route('cart.add', ['id' => $viewData['product'] -> getId()]) }}">
                    <div class="row">
                        @csrf
                        <div class="col-auto">
                            <div class="input-group col-auto mb-3">
                                <div class="input-group-text">Số lượng</div>
                                <input type="number" min="1" max="10" class="form-control quantity-input " name="quantity" value="1">
                            </div>
                            <button class="btn btn-info btn-outline-danger btn-sm text-white" type="submit">Thêm vào giỏ hàng</button>
                        </div>
                        <div class="col-auto">
                            <a href="{{ route('product.index') }}" class="active text-white"><button class="btn btn-info btn-outline-danger text-white">Quay trở về trang sản phẩm</button></a>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>
@endsection