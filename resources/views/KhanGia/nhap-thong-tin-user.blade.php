@extends('layout')

@section('main-content')

<div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Thêm khán giả!</h1>
                            </div>
                            <form action="{{ route('user.store') }}" method="POST" class="user">
                            @csrf
                                <div class="form-group row">
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control " id="exampleLastName" name="first_name" placeholder="Họ">
                                        <span class="text-danger">{{$errors->first('first_name')}}</span>
                                    </div>
                                    
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control " id="exampleFirstName" name="last_name" placeholder="Tên">
                                        <span class="text-danger">{{$errors->first('last_name')}}</span>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control " id="exampleFirstName" name="password" placeholder="Mật khẩu">
                                        <span class="text-danger">{{$errors->first('password')}}</span>
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
                                                <input id="datepicker" width="570" name="birthday" placeholder="Ngày sinh" />
                                                <span class="text-danger">{{$errors->first('birthday')}}</span>
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
                                    <div class="col-sm-12">
                                        <input type="text" class="form-control " id="exampleLastName" name="phone" placeholder="Số điện thoại">
                                        <span class="text-danger">{{$errors->first('phone')}}</span></p>
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