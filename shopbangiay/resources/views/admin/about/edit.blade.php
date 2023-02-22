@extends('layouts.admin')
@section('title', $viewData['title'])
@section('content')
<div class="card mb-4">
    <div class="card-header fw-bold">
        Edit About
    </div>
    <div class="card-body">
        @if ($errors->any())
        <ul class="alert alert-danger list-unstyled">
            @foreach ($errors->all() as $error)
            <li>- {{ $error }}</li>
            @endforeach
        </ul>
        @endif
        <!-- add form -->
        <form method="POST" action="{{ route('admin.about.update', ['id' => $viewData['about']->getId()]) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <!--add element form: name, price, image, description-->
            <div class="row mb-3">
                <label class="col-lg-2 col-md-8 col-sm-12 col-form-label text-end" for="name"><i>Name:<span class="text-danger fw-bold">*</span></i></label>
                <div class="col-lg-3 col-md-4 col-sm-12 text-start">
                    <input name="name" value="{{ $viewData['about']->getName() }}" type="text" class="form-control form-control-sm" id="name">
                </div>
            </div>

            <div class="row mb-3">
                <label class="col-lg-2 col-md-8 col-sm-12 col-form-label text-end" for="ratio1"><i>Ratio Link 1:<span class="text-danger fw-bold">*</span></i></label>
                <div class="col-lg-3 col-md-4 col-sm-12 text-start">
                    <input name="ratio1" value="{{ $viewData['about']->getRatio1() }}" type="text" class="form-control form-control-sm" id="ratio1">
                </div>
            </div>

            <div class="row mb-3">
                <label class="col-lg-2 col-form-label text-end" for="maindes"><i>Main Description:<span class="text-danger fw-bold">*</span></i></label>
                <div class="col-lg-6 text-start">
                    <textarea class="form-control form-control-sm" name="maindes" rows="3" id="maindes">{{ $viewData['about']->getMainDescription() }}</textarea>
                </div>
            </div>

            <div class="row mb-3">
                <label class="col-lg-2 col-md-8 col-sm-12 col-form-label text-end" for="ratio2"><i>Ratio Link 2:<span class="text-danger fw-bold">*</span></i></label>
                <div class="col-lg-3 col-md-4 col-sm-12 text-start">
                    <input name="ratio2" value="{{ $viewData['about']->getRatio2() }}" type="text" class="form-control form-control-sm" id="ratio2">
                </div>
            </div>

            <div class="row mb-3">
                <label class="col-lg-2 col-form-label text-end" for="description"><i>Description:<span class="text-danger fw-bold">*</span></i></label>
                <div class="col-lg-6 text-start">
                    <textarea class="form-control form-control-sm" name="description" rows="3" id="description">{{ $viewData['about']->getDescription() }}</textarea>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-2"></div>
                <div class="col-lg-2 text-end">
                    <button type="submit" class="btn btn-primary form-control form-control-sm">Edit</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection