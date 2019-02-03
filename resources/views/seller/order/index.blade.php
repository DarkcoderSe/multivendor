@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Seller Dashboard &bull; <a href="{{URL::to('/seller/order/delivered')}}">My Delievered Orders</a></div>
                <div class="card-body">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Customer name</th>
                                <th>Contact</th>
                                <th>Adddress</th>
                                <th>Order details</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($orders as $order)
                            <tr>
                                <td>{{$order->guest}}</td>
                                <td>{{$order->contact}}</td>
                                <td>{{$order->address}}</td>
                                <td>
                                    <a href="{{ URL::to('/seller/order', $order->id) }}" class="btn btn-primary btn-sm">Details</a>
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
