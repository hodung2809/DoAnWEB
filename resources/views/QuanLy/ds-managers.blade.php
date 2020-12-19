@extends('layout')

@section('main-content')
 

 <div class="container-fluid">
 					
                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Bảng quản lý</h1>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Danh Sách quản lý</h6>
                        </div>
                        <a href="{{route ('manager.create')}}" class="btn btn-success btn-icon-split">

                                        <span class="text">Tạo mới</span>
                        </a>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Mã Quản Lý</th>
                                            <th>Họ</th>
                                            <th>Tên</th>
                                            <th>SĐT</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    	@foreach($Managers as $Manager)
                                        @if($Manager->status!=0)
                                        <tr>
                                            <td>{{$Manager->id}}</td>
                                            <td>{{$Manager->first_name}}</td>
                                            <td>{{$Manager->last_name}}</td>
                                            <td>{{$Manager->phone}}</td>
                                            <td>
                                            	<a href="/Sua-quan-ly/{{$Manager->id}}" class="btn btn-info btn-circle">
                                        			<i class="fas fa-info-circle"></i>
                                    			</a>
                                                <a href="/Xoa-quan-ly/{{$Manager->id}}" class="btn btn-danger btn-circle" >
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