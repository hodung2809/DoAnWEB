@extends('layout')

@section('main-content')

<div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Tạo quản lý!</h1>
                            </div>
                            <form action="{{ route('manager.store') }}" method = "POST" class="user">
                            @csrf
                                <div class="form-group row">
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control " id="exampleLastName" name="first_name" placeholder="Họ">
                                        <span class="text-danger">{{$errors->first('first_name')}}</span>
                                    </div>
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control " id="exampleInputPassword" name="last_name" placeholder="Tên">
                                        <span class="text-danger">{{$errors->first('last_name')}}</span>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control" id="exampleInputPassword"name="password" placeholder="Mật khẩu">
                                        <span class="text-danger">{{$errors->first('password')}}</span>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" id="exampleRepeatPassword"name="phone" placeholder="Số điện thoại">
                                        <span class="text-danger">{{$errors->first('phone')}}</span>
                                    </div>
                                </div>
                                <button class="btn btn-primary btn-user btn-block">
                                    Thêm
                                </button>
                                <hr>
                               
                            </form>
                            <hr>
                            
                        </div>

@endsection