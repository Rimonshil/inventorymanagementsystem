@extends('layouts.backend.app')
@section('content')
<div class="container">
    <div class="row">
        <!-- Basic example -->
        <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading"><h3 class="panel-title">Update Supplier</h3></div>
                <div class="panel-body">
                <form role="form" method="POST" enctype="multipart/form-data" action=" {{ route('supplier.update', $supplier->id)}} ">
                    @method('PUT')
                    @csrf
                        <div class="form-group">
                            <label for="exampleInputName">Name</label>
                        <input type="text" class="form-control" id="exampleInputName" placeholder="Enter Name" name="name" value="{{$supplier->name}}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail">Email</label>
                            <input type="text" class="form-control" id="exampleInputEmail" placeholder="Enter Email" name="email"value="{{$supplier->email}}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPhone">Phone</label>
                            <input type="text" class="form-control" id="exampleInputPhone" placeholder="Enter Phone" name="phone" value="{{$supplier->phone}}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputAddress">Address</label>
                            <input type="text" class="form-control" id="exampleInputAddress" placeholder="Enter Address" name="address" value="{{$supplier->address}}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputshopname" >Supplier Type</label>
                            <select name="type" id="exampleInputshopname" class="form-control" >
                               
                                <option value="{{$supplier->type}}">{{$supplier->type}}</option>
                                
            
                            
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputshopname">Shop Name</label>
                        <input type="text" class="form-control" id="exampleInputshopname" placeholder="Enter Shopname" name="shopname" value="{{$supplier->shopname}}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputaccount_holder">Account Holder</label>
                            <input type="text" class="form-control" id="exampleInputaccount_holder" placeholder="Enter Account Holder" name="account_holder" value="{{$supplier->account_holder}}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputaccount_number">Account Number</label>
                            <input type="text" class="form-control" id="exampleInputaccount_number" placeholder="Enter Account Number" name="account_number" value="{{$supplier->account_number}}">
                        </div>
                        <label for="exampleInputbank_name">Bank Name</label>
                        <input type="text" class="form-control" id="exampleInputbank_name" placeholder="Enter Bank Name" name="bank_name" value="{{$supplier->bank_name}}">
                    </div>
                    <label for="exampleInputbank_branch">Bank Branch</label>
                    <input type="text" class="form-control" id="exampleInputbank_branch" placeholder="Enter Bank Branch" name="bank_branch"value="{{$supplier->bank_branch}}">
                </div>
                        <div class="form-group">
                            <label for="exampleInputCity">City</label>
                            <input type="text" class="form-control" id="exampleInputCity" placeholder="Enter City" name="city" value="{{$supplier->city}}">
                        </div>
         
                        <button type="submit" class="btn btn-purple waves-effect waves-light">Update</button>
                    </form>
                </div><!-- panel-body -->
            </div> <!-- panel -->
        </div> <!-- col-->
    </div> <!-- End row -->
    </div>
@endsection