@extends('layout')

@section('main-content')
 

 <div class="container-fluid">
 					
                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">TABLES INVOICES</h1>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Invoices List</h6>
                        </div>
                        <a href="{{route ('them-moi-invoices')}}" class="btn btn-success btn-icon-split">

                                        <span class="text">NEW</span>
                        </a>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>USERID</th>
                                            <th>STAFFID</th>
                                            <th>DATE</th>
                                            <th>STATUS</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                           <th>ID</th>
                                            <th>USERID</th>
                                            <th>STAFFID</th>
                                            <th>DATE</th>
                                            <th>STATUS</th>
                                            <th></th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    	@for($i=1;$i<101;$i++)
                                        <tr>
                                            <td>{{$i}}</td>
                                            <td>{{$i}}</td>
                                            <td>{{$i}}</td>
                                            <td>08/02/2000</td>
                                            <td>hoạt động</td>
                                            <td>
                                            	<a href="#" class="btn btn-info btn-circle">
                                        			<i class="fas fa-info-circle"></i>
                                    			</a>
                                    			<a href="#" class="btn btn-danger btn-circle">
                                        			<i class="fas fa-trash"></i>
                                    			</a>
                                            </td>
                                        </tr>
                                        @endfor
                            
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    
@endsection