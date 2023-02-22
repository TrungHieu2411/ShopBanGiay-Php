@extends('layouts.app')
@section('title', $viewData['title'])
@section('subtitle', $viewData['subtitle'])
@section('content')
<div class="card mb-3">
    <div class="row g-0">
        <div class="col-md-8">
            <div class="card-body">
                <h5 class="card-title">
                    {{ $viewData["item"]->getId() }}
                    (${{ $viewData["item"]->getQuantity() }})
                </h5>
                <p class="card-text">Price: {{ $viewData["item"]->getPrice() }}</p>
                <p class="card-text"><small class="text-muted">Add to Cart</small></p>
            </div>
        </div>
    </div>
</div>
@endsection