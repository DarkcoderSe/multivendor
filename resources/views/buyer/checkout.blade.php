@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">checkout</div>

                <div class="card-body">
                    <form action="{{ URL::to('/user/checkout') }}" method="post">
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label>Name</label>
                                <input type="text" class="form-control" name="name">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label>Contact</label>
                                <input type="text" class="form-control" name="contact">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label>address</label>
                                <textarea name="address" class="form-control"></textarea>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label>Message for Seller</label>
                                <textarea name="message" class="form-control"></textarea>
                            </div>
                        </div>
                        <input type="submit" class="btn btn-success btn-block" name="submit" value="Make Order">
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Qty</th>
                        <th>Price</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($cart as $o)
                    <tr>
                        <td>{{$o->name}}</td>
                        <td>{{$o->quantity}}</td>
                        <td>{{$o->price}}</td>
                        <td>
                            <a href="{{URL::to('/user/delete_from_cart', $o->id)}}" class="btn btn-danger btn-sm">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
