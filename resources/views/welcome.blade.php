<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <title>Home page</title>
        <meta name="csrf-token" content="{{ csrf_token() }}">

    </head>
    <body>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h4>Products</h4><br>

                    <a href="{{URL::to('/seller')}}">My account</a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8">
                    <div class="card-columns">
                        @foreach($products as $product)
                        <div class="card" style="width: 13rem;">
                            <div class="card-header">
                                <img src="{{URL::to('/images', $product->image)}}" alt="image" width="100px">
                            </div>
                            <div class="card-body">
                                <h4>Name: {{$product->name}}</h4>
                                <p>Price: {{$product->price}}</p>
                            </div>
                            <div class="card-footer">
                                <button type="button" onclick="addToCart({{$product->id}})" class="btn btn-dark btn-block btn-sm">Add to Cart</button>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <div class="col-md-4">
                        <h4>My Cart</h4>
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Quantity</th>
                                    <th>Price</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody id="my_cart">

                            </tbody>
                            <tfoot>
                                <tr>
                                    <td colspan="2"></td>
                                    <td id="total_cart"></td>
                                    <td></td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <script type="text/javascript" src="{{asset('js/app.js')}}">
        </script>
        <script type="text/javascript">
            $(document).ready(function(){
                getFromCart();
            });
            function deleteFromCart(id){
                var url = "{{URL::to('/user/delete_from_cart')}}/" + id;

                $.get(url,function(response){
                        console.log(response);
                        getFromCart();
                    },
                );
            }
            function getFromCart(){
                var url = "{{URL::to('/user/get_from_cart')}}";
                $.get(url, function(response){
                    var size = Object.keys(response).length;
                    console.log(response);
                    var div = "";
                    var total = 0;
                    if(size <= 0){
                        div = "<h4>Cart is Empty</h4>";
                    }else{
                        for(var i=0; i < size; i++){
                            div += "<tr><td>"+response[i]['name']+"</td><td>"+response[i]['quantity']+"</td><td>"+response[i]['price']+"</td>" +
                                    "<td><button type='button' onclick='deleteFromCart("+response[i]['id']+");'>delete</button></td></tr>";
                            total += response[i]['price'];
                        }
                    }


                    $('#my_cart').html(div);
                    $('#total_cart').html(total);
                });
            }
            function addToCart(pid){
                var url = "{{URL::to('/user/add_to_cart')}}";
                var product_id = pid;
                var csrf_token = "{{csrf_token()}}";
                $.post(url,{product_id:product_id, _token:csrf_token},function(response){
                        console.log(response);
                        getFromCart();
                    },
                );
            }
        </script>
    </body>
</html>
