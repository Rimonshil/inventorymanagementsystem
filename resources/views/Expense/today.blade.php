@extends('layouts.backend.app')

@section('content')
<div class="row">
    @php
        $date = date("d/m/y");
        $expense = DB::table('expenses')->where('date',$date)->sum('amount')
    @endphp
    <div class="col-md-12">
    <h4 style="background-color: yellow" align="center">Total: {{$expense}}</h4>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Today Expense
                <a href="{{route('expense.create')}}" class="btn btn-sm btn-info pull-right">Add Expense</a>
                </h3>

            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <table id="datatable" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>Details</th>
                                    <th>Amount</th>
                                    <th>Action</th>
                                </tr>
                            </thead>

                     
                            <tbody>
                                @foreach ($today as $row)
                                
                                <tr>
                                <td>{{ $row-> details}}</td>
                                <td>{{ $row -> amount}}</td>
                              
                                    <td>
                                    <a href="{{route('expense.edit', $row->id)}}" class="btn btn-sm btn-info">Edit</a>
                                        <a href="" class="btn btn-sm btn-info" >View</a>
                                    <a href="{{URL::to('delete-expense/'.$row->id)}}" class="btn btn-sm btn-warning">Delete</a> 
                                        
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