@extends('admin.main')
@section('content')
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
        <label for="file">Ảnh Đại Diện</label>
        <input id="file" type="file"/>
        <input type="hidden" name="image" id="input-file-img-hiden">
        <div class="image-show" id="input-file-img"></div>
      </div>
      <div class="admin-content-main-content-right-images">
        <label for="files">Ảnh sản phẩm</label>
        <input id="files" type="file" multiple/>
        
        <div class="images-show" id="input-file-imgs"></div>
      </div>
    </div>
  </div>
@endsection
@section('footer')
<script src="{{asset('backend/asset/js/product_ajax.js')}}"></script>
@endsection 