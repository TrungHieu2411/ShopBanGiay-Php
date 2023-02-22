@extends('layouts.app')
@section('title', $viewData['title'])
@section('content')

<div class="col-md-12 col-lg-12 mb-2">
    <img src="{{ asset('/img/shoe.png') }}" class="img-fluid">
</div>

<div class="col-md-4 col-lg-4 mb-2">
    <img src="{{ asset('/img/nike.png') }}" class="img-fluid rounded">
</div>
<div class="col-md-4 col-lg-4 mb-2">
    <img src="{{ asset('/img/adidas.png') }}" class="img-fluid rounded">
</div>
<div class="col-md-4 col-lg-4 mb-2">
    <img src="{{ asset('/img/jordan.png') }}" class="img-fluid rounded">
</div>
@endsection