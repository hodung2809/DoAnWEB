@extends('layout')

@section('main-content')

<div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Tạo suất chiếu!</h1>
                            </div>
                           <form action="{{ route('screening.store') }}" method="POST" class="user">
                           @csrf
                                <div class="form-group">
                                        <select name="movie_id" class="browser-default custom-select" >
                                            <option value="">Chọn phim</option>
                                            @foreach($Movies as $k=>$v)
                                            <option value="{{$v->id}}">{{$v->name}}</option>
                                            @endforeach
                                        </select>
                                </div>
                                <div class="form-group">
                                        <select name="cinema_id" class="browser-default custom-select" >
                                            <option value="">Chọn rạp</option>
                                            @foreach($Cinemas as $k=>$v)
                                            <option value="{{$v->id}}">{{$v->name}}</option>
                                            @endforeach
                                        </select>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control " id="exampleInputPassword" name="time" placeholder="Thời gian">
                                </div>
                                <button class="btn btn-primary btn-user btn-block">
                                    Thêm
                                </button>
                                <hr>
                               
                            </form>
                            <hr>
                            
                        </div>

@endsection