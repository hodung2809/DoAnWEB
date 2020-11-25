@extends('layout')

@section('main-content')

<div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Create an Managers!</h1>
                            </div>
                            <form class="user">
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user" id="exampleFirstName" placeholder="Id">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control form-control-user" id="exampleLastName" placeholder="Phone">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control form-control-user" id="exampleInputEmail" placeholder="Password">
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user" id="exampleInputPassword" placeholder="FisrtName">
                                    </div>
                                     <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user" id="exampleInputPassword" placeholder="LastName">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control form-control-user" id="exampleRepeatPassword" placeholder="Status">
                                    </div>
                                </div>
                                <a href="#" class="btn btn-primary btn-user btn-block">
                                    Register Managers
                                </a>
                                <hr>
                               
                            </form>
                            <hr>
                            
                        </div>

@endsection