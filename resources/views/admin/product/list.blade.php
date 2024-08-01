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
        @foreach ($products as $product)
          <tr>
            <td>{{$product -> id}}</td>
            <td>
              <img
                style="width: 70px"
                src="{{asset($product -> image)}}"
                alt=""
              />
            </td>
            <td>{{$product -> name}}</td>
            <td>{{number_format($product -> price_normal)}}</td>
            <td>{{number_format($product -> price_sale)}}</td>
            <td>{{$product -> created_at}}</td>
            <td>
              <a class="edit-class" href="/admin/product/edit/{{$product -> id}}">Sửa</a>
              <a onclick="removeRow(product_id={{$product -> id}},url='/admin/product/delete')" class="delete-class" href="#">Xóa</a>
            </td>
          </tr>    
        @endforeach
        
      </tbody>
    </head>
  </table>
</div>
@endsection
@section('footer')
  <script>
    //delete
    function removeRow(product_id, url) {
      if (confirm("Bạn chắc chắn muốn xóa Sản Phẩm này?")) {
        $.ajax({
          url: url,
          data: { product_id },
          method: "GET",
          dataType: "JSON",
          success: function (res) {
              if(res.success == true){
                location.reload();
              }
          },
        });
      }
    }
  </script>
@endsection