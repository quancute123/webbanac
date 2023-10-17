@extends('layouts.app')

@section('navbar')
<div class="container">
@include('admin.include.navbar')
</div>
@endsection
@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">Liet Ke Danh Muc Game</div>

            <div class="card-body">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif
                    <a href="{{route('category.index')}}" class="btn btn-success">Liet Ke Danh Muc Game</a>
                    <form action = {{route('category.store')}} method="POST" enctype="multipart/form-data"> 
                        @csrf
                        <div class="form-group">
                          <label for="exampleInputEmail1">Tiltle </label>
                          <input type="text" class="form-control" name = "title" placeholder="...">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Image </label> <br>
                            <input type="file" class="form-control-file" name = "image">
                          </div>
                        <div class="form-group">
                          <label for="exampleInputPassword1">Description</label>
                          <textarea class="form-control" name = "description" placeholder="..."></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Status</label>
                            <select class="form-control" name="status">
                              <option value="1">Yes</option>
                              <option value="0">No</option>
                            </select>
                          </div>
                    
                        <button type="submit" class="btn btn-primary">Submit</button>
                      </form>
            </div>
        </div>
    </div>
</div>

  @endsection