@extends('layout')

@section('main-content')
 

 <div class="container-fluid">
 					
                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Bảng chi tiết hóa đơn</h1>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Danh sách chi tiết hóa đơn</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Mã hóa đơn</th>
                                            <th>Mã vé</th>
                                            <th>Tên phim</th>
                                            <th>Giờ chiếu</th>
                                            <th>Chỗ ngồi</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    	@foreach($InvoiceDetails as $InvoiceDetail)
                                        @if($InvoiceDetail->status!=0)
                                        <tr>
                                            <td>{{$InvoiceDetail->invoice_id}}</td>
                                            <td>{{$InvoiceDetail->ticket_id}}</td>
                                            <td>{{$InvoiceDetail->Ticket->Screening->Movie->name}}</td>
                                            <td>{{$InvoiceDetail->Ticket->Screening->time}}</td>
                                            <td>{{$InvoiceDetail->Ticket->Seat->name}}</td>
                                            <td>
                                    			<a href="/Xoa-chi-tiet-hoa-don/{{$InvoiceDetail->id}}" class="btn btn-danger btn-circle" >
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