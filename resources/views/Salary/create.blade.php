@extends('layouts.backend.app')

@section('content')
<div class="container">
<div class="row">
    <!-- Basic example -->
    <div class="col-md-6">
        <div class="panel panel-default">
            <div class="panel-heading"><h3 class="panel-title">Add Salary</h3></div>
            <div class="panel-body">
            <form role="form" method="POST" enctype="multipart/form-data" action="{{route('store.advanced')}}">
                @csrf
                    <div class="form-group">
                        <label for="exampleInputName">Employee Name</label>
                    <select name="emp_id" id="exampleInputName" class="form-control">
                        @foreach ($employee as $item)
                    <option value="{{$item->id}}">{{$item->name}}</option>
                        @endforeach
                    </select>
                        
                    </div>
                    <div class="form-group">
                        <label for="exampleInputMonth" >Month</label>
                        <select name="month" id="exampleInputMonth" class="form-control">
                            <option value="January">January</option>
                            <option value="February">February</option>
                            <option value="March">March</option>
                            <option value="April">April</option>
                            <option value="May">May</option>
                            <option value="June">June</option>
                            <option value="July">July</option>
                            <option value="August">August</option>
                            <option value="September">September</option>
                            <option value="October">October</option>
                            <option value="November">November</option>
                            <option value="December">December</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPhone">Year</label>
                        <input type="text" class="form-control" id="exampleInputPhone" placeholder="Enter Year" name="year">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPhone">Advanced Salary</label>
                        <input type="text" class="form-control" id="exampleInputPhone" placeholder="Advanced Salary" name="advanced_salary">
                    </div>
                    <button type="submit" class="btn btn-purple waves-effect waves-light">Submit</button>
                </form>
            </div><!-- panel-body -->
        </div> <!-- panel -->
    </div> <!-- col-->
</div> <!-- End row -->
</div>

@endsection