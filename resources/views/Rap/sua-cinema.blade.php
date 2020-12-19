@extends('layout')

@section('main-content')

<div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Sửa rạp: {{$Cinema->name}}</h1>
                            </div>
                           <form action="/Sua-rap/{{$Cinema->id}}" method="POST" class="user">
                           @csrf
                                <div class="form-group">
                                    <input type="text" class="form-control " id="exampleLastName" name="name" value="{{$Cinema->name}}" placeholder="Tên rạp">
                                    <span class="text-danger">{{$errors->first('name')}}</span>
                                </div>
                                <div class="form-group">
                                        <select name="branch_id" class="browser-default custom-select" >
                                            <option value="">Chọn tên chi nhánh</option>
                                            @foreach($Branches as $k=>$v)
                                            <option value="{{$v->id}}">{{$v->name}}</option>
                                            @endforeach
                                        </select>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control " id="exampleInputEmail" name="seat_quantity" value="{{$Cinema->seat_quantity}}" placeholder="Số lượng ghế">
                                    <span class="text-danger">{{$errors->first('seat_quantity')}}</span>
                                </div>
                                <button class="btn btn-primary btn-user btn-block">
                                    Sửa 
                                </button>
                                <hr>
                               
                            </form>
                            <hr>
                            
                        </div>

@endsection