@extends('layout')

@section('main-content')
 

 <div class="container-fluid">
 					
                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Bảng người dùng</h1>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Danh sách người dùng</h6>
                        </div>
                        <a href="{{route ('user.create')}}" class="btn btn-success btn-icon-split">

                                        <span class="text">Tạo mới</span>
                        </a>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Mã</th>
                                            <th>Họ</th>
                                            <th>Tên</th>
                                            <th>SĐT</th>
                                            <th>Mật khẩu</th>
                                            <th>Ngày Sinh</th>
                                            <th>Trạng thái</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    	@foreach($Users as $User)
                                        @if($User->status!=0)
                                        <tr>
                                            <td>{{$User->id}}</td>
                                            <td>{{$User->first_name}}</td>
                                            <td>{{$User->last_name}}</td>
                                            <td>{{$User->phone}}</td>
                                            <td>{{$User->password}}</td>
                                            <td>{{$User->birthday}}</td>
                                            <td>
                                            	<a href="#" class="btn btn-info btn-circle">
                                        			<i class="fas fa-info-circle"></i>
                                    			</a>
                                                <a href="/Xoa-nguoi-dung/{{$User->id}}" class="btn btn-danger btn-circle" >
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