@extends('layouts.backend.app')

@section('content')
<div class="container">
<div class="row">
    <!-- Basic example -->
    <div class="col-md-6">
        <div class="panel panel-default">
            <div class="panel-heading"><h3 class="panel-title">Import Products
            <a href="{{route('export.product')}}" class="pull-right btn btn-danger btn-sm">Download Xlsx</a>
                </h3>
            </div>
            <div class="panel-body">
            <form role="form" method="POST" enctype="multipart/form-data" action="{{route('import')}}">
                @csrf
                    <div class="form-group">
                        <label for="exampleInputName">Xlsx File Import</label>
                        <input type="file" class="form-control" id="exampleInputName"  name="import_file">
                    </div>
                  
                    <button type="submit" class="btn btn-purple waves-effect waves-light">Upload</button>
                </form>
            </div><!-- panel-body -->
        </div> <!-- panel -->
    </div> <!-- col-->
</div> <!-- End row -->
</div>

@endsection