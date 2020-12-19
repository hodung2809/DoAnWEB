@extends('layout')

@section('main-content')

<div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Sửa diễn viên: {{$Actor->actor_name}}</h1>
                            </div>
                           <form action="/Sua-dien-vien/{{$Actor->id}}" method="post" class="actor">
                                @csrf
                                <div class="form-group row">
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control form-control-user" id="exampleLastName"name="actor_name" value="{{$Actor->actor_name}}" placeholder="Tên diễn viên">
                                        <span class="text-danger">{{$errors->first('actor_name')}}</span>
                                    </div>
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                    <select name="movie_id" class="browser-default custom-select" placeholder="Tên phim">
                                            @foreach($Movies as $k=>$v)
                                                <option value="{{$v->id}}">{{$v->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <button class="btn btn-primary btn-user btn-block">
                                    sửa 
                                </button>
                                <hr>
                               
                            </form>
                            <hr>
                            
                        </div>

@endsection