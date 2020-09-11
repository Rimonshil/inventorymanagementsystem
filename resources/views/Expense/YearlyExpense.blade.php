@extends('layouts.backend.app')

@section('content')
<div class="row">
  
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
            <h3 class="panel-title text-danger"> {{ date("Y")}} All Expense
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
                                    
                                </tr>
                            </thead>

                     
                            <tbody>
                                @foreach ($YearlyExpense as $row)
                                
                                <tr>
                                <td>{{ $row-> details}}</td>
                                <td>{{ $row -> amount}}</td>
                                </tr>
                            </tbody>
                            @endforeach
                        </table>
                        @php
                        $year = date("Y");
                        $expense = DB::table('expenses')->where('year',$year)->sum('amount')
                    @endphp
                    <h4 align ="center">Total Expense: {{$expense}} TAKA</h4>

                    </div>
                </div>
            </div>
        </div>
    </div>
    
</div> <!-- End Row -->

@endsection