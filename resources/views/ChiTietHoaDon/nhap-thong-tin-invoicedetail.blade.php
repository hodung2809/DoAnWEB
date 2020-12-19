@extends('layout')

@section('main-content')

<div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Tạo chi tiết hóa đơn!</h1>
                            </div>
                            <form action="{{ route('invoicedetail.store') }}" method="POST" class="user">
                                <div class="form-group ">
                                    <select name="invoice_id" class="browser-default custom-select" >
                                        <option value="">Chọn tên người dùng</option>
                                            @foreach($Invoices as $k=>$v)
                                            <option value="{{$v->id}}">{{$v->User->first_name}} {{$v->User->last_name}}</option>
                                            @endforeach
                                    </select>
                                </div>
                                <div class="form-group ">
                                    <select name="ticket_id" class="browser-default custom-select" >
                                        <option value="">Chọn tên quản lý</option>
                                            @foreach($Tickets as $k=>$v)
                                            <option value="{{$v->id}}">{{$v->Screening->movie_id}}</option>
                                            @endforeach
                                    </select>
                                </div>
                                <div class="form-group ">
                                    <select name="invoice_id" class="browser-default custom-select" >
                                            @foreach($Invoices as $k=>$v)
                                            <option value="{{$v->id}}">{{$v->User->phone}}</option>
                                            @endforeach
                                    </select>
                                </div>
                                <button class="btn btn-primary btn-user btn-block">
                                    Thêm
                                </button>
                                <hr>
                               
                            </form>
                            <hr>
                            
                        </div>

@endsection