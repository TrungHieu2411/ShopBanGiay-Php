@extends('layouts.admin')
@section('title', $viewData['title'])
@section('content')
<div class="card mb-4">
    <div class="card-header fw-bold">
        Create Products
    </div>
    <div class="card-body">
        @if ($errors->any())
        <ul class="alert alert-danger list-unstyled">
            @foreach ($errors->all() as $error)
            <li>- {{ $error }}</li>
            @endforeach
        </ul>
        @endif
        <form method="POST" action="{{ route('admin.product.store') }}" enctype="multipart/form-data">
            @csrf <!-- bảo vệ sự tấn công CSRF-->
            <div class="row mb-3">
                <label class="col-lg-2 col-md-8 col-sm-12 col-form-label text-end" for="name"><i>Name:<span class="text-danger fw-bold">*</span></i></label>
                <div class="col-lg-3 col-md-4 col-sm-12 text-start">
                    <input name="name" value="{{ old('name') }}" type="text" class="form-control form-control-sm" placeholder="Nhập tên giày" id="name">
                </div>
            </div>

            <div class="row mb-3">
                <label class="col-lg-2 col-md-6 col-sm-12 col-form-label text-end" for="price"><i>Price:<span class="text-danger fw-bold">*</span></i></label>
                <div class="col-lg-3 col-md-6 col-sm-12 text-start">
                    <input name="price" value="{{ old('price') }}" type="number" class="form-control form-control-sm" placeholder="Nhập giá tiền" id="price">
                </div>
            </div>

            <div class="row mb-3">
                <label class="col-lg-2 col-md-6 col-sm-12 col-form-label text-end" for="image"><i>Image:</i></label>
                <div class="col-lg-6 col-md-6 col-sm-12 text-start">
                    <input class="form-control form-control-sm" value="{{ old('img') }}" type="file" name="image" id="image">
                </div>
            </div>

            <div class="row mb-3">
                <label class="col-lg-2 col-md-6 col-sm-12 col-form-label text-end" for="size"><i>Size:<span class="text-danger fw-bold">*</span></i></label>
                <div class="col-lg-3 col-md-6 col-sm-12 text-start">
                    <input name="size" value="{{ old('size') }}" type="number" class="form-control form-control-sm" placeholder="Nhập kích cỡ" id="size">
                </div>
            </div>

            <div class="row mb-3">
                <label class="col-lg-2 col-md-6 col-sm-12 col-form-label text-end" for="price"><i>Trademark:<span class="text-danger fw-bold">*</span></i></label>
                <div class="col-lg-3 col-md-6 col-sm-12 text-start">
                    <input name="trademark" value="{{ old('trademark') }}" type="text" class="form-control form-control-sm" placeholder="Nhập thương hiệu" id="trademark">
                </div>
            </div>

            <div class="row mb-3">
                <label class="col-lg-2 col-form-label text-end" for="description"><i>Description:<span class="text-danger fw-bold">*</span></i></label>
                <div class="col-lg-6 text-start">
                    <textarea class="form-control form-control-sm" name="description" rows="3" id="description">{{ old('description') }}
                    </textarea>
                </div>
            </div>

            <div class="row mb-3">
                <label class="col-lg-2 col-form-label text-end" for="typepdt"><i>Typepdt ID:<span class="text-danger fw-bold">*</span></i></label>
                <div class="col-lg-6 col-md-6 col-sm-12 text-start">
                    <input class="form-control form-control-sm" value="{{ old('typepdt_id') }}" type="string" name="typepdt_id" id="typepdt">
                </div>
            </div>

            <div class="row">
                <div class="col-lg-2"></div>
                <div class="col-lg-2 text-end">

                    <button type="submit" class="btn btn-outline-danger form-control form-control-sm">Submit</button>
                </div>
            </div>
        </form>
        <div class="row mb-3">
            <div class="mt-2">
                <a href="{{ route('admin.typepdt.index') }}" class="link-info text-decoration-none"><button class="btn btn-outline-danger form-control form-control-sm">Chuyển sang trang loại sản phẩm</button></a>
            </div>
        </div>
    </div>
</div>

<div class="card">
    <div class="card-header fw-bold">
        Manage Products
    </div>
    <div class="card-body">
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Price</th>
                    <th scope="col">Image</th>
                    <th scope="col">Size</th>
                    <th scope="col">Trademark</th>
                    <th scope="col">Description</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($viewData['products'] as $product)
                <tr>
                    <td>{{ $product->getId() }}</td>
                    <td>{{ $product->getName() }}</td>
                    <td>{{ $product->getPrice() }}</td>
                    <td>{{ $product->getImage() }}</td>
                    <td>{{ $product->getSize() }}</td>
                    <td>{{ $product->getTrademark() }}</td>
                    <td>{{ $product->getDescription() }}</td>
                    <td>
                        <a class="btn btn-primary" href="{{ route('admin.product.edit', ['id' => $product->getId()]) }}">
                            <i class="bi-pencil"></i>
                        </a>
                    </td>
                    <td>
                        <form action="{{ route('admin.product.delete', $product->getId()) }}" method="POST">
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