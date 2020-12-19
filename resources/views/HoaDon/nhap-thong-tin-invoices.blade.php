@extends('layout')

@section('main-content')

<div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Tạo hóa đơn!</h1>
                            </div>
                            <form action="{{ route('invoice.store') }}" method="POST" class="user">
                            @csrf
                                <div class="form-group ">
                                        <select name="user_id" class="browser-default custom-select" >
                                            <option value="">Chọn tên người dùng</option>
                                            @foreach($Users as $k=>$v)
                                            <option value="{{$v->id}}"> {{$v->first_name}} {{$v->last_name}}</option>
                                            @endforeach
                                        </select>
                                </div>
                                <div class="form-group ">
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
                                                <input id="datepicker" width="1172" name="date" placeholder="Ngày" />
                                                <script>
                                                    $('#datepicker').datepicker({
                                                        uiLibrary: 'bootstrap4',
                                                        format:'yyyy/mm/dd'
                                                    });
                                                </script>
                                            </body>
                                        </html>
                                </div>
                                <button class="btn btn-primary btn-user btn-block">
                                    Thêm 
                                </button>
                                <hr>
                               
                            </form>
                            <hr>
                            
                        </div>

@endsection