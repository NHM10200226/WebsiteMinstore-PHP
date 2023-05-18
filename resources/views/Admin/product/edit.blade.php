
@extends('layouts.admin')
 
@section('title')
<title>Sửa sản phẩm</title>
@endsection

@section('css')
<link href="{{ asset('vendors/select2/select2.min.css') }}" rel="stylesheet" />
<link href="{{ asset('Admins/Product/Add/add.css') }}" rel="stylesheet" />
<link rel="stylesheet" href="{{ asset('Admins/Product/index/list.css') }}">
@endsection

@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
     @include('partials.content-header',['name'=>'Product','key' => 'Edit'])

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">

                    <form action="{{ route('product.update',['id'=>$product->id]) }}" method="POST" enctype="multipart/form-data">
                      @csrf

                        <div class="form-group">
                          <label >Tên sản phẩm</label>
                          <input type="text" 
                          class="form-control"
                          name="name"
                          placeholder="Nhập tên sản phẩm"
                          value="{{ $product->name }}">
                        </div>

                        <div class="form-group">
                            <label >Giá sản phẩm</label>
                            <input type="text" 
                            class="form-control"
                            name="price"
                            placeholder="Nhập giá sản phẩm"
                            value="{{ $product->price }}">
                        </div>

                        <div class="form-group">
                            <label >Ảnh sản phẩm</label>
                            <input type="file" 
                            class="form-control-file"
                            name="feature_image_path">
                            <div class="container_detail_image">
                                <img class="product_image_150_100" src="{{ $product->feature_image_path }}" alt="">
                            </div>
                        </div>

                        <div class="form-group">
                            <label >Ảnh chi tiết sản phẩm</label>
                            <input type="file" 
                            multiple
                            class="form-control-file"
                            name="image_path[]">

                            <div class="col-md-12 container_detail_image">
                            <div class="row">
                            @foreach ($product->productImages as $productImageItem)
                            <div class="col-md-3">
                            <img class="detail_image" src="{{ $productImageItem->image_path }}" alt="">
                            </div>
                            @endforeach
                            </div>
                            </div>

                        </div>

                        <div class="form-group">
                            <label>Chọn danh mục cha</label>
                            <select class="form-control select2_init" name="category_id">
                              <option value="">Chọn danh mục</option>
                              {!! $htmlOption !!}
                            </select>
                          </div>

                          <div class="form-group">
                            <label>Nhập tags cho sản phẩm</label>
                          <select name="tags[]" class="form-control tags_select_choose" multiple="multiple">

                            @foreach ($product->tags as $tagItem )
                            <option value="{{ $tagItem->name }}" selected>{{ $tagItem->name }}</option>
                            @endforeach

                          </select>
                          </div>

                          <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Nội dung</label>
                            <textarea class="form-control tinymce_editor_init" name="content" id="exampleFormControlTextarea1" rows="3">{{ $product->content }}</textarea>
                          </div>

                          <button type="submit" class="btn btn-outline-danger">Submit</button>
                          <button type="submit"  class="btn btn-outline-danger"><a href="{{ URL::previous() }}">Go back</a></button>                      </form></br>
                </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

@endsection     


@section('js')
<script src="{{ asset('vendors/select2/select2.min.js') }}"></script>
<script src="{{ asset('Admins/Product/Add/add.js') }}"></script>
{{-- <script src="/path-to-your-tinymce/tinymce.min.js" referrerpolicy="origin"></script> --}}
<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

@endsection

