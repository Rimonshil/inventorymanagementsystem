@extends('layouts.backend.app')
@section('content')
<div class="container">
    <div class="row">
        <!-- Basic example -->
        <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading"><h3 class="panel-title">Today Expense</h3></div>
                <div class="panel-body">
                <form role="form" method="POST" enctype="multipart/form-data" action=" {{ route('expense.update', $expense->id)}} ">
                    @method('PUT')
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputName">Expense Details</label>
                    <textarea name="details" id="exampleInputName" cols="50" rows="10" class="form-control" >{{$expense->details}}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail">Amount</label>
                    <input type="text" class="form-control" id="exampleInputEmail" placeholder="Enter Amount" name="amount" value="{{$expense->amount}}">
                    </div>
         
                        <button type="submit" class="btn btn-purple waves-effect waves-light">Update</button>
                    </form>
                </div><!-- panel-body -->
            </div> <!-- panel -->
        </div> <!-- col-->
    </div> <!-- End row -->
    </div>
@endsection