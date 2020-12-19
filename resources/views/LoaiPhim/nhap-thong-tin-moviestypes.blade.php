@extends('layout')

@section('main-content')

<div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Tạo loại phim!</h1>
                            </div>
                           <form action="{{ route('movietype.store') }}" method="POST" class="user">
                           @csrf
                                <div class="form-group row">
                                    <div class="col-sm-12">
                                        <input type="text" class="form-control" id="exampleLastName" name="name" placeholder="Tên loại phim">
                                        @if(count($errors)>0)
                                            @foreach($errors->all() as $error)
                                                <span class="text-danger">{{$error}}</span>
                                            @endforeach
                                        @endif
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