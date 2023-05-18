
@extends('layouts.admin')
 
@section('title')
 
<title>Trang chủ</title>

@endsection

@section('css')
<link href="{{ asset('Admins/Slider/add.css') }}" rel="stylesheet" />
@endsection

@section('js')
    <script src="{{ asset('vendors/sweetAlert2/sweetalert2@9.js') }}"></script>
    <script type="text/javascript" src="{{ asset('admins/main.js') }}"></script>
    <script src="{{ asset('vendors/sweetalert2/sweetalert2@11.js') }}"></script>
    <script src="{{ asset('Admins/Slider/index.js') }}"></script>
@endsection

@section('content')

           <!-- Content Wrapper. Contains page content -->
           <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            @include('partials.content-header',['name'=>'Slider','key' => 'List'])
            <!-- /.content-header -->

            <!-- Main content -->
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">

                          @can('slider-add')
                          <a href="{{ route('slider.create') }}" class="btn btn-success float-right m-2">Thêm</a> 
                          @endcan

                        </div>
                        <div class="col-md-12">
                            <table class="table">
                                <thead>
                                  <tr>
                                    <th scope="col">id</th>
                                    <th scope="col">Tên slider</th>
                                    <th scope="col">Mô tả</th>
                                    <th scope="col">Hình ảnh</th>
                                    <th scope="col">Action</th>
                                  </tr>
                                </thead>
                                <tbody>

                                  @foreach ($sliders as $slider)
                                  <tr>
                                    <th scope="row">{{ $slider->id }}</th>
                                    <td>{{ $slider->name }}</td>
                                    <td>{{ $slider->description }}</td>
                                    <td>
                                        <img class="slider_image_150_100" src="{{ $slider->image_path }}" alt="">
                                    </td>
                                    <td>
                                      @can('slider-edit')
                                      <a href="{{ route('slider.edit',['id'=>$slider->id]) }}" class="btn btn-default">Chỉnh sửa</a>
                                      @endcan

                                      @can('slider-delete')
                                      <a href="" data-url="{{ route('slider.delete',['id'=>$slider->id]) }}" class="btn btn-danger action_delete">Xóa</a>
                                      @endcan
                                      
                                    </td>
                                  </tr>
                                  @endforeach

                                </tbody>
                              </table>
                        </div>
                        <div class="col-md-12">
                            {{ $sliders->links('pagination::bootstrap-4') }}
                        </div>
                    </div>
                    <!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

@endsection       
       