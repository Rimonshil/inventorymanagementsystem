@extends('layouts.backend.app')

@section('content')
<div class="container">
<div class="row">
    <!-- Basic example -->
    <div class="col-md-6">
        <div class="panel panel-default">
            <div class="panel-heading"><h3 class="panel-title">Add Supplier</h3></div>
            <div class="panel-body">
            <form role="form" method="POST" enctype="multipart/form-data" action="{{route('supplier.store')}}">
                @csrf
                    <div class="form-group">
                        <label for="exampleInputName">Name</label>
                        <input type="text" class="form-control" id="exampleInputName" placeholder="Enter Name" name="name">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail">Email</label>
                        <input type="text" class="form-control" id="exampleInputEmail" placeholder="Enter Email" name="email">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputphoto">Photo</label>
                        <input type="file" class="form-control" id="exampleInputphoto" placeholder="Enter Photo" name="photo">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPhone">Phone</label>
                        <input type="text" class="form-control" id="exampleInputPhone" placeholder="Enter Phone" name="phone">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputAddress">Address</label>
                        <input type="text" class="form-control" id="exampleInputAddress" placeholder="Enter Address" name="address">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputshopname">Shop</label>
                        <input type="text" class="form-control" id="exampleInputshopname" placeholder="Enter Shopname" name="shop">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputshopname" >Supplier Type</label>
                        <select name="type" id="exampleInputshopname" class="form-control" >
                            <option value="Distributor">Distributor</option>
                            <option value="Whole Seller">Whole Seller</option>
                            <option value="Brochure">Brochure</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputaccount_holder">Account Holder</label>
                        <input type="text" class="form-control" id="exampleInputaccount_holder" placeholder="Enter Account Holder" name="account_holder">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputaccount_number">Account Number</label>
                        <input type="text" class="form-control" id="exampleInputaccount_number" placeholder="Enter Account Number" name="account_number">
                    </div>
                    <div>
                    <label for="exampleInputbank_name">Bank Name</label>
                    <input type="text" class="form-control" id="exampleInputbank_name" placeholder="Enter Bank Name" name="bank_name">
                </div>
                    <div>
                    <label for="exampleInputbank_branch">Bank Branch</label>
                    <input type="text" class="form-control" id="exampleInputbank_branch" placeholder="Enter Bank Branch" name="bank_branch">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputCity">City</label>
                        <input type="text" class="form-control" id="exampleInputCity" placeholder="Enter City" name="city">
                    </div>
     
                    <button type="submit" class="btn btn-purple waves-effect waves-light">Submit</button>
                </form>
            </div><!-- panel-body -->
        </div> <!-- panel -->
    </div> <!-- col-->
</div> <!-- End row -->
</div>

@endsection