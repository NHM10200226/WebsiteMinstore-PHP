
@extends('layouts.admin')
 
@section('title')
 
<title>Trang chủ</title>

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
            @include('partials.content-header',['name'=>'Category','key' => 'List'])
            <!-- /.content-header -->

            <!-- Main content -->
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                          
                          @can('category-add')
                          <a href="{{ route('categories.create') }}" class="btn btn-success float-right m-2">Thêm</a>
                          @endcan

                        </div>
                        <div class="col-md-12">
                            <table class="table">
                                <thead>
                                  <tr>
                                    <th scope="col">id</th>
                                    <th scope="col">Tên danh mục</th>
                                    <th scope="col">Action</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  @foreach ($categories as $category)
                                  <tr>
                                    <th scope="row">{{ $category->id }}</th>
                                    <td>{{ $category->name }}</td>
                                    <td>

                                      @can('category-edit')
                                      <a href="{{ route('categories.edit',['id'=> $category-> id]) }}" 
                                        class="btn btn-default">Chỉnh sửa</a>

                                      @endcan
                                      
                                      @can('category-delete')
                                      <a href=""
                                      data-url="{{ route('categories.delete',['id'=> $category-> id]) }}"
                                      class="btn btn-danger action_delete">Xóa</a>
                                      @endcan
                                      
                                    </td>
                                  </tr>
                                  @endforeach
                                </tbody>
                              </table>
                        </div>
                        <div class="col-md-12">
                          {{ $categories->links('pagination::bootstrap-4') }}
                      </div>
                    </div>
                    <!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

@endsection       
       