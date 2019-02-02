@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Product</div>
                <div class="card-body">
                    <form action="{{URL::to('/seller/product/update')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label>chose image</label>
                                <input type="file" name="image" class="form-control">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label>Code</label>
                                <input type="hidden" name="id" value="{{$product->id}}">
                                <input type="text" name="code" class="form-control" value="{{$product->code}}">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label>Name</label>
                                <input type="text" name="name" class="form-control" value="{{$product->name}}">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label>Mark Price</label>
                                <input type="text" name="mark_price" class="form-control" value="{{$product->mark_price}}">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label>Price</label>
                                <input type="text" name="price" class="form-control" value="{{$product->price}}">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label>Description</label>
                                <textarea name="description" class="form-control">{{$product->description}}</textarea>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label>Category *Please leave blank if you dont want to edit</label>
                                <select class="custom-select" name="category">
                                    <option value="{{$product->category_id}}">select</option>
                                    @foreach($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label>Brand *Please leave blank if you dont want to edit</label>
                                <select class="custom-select" name="brand">
                                    <option value="{{$product->brand_id}}">select</option>
                                    @foreach($brands as $brand)
                                    <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label>Status</label>
                                <select class="custom-select" name="status" required>
                                    <option value="">select</option>
                                    <option value="active">Active</option>
                                    <option value="discontinued">Out of Stock</option>
                                </select>
                            </div>
                        </div>
                        <input type="submit" name="submit" value="update product" class="btn btn-success">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
