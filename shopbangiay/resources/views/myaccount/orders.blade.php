@extends('layouts.app')
@section('title', $viewData["title"])
@section('subtitle', $viewData["subtitle"])
@section('content')
@forelse ($viewData["orders"] as $order)
<div class="card mt-4">
    <div class="card-header">
        Order #{{ $order->getId() }}
    </div>
    <div class="card-body">
        {{-- insert code card-body --}}
        <b>Date:</b> {{ $order->getCreatedAt() }}<br />
        <b>Total:</b> ${{ $order->getTotal() }}<br />
        <b>Trạng Thái:</b> {{ $order->getTrangthai() }}<br />
        <table class="table table-bordered table-striped text-center my-3">
            <thead>
                <tr>
                    <th scope="col">Item ID</th>
                    <th scope="col">Product Name</th>
                    <th scope="col">Price</th>
                    <th scope="col">Quantity</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($order->getItems() as $item)
                <tr>
                    <td>{{ $item->getId() }}</td>
                    <td>
                        <a class="link-success" href="{{ route('product.show', ['id' => $item->getProduct()->getId()]) }}">
                            {{ $item->getProduct()->getName() }}
                        </a>
                    </td>
                    <td>${{ $item->getPrice() }}</td>
                    <td>{{ $item->getQuantity() }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</div>
@empty
<div class="alert alert-danger mt-3" role="alert">
    Có vẻ như bạn chưa mua bất cứ thứ gì trong cửa hàng của chúng tôi =(.
</div>
@endforelse
@endsection