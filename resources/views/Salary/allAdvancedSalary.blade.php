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
                                    <th>Photo</th>
                                    <th>Salary</th>
                                    <th>Month</th>
                                    <th>Advanced Salary</th>
                                    <th>Action</th>
                                </tr>
                            </thead>

                     
                            <tbody>
                                @foreach ($salary as $row)
                                
                                <tr>
                                <td>{{ $row-> name}}</td>
                                <td> <img src="{{asset('/storage/'.$row->photo)}}" alt="" width="80px" height="50px"> </td>
                                <td> {{ $row-> salary}} </td>
                                <td> {{ $row-> month}} </td>
                                <td> {{ $row-> advanced_salary}} </td>
                                    <td>
                                    <a href="{{route('employee.edit', $row->id)}}" class="btn btn-sm btn-info">Edit</a>
                                        <a href="" class="btn btn-sm btn-info" >View</a>
                                        <form action="{{route('employee.destroy', $row->id)}}" method="POST">
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