
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
            @include('partials.content-header',['name'=>'Menu','key' => 'List'])
            <!-- /.content-header -->

            <!-- Main content -->
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">

                          @can('menu-add')
                          <a href="{{ route('menus.create') }}" class="btn btn-success float-right m-2">Thêm</a>
                          @endcan

                        </div>
                        <div class="col-md-12">
                            <table class="table">
                                <thead>
                                  <tr>
                                    <th scope="col">id</th>
                                    <th scope="col">Tên menu</th>
                                    <th scope="col">Action</th>
                                  </tr>
                                </thead>
                                <tbody>

                                  @foreach ($menus as $menu)
                                  <tr>
                                    <th scope="row">{{ $menu->id }}</th>
                                    <td>{{ $menu->name }}</td>
                                    <td>

                                      @can('menu-edit')
                                      <a href="{{ route('menus.edit',['id'=> $menu-> id]) }}" class="btn btn-default">Chỉnh sửa</a>
                                      @endcan

                                      @can('menu-delete')
                                      <a href="" data-url="{{ route('menus.delete',['id'=>$menu->id]) }}" class="btn btn-danger action_delete">Xóa</a>
                                      @endcan
                                     
                                    </td>
                                  </tr>
                                  @endforeach

                                </tbody>
                              </table>
                        </div>
                        <div class="col-md-12">
                            {{ $menus->links('pagination::bootstrap-4') }}
                        </div>
                    </div>
                    <!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

@endsection       
       