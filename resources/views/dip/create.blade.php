@extends('layouts.master')


    @section('content')
       

    <!--     <div class="right_col" role="main">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12"> -->
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Add New DIP <small></small></h2>
                            <ul class="nav navbar-right panel_toolbox">
                                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="#">Settings 1</a>
                                        </li>
                                        <li><a href="#">Settings 2</a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a class="close-link"><i class="fa fa-close"></i></a>
                                </li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">

                            <div class="hide add_c_partners">
                                {!! Form::text('c_partners[]', '' ,['class' => 'form-control'] ) !!}
                            </div>
                            <div class="hide add_i_partners">
                                {!! Form::text('i_partners[]', '' ,['class' => 'form-control'] ) !!}
                            </div>
                            <div class="hide add_r_persons">
                               {!! Form::text('r_persons[]', '' ,['class' => 'form-control'] ) !!}
                                    <select class="form-control" id="sel1" name="res_p[]">
                                    <option value="0">--Select--</option>
                                    <option value="1">Internal</option>
                                    <option value="2">External</option>
                                </select>
                            </div>

                           {!! Form::open( array( 'route'=> 'dip.store','files' => true,'accept-charset'=>'UTF-8','method'=>'POST', 'class'=>'form-horizontal' ) ) !!}
                                
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Name of Activities
                        <span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                                {!! Form::text('name', '' ,['class' => 'form-control'] ) !!}
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Activity type
                                <span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                <select class="form-control select-act-type" id="sel1" name="act_type">
                                <option value="">--Select--</option>
                                <option value="Capacity development">Capacity development  </option>
                                <option value="Planning">Planning</option>
                                <option value="Meeting/workshop">Meeting/workshop</option>
                                <option value="Research/study">Research/study</option>
                                <option value="Dialogue/consultation">Dialogue/consultation   </option>
                                <option value="Awareness">Awareness</option>
                                <option value="Seed-grant">Seed-grant</option>
                                <option value="Trust Building">Trust Building</option>
                                <option value="Outreach">Outreach</option>
                                <option value="Media">Media</option>
                                <option value="Mediation">Mediation</option>
                                <option value="Staff orientation">Staff orientation</option>
                                <option value="Legal aid">Legal aid </option>
                                <option value="others">Others</option>
                                                            
                                </select>
                                    {!! Form::text('act_others', '' ,['class' => 'form-control act-others hide'] ) !!}
                                </div>
                            </div>    

                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="obj">
                                Main objective </label>
                               
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                {!! Form::text('obj', '' ,['class' => 'form-control'] ) !!}
                                </div>
                            </div>    
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">
                                Expected outcomes
                                <span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                {!! Form::text('outcome', '' ,['class' => 'form-control'] ) !!}
                                </div>
                            </div>    
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">
Indicator for this activity
                                <span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <div class="indication-wrap ">
                                <select class="form-control" id="sel1" name="ind_act">
                                <option value="0">--Select--</option>
                                <option value="1">Outcome </option>
                                <option value="2">Output</option>
                                </select>
                                <div class="indication-text-field ">
                                     <label class="control-label" for="first-name">
                                  Indicator No: </label>
                                    {!! Form::text('ind_no', '' ,['class' => 'form-control'] ) !!}
                                </div>
                                    </div>
                                
                                <!-- <div class="form-group">
                                     <label class="control-label" for="first-name">
                                  Indicator No: </label>
                                    {!! Form::text('ind_no', '' ,['class' => 'form-control'] ) !!}
                                </div> -->
                                </div>

                            </div>  
                            <div class="form-group">
                               <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">
