
@extends('layouts.admin')
 
@section('title')
 
<title>Thêm sản phẩm</title>

@endsection
@section('css')
 <link rel="stylesheet" href="{{ asset('Admins/Product/index/list.css') }}">
@endsection

@section('js')
    <script src="{{ asset('vendors/sweetAlert2/sweetalert2@9.js') }}"></script>
    <script type="text/javascript" src="{{ asset('admins/main.js') }}"></script>
    <script src="{{ asset('vendors/sweetalert2/sweetalert2@11.js') }}"></script>
    <script src="{{ asset('Admins/Product/index/list.js') }}"></script>
@endsection

@section('content')

           <!-- Content Wrapper. Contains page content -->
           <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            @include('partials.content-header',['name'=>'Product','key' => 'List'])
            <!-- /.content-header -->

            <!-- Main content -->
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">

                          @can('product-add')
                          <a href="{{ route('product.create') }}" class="btn btn-success float-right m-2">Thêm</a> 
                          @endcan

                        </div>
                        <div class="col-md-12">
                            <table class="table">
                                <thead>
                                  <tr>
                                    <th scope="col">id</th>
                                    <th scope="col">Tên sản phẩm</th>
                                    <th scope="col">Giá</th>
                                    <th scope="col">Hình ảnh</th>
                                    <th scope="col">Danh mục</th>
                                    <th scope="col">Action</th>
                                  </tr>
                                </thead>
                                <tbody>

                                  @foreach ($products as $productItem)
                                  <tr>
                                    <th scope="row">{{ $productItem->id }}</th>
                                    <td>{{ $productItem->name }}</td>
                                    <td>{{ number_format($productItem->price) }}</td>
                                    <td>
                                        <img class="product_image_150_100" src="{{ $productItem->feature_image_path }}" alt="">
                                    </td>
                                    <td>{{ optional($productItem->category)->name }}</td>
                                    <td>
                                      @can('product-edit')
                                      <a href="{{ route('product.edit',['id'=>$productItem->id]) }}" class="btn btn-default">Chỉnh sửa</a>
                                      @endcan

                                      @can('product-delete')
                                      <a href="" data-url="{{ route('product.delete',['id'=>$productItem->id]) }}" class="btn btn-danger action_delete">Xóa</a>
                                      @endcan
                                      
                                    </td>
                                  </tr>
                                  @endforeach

                                </tbody>
                              </table>
                        </div>
                        <div class="col-md-12">
                          {{ $products->links('pagination::bootstrap-4') }}
                      </div>
                    </div>
                    <!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

@endsection       
       