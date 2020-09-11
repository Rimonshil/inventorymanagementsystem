@extends('layouts.backend.app')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">All Company Information</h3>
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <table id="datatable" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>Company Name</th>
                                    <th>Company Phone</th>
                                    <th>Company Address</th>
                                    <th>Company Logo</th>
                                    <th>Company City</th>
                                    <th>Company Country</th>
                                    <th>Company ZipCode</th>
                                    <th>Action</th>
                                </tr>
                            </thead>

                     
                            <tbody>
                                @foreach ($informations as $info)
                                
                                <tr>
                                <td>{{ $info-> company_name}}</td>
                                <td>{{ $info -> company_phone}}</td>
                                <td> {{ $info-> company_address}}</td>
                                <td> <img src="{{asset('/storage/'.$info->company_logo)}}" alt="" width="80px" height="50px"> </td>
                                <td> {{ $info-> company_city}} </td>
                                <td>{{$info->company_country}}</td>
                                <td>{{$info->company_zipcode}}</td>
                                    <td>
                                    <a href="{{route('setting.edit', $info->id)}}" class="btn btn-sm btn-info">Edit</a>
                                        <a href="" class="btn btn-sm btn-info" >View</a>
                                    <a href="{{URL::to('delete-company/'.$info->id)}}" class="btn btn-sm btn-warning">Delete</a>
                                        
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