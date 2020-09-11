@extends('layouts.backend.app')
@section('content')
<div class="container">
    <div class="row">
        <!-- Basic example -->
        <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading"><h3 class="panel-title">Update Customer</h3></div>
                <div class="panel-body">
                <form role="form" method="POST" enctype="multipart/form-data" action=" {{ route('customer.update', $customer->id)}} ">
                    @method('PUT')
                    @csrf
                        <div class="form-group">
                            <label for="exampleInputName">Name</label>
                        <input type="text" class="form-control" id="exampleInputName" placeholder="Enter Name" name="name" value="{{$customer->name}}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail">Email</label>
                            <input type="text" class="form-control" id="exampleInputEmail" placeholder="Enter Email" name="email"value="{{$customer->email}}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPhone">Phone</label>
                            <input type="text" class="form-control" id="exampleInputPhone" placeholder="Enter Phone" name="phone" value="{{$customer->phone}}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputAddress">Address</label>
                            <input type="text" class="form-control" id="exampleInputAddress" placeholder="Enter Address" name="address" value="{{$customer->address}}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputshopname">Shop Name</label>
                        <input type="text" class="form-control" id="exampleInputshopname" placeholder="Enter Shopname" name="shopname" value="{{$customer->shopname}}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputaccount_holder">Account Holder</label>
                            <input type="text" class="form-control" id="exampleInputaccount_holder" placeholder="Enter Account Holder" name="account_holder" value="{{$customer->account_holder}}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputaccount_number">Account Number</label>
                            <input type="text" class="form-control" id="exampleInputaccount_number" placeholder="Enter Account Number" name="account_number" value="{{$customer->account_number}}">
                        </div>
                        <label for="exampleInputbank_name">Bank Name</label>
                        <input type="text" class="form-control" id="exampleInputbank_name" placeholder="Enter Bank Name" name="bank_name" value="{{$customer->bank_name}}">
                    </div>
                    <label for="exampleInputbank_branch">Bank Branch</label>
                    <input type="text" class="form-control" id="exampleInputbank_branch" placeholder="Enter Bank Branch" name="bank_branch"value="{{$customer->bank_branch}}">
                </div>
                        <div class="form-group">
                            <label for="exampleInputCity">City</label>
                            <input type="text" class="form-control" id="exampleInputCity" placeholder="Enter City" name="city" value="{{$customer->city}}">
                        </div>
         
                        <button type="submit" class="btn btn-purple waves-effect waves-light">Update</button>
                    </form>
                </div><!-- panel-body -->
            </div> <!-- panel -->
        </div> <!-- col-->
    </div> <!-- End row -->
    </div>
@endsection