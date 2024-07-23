@extends('admin.main')
@section('content')
<div class="admin-content-main-conten-product-list">
  <table>
    <head>
      <tr>
        <th>ID</th>
        <th>Ảnh</th>
        <th>Tên sản phẩm</th>
        <th>Giá bán</th>
        <th>Giá giảm</th>
        <th>Ngày đăng</th>
        <th>Tùy chỉnh</th>
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
          <td>297,000</td>
          <td>60,000</td>
          <td>2024-7-22</td>
          <td>
            <a class="edit-class" href="">Sửa</a>
            <a class="delete-class" href="">Xóa</a>
          </td>
        </tr>
        <tr>
          <td>1</td>
          <td>
            <img
              style="width: 70px"
              src="{{asset('backend/asset/image/product-2.jpg')}}"
              alt=""
            />
          </td>
          <td>Áo Sơ Mi Cổ Bẻ Tay Dài</td>
          <td>297,000</td>
          <td>60,000</td>
          <td>2024-7-22</td>
          <td>
            <a class="edit-class" href="">Sửa</a>
            <a class="delete-class" href="">Xóa</a>
          </td>
        </tr>
        <tr>
          <td>3</td>
          <td>
            <img
              style="width: 70px"
              src="{{asset('backend/asset/image/product-3.jpg')}}"
              alt=""
            />
          </td>
          <td>Áo Sơ Mi Cổ Bẻ Tay Dài</td>
          <td>297,000</td>
          <td>60,000</td>
          <td>2024-7-22</td>
          <td>
            <a class="edit-class" href="">Sửa</a>
            <a class="delete-class" href="">Xóa</a>
          </td>
        </tr>
        <tr>
          <td>4</td>
          <td>
            <img
              style="width: 70px"
              src="{{asset('backend/asset/image/product-4.jpg')}}"
              alt=""
            />
          </td>
          <td>Áo Sơ Mi Cổ Bẻ Tay Dài</td>
          <td>297,000</td>
          <td>60,000</td>
          <td>2024-7-22</td>
          <td>
            <a class="edit-class" href="">Sửa</a>
            <a class="delete-class" href="">Xóa</a>
          </td>
        </tr>
      </tbody>
    </head>
  </table>
</div>
@endsection