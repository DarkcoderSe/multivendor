@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Seller Dashboard &bull; <a href="{{URL::to('/seller/product/new')}}">Add new product</a> </div>
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Image</th>
                                <th>Name</th>
                                <th>Price</th>
                                <th>Description</th>
                                <th>Status</th>
                                <th>Category</th>
                                <th>Brand</th>
                                <th>Acction</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($products as $product)
                            <tr>
                                <td>
                                    <img src="{{URL::to('/images', $product->image)}}" alt="Image" width="50px" height="50px">
                                </td>
                                <td>{{$product->name}}</td>
                                <td>{{$product->price}}</td>
                                <td>{{$product->description}}</td>
                                <td>{{$product->status}}</td>
                                <td>{{$product->Category->name}}</td>
                                <td>{{$product->Brand->name}}</td>
                                <td>
                                    <div class="btn-group">
                                            <a href="{{ URL::to('/seller/product/edit', $product->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                            <a href="{{ URL::to('/seller/product/delete', $product->id) }}" class="btn btn-danger btn-sm">Delete</a>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
