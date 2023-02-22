@extends('layouts.admin')
@section('title', $viewData['title'])
@section('content')
<div class="card mb-4">
    <div class="card-header fw-bold">
        Create Type Products
    </div>
    <div class="card-body">
        @if ($errors->any())
        <ul class="alert alert-danger list-unstyled">
            @foreach ($errors->all() as $error)
            <li>- {{ $error }}</li>
            @endforeach
        </ul>
        @endif
        <fo rm method="POST" action="{{ route('admin.typepdt.store') }}" enctype="multipart/form-data">
            @csrf <!-- bảo vệ sự tấn công CSRF-->
            <!-- ---- -->
            <div class="row mb-3">
                <label class="col-lg-2 col-md-6 col-sm-12 col-form-label text-end" for="type"><i>Type:<span class="text-danger fw-bold">*</span></i></label>
                <div class="col-lg-3 col-md-6 col-sm-12 text-start">
                    <input name="type" value="{{ old('type') }}" type="text" class="form-control form-control-sm" placeholder="Nhập loại giày" id="type">
                </div>
            </div>

            <div class="row">
                <div class="col-lg-2"></div>
                <div class="col-lg-2 text-end">
                    <button type="submit" class="btn btn-outline-danger form-control form-control-sm">Submit</button>
                </div>

            </div>
            </form>
            <div class="mt-2">
                <a href="{{ route('admin.product.index') }}" class="link-info text-decoration-none"><button class="btn btn-outline-danger form-control form-control-sm">Chuyển sang trang sản phẩm</button></a>
            </div>
    </div>
</div>

<div class="card">
    <div class="card-header fw-bold">
        Manage Type Product
    </div>
    <div class="card-body">
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Type</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($viewData['typepdts'] as $typepdt)
                <tr>
                    <td>{{ $typepdt->getId() }}</td>
                    <td>{{ $typepdt->getType() }}</td>
                    <td>
                        <a class="btn btn-primary" href="{{ route('admin.typepdt.edit', ['id' => $typepdt->getId()]) }}">
                            <i class="bi-pencil"></i>
                        </a>
                    </td>
                    <td>
                        <form action="{{ route('admin.typepdt.delete', $typepdt->getId()) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger">
                                <i class="bi-trash"></i>
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>


@endsection