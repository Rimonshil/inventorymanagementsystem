@extends('layouts.backend.app')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Update Attendence</h3>
            </div>
        <h3 class="text-success" align="center">Today {{date("d/m/y")}}</h3>
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <form action="{{ route('attendence.update', $attendence->id)}}" method="POST">
                            @csrf
                            @method('PUT')
                        <table id="datatable" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>Id</th>                     
                                    <th>Attendence</th>
                                   
                                </tr>
                            </thead>

                     
                            <tbody>
                            
                                
                                <tr>
                                <td>{{$attendence->id}}</td>
                                    <td>
                                   <input type="radio" name="attendence[{{$attendence->id}}]" value="present" required <?php if($attendence->attendence == 'present'){echo "checked";} ?>>Present
                                   <input type="radio" name="attendence[{{$attendence->id}}]" value="absent" required <?php if($attendence->attendence == 'absent'){echo "checked";} ?>>Absent
                                    </td>
                                <input type="hidden" name="att_date" value="{{ date("d/m/y")}}">
                                <input type="hidden" name="att_year" value="{{ date("Y")}}">

                                </tr>
                            </tbody>
                            
                       
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