@extends('layouts.app')
@section('title', $viewData['title'])
@section('content')

<div class="col-md-12 col-lg-12 mb-2">
    <img src="{{ asset('/img/cool-shoes.png') }}" class="img-fluid">
</div>

<div class="col-md-4 col-lg-4 mb-2">
    <img src="{{ asset('/img/bg-shoe.jpg') }}" class="img-fluid rounded">
</div>
<div class="col-md-4 col-lg-4 mb-2">
    <img src="{{ asset('/img/4K-Shoes.jpg') }}" class="img-fluid rounded">
</div>
<div class="col-md-4 col-lg-4 mb-2">
    <img src="{{ asset('/img/cool-shoes-hd.png') }}" class="img-fluid rounded">
</div>
@endsection