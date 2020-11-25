@extends('layout')

@section('main-content')

<div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Create an InvoiceDetail!</h1>
                            </div>
                            <form class="user">
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user" id="exampleFirstName" placeholder="IdInvoiceID">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control form-control-user" id="exampleLastName" placeholder="TicketID">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="exampleInputEmail" placeholder="Quanity">
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user" id="exampleInputPassword" placeholder="Status">
                                    </div>
                                   
                                </div>
                                <a href="login.html" class="btn btn-primary btn-user btn-block">
                                    Register InvoiceDetail
                                </a>
                                <hr>
                               
                            </form>
                            <hr>
                            
                        </div>

@endsection