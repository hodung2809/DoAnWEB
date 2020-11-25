@extends('layout')

@section('main-content')

<div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Create an ActorslnMovies!</h1>
                            </div>
                           <form class="user">
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user" id="exampleFirstName" placeholder="MovieID">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control form-control-user" id="exampleLastName" placeholder="ActorName">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="exampleInputEmail" placeholder="Status">
                                </div>
                                
                                <a href="login.html" class="btn btn-primary btn-user btn-block">
                                    Register ActorslnMovies
                                </a>
                                <hr>
                               
                            </form>
                            <hr>
                            
                        </div>

@endsection