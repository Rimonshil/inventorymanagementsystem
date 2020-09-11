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
                                    <th>Type</th>
                                    <th>Action</th>
                                </tr>
                            </thead>

                     
                            <tbody>
                                @foreach ($suppliers as $supplier)
                                
                                <tr>
                                <td>{{ $supplier-> name}}</td>
                                <td>{{ $supplier -> phone}}</td>
                                <td> {{ $supplier-> address}}</td>
                                <td> <img src="{{asset('/storage/'.$supplier->photo)}}" alt="" width="80px" height="50px"> </td>
                                <td> {{ $supplier-> type}} </td>
                                    <td>
                                    <a href="{{route('supplier.edit', $supplier->id)}}" class="btn btn-sm btn-info">Edit</a>
                                        <a href="" class="btn btn-sm btn-info" >View</a>
                                        <form action="{{route('supplier.destroy', $supplier->id)}}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger btn-sm">Delete</button>
                                        </form> 
                                        
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