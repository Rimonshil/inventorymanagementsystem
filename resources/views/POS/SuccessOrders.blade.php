@extends('layouts.backend.app')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Success Order
                    <a href="{{route('product.create')}}" class="pull-right text-success">Add New</a>
                </h3>
                
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <table id="datatable" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Date</th>
                                    <th>Quantity</th>
                                    <th>Total Amount</th>
                                    <th>Payment</th>
                                    <th>Order Status</th>
                           
                                </tr>
                            </thead>

                     
                            <tbody>
                                @foreach ($success as $row)
                                
                                <tr>
                                <td>{{ $row-> name}}</td>
                                <td>{{ $row -> order_date}}</td>
                                <td> {{ $row-> total_products}}</td>
                                <td>{{ $row->total}}</td>
                                <td> {{ $row-> payment_status }}</td>
                                <td class="badge badge-success"> {{ $row-> order_status }}</td>
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