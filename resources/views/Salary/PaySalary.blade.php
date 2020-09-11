@extends('layouts.backend.app')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
            <h3 class="panel-title">Pay Salary <span class="pull-right text-danger"> {{ date("F Y")}}</span></h3>
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <table id="datatable" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Image</th>
                                    <th>Salary</th>
                                    <th>Month</th>
                                    <th>Advanced</th>
                                    <th>Action</th>
                                </tr>
                            </thead>

                     
                            <tbody>
                                @foreach ($employees as $employee)
                                   
                                <tr>
                                <td>{{ $employee-> name}}</td>

                                <td> <img src="{{asset('/storage/'.$employee->photo)}}" alt="" width="80px" height="50px"> </td>
                                <td> {{ $employee-> salary}} </td>
                                <td> <span class="badge badge-success"> {{ date("F", strtotime('-1 months'))}} </span></td>
                                                             
                                @foreach ($salaries as $item)
                                <td>{{ $item->advanced_salary}}</td>
                                @endforeach
                                    <td>
                                    <a href="{{route('employee.edit', $employee->id)}}" class="btn btn-sm btn-info">Pay Now</a>
                                        
                                    </td>
                                   
                                </tr>
                            </tbody>
                            
                            @endforeach
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
    
</div> <!-- End Row -->

@endsection