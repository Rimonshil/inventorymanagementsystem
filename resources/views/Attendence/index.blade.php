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
                                    <th>Sl</th>
                                    <th>date</th>
                                    
                                    <th>Action</th>
                                </tr>
                            </thead>

                     
                            <tbody>
                                @foreach ($attendences as $attendence)
                                
                                <tr>
                                <td>{{ $attendence-> id}}</td>
                                <td>{{ $attendence -> att_date}}</td>
                           
                                    <td>
                                    <a href="{{route('attendence.edit', $attendence->id)}}" class="btn btn-sm btn-info">Edit</a>
                                        <a href="" class="btn btn-sm btn-info" >View</a>
                                    <a href="{{URL::to('delete-attendence/'.$attendence->id)}}" class="btn btn-sm btn-warning">Delete</a>
                                        
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