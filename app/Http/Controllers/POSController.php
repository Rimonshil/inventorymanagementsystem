<?php

namespace App\Http\Controllers;

use App\Category;
use App\Orderdetails;
use App\Product;
use Illuminate\Http\Request;

use TJGazel\Toastr\Facades\Toastr as FacadesToastr;
use TJGazel\Toastr\Facades\Toastr;
use TJGazel\Toastr\Toastr as ToastrToastr;
use DB;

class POSController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = DB::table('products')
                  ->join('categories','products.cat_id','categories.id')
                  ->select('categories.name','products.*')
                  ->get();

        $customers = DB::table('customers')->get(); 
        $categories = DB::table('categories')->get();         

        return view('pos.pos',compact('products','customers','categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function PendingOrder()
    {
        $pending = DB::table('orders')
                 ->join('customers','orders.customer_id','customers.id')
                 ->select('customers.name','orders.*')->where('order_status','pending')->get();

            return view('pos.pending',compact('pending'));
    }

    public function ViewOrder($id)
    {
        $order = DB::table('orders')
               ->join('customers','orders.customer_id','customers.id')
                ->where('orders.id',$id)
               ->first();

         
        $order_details = Orderdetails::all();
         
         return view('pos.OrderConfirmation',compact('order','order_details'));
         
    }

    public function PosDone($id)
    {
        $approve = DB::table('orders')->where('id',$id)->update(['order_status'=>'success']);
        Toastr::success('Successfully Order Confirmed | Please deliver the products and accept status', 'success');
        return redirect(route('success-orders'));
    }

    public function SuccessOrder()
    {
        $success = DB::table('orders')
                 ->join('customers','orders.customer_id','customers.id')
                 ->select('customers.name','orders.*')->where('order_status','success')->get();

         
        return view('pos.SuccessOrders',compact('success'));
    }
}
