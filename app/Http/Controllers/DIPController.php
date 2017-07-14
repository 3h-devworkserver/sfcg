<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Models\DIP;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;

class DIPController extends Controller
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
       $posts = DIP::all();

         return view('dip.index', compact('posts','pageheader'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dip/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){

        $rules = array(
               
        );
        $validator = Validator::make(Input::all(), $rules);
        if($validator->fails())
        {
            return Redirect::to('dip/create')
            ->withErrors($validator);
        }
        else
        {
            $input = Input::all();
            if ( ($input['act_type']) != 'others'){
                $val =  '';
            }else{
                $val = $input['act_others'];
            }
            if ( ($input['target_grp']) != 'others'){
                $target =  '';
            }else{
                $target = $input['tg_others'];
            }
            
            $i_partners= implode(",",$input['i_partners']);
            $c_partners= implode(",",$input['c_partners']);
            
            $r_persons= implode(",",$input['r_persons']);
            $res_p= implode(",",$input['res_p']);


            $event = DIP::create([
                        'name' => $input['name'],
                        'act_type' => $input['act_type'],
                        'act_others' => $val,
                        'obj' => $input['obj'],
                        'outcome' => $input['outcome'],
                        'ind_act' =>  $input['ind_act'],
                        'ind_no' =>  $input['ind_no'],
                        'police_str' => $input['police_str'],
                        'imp_date' => $input['imp_date'],
                        'imp_area' => $input['imp_area'],
                        'eb_dis' => $input['eb_dis'],
                        'eb_female' => $input['eb_female'],
                        'eb_male' => $input['eb_male'],
                        'eb_total' => $input['eb_total'],
                        'eb_dis_grp' => $input['eb_dis_grp'],
                        'pb_type' => $input['pb_type'],
                        'pb_travel' => $input['pb_travel'],
                        'pb_accom' => $input['pb_accom'],
                        'pb_program' => $input['pb_program'],
                        'pb_total' => $input['pb_total'],

                        'target_grp' => $input['target_grp'],
                        'tg_others' => $target,
                        'i_partners' => $i_partners,
                        'c_partners' => $c_partners,
                        'r_persons' => $r_persons,
                        'res_p'=> $res_p,

                        'ct_name' => $input['ct_name'],
                        'ct_pos' => $input['ct_pos'],
                        'ct_cell' => $input['ct_cell'],

                ]);
        }
            return redirect('dip/index')->with('message','<b>Store is Successful<b>');

        //Project::create($request->all());
       // return redirect()->route('home')->with('message','Project has been added successfully.');
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
        
        $pageheader ="Edit DIP";
        $posts = DIP::findOrFail($id);
        
        return view('dip.edit', compact('posts', 'pageheader'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request)
    {
        $input = Input::all();

        $event = DIP::where('id',$id)->update([
                        'name' => $input['name'],
                        'act_type' => $input['act_type'],
                        'act_others' => $input['act_others'],
                        'obj' => $input['obj'],
                        'outcome' => $input['outcome'],
                        'ind_act' =>  $input['ind_act'],
                        'police_str' => $input['police_str'],
                        'imp_date' => $input['imp_date'],
                        'imp_area' => $input['imp_area'],
                        'eb_dis' => $input['eb_dis'],
                        'eb_female' => $input['eb_female'],
                        'eb_male' => $input['eb_male'],
                        'eb_total' => $input['eb_total'],
                        'eb_dis_grp' => $input['eb_dis_grp'],
                        'pb_type' => $input['pb_type'],
                        'pb_travel' => $input['pb_travel'],
                        'pb_accom' => $input['pb_accom'],
                        'pb_program' => $input['pb_program'],
                        'pb_total' => $input['pb_total'],
                        'p_budget' => $input['p_budget'],
                        'target_grp' => $input['target_grp'],
                        'tg_others' => $input['tg_others'],
                        'i_partners' => $input['i_partners'],
                        'c_partners' => $input['c_partners'],
                        'r_persons' => $input['r_persons'],
                        'contact_person' => $input['contact_person'],
                ]);
        
//       
        return redirect()->route('dip.index')->with('message','<b>Edit is Successful<b>');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $event = DIP::findOrFail($id);
        $event->delete();
        
        return redirect('dips');
    }
}
