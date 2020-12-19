@extends('layout')

@section('main-content')

<div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Tạo ghế!</h1>
                            </div>
                            <form action="{{route('seat.store')}}" method="POST" class="user">
                            @csrf
                                <div class="form-group">
                                        <input type="text" class="form-control" id="exampleLastName" name="name" placeholder="Tên">
                                    </div>
                                <div class="form-group">
                                        <select name="cinema_id" class="browser-default custom-select" >
                                            <option value="">Chọn rạp</option>
                                            @foreach($Cinemas as $k=>$v)
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