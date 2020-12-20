@extends('layout')

@section('main-content')

<div class="p-5"> 
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Sửa phim: {{$Movie->name}}</h1>
                            </div>
                           <form action="/Sua-phim/{{$Movie->id}}" method="POST" class="user">
                           @csrf
                                <div class="form-group row">
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" id="exampleLastName" name="name" placeholder="Tên phim" value="{{$Movie->name}}">
                                        <span class="text-danger">{{$errors->first('name')}}</span>
                                    </div>
                                    <div  class="col-sm-6 mb-3 mb-sm-0">
                                        <select name="movie_type_id" class="browser-default custom-select" >
                                            @foreach($Movietypes as $k=>$v)
                                            <option value="{{$v->id}}">{{$v->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <select name="country_id" class="browser-default custom-select" >
                                            @foreach($Countries as $k=>$v)
                                            <option value="{{$v->id}}">{{$v->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-sm-6 mb-3 mb-sm-2">
                                            <input type="file" class="form-control" id="exampleInputPassword" name="image" value="{{$Movie->image}}">
                                    </div>
                                </div>

                                 <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control" id="exampleInputPassword"name="length" placeholder="Thời lượng" value="{{$Movie->length}}">
                                        <span class="text-danger">{{$errors->first('length')}}</span>
                                    </div>
                                    <div class="col-sm-6">
                                    <html>
                                            <head>
                                                <meta charset="utf-8">
                                                <meta name="viewport" content="width=device-width, initial-scale=1">
                                                <title>Bootstrap 4 DatePicker</title>
                                                <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
                                                <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
                                                <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
                                                <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
                                            </head>
                                            <body>
                                                <input id="datepicker" width="570" name="opening_day" placeholder="Ngày" value="{{$Movie->opening_day}}" />
                                                <span class="text-danger">{{$errors->first('opening_day')}}</span>
                                                <script>
                                                    $('#datepicker').datepicker({
                                                        uiLibrary: 'bootstrap4',
                                                        format:'yyyy/mm/dd'
                                                    });
                                                </script>
                                            </body>
                                        </html>
                                    </div>
                                </div>

                                 <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control" id="exampleInputPassword"name="trailer" placeholder="Trailer" value="{{$Movie->trailer}}">
                                        <span class="text-danger">{{$errors->first('trailer')}}</span>       
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" id="exampleRepeatPassword"name="price" placeholder="Giá tiền" value="{{$Movie->price}}">
                                        <span class="text-danger">{{$errors->first('price')}}</span>           
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-12">
                                        <input type="text" class="form-control " id="exampleRepeatPassword" name="director" placeholder="Đạo diễn" value="{{$Movie->director}}">
                                        <span class="text-danger">{{$errors->first('director')}}</span>
                                    </div>
                                </div>
                                <button class="btn btn-primary btn-user btn-block">
                                    Sửa
                                </button>
                                <hr>
                               
                            </form>
                            <hr>
                            
                        </div>

@endsection