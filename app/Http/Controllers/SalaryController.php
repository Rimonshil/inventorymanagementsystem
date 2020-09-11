<?php

namespace App\Http\Controllers;

use App\Employee;
use App\Salary;
use Illuminate\Http\Request;
use TJGazel\Toastr\Facades\Toastr as FacadesToastr;
use TJGazel\Toastr\Facades\Toastr;
use TJGazel\Toastr\Toastr as ToastrToastr;
use DB;
use phpDocumentor\Reflection\Types\Null_;

class SalaryController extends Controller
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

    public function addAdvancedSalary() 
    {
        $employee = Employee::all();
        return view('salary.create',compact('employee'));

    }

    public function storeAdvancedSalary(Request $request)
    {
    
        $ad_salary = Salary::all();
        if($ad_salary === Null) {
            $adv_salary =Salary::create([
                'emp_id'=>$request->emp_id,
                'month'=>$request->month,
                'year'=>$request->year,
                'advanced_salary'=>$request->advanced_salary
            ]);
            Toastr::success('Advanced Salary Added Successfully', 'success');
            return redirect()->back();    

        }
        Toastr::warning('Oopss!!,Advanced Salary Already Added', 'warning');
        return redirect()->back();    

    }

    public function allAdvancedSalary()
    {
       $salary = DB::table('salaries')
            ->join('employees','salaries.emp_id','employees.id')
            ->select('salaries.*','employees.name','employees.photo','employees.salary')
            ->get();

       return view('salary.allAdvancedSalary', compact('salary'));

    }

    public function PaySalary()
    {
       /* $employees = DB::table('employees')
                   ->join('salaries','employees.id','salaries.emp_id')
                   ->select('employees.*','salaries.advanced_salary')
                   ->get();*/

        $employees = Employee::all();
        $salaries = Salary::all();
        return view('salary.paysalary', compact('employees','salaries'));
    }

}
