@extends('layouts.backend.app')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Datatable</h3>
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <table id="datatable" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Phone</th>
                                    <th>Address</th>
                                    <th>Image</th>
                                    <th>City</th>
                                    <th>Action</th>
                                </tr>
                            </thead>

                     
                            <tbody>
                                @foreach ($customers as $customer)
                                
                                <tr>
                                <td>{{ $customer-> name}}</td>
                                <td>{{ $customer -> phone}}</td>
                                <td> {{ $customer-> address}}</td>
                                <td> <img src="{{asset('/storage/'.$customer->photo)}}" alt="" width="80px" height="50px"> </td>
                                <td> {{ $customer-> city}} </td>
                                    <td>
                                    <a href="{{route('customer.edit', $customer->id)}}" class="btn btn-sm btn-info">Edit</a>
                                        <a href="" class="btn btn-sm btn-info" >View</a>
                                    <a href="{{URL::to('delete-customer/'.$customer->id)}}" class="btn btn-sm btn-warning">Delete</a>
                                        
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