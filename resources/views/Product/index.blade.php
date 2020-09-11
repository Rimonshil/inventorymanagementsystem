@extends('layouts.backend.app')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">All Product
                    <a href="{{route('product.create')}}" class="pull-right text-success">Add New</a>
                </h3>
                
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <table id="datatable" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Code</th>
                                    <th>Selling Price</th>
                                    <th>Image</th>
                                    <th>Garage</th>
                                    <th>Route</th>
                                    <th>Action</th>
                                </tr>
                            </thead>

                     
                            <tbody>
                                @foreach ($products as $product)
                                
                                <tr>
                                <td>{{ $product-> product_name}}</td>
                                <td>{{ $product -> product_code}}</td>
                                <td> {{ $product-> selling_price}}</td>
                                <td> <img src="{{asset('/storage/'.$product->product_image)}}" alt="" width="80px" height="50px"> </td>
                                <td> {{ $product-> product_garage}} </td>
                                <td>{{$product->product_route}}</td>
                                    <td>
                                    <a href="{{route('product.edit', $product->id)}}" class="btn btn-sm btn-info">Edit</a>
                                        <a href="" class="btn btn-sm btn-info" >View</a>
                                    <a href="{{ URL::to('delete-product/'.$product->id) }}" class="btn btn-sm btn-danger" id="delete">Delete</a>
                                        
                                    </td>
                                </tr>
                            </tbody>
                            @endforeach
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
    
</div> <!-- End Row -->

@endsection