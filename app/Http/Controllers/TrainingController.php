<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Training;

class TrainingController extends Controller
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
        $trainings = Training::all();

    //age-group
        $maleBelow15 = Training::where('age_group', 'Below 15')->where('gender', 'Male')->count();
        $femaleBelow15 = Training::where('age_group', 'Below 15')->where('gender', 'Female')->count();

        $male15_29  = Training::where('age_group', '15-29')->where('gender', 'Male')->count();
        $female15_29  = Training::where('age_group', '15-29')->where('gender', 'Female')->count();

        $male30_45 = Training::where('age_group', '30-45')->where('gender', 'Male')->count();
        $female30_45 = Training::where('age_group', '30-45')->where('gender', 'Female')->count();

        $male45Above = Training::where('age_group', '45-Above')->where('gender', 'Male')->count();
        $female45Above = Training::where('age_group', '45-Above')->where('gender', 'Female')->count();

    //caste
        $maleMadhesiTerai = Training::where('caste', 'Madhesi/Terai')->where('gender', 'Male')->count();
        $femaleMadhesiTerai = Training::where('caste', 'Madhesi/Terai')->where('gender', 'Female')->count();

        $maleDalit = Training::where('caste', 'Dalit')->where('gender', 'Male')->count();
        $femaleDalit = Training::where('caste', 'Dalit')->where('gender', 'Female')->count();

        $maleMuslim = Training::where('caste', 'Muslim')->where('gender', 'Male')->count();
        $femaleMuslim = Training::where('caste', 'Muslim')->where('gender', 'Female')->count();

        $maleTharu = Training::where('caste', 'Tharu')->where('gender', 'Male')->count();
        $femaleTharu = Training::where('caste', 'Tharu')->where('gender', 'Female')->count();

        $maleDisadvantage = Training::where('caste', 'Disadvantage')->where('gender', 'Male')->count();
        $femaleDisadvantage = Training::where('caste', 'Disadvantage')->where('gender', 'Female')->count();

        $maleBrahminChhetri = Training::where('caste', 'Brahmin/Chhetri')->where('gender', 'Male')->count();
        $femaleBrahminChhetri = Training::where('caste', 'Brahmin/Chhetri')->where('gender', 'Female')->count();

        $malePahade = Training::where('caste', 'Pahade')->where('gender', 'Male')->count();
        $femalePahade = Training::where('caste', 'Pahade')->where('gender', 'Female')->count();

        $maleOthers = Training::where('caste', 'Others')->where('gender', 'Male')->count();
        $femaleOthers = Training::where('caste', 'Others')->where('gender', 'Female')->count();

    //professional
        $maleGovtofficial = Training::where('professional', 'Govt official')->where('gender', 'Male')->count();
        $femaleGovtofficial = Training::where('professional', 'Govt official')->where('gender', 'Female')->count();

        $maleLocalleaders = Training::where('professional', 'Local leaders')->where('gender', 'Male')->count();
        $femaleLocalleaders = Training::where('professional', 'Local leaders')->where('gender', 'Female')->count();

        $maleYouthleaders = Training::where('professional', 'Youth leaders')->where('gender', 'Male')->count();
        $femaleYouthleaders = Training::where('professional', 'Youth leaders')->where('gender', 'Female')->count();

        $maleMediapersons = Training::where('professional', 'Media persons')->where('gender', 'Male')->count();
        $femaleMediapersons = Training::where('professional', 'Media persons')->where('gender', 'Female')->count();

        $maleCivilsocietyNGO = Training::where('professional', 'Civil society/NGO')->where('gender', 'Male')->count();
        $femaleCivilsocietyNGO = Training::where('professional', 'Civil society/NGO')->where('gender', 'Female')->count();

        $maleSecurity = Training::where('professional', 'Security')->where('gender', 'Male')->count();
        $femaleSecurity = Training::where('professional', 'Security')->where('gender', 'Female')->count();

        $maleCourtLawyers = Training::where('professional', 'Court/Lawyers')->where('gender', 'Male')->count();
        $femaleCourtLawyers = Training::where('professional', 'Court/Lawyers')->where('gender', 'Female')->count();

        $maleActivistshumanrights = Training::where('professional', 'Activists/human rights')->where('gender', 'Male')->count();
        $femaleActivistshumanrights = Training::where('professional', 'Activists/human rights')->where('gender', 'Female')->count();

        $maleOthers = Training::where('professional', 'Others')->where('gender', 'Male')->count();
        $femaleOthers = Training::where('professional', 'Others')->where('gender', 'Female')->count();

        return view('training.index', compact('trainings','maleBelow15', 'femaleBelow15', 'male15_29', 'female15_29', 'male30_45', 'female30_45', 'male45Above', 'female45Above', 'maleMadhesiTerai', 'femaleMadhesiTerai', 'maleDalit', 'femaleDalit', 'maleMuslim', 'femaleMuslim', 'maleTharu', 'femaleTharu', 'maleDisadvantage', 'femaleDisadvantage', 'maleBrahminChhetri', 'femaleBrahminChhetri', 'malePahade', 'femalePahade', 'maleOthers', 'femaleOthers', 'maleGovtofficial', 'femaleGovtofficial', 'maleLocalleaders', 'femaleLocalleaders', 'maleYouthleaders', 'femaleYouthleaders', 'maleMediapersons', 'femaleMediapersons', 'maleCivilsocietyNGO', 'femaleCivilsocietyNGO', 'maleSecurity', 'femaleSecurity', 'maleCourtLawyers', 'femaleCourtLawyers', 'maleActivistshumanrights', 'femaleActivistshumanrights', 'maleOthers', 'femaleOthers'));
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
