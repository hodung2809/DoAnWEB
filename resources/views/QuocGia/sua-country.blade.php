@extends('layout')

@section('main-content')

<div class="p-5" >
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Sửa quốc gia: {{$Country->name}}</h1>
                            </div>
                           <form action="/Sua-quoc-gia/{{$Country->id}}" method ="post" class="user">
                                @csrf
                                <div class="form-group row">
                                 
                                    <div class="col-sm-12">
                                        <input type="text" class="form-control" id="exampleLastName" name="name"placeholder="Tên quốc gia" value="{{$Country->name}}" >
                                        @if(count($errors)>0)
                                            @foreach($errors->all() as $error)
                                                <span class="text-danger">{{$error}}</span>
                                            @endforeach
                                        @endif    
                                    </div>
                                </div>
                                <div class="form-group row">
                                <button class="btn btn-primary btn-user btn-block">
                                    Sửa
                                </button>
                                </div>
                                <hr>
                            </form>                        
                            <hr>
                            
                        </div>
@endsection