@extends('layout')

@section('main-content')
 

 <div class="container-fluid">
 					
                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Bảng vé</h1>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Danh sách vé</h6>
                        </div>
                        <a href="{{route ('ticket.create')}}" class="btn btn-success btn-icon-split">

                                        <span class="text">Tạo mới</span>
                        </a>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Mã vé</th>
                                            <th>Tên phim</th>
                                            <th>Thời gian</th>
                                            <th>Ghế</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    	@foreach($Tickets as $Ticket)
                                        @if($Ticket->status!=0)
                                        <tr>
                                            <td>{{$Ticket->id}}</td>
                                            <td>{{$Ticket->Screening->Movie->name}}</td>
                                            <td>{{$Ticket->Screening->time}}</td>
                                            <td>{{$Ticket->Seat->name}}</td>
                                            <td>
                                            	<a href="#" class="btn btn-info btn-circle">
                                        			<i class="fas fa-info-circle"></i>
                                    			</a>
                                    			<a href="/Xoa-ve/{{$Ticket->id}}" class="btn btn-danger btn-circle" >
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