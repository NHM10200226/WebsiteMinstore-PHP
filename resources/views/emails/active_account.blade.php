
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
          <h1>Xin chào {{ $customer->customer_name }}</h1>
          <h3>Cảm ơn bạn đã tin dùng sản phẩm bên shop chúng tôi</h3>
          <h3>Chúng tôi gửi mail này để xác nhận bạn đã tạo tài khoản tại hệ thống cửa hàng chúng tôi</h3>
          <h4> Dưới đây là thông tin tài khoản của bạn</h4>
            <table id="t01">
                <tr>
                  <th scope="col">Họ và tên</th>
                  <th scope="col">Email</th>
                  <th scope="col">Số điện thoại</th>
                  <th scope="col">Địa chỉ</th>
                </tr>
                <tr>
                  <td>{{ $customer->customer_name }}</td>
                  <td>{{ $customer->customer_email }}</td>
                  <td>{{ $customer->customer_phone}}</td>
                  <td>{{ $customer->customer_address }}</td>
                </tr>
            </table>
            <br>
            <br>
            <hr>
            <br>
            <br>
        </body>
         
        </html>

       