@extends('admin.layout')

{{-- @section('navbar')
<div class="container">
@include('admin.include.navbar')
</div>
@endsection --}}
@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title " style="text-align:center" >TẠO DANH MỤC GAME</h5>
                    <a href="{{ route('category.index') }}" class="btn btn-success">Xem danh sách danh mục game</a>
                    
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                  
                    <form action={{ route('category.store') }} method="POST" enctype="multipart/form-data">
                        @csrf
                        <br>
                        <div class="form-group">
                            <label for="title">Tiêu đề </label>
                            <input type="text" class="form-control" name = "title" placeholder="">
                            <br>
                        </div>

                        <div class="form-group">
                            <label for="image">Ảnh </label> <br>
                            <input type="file" class="form-control-file" name = "image">
                            
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="description">Mô tả</label>
                            <textarea class="form-control" name = "description" placeholder=""></textarea>
                            <br>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Trạng thái</label>
                            <select class="form-control" name="status">
                                <option value="1">Hiển thị</option>
                                <option value="0">Ẩn</option>
                            </select>
                        </div>
                        <br>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
