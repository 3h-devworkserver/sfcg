<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NGO;

class NGOController extends Controller
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
        $ngos= NGO::all();
        return view('ngo.index', compact('ngos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ngo.create');
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
            'established_date' => 'required',
            'primary_project' => 'required',
            'funded_by' => 'required',
        ]);
        NGO::create($request->all());
        return redirect()->route('ngo.index')->withFlashSuccess('NGO Profile has been added successfully.');
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
        $ngo = NGO::findOrFail($id);
        return view('ngo.edit', compact('ngo'));
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
            'established_date' => 'required',
            'primary_project' => 'required',
            'funded_by' => 'required',
        ]);
        $ngo = NGO::findOrFail($id);
        $ngo->update($request->all());
        return redirect()->route('ngo.edit', $id)->withFlashSuccess('NGO profile is updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        NGO::destroy($id);
        return redirect()->route('ngo.index')->withFlashSuccess('NGO profile is deleted successfully.');
    }
}
