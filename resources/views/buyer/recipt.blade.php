<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>recipt</title>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <style media="screen">
            td, th{
                padding: 5px;
                text-align: left;

            }
        </style>
    </head>
    <body>
        <table style="width: 33%;" border="1">
            <thead>
                <tr>
                    <td colspan="4">
                        <button type="button" onclick="print();" name="button">Print</button>
                    </td>
                </tr>
                <tr>
                    <td colspan="4">
                        <center>
                            <img src="https://www.designevo.com/res/templates/thumb_small/double-hexagon-and-simple-name.png" alt="logo" width="200px">
                        </center>
                    </td>
                </tr>
                <tr>
                    <th>Name</th>
                    <th>Qty</th>
                    <th>Price</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $total = 0;
                @endphp
                @foreach($cart as $o)
                <tr>
                    <td>{{$o->name}}</td>
                    <td>{{$o->quantity}}</td>
                    <td>{{$o->price}}</td>
                    <td>
                        {{ $o->quantity * $o->price }}
                        @php
                            $total += $o->quantity * $o->price;
                        @endphp
                    </td>
                </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="3">
                        Total in Rupees
                    </th>
                    <th>
                        {{$total}}
                    </th>
                </tr>
                <tr>
                    <td>
                        <p align="center">
                            Developed by: Technology Solution<br>
                            www.theteksol.com
                        </p>
                    </td>
                </tr>
            </tfoot>
        </table>
        <script type="text/javascript">
            function print(){
                window.print();
            }
        </script>
    </body>
</html>
