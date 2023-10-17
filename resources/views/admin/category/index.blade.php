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
                    <a href="{{route('category.create')}}" class="btn btn-success">Them Danh Muc Game</a>
                    <table class="table table-bordered table-sm">
                        <thead>
                          <tr>
                            <th>id</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Display</th>
                            <th>Image</th>
                            <th>Status</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach($category as $key => $cate)
                          <tr>
                            <td>July</td>
                            <td>Dooley</td>
                            <td>july@example.com</td>
                            <td>July</td>
                            <td>Dooley</td>
                            <td>july@example.com</td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
            </div>
        </div>
    </div>
</div>
@endsection