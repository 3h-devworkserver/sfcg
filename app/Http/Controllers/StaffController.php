<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;
use App\Models\Staff;

class StaffController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $staffs= Staff::all();
        return view('staff.index', compact('staffs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $projects = Project::pluck('project_name', 'id');
        return view('staff.create', compact('projects'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => 'required',
            'address' => 'required',
            'contact_no' => 'required',
            'email' => 'required|email',
            'joined_date' => 'required',
            'designation' => 'required',
            'salary' => 'required',
            'project_id' => 'required',
        ]);
        Staff::create($request->all());
        return redirect()->route('staffs.index')->withFlashSuccess('Staff has been added successfully.');
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
        $staff = Staff::findOrFail($id);
        $projects = Project::pluck('project_name', 'id');
        return view('staff.edit', compact('projects', 'staff'));
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
         $this->validate($request,[
            'name' => 'required',
            'address' => 'required',
            'contact_no' => 'required',
            'email' => 'required|email',
            'joined_date' => 'required',
            'designation' => 'required',
            'salary' => 'required',
            'project_id' => 'required',
        ]);
        $staff = Staff::findOrFail($id);
        $staff->update($request->all());
        return redirect()->route('staffs.edit', $id)->withFlashSuccess('Staff profile is updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Staff::destroy($id);
        return redirect()->route('staffs.index')->withFlashSuccess('Staff profile is deleted successfully.');
    }
}
