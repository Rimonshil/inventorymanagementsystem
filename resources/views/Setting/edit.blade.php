@extends('layouts.backend.app')
@section('content')
<div class="container">
    <div class="row">
        <!-- Basic example -->
        <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading"><h3 class="panel-title">Update Company Information</h3></div>
                <div class="panel-body">
                <form role="form" method="POST" enctype="multipart/form-data" action=" {{ route('setting.update', $information->id)}} ">
                    @method('PUT')
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputName">Company Name</label>
                    <input type="text" class="form-control" id="exampleInputName" placeholder="Enter Name" name="company_name" value="{{$information->company_name}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail">Company Email</label>
                        <input type="text" class="form-control" id="exampleInputEmail" placeholder="Enter Email" name="company_email" value="{{$information->company_email}}">
                    </div>
              
                    <div class="form-group">
                        <label for="exampleInputPhone">Company Phone</label>
                        <input type="text" class="form-control" id="exampleInputPhone" placeholder="Enter Phone" name="company_phone" value="{{$information->company_phone}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputAddress">Company Address</label>
                        <input type="text" class="form-control" id="exampleInputAddress" placeholder="Enter Address" name="company_address" value="{{$information->company_address}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputExperience">Company City</label>
                        <input type="text" class="form-control" id="exampleInputExperience" placeholder="Enter City" name="company_city" value="{{$information->company_city}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputSalary">Company Country</label>
                        <input type="text" class="form-control" id="exampleInputSalary" placeholder="Enter Country" name="company_country" value="{{$information->company_country}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputVacation">Company Zipcode</label>
                        <input type="text" class="form-control" id="exampleInputVacation" placeholder="Enter Zipcode" name="company_zipcode" value="{{$information->company_zipcode}}">
                    </div>
                  
                        <button type="submit" class="btn btn-purple waves-effect waves-light">Update</button>
                    </form>
                </div><!-- panel-body -->
            </div> <!-- panel -->
        </div> <!-- col-->
    </div> <!-- End row -->
    </div>
@endsection