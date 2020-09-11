<?php

namespace App\Http\Controllers;

use App\Category;
use App\Exports\ProductsExport;
use App\Imports\ProductsImport;
use App\Product;
use App\Supplier;
use Illuminate\Http\Request;
use TJGazel\Toastr\Facades\Toastr as FacadesToastr;
use TJGazel\Toastr\Facades\Toastr;
use TJGazel\Toastr\Toastr as ToastrToastr;
use DB;
use Laravel\Ui\Presets\React;
use Maatwebsite\Excel\Facades\Excel;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        return view('product.index',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = Category::all();
        $supplier = Supplier::all();
        return view('product.create',compact('category', 'supplier'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $image = $request->product_image->store('images');
        //$image->save();

        $products = Product::create([
            'product_name' => $request->product_name,
            'cat_id' => $request->cat_id,
            'sup_id' => $request->sup_id,
            'product_code' => $request->product_code,
            'product_garage' => $request->product_garage,
            'product_route' => $request->product_route,
            'buy_date' => $request->buy_date,
            'expire_date' => $request->expire_date,
            'buying_price' => $request->buying_price,
            'selling_price' => $request->selling_price,
            'product_image' => $image,
        ]);
        Toastr::success('Product Added Successfully', 'success');
        return redirect(route('product.index'));
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
        $dlt = DB::table('products')->where('id',$id)->delete();
        Toastr::warning('Product Deleted Successfully', 'warning');
        return redirect(route('product.index'));
    }

 

    public function ImporProductt()
    {
        return view('product.ImportProduct');
    }
    
    public function export() 
    {
        return Excel::download(new ProductsExport, 'products.xlsx');
    }

    public function import(Request $request) 
    {
        Excel::import(new ProductsImport, $request->file('import_file'));
        Toastr::warning('Product Imported Successfully', 'warning');
        return redirect()->back();
        
       
    }
}
