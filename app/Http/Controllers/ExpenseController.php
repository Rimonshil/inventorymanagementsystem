<?php

namespace App\Http\Controllers;

use App\Expense;
use Illuminate\Http\Request;
use TJGazel\Toastr\Facades\Toastr as FacadesToastr;
use TJGazel\Toastr\Facades\Toastr;
use TJGazel\Toastr\Toastr as ToastrToastr;
use DB;

class ExpenseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('expense.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $expense = Expense::create([
            'details'=>$request->details,
            'amount'=>$request->amount,
            'month'=>$request->month,
            'date'=>$request->date,
            'year'=>$request->year,
        ]);
        Toastr::success('Expense Added Successfully', 'success');
        return redirect()->back();
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
        $expense = Expense::findorfail($id);
        return view('expense.TodayExpenseEdit',compact('expense'));
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
        $expense = Expense::findorfail($id);
        $expense->update($request->all());
        $expense->save();
        Toastr::Success('Expense Update Successfully', 'success');
        return redirect(route('today.expense'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dlt = DB::table('expenses')->where('id',$id)->delete();
        return redirect()->back();
    }

    public function TodayExpense()
    {
        $date = date("d/m/y");
        $today = DB::table('expenses')->where('date',$date)->get();
        return view('expense.today', compact('today'));
    }

    public function MonthlyExpense()
    {
        $month = date("F");
        $MonthlyExpense = DB::table('expenses')->where('month',$month)->get();
        return view('expense.MonthlyExpense',compact('MonthlyExpense'));
    }

    public function YearlyExpense()
    {
        $year = date("Y");
        $YearlyExpense = DB::table('expenses')->where('year',$year)->get();
        return view('expense.YearlyExpense',compact('YearlyExpense'));
    }

    public function JanuaryExpense()
    {
        $month = "January";
        $MonthlyExpense = DB::table('expenses')->where('month',$month)->get();
        return view('expense.MonthlyExpense',compact('MonthlyExpense'));
    }
}
