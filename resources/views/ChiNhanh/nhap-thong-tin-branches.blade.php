@extends('layout')

@section('main-content')

<div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Tạo chi nhánh!</h1>
                            </div>
                           <form action="{{ route('branch.store') }}" method="POST" class="user">
                           @csrf
                                <div class="form-group row">
                                    <div class="col-sm-12">
                                        <input type="text" class="form-control " id="exampleLastName" name="name" placeholder="Tên chi nhánh">
                                        <span class="text-danger">{{$errors->first('name')}}</span>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-12 mb-3 mb-sm-0">
                                        <select name="manager_id" class="browser-default custom-select" placeholder="Tên quản lý">
                                            <option value="">Chọn tên quản lý</option>
                                            @foreach($Managers as $k=>$v)
                                            <option value="{{$v->id}}">{{$v->last_name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-12 mb-3 mb-sm-0">
                                        <input type="text" class="form-control " id="exampleInputEmail"name="address" placeholder="Địa chỉ">
                                        <span class="text-danger">{{$errors->first('address')}}</span>
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