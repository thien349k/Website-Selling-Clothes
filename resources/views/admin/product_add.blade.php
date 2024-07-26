@extends('admin.main')
@section('content')
<form method="post" id="form" ectype="multipart/form-data">

  <div class="admin-content-main-content-product-add">
  <div class="admin-content-main-content-left">
    <div class="admin-content-main-content-two-input">
      <input type="text" placeholder="Tên sản phẩm" />
      <input type="text" placeholder="Chất liệu" />
    </div>
    <div class="admin-content-main-content-two-input">
      <input type="text" placeholder="Giá bán" />
      <input type="text" placeholder="Giá giảm" />
    </div>
    <textarea name="" id="" placeholder="Đặc điểm nổi bật"></textarea>
    <textarea name="" id="" placeholder="Mô tả sản phẩm"></textarea>
    <button class="main-btn">Thêm sản phẩm</button>
  </div>
    <div class="admin-content-main-content-right">
      <div class="admin-content-main-content-right-image">
        <label id="editor" for="file">Ảnh Đại Diện</label>
        <input id="file" type="file" name="product_image" />
        <div class="image-show"></div>
      </div>
      <div class="admin-content-main-content-right-images">
        <label for="file">Ảnh sản phẩm</label>
        <input id="files" type="files" />
        <div class="images-show"></div>
      </div>
    </div>
  </div>
</form>
@endsection
@section('footer')
<script src="{{asset('backend/asset/js/product_ajax.js')}}"></script>
@endsection 