
@extends('layouts.admin')
 
@section('title')
 
<title>Thêm nhân viên</title>

@endsection

@section('css')
<link href="{{ asset('vendors/select2/select2.min.css') }}" rel="stylesheet" />
@endsection

@section('js')
<script src="{{ asset('vendors/select2/select2.min.js') }}"></script>
<script>
    $('.select2_init').select2({
        'placeholder' : 'Chọn vai trò'
    })

</script>
@endsection

@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
     @include('partials.content-header',['name'=>'User','key' => 'Add'])

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <form action="{{ route('users.store') }}" method="POST" enctype="multipart/form-data">
                      @csrf

                        <div class="form-group">
                          <label >Tên</label>
                          <input type="text" 
                          class="form-control"
                            name="name"
                            placeholder="Nhập tên"
                            value="{{ old('name') }}">
                            @error('name')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                          <label >Email</label>
                          <input type="text" 
                          class="form-control"
                            name="email"
                            placeholder="Nhập tên email"
                            value="{{ old('email') }}">
                            @error('email')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label >Mật khẩu</label>
                            <input type="password" 
                            class="form-control"
                              name="password"
                              placeholder="Nhập mật khẩu">
                              @error('password')
                              <div class="alert alert-danger">{{ $message }}</div>
                              @enderror
                          </div>

                          <div class="form-group">
                            <label >Chọn vai trò</label>
                            <select name="role_id[]" class="form-control select2_init" multiple>
                                <option value=""></option>
                                @foreach ($roles as $role)
                                <option value="{{ $role->id }}">{{ $role->name }}</option>
                                @endforeach

                            </select>
                          </div>
                        <button type="submit" class="btn btn-outline-danger">Submit</button>
                        <button type="button"  class="btn btn-outline-danger"><a href="{{ route('users.index') }}">Go back</a></button> 
                    </form>
                </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

@endsection       
       