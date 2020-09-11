<?php

namespace App\Http\Controllers;

use App\Order;
use App\Orderdetails;
use Illuminate\Http\Request;
use Cart;
use TJGazel\Toastr\Facades\Toastr as FacadesToastr;
use TJGazel\Toastr\Facades\Toastr;
use TJGazel\Toastr\Toastr as ToastrToastr;
use DB;

class CartController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function AddCart(Request $request)
    {
        $data = array();

        $data['id'] = $request->id;
        $data['name'] = $request->name;
        $data['qty'] = $request->qty;
        $data['price'] = $request->price;

       $add = Cart::add($data);

       Toastr::success('Product Added Successfully', 'success');
       return redirect()->back();


    }

    public function update(Request $request,$rowId)
    {
           $qty=$request->qty;
           $update = Cart::update($rowId,$qty);

           Toastr::success('Cart Updated Successfully', 'success');
           return redirect()->back();

    }

    public function remove($rowId)
    {
        $remove = Cart::remove($rowId);
        Toastr::success('Cart Remove Successfully', 'success');
        return redirect()->back();
    }

    public function CreateInvoice(Request $request)
    {
         $request->validate([
            'customer_id' => 'required',
         ],
         [
             'customer_id.required' => 'Select A Customer First !!!',
        ]);
        $cus_id = $request->customer_id;
        $customer = DB::table('customers')->where('id',$cus_id)->first();
        $contents = Cart::content();
        return view('invoice.invoice',compact('customer','contents'));
     
        
    }

    public function FinalInvoice(Request $request)
    {
         $data = array();
           $data['customer_id'] = $request->customer_id;
           $data['order_date'] = $request->order_date;
           $data['order_status'] = $request->order_status;
           $data['total_products'] = $request->total_products;
           $data['sub_total'] = $request->sub_total;
           $data['vat'] = $request->vat;
           $data['total'] = $request->total;
           $data['payment_status'] = $request->payment_status;
           $data['pay'] = $request->pay;
           $data['due'] = $request->due;
            
        $order_id = DB::table('orders')->insertGetId($data); 
        
        $contents = Cart::content();

        foreach($contents as $content){
        $odata = array();

            $odata['order_id'] = $order_id;
            $odata['product_id'] = $content->id;
            $odata['quantity'] = $content->qty;
            $odata['unitcost'] = $content->price;
            $odata['total']= $content->total;
        
            $insert = DB::table('orderdetails')->insert($odata);
            Cart::destroy();
        }
    
        Toastr::success('Successfully Invoice Created | Please deliver the products and accept status', 'success');
        return redirect(route('pending-orders'));

    }
}
