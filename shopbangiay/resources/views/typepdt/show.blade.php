@extends('layouts.app')
@section('title', $viewData['title'])
@section('subtitle', $viewData['subtitle'])
@section('content')
<div class="card my-3 bg-danger">
    <div class="row g-0 py-1">
        <div class="col-md-12 bg-light">
            <div class="card-body">
                <h5 class="card-title">
                    {{ $viewData['typepdt']['type'] }}
                </h5>
                <div class="row">
                    @csrf
                    <div class="col-12">
                        <p class="card-text"><span><i>Loại Giày:</i></span> {{ $viewData['typepdt']['type'] }}</p>
                    </div>
                    <div class="col-6 mt-2">
                        <a href="{{ route('product.index') }}" class="btn btn-info active text-white">Quay trở về trang sản phẩm</a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection