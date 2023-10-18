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
              <h5 class="card-title">DANH SÁCH DANH MỤC GAME</h5>
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif
                    <a href="{{route('category.create')}}" class="btn btn-success">Thêm danh mục game</a>
                    <table class="table table-striped">
                        <thead>
                          <tr>
                            <th>STT</th>
                            <th>Tiêu đề</th>
                            <th>Mô tả</th>                           
                            <th>Hình ảnh</th>
                            <th>Trạng thái</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach($category as $key)
                          <tr>
                            <td>{{$key->id}}</td>
                            <td>{{$key->title}}</td>
                            <td>{{$key->description}}</td>
                            <td>{{$key->image}}</td>
                            @if($key->status == 1)
                            <td>{{'Đang hiển thị'}}</td>   
                            @else
                            <td>{{'Đã được ẩn'}}</td>   
                            @endif
                                                    
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
            </div>
        </div>
    </div>
</div>

{{-- <div class="row justify-content-center">
  <div class="col-md-8">
    <div class="card-body">
      <h5 class="card-title">DANH SÁCH DANH MỤC GAME</h5>
      
      <button class="btn btn-info">
        <a href="?r=admin/quanlyhoa/themhoa">Thêm hoa</a>
      </button>
  
      <!-- Table with stripped rows -->
      <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">Mã hoa</th>
            <th scope="col">Tên hoa</th>
            <th scope="col">Giá bán</th>
            <th scope="col">Ảnh</th>
            
            
        
          </tr>
        </thead>
        <tbody>
         
        </tbody>
      </table>
      <!-- End Table with stripped rows -->
    </div>
  </div> --}}



 
</div>
@endsection