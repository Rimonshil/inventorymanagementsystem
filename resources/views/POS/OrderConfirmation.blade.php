@extends('layouts.backend.app')
@section('content')



            <!-- Page-Title -->

            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <!-- <div class="panel-heading">
                            <h4>Invoice</h4>
                        </div> -->
                        <div class="panel-body">
                            <div class="clearfix">
                                <div class="pull-left">
                                    <h4 class="text-right">Echovel</h4>
                                    
                                </div>
                                <div class="pull-right">
                                    <h4>Invoice # <br>
                                    <strong>{{ date('d/m/y')}}</strong>
                                    </h4>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-12">
                                    
                                    <div class="pull-left m-t-30">
                                        <address>
                                        <strong>Name: {{ $order->name}}</strong><br>
                                        <strong>Shop Name: {{ $order->shopname}}</strong><br>
                                        Address: {{$order->address}}<br>
                                        City: {{$order->city}}<br>
                                          Phone: {{$order->phone}}
                                          </address>
                                    </div>
                                    <div class="pull-right m-t-30">
                                    <p><strong>Order Date: </strong> {{ date('l jS \of F Y')}}</p>
                                        <p class="m-t-10"><strong>Order Status: </strong> <span class="label label-pink">Pending</span></p>
                                    <p class="m-t-10"><strong>Order ID: </strong> {{$order->id}}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="m-h-50"></div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="table-responsive">
                                        <table class="table m-t-30">
                                            <thead>
                                                <tr><th>#</th>
                                              
                                                <th>Quantity</th>
                                                <th>Sub Total</th>
                                                <th>Total</th>
                                            </tr></thead>
                                            <tbody>
                                                @php
                                                    $sl=1;
                                                @endphp
                                                @foreach ($order_details as $content)                                         
                                                <tr>
                                                <td>{{$sl++}}</td>
                                            
                                                    <td>{{ $content->quantity}}</td>
                                                    <td>{{ $content->unitcost}}</td>
                                                    <td>{{ $content->unitcost*$content->quantity}}</td>
                                                </tr>                                         
                                            </tbody>
                                            @endforeach
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="row" style="border-radius: 0px;">
                                <div class="col-md-9">
                                <h3 class="">Payment By: {{$order->payment_status}}</h3>
                                <h3 class="">Pay: {{$order->pay}}</h3>
                                <h3 class="">Due: {{$order->due}}</h3>
                                </div>
                                <div class="col-md-3 col-md-offset-9">
                                    <p class="text-right"><b>Sub-total:</b> {{ $order->sub_total }}</p>
                                  
                                    <p class="text-right">VAT: {{ $order->vat}}</p>
                                    <hr>
                                    <h3 class="text-right">Total: {{$order->total}}</h3>
                                </div>
                            </div>
                            <hr>
                            <div class="hidden-print">
                                <div class="pull-right">
                                    <a href="#" onclick="window.print()" class="btn btn-inverse waves-effect waves-light"><i class="fa fa-print"></i></a>
                                <a href="{{URL::to('pos-done/'.$order->id)}}" class="btn btn-primary waves-effect waves-light">Done</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
</div>

    
@endsection