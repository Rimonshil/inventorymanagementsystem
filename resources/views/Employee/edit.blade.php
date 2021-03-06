@extends('layouts.backend.app')
@section('content')
<div class="container">
    <div class="row">
        <!-- Basic example -->
        <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading"><h3 class="panel-title">Add Employee</h3></div>
                <div class="panel-body">
                <form role="form" method="POST" enctype="multipart/form-data" action=" {{ route('employee.update', $employee->id)}} ">
                    @method('PUT')
                    @csrf
                        <div class="form-group">
                            <label for="exampleInputName">Name</label>
                        <input type="text" class="form-control" id="exampleInputName" placeholder="Enter Name" name="name" value="{{$employee->name}}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail">Email</label>
                            <input type="text" class="form-control" id="exampleInputEmail" placeholder="Enter Email" name="email"value="{{$employee->email}}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPhone">Phone</label>
                            <input type="text" class="form-control" id="exampleInputPhone" placeholder="Enter Phone" name="phone" value="{{$employee->phone}}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputAddress">Address</label>
                            <input type="text" class="form-control" id="exampleInputAddress" placeholder="Enter Address" name="address" value="{{$employee->address}}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputExperience">Experience</label>
                            <input type="text" class="form-control" id="exampleInputExperience" placeholder="Enter Experience" name="experience" value="{{$employee->experience}}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputSalary">Salary</label>
                            <input type="text" class="form-control" id="exampleInputSalary" placeholder="Enter Salary" name="salary" value="{{$employee->salary}}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputVacation">Vacation</label>
                            <input type="text" class="form-control" id="exampleInputVacation" placeholder="Enter Vacation" name="vacation" value="{{$employee->vacation}}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputCity">City</label>
                            <input type="text" class="form-control" id="exampleInputCity" placeholder="Enter City" name="city" value="{{$employee->city}}">
                        </div>
         
                        <button type="submit" class="btn btn-purple waves-effect waves-light">Update</button>
                    </form>
                </div><!-- panel-body -->
            </div> <!-- panel -->
        </div> <!-- col-->
    </div> <!-- End row -->
    </div>
@endsection