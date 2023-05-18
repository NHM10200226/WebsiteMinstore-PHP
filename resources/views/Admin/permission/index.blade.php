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
  @include('partials.content-header',['name'=>'Permission','key' => 'List'])
  <!-- /.content-header -->

  <!-- Main content -->
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">

          @can('permission-add')
          <a href="{{ route('permissions.create') }}" class="btn btn-success float-right m-2">Thêm</a>
          @endcan

        </div>
        <div class="col-md-12">
          <table class="table">
            <thead>
              <tr>
                <th scope="col">id</th>
                <th scope="col">Tên Permission</th>
                <th scope="col">Tên hiển thị</th>
                <th scope="col">Key_code</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>

              @foreach ($permissions as $permission)
              <tr>
                <th scope="row">{{ $permission->id }}</th>
                <td>{{ $permission->name }}</td>
                <td>{{ $permission->display_name }}</td>
                <td>{{ $permission->key_code }}</td>
                <td>

                  @can('permission-delete')
                  <a href="" data-url="{{ route('permissions.delete',['id'=>$permission->id]) }}"
                    class="btn btn-danger action_delete">Xóa</a>
                  @endcan

                </td>
              </tr>
              @endforeach

            </tbody>
          </table>
        </div>
        <div class="col-md-12">
          {{ $permissions->links('pagination::bootstrap-4') }}
        </div>
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

@endsection