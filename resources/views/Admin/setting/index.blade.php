
@extends('layouts.admin')
 
@section('title')
 
<title>Setting</title>

@endsection

@section('css')
 <link rel="stylesheet" href="{{ asset('Admins/Slider/add.css') }}">
@endsection

@section('js')
    <script src="{{ asset('vendors/sweetAlert2/sweetalert2@9.js') }}"></script>
    <script type="text/javascript" src="{{ asset('admins/main.js') }}"></script>
    <script src="{{ asset('vendors/sweetalert2/sweetalert2@11.js') }}"></script>
@endsection

@section('content')

           <!-- Content Wrapper. Contains page content -->
           <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            @include('partials.content-header',['name'=>'Setting','key' => 'List'])
            <!-- /.content-header -->

            <!-- Main content -->
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="btn-group float-right">

                              @can('setting-add')
                              <a type="button" class="btn btn-success dropdown-toggle dropdown_btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#">
                                Thêm cài đặt
                                <span class="caret"></span>
                              </a>
                              <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="{{ route('setting.create').'?type=Text' }}">Text</a></li>
                                <div class="dropdown-divider"></div>
                                <li><a class="dropdown-item" href="{{ route('setting.create').'?type=Textarea' }}">Textarea</a></li>
                              </ul>
                              @endcan

                            </div>
                        </div>
                        <div class="col-md-12">
                            <table class="table">
                                <thead>
                                  <tr>
                                    <th scope="col">id</th>
                                    <th scope="col">Config key</th>
                                    <th scope="col">Config value</th>
                                    <th scope="col">Type</th>
                                    <th scope="col">Action</th>
                                  </tr>
                                </thead>
                                <tbody>

                                  @foreach ($settings as $setting)
                                  <tr>
                                    <th scope="row">{{ $setting->id }}</th>
                                    <td>{{ $setting->config_key }}</td>
                                    <td>{{ $setting->config_value }}</td>
                                    <td>{{ $setting->type }}</td>
                                    <td>

                                      @can('setting-edit')
                                      <a href="{{ route('setting.edit',['id'=>$setting->id]) . '?type=' . $setting->type }}" class="btn btn-default">Chỉnh sửa</a>
                                      @endcan

                                      @can('setting-delete')
                                      <a href=""
                                      data-url="{{ route('setting.delete',['id'=>$setting->id]) }}"
                                        class="btn btn-danger action_delete">Xóa</a>
                                      @endcan
                                      
                                    </td>
                                  </tr>
                                  @endforeach

                                </tbody>
                              </table>
                        </div>
                        <div class="col-md-12">
                            {{ $settings->links('pagination::bootstrap-4') }}
                        </div>
                    </div>
                    <!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

@endsection       
       