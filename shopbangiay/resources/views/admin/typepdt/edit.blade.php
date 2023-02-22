@extends('layouts.admin')
@section('title', $viewData['title'])
@section('content')
<div class="card mb-4">
    <div class="card-header fw-bold">
        Edit Type Product
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
        <form method="POST" action="{{ route('admin.typepdt.update', ['id' => $viewData['typepdt']->getId()]) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <!-- ---- -->
            <div class="row mb-2">
                <label class="col-lg-2 col-md-6 col-sm-12 col-form-label text-end" for="type"><i>Type:<span class="text-danger fw-bold">*</span></i></label>
                <div class="col-lg-3 col-md-6 col-sm-12 text-start">
                    <input name="type" value="{{ $viewData['typepdt']->getType() }}" type="text" class="form-control form-control-sm" id="type">
                </div>
            </div>
            <!-- ---- -->
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