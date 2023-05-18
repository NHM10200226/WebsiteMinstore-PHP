
@extends('layouts.admin')
 
@section('title')
 
<title>Thêm danh mục</title>

@endsection

@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
     @include('partials.content-header',['name'=>'Setting','key' => 'Edit'])

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <form action="{{ route('setting.update',['id'=>$setting->id]) }}" method="POST">
                      @csrf
                        <div class="form-group">
                          <label >Tên config key</label>
                          <input type="text"
                          class="form-control @error('config_key') is-invalid @enderror"
                          name="config_key"
                          value="{{ $setting->config_key }}"
                          placeholder="Nhập config key">
                          @error('config_key')
                          <div class="alert alert-danger">{{ $message }}</div>
                          @enderror
                        </div>

                        @if(request()->type==='Text')

                        <div class="form-group">
                            <label >Tên config value</label>
                            <input type="text"
                            class="form-control @error('config_value') is-invalid @enderror"
                            name="config_value"
                            value="{{ $setting->config_value }}"
                            placeholder="Nhập config value">
                            @error('config_value')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                          </div>
                        @elseif (request()->type==='Textarea')
                        <div class="form-group">
                            <label >Tên config value</label>
                            <textarea type="text "
                            class="form-control  @error('config_value') is-invalid @enderror"
                            cols="30" rows="10"
                            name="config_value"
                            placeholder="Nhập config value">
                            {{ $setting->config_value }}
                            </textarea>
                            @error('config_value')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                          </div>
                        @endif

                        <button type="submit" class="btn btn-outline-danger">Submit</button>
                        <button type="submit"  class="btn btn-outline-danger"><a href="{{ route('setting.index') }}">Go back</a></button>

                      </form>
                </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

@endsection       
       