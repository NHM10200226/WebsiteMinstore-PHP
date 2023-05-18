
@extends('layouts.admin')
 
@section('title')
 
<title>Thêm menus</title>

@endsection

@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
     @include('partials.content-header',['name'=>'Menu','key' => 'Add'])

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <form action="{{ route('menus.store') }}" method="POST">
                      @csrf

                        <div class="form-group">
                          <label >Tên menu</label>
                          <input type="text" class="form-control" name="name" placeholder="Nhập tên menu" required="required">
                        </div>
                        <div class="form-group">
                            <label>Chọn menu cha</label>
                            <select class="form-control" name="parent_id">
                              <option value="0">Chọn menu cha</option>
                              {!! $optionSelect !!}
                            </select>
                          </div>
                          
                          <button type="submit" class="btn btn-outline-danger">Submit</button>
                          <button type="button"  class="btn btn-outline-danger"><a href="{{ route('menus.index') }}">Go back</a></button>                      </form>
                </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

@endsection       
       