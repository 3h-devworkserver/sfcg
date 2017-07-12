<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Training;

class TrainingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $trainings = Training::all();
        return view('training.index', compact('trainings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('training.create');
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
            'age_group' => 'required',
            'caste' => 'required',
            'gender' => 'required',
            'professional' => 'required',
        ]);
        // return $request->all();
        Training::create($request->all());
        return redirect()->route('trainings.index')->withFlashSuccess('Training has been added successfully.');
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
        $training= Training::findOrFail($id);
        return view('training.edit', compact('training'));
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
            'age_group' => 'required',
            'caste' => 'required',
            'gender' => 'required',
            'professional' => 'required',
        ]);
        $training = Training::findOrFail($id);
        $training->update($request->all());
        return redirect()->route('trainings.edit', $training->id)->withFlashSuccess('Information updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Training::destroy($id);
        return redirect()->route('trainings.index')->withFlashSuccess('Information Deleted successfully.');
    }
}
