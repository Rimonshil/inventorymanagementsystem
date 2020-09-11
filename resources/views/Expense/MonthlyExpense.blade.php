@extends('layouts.backend.app')

@section('content')
<div class="row">
  
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
            <h3 class="panel-title text-danger"> {{ date("F")}} All Expense
                <a href="{{route('expense.create')}}" class="btn btn-sm btn-info pull-right">Add Expense</a>
                </h3>
            </div>
            <div>
            <a href="{{ route('january.expense')}}" class="btn btn-sm btn-info">January</a>
            <a href="{{route('february.expense')}}" class="btn btn-sm btn-danger">February</a>
                <a href="" class="btn btn-sm btn-success">March</a>
                <a href="" class="btn btn-sm btm-primary">April</a>
                <a href="" class="btn btn-sm btn-warning">May</a>
                <a href="" class="btn btn-sm btn-info">June</a>
                <a href="" class="btn btn-sm btn-warning">July</a>
                <a href="" class="btn btn-sm btn-success">August</a>
                <a href="" class="btn btn-sm btn-primary">September</a>
                <a href="" class="btn btn-sm btn-danger">October</a>
                <a href="" class="btn btn-sm btn-info">November</a>
                <a href="" class="btn btn-sm btn-info">December</a>

            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <table id="datatable" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>Details</th>
                                    <th>Date</th>
                                    <th>Amount</th>
                                </tr>
                            </thead>

                     
                            <tbody>
                                @foreach ($MonthlyExpense as $row)
                                
                                <tr>
                                <td>{{ $row-> details}}</td>
                                <td>{{ $row-> date}}</td>
                                <td>{{ $row -> amount}}</td>
          
                                </tr>
                            </tbody>
                            @endforeach
                        </table>
                        @php
                        $month = date("F");
                        $expense = DB::table('expenses')->where('month',$month)->sum('amount')
                    @endphp
                    <h4 align ="center">Total Expense: {{$expense}} TAKA</h4>

                    </div>
                </div>
            </div>
        </div>
    </div>
    
</div> <!-- End Row -->

@endsection