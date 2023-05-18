
@extends('layouts.admin')
 
@section('title')
<title>Thêm sản phẩm</title>
@endsection

@section('css')
<link href="{{ asset('vendors/select2/select2.min.css') }}" rel="stylesheet" />
<link href="{{ asset('Admins/Product/Add/add.css') }}" rel="stylesheet" />
@endsection

@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
     @include('partials.content-header',['name'=>'Product','key' => 'Add'])
     
     <div class="col-md-12">
      {{-- @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
      @endif --}}
     </div>

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">

                    <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
                      @csrf

                        <div class="form-group">
                          <label >Tên sản phẩm</label>
                          <input type="text" 
                          class="form-control @error('name') is-invalid @enderror"
                          name="name"
                          placeholder="Nhập tên sản phẩm"
                          value="{{ old('name') }}">

                          @error('name')
                          <div class="alert alert-danger">{{ $message }}</div>
                          @enderror

                        </div>

                        <div class="form-group">
                            <label >Giá sản phẩm</label>
                            <input type="text" 
                            class="form-control @error('price') is-invalid @enderror"
                            name="price"
                            placeholder="Nhập giá sản phẩm"
                            value="{{ old('price') }}">

                            @error('price')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror

                        </div>

                        <div class="form-group">
                            <label >Ảnh sản phẩm</label>
                            <input type="file" 
                            class="form-control-file"
                            name="feature_image_path">
                        </div>

                        <div class="form-group">
                            <label >Ảnh chi tiết sản phẩm</label>
                            <input type="file" 
                            multiple
                            class="form-control-file"
                            name="image_path[]">
                        </div>

                        <div class="form-group">
                            <label>Chọn danh mục cha</label>
                            <select class="form-control select2_init @error('category_id') is-invalid @enderror" name="category_id">
                              <option value="">Chọn danh mục</option>
                              {!! $htmlOption !!}
                            </select>
                            @error('category_id')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                          </div>

                          <div class="form-group">
                            <label>Nhập tags cho sản phẩm</label>
                          <select name="tags[]" class="form-control tags_select_choose" multiple="multiple">

                          </select>
                          </div>

                          <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Nội dung</label>
                            <textarea class="form-control tinymce_editor_init @error('content') is-invalid @enderror"
                             name="content" 
                             id="exampleFormControlTextarea1" 
                             rows="3">{{ old('content') }}</textarea>
                             @error('content')
                             <div class="alert alert-danger">{{ $message }}</div>
                             @enderror
                          </div>

                          <button type="submit" class="btn btn-outline-danger">Submit</button>
                          <button type="button"  class="btn btn-outline-danger"><a href="{{ route('product.index') }}">Go back</a></button>                      </form></br>
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

