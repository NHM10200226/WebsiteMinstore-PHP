
@extends('layouts.admin')
 
@section('title')
 
<title>Trang chủ</title>

@endsection

@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
     @include('partials.content-header',['name'=>'Menu','key' => 'Edit'])

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">

                    <form action="{{ route('menus.update',['id'=>$menusFollowIdEdit->id])}}" method="POST">
                      @csrf

                        <div class="form-group">
                          <label >Tên danh mục</label>
                          <input type="text" 
                          class="form-control" 
                          name="name" 
                          value="{{ $menusFollowIdEdit->name }}" 
                          placeholder="Nhập tên menu"required="required">
                        </div>

                        <div class="form-group">
                            <label>Chọn menu cha</label>
                            <select class="form-control" name="parent_id">
                              <option value="0">Chọn menu cha</option>
                              {!! $optionSelect !!}
                            </select>
                          </div>
    
                        <button type="submit" class="btn btn-outline-danger">Submit</button>
                        <button type="submit"  class="btn btn-outline-danger"><a href="{{ URL::previous() }}">Go back</a></button>                      </form>
                </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

@endsection       
       