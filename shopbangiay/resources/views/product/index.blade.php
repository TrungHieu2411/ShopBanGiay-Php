@extends('layouts.app')
@section('title', $viewData['title'])
@section('subtitle', $viewData['subtitle'])
@section('content')
<div class="row mb-3">
    @foreach ($viewData['products'] as $product)
    <div class="col-md-4 col-lg-3 mt-3 mx-1 shadow-lg">
        <div class="card">
            <a href="{{ route('product.show', ['id' => $product -> getId()]) }}" class="bg-danger text-white fw-bold form-control">
                <img src="{{ asset('/storage/' . $product->getImage()) }}" style="height: 150px;" class="card-img-top">
            </a>
            <div class="card-body bg-secondary shadow-lg">
                <h4 class="card-header">
                    <a href="{{ route('product.show', ['id' => $product -> getId()]) }}" class="btn btn-outline-info text-warning fw-bold form-control">
                        {{ $product ->getName() }}
                    </a>
                </h4>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection