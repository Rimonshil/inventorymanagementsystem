@extends('layouts.backend.app')

@section('content')
<div class="container">
<div class="row">
   <div class="col-sm-12 bg-info">
       <h4 class="pull-left page-title text-white">POS (Point of Sale)</h4>
       <ol class="breadcrumb pull-right">
           <li><a href="" class="text-white">Moltran</a></li>
           <li class="active">Dashboard</li>
           <li class="text-white">{{ date("d/m/y")}}</li>
       </ol><br><br>
   </div><br><br>
   <div class="col-lg-12 col-md-12 col-sm-12">
      <div class="portfolioFilter">
          @foreach ($categories as $cat)
      <a href="" class="current">{{$cat->name}}</a>
          @endforeach
      </div>
   </div>
   <div class="col-lg-4">
   

     <div class="price_card text-center">
        <ul class="price-features" style="border: 1px solid grey">
           <table class="table">
               <thead class="bg-info">
                   <tr>
                       <th class="text-white">Name</th>
                       <th class="text-white">Qty</th>
                       <th class="text-white">Price</th>
                       <th class="text-white">Sub Total</th>
                       <th class="text-white">Action</th>
                   </tr>
               </thead>
                 @php
                     $content = Cart::content();
                 @endphp

               <tbody>
                   @foreach ($content as $item)
                       
               <th> {{$item->name}}</th>
                   <th>
                   <form action="{{url('/cart-update/'.$item->rowId)}}" method="POST">
                    @csrf
                       <input type="number" name="qty" value="{{$item->qty}}" style="width: 40px;">
                       <button type="submit" class="btn btn-sm btn-success" style="margin-top: -1px"><i class="fa fa-check"></i></button>
                    </form>
                    </th>
                   <th> {{$item->price}}</th>
                   <th> {{$item->price*$item->qty}}</th>
                <th><a href="{{url('/cart-remove/'.$item->rowId)}}"><i class="fa fa-trash"></i></a></th>
               </tbody>
               @endforeach
           </table>
        </ul>
        <div class="pricing-header bg-primary">
        <p style="font-size: 19px;">Quantity: {{ Cart::count() }}</p>
        <p style="font-size: 19px;">SubTotal: {{ Cart::subtotal() }} </p>
        <p style="font-size: 19px;">Vat: {{ Cart::tax()}}</p>
           <hr>
        <p><h2 class="text-white">Total: {{ Cart::total()}}</h2></p>
        </div>   
        <form action="{{route('create-invoice')}}" method="POST">
            @csrf
            <div class="panel">
                            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
                <h4 class="text-info">Customer
                  <a href="" class="btn btn-primary waves-effect waves-light btn-sm pull-right" data-toggle="modal" data-target="#con-close-modal">Add New</a>
                </h4>
                <select class="form-control" name="customer_id">
                    <option disabled selected>Select Customer</option>
                    @foreach ($customers as $customer)
                   <option value="{{$customer->id}}"> {{ $customer->name }}</option>
                    @endforeach           
                </select>
            </div>
        <button class="btn btn-success" type="submit">Create Invoice</button>
     </div> 
    </form>
        
   </div>
   <div class="col-lg-8">
    <table id="datatable" class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>Image</th>
                <th>Name</th>
                <th>Price</th>
                <th>Category</th>
                <th>Add</th>         
            </tr>
        </thead>

 
        <tbody>
            @foreach ($products as $product)
            
               
            <tr>
            <form action="{{route('add-cart')}}" method="POST">
                @csrf

                <input type="hidden" name="id" value="{{ $product->id}}">
                <input type="hidden" name="name" value="{{ $product->product_name}}">
                <input type="hidden" name="qty" value="1">
                <input type="hidden" name="price" value="{{ $product->selling_price}}">

             <td><img src="{{asset('/storage/'.$product->product_image)}}" alt="" width="80px" height="50px"> </td>
            <td>{{ $product-> product_name}}</td>
            <td>{{ $product-> selling_price}}</td>
            <td>{{ $product->name}}</td>
            
              <td><button type="submit" class="btn btn-sm btn-info"><i class="fa fa-plus-square"></i></button></td>
        </form>
            </tr>
     
        </tbody>
        @endforeach
    </table>

   </div>
<!-- modal-->
<form action="{{route('customer.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
   <div id="con-close-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog"> 
        <div class="modal-content"> 
            <div class="modal-header bg-success"> 
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button> 
                <h4 class="modal-title text-white">Add a new Customer
            </div> 
            <div class="modal-body"> 
                <div class="row">  
                    <div class="col-md-4"> 
                        <div class="form-group"> 
                            <label for="field-4" class="control-label">Name</label> 
                            <input type="text" class="form-control" id="field-4" name="name"> 
                        </div> 
                    </div> 
                    <div class="col-md-4"> 
                        <div class="form-group"> 
                            <label for="field-5" class="control-label">Email</label> 
                            <input type="text" class="form-control" id="field-5" name="email"> 
                        </div> 
                    </div> 
                    <div class="col-md-4"> 
                        <div class="form-group"> 
                            <label for="field-6" class="control-label">Phone</label> 
                            <input type="text" class="form-control" id="field-6" name="phone"> 
                        </div> 
                    </div> 
                </div> 
                <div class="row">  
                    <div class="col-md-4"> 
                        <div class="form-group"> 
                            <label for="field-4" class="control-label">Address</label> 
                            <input type="text" class="form-control" id="field-4" name="address"> 
                        </div> 
                    </div> 
                    <div class="col-md-4"> 
                        <div class="form-group"> 
                            <label for="field-5" class="control-label">Shopname</label> 
                            <input type="text" class="form-control" id="field-5" name="shopname"> 
                        </div> 
                    </div> 
                    <div class="col-md-4"> 
                        <div class="form-group"> 
                            <label for="field-6" class="control-label">City</label> 
                            <input type="text" class="form-control" id="field-6" name="city"> 
                        </div> 
                    </div> 
                </div> 
                <div class="row">  
                    <div class="col-md-4"> 
                        <div class="form-group"> 
                            <label for="field-4" class="control-label">Account Number</label> 
                            <input type="text" class="form-control" id="field-4" name="account_number"> 
                        </div> 
                    </div> 
                    <div class="col-md-4"> 
                        <div class="form-group"> 
                            <label for="field-5" class="control-label">Account Holder</label> 
                            <input type="text" class="form-control" id="field-5" name="account_holder"> 
                        </div> 
                    </div> 
                    <div class="col-md-4"> 
                        <div class="form-group"> 
                            <label for="field-6" class="control-label">Bank Name</label> 
                            <input type="text" class="form-control" id="field-6" name="bank_name"> 
                        </div> 
                    </div> 
                </div> 
                <div class="row">  
                    <div class="col-md-4"> 
                        <div class="form-group"> 
                            <label for="field-4" class="control-label">Bank Branch</label> 
                            <input type="text" class="form-control" id="field-4" name="bank_branch"> 
                        </div> 
                    </div> 
                    <div class="col-md-4"> 
                        <div class="form-group"> 
                            <img src="#" id="image" alt="">
                            <label for="field-5" class="control-label">Image Show</label> 
                        </div> 
                    </div> 
                    <div class="col-md-4"> 
                        <div class="form-group"> 
                            <label for="field-6" class="control-label">Photo</label> 
                            <input type="file" class="form-control" id="field-6" name="photo" accept="image/*" required onchange="readURL(this);"> 
                        </div> 
                    </div> 
                </div> 
                
            </div> 
            <div class="modal-footer"> 
                <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button> 
                <button type="submit" class="btn btn-info waves-effect waves-light">Submit</button> 
            </div> 
        </div> 
    </div>
</div><!-- /.modal -->    
</form>
<script>
    function readURL(input){
        if(input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e){
                $('#image')
                .attr('src',e.target.result)
                .width(80)
                .height(80);
            };
            reader.readAsDataURL(input.files[0]);
        }
    }
</script>
</div>
</div> <!-- End row -->
</div>


@endsection