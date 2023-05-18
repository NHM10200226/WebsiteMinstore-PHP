<!DOCTYPE html>
<html>

<head>
    <style>
        table,
        th,
        td {
            border: 1px solid black;
            border-collapse: collapse;
        }

        th,
        td {
            padding: 5px;
            text-align: left;
        }

        table#t01 {
            width: 100%;
            background-color: #f2f2d1;
        }
    </style>
</head>

<body>
    <h1>Xin chào {{ $shipping->shipping_name }}</h1>
    <h3>Cảm ơn bạn đã tin dùng sản phẩm bên chúng tôi</h3>
    <h3>Chúng tôi gửi gmail này để xác nhận bạn đã đặt hàng thành công tại cửa hàng chúng tôi</h3>
    <h4> Dưới đây là thông tin đơn hàng của bạn</h4>
    <table id="t01">
        <tr>
            <th>Product</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Sub Total</th>
        </tr>
        <tr>
            @php
            $total=0;
            @endphp
            @foreach ($carts as $id=>$cartItem)
            @php
            $total += $cartItem['price'] * $cartItem['quantity'] ;
            @endphp

        <tr>
            <td>
                <h3>{{ $cartItem['name'] }}</h3>
            </td>
            <td>$ {{ $cartItem['price'] }}</td>
            <td>
                <input type="text" name="quantity" class="quantitymin" value="{{ $cartItem['quantity'] }}" min="1"
                    max="100" disabled>
            </td>
            <td class="price">$ {{ number_format($cartItem['price'] * $cartItem['quantity'])}}</td>
        </tr><!-- END TR-->
        @endforeach
        </tr>
        <tr>
            <td colspan="4">
                <h3 align="center">Total: $ {{ number_format($total) }}</h3>
            </td>
        </tr>
    </table>
    <br>
    <br>
    <hr>
    <br>
    <br>
    <table id="t01">
        <tr>
            <td>Name</td>
            <td>City</td>
            <td>Addres</td>
            <td>Number Phone</td>
            <td>Email</td>
            <td>Method payment</td>
            <td>Rules</td>
        </tr>
        <tr>
            <td>{{ $shipping->shipping_name }}</td>
            <td>{{ $shipping->shipping_city }}</td>
            <td>{{ $shipping->shipping_address }}</td>
            <td>{{ $shipping->shipping_phone }}</td>
            <td>{{ $shipping->shipping_email }}</td>
            <td>{{ $shipping->shipping_method }}</td>
            <td>{{ $shipping->shipping_accept }}</td>
        </tr>
    </table>
</body>

</html>