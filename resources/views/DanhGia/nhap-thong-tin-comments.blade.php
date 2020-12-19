@extends('layout')

@section('main-content')

<div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Tạo đánh giá!</h1>
                            </div>
                           <form action="{{ route('comment.store') }}" method="POST" class="user">
                           @csrf
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <select name="user_id" class="browser-default custom-select" >
                                            @foreach($Users as $k=>$v)
                                            <option value="{{$v->id}}">{{$v->last_name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-sm-6">
                                        <select name="movie_id" class="browser-default custom-select" >
                                            @foreach($Movies as $k=>$v)
                                            <option value="{{$v->id}}">{{$v->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control " id="exampleInputEmail" name="rate" placeholder="Đánh giá">
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-12 mb-3 mb-sm-0">
                                        <input type="text" class="form-control " id="exampleInputPassword"name="content" placeholder="Bình luận">
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