Priority of police strategy
                                <span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                {!! Form::text('police_str', '' ,['class' => 'form-control'] ) !!}
                                </div>
                            </div>  
                                
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Implementation date <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                        {{--<input id="birthday" class="date-picker form-control col-md-7 col-xs-12" required="required" type="text">--}}
                                    <fieldset>
                                        <div class="control-group">
                                            <div class="controls">
                                                    {{--<div class="col-md-11 xdisplay_inputx form-group has-feedback">--}}
                                                <input type="text" name="imp_date" class="form-control has-feedback-left" id="single_cal4" aria-describedby="inputSuccess2Status4">
                                                <span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span>
                                                <span id="inputSuccess2Status4" class="sr-only">(success)</span>
                                                    {{--</div>--}}
                                            </div>
                                        </div>
                                    </fieldset>
                                </div>
                            </div>
                            <div class="form-group">
                                {!! Form::label('imp_area','Implementation area:(VDCs or Venue)',array('class'=>'control-label col-md-3 col-sm-3 col-xs-12')) !!}

                                <div class="col-md-6 col-sm-6 col-xs-12">
                                {!! Form::text('imp_area', '' ,['class' => 'form-control'] ) !!}
                                </div>

                            </div> 
                            <div class="form-group">
                                {!! Form::label('est_ben','Estimated beneficiaries /participants (No)',array('class'=>'control-label col-md-3 col-sm-3 col-xs-12')) !!}
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <div class="row">
                                        <div class="col-md-6 col-sm-12 col-xs-12">
                                            <div class="form-group">
                                                {!! Form::label('eb_dis','Disaggregation',array('class'=>'control-label')) !!}
                                                {!! Form::text('eb_dis', '' ,['class' => 'form-control'] ) !!}
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-12 col-xs-12">
                                            <div class="form-group">
                                                    {!! Form::label('eb_female','Female',array('class'=>'control-label')) !!}
                                                    {!! Form::text('eb_female', '' ,['class' => 'form-control'] ) !!}
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-12 col-xs-12">
                                            <div class="form-group">
                                                    {!! Form::label('eb_male','Male',array('class'=>'control-label')) !!}
                                                    {!! Form::text('eb_male', '' ,['class' => 'form-control'] ) !!}
                                                </div>
                                        </div>
                                        <div class="col-md-6 col-sm-12 col-xs-12">
                                            <div class="form-group">
                                                {!! Form::label('eb_total','Total',array('class'=>'control-label')) !!}
                                                {!! Form::text('eb_total', '' ,['class' => 'form-control'] ) !!}
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-12 col-xs-12">
                                            <div class="form-group">
                                                {!! Form::label('eb_dis_grp','Dis. Group',array('class'=>'control-label')) !!}
                                                 {!! Form::text('eb_dis_grp', '' ,['class' => 'form-control'] ) !!}
                                            </div>
                                        </div>
                                    </div>
                                    
                                    
                                    
                                    
                                </div>
                            </div> 
                            <div class="form-group">
                                {!! Form::label('p_budget','Planned budget (NRS)',array('class'=>'control-label col-md-3 col-sm-3 col-xs-12')) !!}
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <div class="row">
                                        <div class="col-md-6 col-sm-12 col-xs-12">
                                            <div class="form-group">
                                                {!! Form::label('pb_type','Type',array('class'=>'control-label ')) !!}
                                                {!! Form::text('pb_type', '' ,['class' => 'form-control'] ) !!}
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-12 col-xs-12">
                                            <div class="form-group">
                                                {!! Form::label('pb_travel','Travel',array('class'=>'control-label')) !!}
                                                {!! Form::text('pb_travel', '' ,['class' => 'form-control'] ) !!}
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-12 col-xs-12">
                                            <div class="form-group">
                                                {!! Form::label('pb_accom','Accom/Per-diem',array('class'=>'control-label')) !!}
                                                {!! Form::text('pb_accom', '' ,['class' => 'form-control'] ) !!}
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-12 col-xs-12">
                                            <div class="form-group">
                                                {!! Form::label('pb_program','Program',array('class'=>'control-label')) !!}
                                                {!! Form::text('pb_program', '' ,['class' => 'form-control'] ) !!}
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-12 col-xs-12">
                                            <div class="form-group">
                                                {!! Form::label('pb_total','Total',array('class'=>'control-label')) !!}
                                                {!! Form::text('pb_total', '' ,['class' => 'form-control'] ) !!}
                                            </div>
                                        </div>
                                    </div> 
                                </div>
                            </div> 
                            <div class="form-group">
                                <label  class="control-label col-md-3 col-sm-3 col-xs-12" for="sel1">Target group</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                <select class="form-control tgroup" id="sel1" name="target_grp">
                                <option value="">--Select--</option>
                                <option value="Marginalized Community">Marginalized Community</option>
                                <option value="Women">Women</option>
                                <option value="Police/Security institution">Police/Security institution</option>
                                <option value="Court/Lawyers">Court/Lawyers</option>
                                <option value="Mediators/Centre">Mediators/Centre</option>
                                <option value="Activist/professional">Activist/professional</option>
                                <option value="Other Govt. organization">Other Govt. organization</option>
                                <option value="General community">General community</option>
                                <option value="Civil society">Civil society</option>
                                <option value="Political leaders">Political leaders</option>
                                <option value="Journalist">Journalist</option>
                                <option value="others">Others</option>
                                                                                           
                                </select>
                                {!! Form::text('tg_others', '' ,['class' => 'form-control tgroupText hide'] ) !!}
                                </div>

                            </div>
                            <!-- <div class="form-group">
                                 <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">
                             
                                 <span class="required"></span></label>
                                 <div class="col-md-6 col-sm-6 col-xs-12">
                                 
                                 </div>
                             </div> --> 
                            <div class="form-group" id="i_partners">    
                                {!! Form::label('name','Implementing Partners',array('class'=>'control-label col-md-3 col-sm-3 col-xs-12')) !!}

                                <div class="col-md-6 col-sm-6 col-xs-12 test2" >
                                    {!! Form::text('i_partners[]', '' ,['class' => 'form-control'] ) !!}
                    
                                </div>
                                
                                <div class="addmore"  >
                                    <a href="javascript:;" class="addmorebtn_i_partners btn btn-primary" ><i class="fa fa-plus"></i> Add New </a>

                                </div>
                               
                                {{-- <div class="add_i_partners" style="display:none;">
                                   
                                    <input type="hidden" class="counter" name="counter[]" value="">

                                     {!! Form::label('','',array('class'=>'control-label col-md-3 col-sm-3 col-xs-12')) !!}
                                    <div class="col-md-6 col-sm-6 col-xs-12" >
                                    {!! Form::text('i_partners[]', '' ,['class' => 'form-control'] ) !!}
                                    </div>
                                
                                    
                                </div> --}}

                            </div>
                            <div class="form-group" id="c_partners">
                                {!! Form::label('name','Collaborative Partners',array('class'=>'control-label col-md-3 col-sm-3 col-xs-12')) !!}
                                 <div class="col-md-6 col-sm-6 col-xs-12 test1">
                                    {!! Form::text('c_partners[]', '' ,['class' => 'form-control'] ) !!}
                                </div>
                                
                                <div class="addmore">
                                    <a href="javascript:;" class="addmorebtn_c_partners btn btn-primary"><i class="fa fa-plus"></i> Add New </a>
                                </div>
                                {{-- <div class="add_c_partners" style="display:none;">
                                    <div class="inner-wrap second">
                                    <input type="hidden" class="counter" name="counter[]" value="">
                                    <div class="col-sm-12 col-md-12">
                                    {!! Form::text('c_partners[]', '' ,['class' => 'form-control'] ) !!}
                                    </div>
                                    </div>
                                </div> --}}
                            </div>
                            <div class="form-group" id="r_persons">
                                {!! Form::label('r_persons[]','Resource persons',array('class'=>'control-label col-md-3 col-sm-3 col-xs-12')) !!}
                                <div class="col-md-6 col-sm-6 col-xs-12 test3">
                                    {!! Form::text('r_persons[]', '' ,['class' => 'form-control'] ) !!}
                                <select class="form-control" id="sel1" name="res_p[]">
                                    <option value="0">--Select--</option>
                                    <option value="1">Internal</option>
                                    <option value="2">External</option>
                                </select>
                                </div>
                                <div class="addmore">
                                    <a href="javascript:;" class="addmorebtn_r_persons btn btn-primary"><i class="fa fa-plus"></i> Add New </a>
                                </div>
                                {{-- <div class="add_r_persons" style="display:none;">
                                    <div class="inner-wrap second">
                                    <input type="hidden" class="counter" name="counter[]" value="">
                                    <div class="col-sm-12 col-md-12">
                                    {!! Form::text('r_persons[]', '' ,['class' => 'form-control'] ) !!}
                                    <select class="form-control" id="sel1" name="res_p[]">
                                    <option value="0">--Select--</option>
                                    <option value="1">Internal</option>
                                    <option value="2">External</option>
                                </select>
                                    </div>
                                    </div>
                                </div> --}}
                            </div>
                            <div class="form-group">
                                {!! Form::label('contact_person','Contact person for this activity:',array('class'=>'control-label col-md-3 col-sm-3 col-xs-12')) !!}
                                 
                                 <div class="col-md-6 col-sm-6 col-xs-12">
                                     <div class="row">
                                         <div class="col-md-6">
                                             <div class="form-group">
                                                 {!! Form::label('ct_name','Name:',array('class'=>'control-label')) !!}
                                                 {!! Form::text('ct_name', '' ,['class' => 'form-control'] ) !!}
                                             </div>
                                         </div>
                                         <div class="col-md-6">
                                             <div class="form-group">
                                                {!! Form::label('ct_pos','Position:',array('class'=>'control-label')) !!}
                                                {!! Form::text('ct_pos', '' ,['class' => 'form-control'] ) !!}
                                             </div>
                                         </div>
                                         <div class="col-md-6">
                                             <div class="form-group">
                                                 {!! Form::label('ct_cell','Cell:',array('class'=>'control-label')) !!} 
                                                {!! Form::text('ct_cell', '' ,['class' => 'form-control'] ) !!}
                                             </div>
                                         </div>
                                         
                                     </div>
                                 </div>
                            </div> 
                            <div class="submit-btn col-md-6 col-md-offset-3">
                                {!! Form::submit('Submit',['class'=>'btn btn-primary']) !!}
                            </div>
                   

                        </div>
                    </div>{!! Form::close() !!}
                <!-- </div> 
            </div>
        </div> -->

      @endsection