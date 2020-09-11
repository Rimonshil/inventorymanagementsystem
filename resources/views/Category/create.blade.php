@extends('layouts.backend.app')

@section('content')
<div class="container">
<div class="row">
    <!-- Basic example -->
    <div class="col-md-6">
        <div class="panel panel-default">
            <div class="panel-heading"><h3 class="panel-title">Add Category</h3></div>
            <div class="panel-body">
            <form role="form" method="POST" enctype="multipart/form-data" action="{{route('category.store')}}">
                @csrf
                    <div class="form-group">
                        <label for="exampleInputCategory">Category Name</label>
                        <input type="text" class="form-control" id="exampleInputCategory" placeholder="Enter Category" name="name">
                    </div>
     
                    <button type="submit" class="btn btn-purple waves-effect waves-light">Submit</button>
                </form>
            </div><!-- panel-body -->
        </div> <!-- panel -->
    </div> <!-- col-->
</div> <!-- End row -->
</div>

@endsection