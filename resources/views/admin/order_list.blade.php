@extends('admin.main')
@section('content')
<div class="admin-content-main-conten-order-list">
  <table>
    <head>
      <tr>
        <th>ID</th>
        <th>Tên</th>
        <th>Phone</th>
        <th>Email</th>
        <th>Địa Chỉ</th>
        <th>Ghi chú</th>
        <th>Chi Tiết</th>
        <th>Ngày</th>
        <th>Trạng Thái</th>
        <th>Xóa Đơn Hàng</th>
      </tr>
      <tbody>
        <tr>
          <td>1</td>
          <td>Hoàng Thiện</td>
          <td>0362434732</td>
          <td>thien349k@gmail.com</td>
          <td>14 Nguyễn văn Trỗi, An Nhơn, Bình Định</td>
          <td>Giờ cao điểm</td>
          <td><a class="edit-class" href="/admin/order_detail">Xem</a></td>
          <td>7/22/2024</td>
          <td><a class="confirm-order">Đã xác nhận</a></td>
          <td>
            <a class="delete-class" href="">Xóa</a>
          </td>
        </tr>
        <tr>
          <td>2</td>
          <td>Anh Tường</td>
          <td>0362434732</td>
          <td>thien349k@gmail.com</td>
          <td>14 Nguyễn văn Trỗi, An Nhơn, Bình Định</td>
          <td>Giờ cao điểm</td>
          <td><a class="edit-class" href="">Chi tiết</a></td>
          <td>7/22/2024</td>
          <td><a class="non-confirm-order">Chưa xác nhận</a></td>
          <td>
            <a class="delete-class" href="">Xóa</a>
          </td>
        </tr>
        <tr>
          <td>1</td>
          <td>Hoàng Thiện</td>
          <td>0362434732</td>
          <td>thien349k@gmail.com</td>
          <td>14 Nguyễn văn Trỗi, An Nhơn, Bình Định</td>
          <td>Giờ cao điểm</td>
          <td><a class="edit-class" href="">Chi tiết</a></td>
          <td>7/22/2024</td>
          <td><a class="confirm-order">Đã xác nhận</a></td>
          <td>
            <a class="delete-class" href="">Xóa</a>
          </td>
        </tr>
      </tbody>
    </head>
  </table>
</div>
@endsection