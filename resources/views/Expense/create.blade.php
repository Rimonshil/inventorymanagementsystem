@extends('layouts.backend.app')

@section('content')
<div class="container">
<div class="row">
    <!-- Basic example -->
    <div class="col-md-6">
        <div class="panel panel-default">
            <div class="panel-heading"><h3 class="panel-title">Add Expense
            <a href="{{route('today.expense')}}" class="btn btn-sm btn-danger pull-right">Today</a>
                <a href="" class="btn btn-sm btn-info pull-right">This Month</a>
                </h3>
            </div>
            <div class="panel-body">
            <form role="form" method="POST" enctype="multipart/form-data" action="{{route('expense.store')}}">
                @csrf
                    <div class="form-group">
                        <label for="exampleInputName">Expense Details</label>
                        <textarea name="details" id="exampleInputName" cols="50" rows="10" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail">Amount</label>
                        <input type="text" class="form-control" id="exampleInputEmail" placeholder="Enter Amount" name="amount">
                    </div>
                    <div class="form-group">    
                    <input type="hidden" class="form-control" name="date" value="{{ date("d/m/y")}}">
                    </div>
                    <div class="form-group">    
                        <input type="hidden" class="form-control" name="month" value="{{ date("F")}}">
                        <input type="hidden" class="form-control" name="year" value="{{ date("Y")}}">
                        </div>   
     
                    <button type="submit" class="btn btn-purple waves-effect waves-light">Submit</button>
                </form>
            </div><!-- panel-body -->
        </div> <!-- panel -->
    </div> <!-- col-->
</div> <!-- End row -->
</div>

@endsection