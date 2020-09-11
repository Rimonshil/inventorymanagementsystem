<?php

namespace App\Http\Controllers;

use App\Attendence;
use App\Employee;
use Illuminate\Http\Request;
use TJGazel\Toastr\Facades\Toastr as FacadesToastr;
use TJGazel\Toastr\Facades\Toastr;
use TJGazel\Toastr\Toastr as ToastrToastr;
use DB;

class AttendenceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $attendences = Attendence::all();
        return view('attendence.index',compact('attendences'));
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

        $date = $request->att_date;
        $att_date = DB::table('attendences')->where('att_date',$date)->first();

        if ($att_date) {
            Toastr::warning('Attendence Already Taken', 'warning');
              return redirect()->back();
        }else{
            foreach ($request->emp_id as $id) {

                $employees = Attendence::create([
                    'emp_id' => $id,
                    'att_date' => $request->att_date,
                    'att_year' => $request->att_year,
                    'attendence' => $request->attendence[$id],  
                    'edit_date'=>date("d_m_y")  
        
            ]);
                }
            Toastr::success('Attendence Added Successfully', 'success');
            return redirect()->back();

        }

       
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
        $attendence = Attendence::findorfail($id);
        return view('attendence.edit',compact('attendence'));
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
        $attendence = Attendence::findorfail($id);
        $attendence->update($request->all());
        $attendence->save();
        Toastr::Success('Attendence Update Successfully', 'success');
        return redirect(route('attendence.index'));
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dlt = DB::table('attendences')->where('id',$id)->delete();
        Toastr::Success('Attendence Deleted Successfully', 'success');
        return redirect(route('attendence.index'));
    }

    public function TakeAttendence()
    {
        $employees = Employee::all();
        return view('attendence.TakeAttendence',compact('employees'));
    }
}
