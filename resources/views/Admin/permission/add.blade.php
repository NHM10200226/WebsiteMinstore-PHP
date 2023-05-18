@extends('layouts.admin')

@section('title')
<title>Trang chu</title>
@endsection

@section('css')
<link rel="stylesheet" href="{{ asset('admins/role/add/add.css') }}">

@endsection

@section('js')
<script src="{{ asset('admins/role/add/add.js') }}"></script>
@endsection

@section('content')

<div class="content-wrapper">
    @include('partials.content-header', ['name' => 'Permission', 'key' => 'Add'])

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <form action="{{ route('permissions.store') }}" method="post">
                        @csrf

                        <div class="form-group">
                            <label>Chon tên module</label>
                            <select class="form-control" name="module_parent">
                                <option value="">Chon tên module</option>
                                @foreach(config('permissions.table_module') as $moduleItem)
                                <option value="{{ $moduleItem }}">{{ $moduleItem }}</option>
                                @endforeach


                            </select>
                        </div>

                        <div class="form-group">
                            <div class="row p-3 mb-2 bg-success text-white">

                                <div class="col-md-12">
                                    <label>
                                        <input type="checkbox" class="checkall">
                                        Chọn tất cả
                                    </label>
                                </div>
                                @foreach(config('permissions.module_childrent') as $moduleItemChilrent)
                                <div class="col-md-3">
                                    <label for="">
                                        <input type="checkbox" class="checkbox_childrent"
                                            value="{{ $moduleItemChilrent }}" name="module_chilrent[]">
                                        {{ $moduleItemChilrent }}
                                    </label>
                                </div>
                                @endforeach

                            </div>
                        </div>


                        <button type="submit" class="btn btn-outline-danger">Submit</button>
                        <button type="submit" class="btn btn-outline-danger"><a href="{{ URL::previous() }}">Go
                                back</a></button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection