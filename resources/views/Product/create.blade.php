@extends('layouts.backend.app')

@section('content')
<div class="container">
<div class="row">
    <!-- Basic example -->
    <div class="col-md-6">
        <div class="panel panel-default">
            <div class="panel-heading"><h3 class="panel-title">Add Employee</h3></div>
            <div class="panel-body">
            <form role="form" method="POST" enctype="multipart/form-data" action="{{route('product.store')}}">
                @csrf
                    <div class="form-group">
                        <label for="exampleInputName">Product Name</label>
                        <input type="text" class="form-control" id="exampleInputName" placeholder="Product Name" name="product_name">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail">Category</label>
                        <select name="cat_id" id="exampleInputEmail" class="form-control">
                            @foreach ($category as $cat)                            
                            
                        <option value="{{$cat->id}}">{{$cat->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail">Select Supplier</label>
                        <select name="sup_id" id="exampleInputEmail" class="form-control">
                            @foreach ($supplier as $sup)                            
                            
                        <option value="{{$sup->id}}">{{$sup->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputphoto">Product Image</label>
                        <input type="file" class="form-control" id="exampleInputphoto" placeholder="Enter Photo" name="product_image">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPhone">Product Code</label>
                        <input type="text" class="form-control" id="exampleInputPhone" placeholder="Enter Product Code" name="product_code">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputAddress">Product Garage</label>
                        <input type="text" class="form-control" id="exampleInputAddress" placeholder="Enter Product Garage" name="product_garage">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputshopname">Product Route</label>
                        <input type="text" class="form-control" id="exampleInputshopname" placeholder="Enter Product Route" name="product_route">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputaccount_holder">Buy Date </label>
                        <input type="date" class="form-control" id="exampleInputaccount_holder" placeholder="Buy Date" name="buy_date">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputaccount_number">Expire Date</label>
                        <input type="date" class="form-control" id="exampleInputaccount_number" placeholder="Enter Expire Date" name="expire_date">
                    </div>
                    <label for="exampleInputbank_name">Buying Price</label>
                    <input type="text" class="form-control" id="exampleInputbank_name" placeholder="Enter Buying Price" name="buying_price">
                </div>
                <div>
                    <div>
                <label for="exampleInputbank_branch">Selling Price</label>
                <input type="text" class="form-control" id="exampleInputbank_branch" placeholder="Enter Selling Price" name="selling_price">
            </div>
      
     
                    <button type="submit" class="btn btn-purple waves-effect waves-light">Submit</button>
                </form>
            </div><!-- panel-body -->
        </div> <!-- panel -->
    </div> <!-- col-->
</div> <!-- End row -->
</div>

@endsection