@extends('layouts.app')
@section('title', $viewData['title'])
@section('subtitle', $viewData['subtitle'])
@section('content')
<div class="row my-3">
    @foreach ($viewData['typepdts'] as $typepdt)
    <div class="col-md-3 col-lg-3 mt-2">
        <div class="card">
            <div class="card-body text-center">
                {{ $typepdt->getType() }}

            </div>
        </div>
    </div>
    @endforeach
    <div class="col-12 mt-2">
        <a href="{{ route('product.index') }}" class="btn btn-info active text-white">Quay trở về trang sản phẩm</a>
    </div>
</div>
@endsection