@extends('layout')

@section('main-content')
 

 <div class="container-fluid">
 					
                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Bảng đánh giá</h1>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Danh sách đánh giá</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Tên người dùng</th>
                                            <th>Tên phim</th>
                                            <th>Đánh giá</th>
                                            <th>Bình luận</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    	@foreach($Comments as $Comment)
                                        <tr>
                                        @if($Comment->status!=0)
                                            <td>{{$Comment->User->last_name}}</td>
                                            <td>{{$Comment->Movie->name}}</td>
                                            <td>{{$Comment->rate}}</td>
                                            <td>{{$Comment->content}}</td>
                                            <td>
                                    			<a href="/Xoa-danh-gia/{{$Comment->id}}" class="btn btn-danger btn-circle" >
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
                                        @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    
@endsection