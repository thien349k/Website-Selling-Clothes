@extends('admin.main')
@section('content')
<div class="admin-content-main-conten-order-list">
  <table>
    <head>
      <tr>
        <th>ID</th>
        <th>Ảnh</th>
        <th>Tên</th>
        <th>Giá</th>
        <th>Số lượng</th>
        <th>Thành tiền</th>
        <th>Xóa Đơn Hàng</th>
      </tr>
      <tbody>
        <tr>
          <td>1</td>
          <td>
            <img
              style="width: 70px"
              src="{{asset('backend/asset/image/product-1.jpg')}}"
              alt=""
            />
          </td>
          <td>Áo Sơ Mi Cổ Bẻ Tay Dài</td>
          <td>237,000</td>
          <td>1</td>
          <td>237,000</td>
          <td><a class="delete-class" href="">Xóa</a></td>
        </tr>
        <tr>
          <td>2</td>
          <td>
            <img
              style="width: 70px"
              src="{{asset('backend/asset/image/product-2.jpg')}}"
              alt=""
            />
          </td>
          <td>Áo Sơ Mi Cổ Bẻ Tay Ngắn</td>
          <td>237,000</td>
          <td>1</td>
          <td>237,000</td>
          <td><a class="delete-class" href="">Xóa</a></td>
        </tr>
        <tr>
          <td style="font-weight: 700" colspan="5">Tổng tiền:</td>
          <td style="font-weight: 700">474</td>
        </tr>
      </tbody>
    </head>
  </table>
</div>
@endsection