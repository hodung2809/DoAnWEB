@extends('layout')

@section('main-content')

<div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Tạo vé!</h1>
                            </div>
                            <form action="{{ route('ticket.store') }}" method="POST" class="user">
                            @csrf
                                <div class="form-group">
                                    <select name="screening_id" class="browser-default custom-select" >
                                    <option value="">Chọn phim</option>
                                            @foreach($Screenings as $k=>$v)
                                            <option value="{{$v->id}}">{{$v->Movie->name}}</option>
                                            @endforeach
                                        </select>
                                </div>
                                <div class="form-group ">
                                        <select name="screening_id" class="browser-default custom-select" >
                                        <option value="">Chọn thời gian chiếu</option>
                                            @foreach($Screenings as $k=>$v)
                                            <option value="{{$v->id}}">{{$v->time}}</option>
                                            @endforeach
                                        </select>
                                </div>
                                <div class="form-group">
                                    <select name="seat_id" class="browser-default custom-select" >
                                    <option value="">Chọn ghế ngồi</option>
                                            @foreach($Seats as $k=>$v)
                                            <option value="{{$v->id}}">{{$v->name}}</option>
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