@extends('layouts.backend.app')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Take Attendence
                <a href="{{route('attendence.index')}}" class="pull-right text-success">All Attendence</a>
                </h3>
            </div>
        <h3 class="text-success" align="center">Today {{date("d/m/y")}}</h3>
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <form action="{{route('attendence.store')}}" method="POST">
                            @csrf
                        <table id="datatable" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Image</th>
                                    <th>Attendence</th>
                                   
                                </tr>
                            </thead>

                     
                            <tbody>
                            
                                @foreach ($employees as $employee)
                                
                                <tr>
                                <td>{{ $employee-> name}}</td>
                                <td> <img src="{{asset('/storage/'.$employee->photo)}}" alt="" width="80px" height="50px"> </td>
                                <input type="hidden" name="emp_id[]" value="{{ $employee->id }}">
                                    <td>
                                   <input type="radio" name="attendence[{{$employee->id}}]" value="present">Present
                                   <input type="radio" name="attendence[{{$employee->id}}]" value="absent">Absent
                                    </td>
                                <input type="hidden" name="att_date" value="{{ date("d/m/y")}}">
                                <input type="hidden" name="att_year" value="{{ date("Y")}}">

                                </tr>
                            </tbody>
                            @endforeach
                       
                        </table>
                        <button type="submit" class="btn btn-success">Take Attendence</button>
                    </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
    
</div> <!-- End Row -->

@endsection