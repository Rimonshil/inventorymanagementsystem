@extends('layouts.backend.app')
@section('content')
<div class="container">
    <div class="row">
        <!-- Basic example -->
        <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading"><h3 class="panel-title">Update Customer</h3></div>
                <div class="panel-body">
                <form role="form" method="POST" enctype="multipart/form-data" action=" {{ route('category.update', $category->id)}} ">
                    @method('PUT')
                    @csrf
                        <div class="form-group">
                            <label for="exampleInputCategory">Name</label>
                        <input type="text" class="form-control" id="exampleInputCategory" placeholder="Enter Name" name="name" value="{{$category->name}}">
                        </div>
         
                        <button type="submit" class="btn btn-purple waves-effect waves-light">Update</button>
                    </form>
                </div><!-- panel-body -->
            </div> <!-- panel -->
        </div> <!-- col-->
    </div> <!-- End row -->
    </div>
@endsection