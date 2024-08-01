@extends('admin.main')
@section('content')
<form action="/admin/product/add" enctype="multipart/form-data" method="post">
    <div class="admin-content-main-content-product-add">
    <div class="admin-content-main-content-left">
      <div class="admin-content-main-content-two-input">
        <input type="text" value="{{old('name')}}" name="name" placeholder="Tên sản phẩm" />
        @error('name')
        <p class="text-danger">{{ $message }}.</p>
        @enderror
        <input class="can" class="can" type="text" value="{{old('material')}}" name="material" placeholder="Chất liệu" />
        @error('material')
        <p class="text-danger">{{ $message }}.</p>
        @enderror

      </div>
      <div class="admin-content-main-content-two-input">
        <input type="text" value="{{old('price_normal')}}" name="price_normal" placeholder="Giá bán" />
        @error('price_normal')
        <p class="text-danger">{{ $message }}.</p>
        @enderror

        <input class="can" class="can" type="text" value="{{old('price_sale')}}" name="price_sale" placeholder="Giá giảm" />
        @error('price_sale')
        <p class="text-danger">{{ $message }}.</p>
        @enderror

      </div>
      <textarea class="editor_des" name="description" id="" placeholder="Đặc điểm nổi bật">{{old('description')}}</textarea>
      @error('description')
        <p class="text-danger">{{ $message }}.</p>
      @enderror

      <textarea class="editor_content" name="content" id="" placeholder="Mô tả sản phẩm">{{old('content')}}</textarea>
      @error('content')
        <p class="text-danger">{{ $message }}.</p>
      @enderror

      <button type="submit" class="main-btn">Thêm sản phẩm</button>
    </div>
    <div class="admin-content-main-content-right">
      <div class="admin-content-main-content-right-image">
        <label for="file">Ảnh Đại Diện</label>
        <input id="file" type="file"/>
        <input type="hidden" name="image" id="input-file-img-hiden">
        @error('image')
        <p class="text-danger">{{ $message }}.</p>
        @enderror
        <div class="image-show" id="input-file-img"></div>
      </div>
      <div class="admin-content-main-content-right-images">
        <label for="files">Ảnh sản phẩm</label>
        <input id="files" type="file" multiple/>
        @error('images')
        <p class="text-danger">{{ $message }}.</p>
        @enderror
        <div class="images-show" id="input-file-imgs"></div>
      </div>
    </div>
  </div>
  @csrf
</form>
@endsection
@section('footer')
<script src="{{asset('backend/asset/js/product_ajax.js')}}"></script>
@endsection 