@extends('layout')

@section('main-content')
 

 <div class="container-fluid">
 					
                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Bảng Phim</h1>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Danh sách phim</h6>
                        </div>
                        <a href="{{route ('movie.create')}}" class="btn btn-success btn-icon-split">

                                        <span class="text">Tạo mới</span>
                        </a>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Mã phim</th>
                                            <th>Tên phim</th>
                                            <th>Loại phim</th>
                                            <th>Quốc gia</th>
                                            <th>Nhà sản xuất</th>
                                            <th>Hình ảnh</th>
                                            <th>Thời lượng</th>
                                            <th>Ngày</th>
                                            <th>Trailer</th>
                                            <th>Giá</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    	@foreach($Movies as $Movie)
                                        @if($Movie->status!=0)
                                        <tr>
                                            <td>{{$Movie->id}}</td>
                                            <td>{{$Movie->name}}</td>
                                            <td>{{$Movie->MovieType->name}}</td>
                                            <td>{{$Movie->Country->name}}</td>
                                            <td>{{$Movie->director}}</td>
                                            <td><img src="/img/{{$Movie->image}}" height="80px" width="80px"></td>
                                            <td>{{$Movie->length}}</td>
                                            <td>{{$Movie->opening_day}}</td>
                                            <td><a>href="{{$Movie->trailer}}"</a></td>
                                            <td>{{$Movie->price}}</td>
                                            <td>
                                            	<a href="/Sua-phim/{{$Movie->id}}" class="btn btn-info btn-circle">
                                        			<i class="fas fa-info-circle"></i>
                                    			</a>
                                    			<a href="/Xoa-phim/{{$Movie->id}}" class="btn btn-danger btn-circle" >
                                        			<i class="fas fa-trash"></i>
                                    			</a>
                                            </td>
                                        </tr>
                                        @endif   
                                        @endforeach
                                        @if(session('thongbao'))
                                            <div class="text-center">
                                                {{session('thongbao')}}
                                            </div>
                                            @elseif(session('thongbaoo'))
                                            <div class="text-center">
                                                {{session('thongbaoo')}}
                                            </div>
                                        @endif
                                    </tbody>
                                    
                                </table>

                                
                            </div>
                        </div>
                    </div>
                    
@endsection