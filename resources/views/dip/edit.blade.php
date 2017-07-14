@extends('layouts.master')


    @section('content')
       

        <div class="right_col" role="main">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
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
                            <br />
                           {!! Form::open( array( 'route'=> 'dip.update',$posts->id,'files' => true,'accept-charset'=>'UTF-8','method'=>'POST', 'class'=>'form-horizontal' ) ) !!}
                                
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Name of Activities
                        <span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                                {!! Form::text('name', isset($posts) ? $posts->name : '' ,['class' => 'form-control'] ) !!}
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Activity type
                                <span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                <select class="form-control" id="sel1" name="act_type">
                                <option value="0">--Select--</option>

                                <option  value="1" {{ ($posts->act_type=='1') 'selected' ?  : ''}}>Capacity development  </option>
                                <option value="2" {{ ($posts->act_type=='2') 'selected' ?  : ''}} >Planning</option>
                                <option value="3" {{ ($posts->act_type=='3') 'selected' ?  : ''}}>Meeting/workshop</option>
                                <option value="4" {{ ($posts->act_type=='4') 'selected' ?  : ''}} >Research/study</option>
                                <option value="5" {{ ($posts->act_type=='5') 'selected' ?  : ''}} >Dialogue/consultation   </option>
                                <option value="6" {{ ($posts->act_type=='6') 'selected' ?  : ''}} >Awareness</option>
                                <option value="7" {{ ($posts->act_type=='7') 'selected' ?  : ''}} >Seed-grant</option>
                                <option value="8" {{ ($posts->act_type=='8') 'selected' ?  : ''}} >Trust Building</option>
                                <option value="9" {{ ($posts->act_type=='9') 'selected' ?  : ''}} >Outreach</option>
                                <option value="10" {{ ($posts->act_type=='10') 'selected' ?  : ''}} >Media</option>
                                <option value="11" {{ ($posts->act_type=='11') 'selected' ?  : ''}} >Mediation</option>
                                <option value="12" {{ ($posts->act_type=='12') 'selected' ?  : ''}} >Staff orientation</option>
                                <option value="13" {{ ($posts->act_type=='13') 'selected' ?  : ''}} >Legal aid </option>
                                <option value="14">Others</option>
                                                            
                                </select>
                                </div>
                            </div>
                            
                                
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">
                                Expected outcomes
                                <span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                {!! Form::text('out', isset($posts) ? $posts->out : '' ,['class' => 'form-control'] ) !!}
                                </div>
                            </div>    
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">
Indicator for this activity
                                <span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <select class="form-control" id="sel1" name="act_type">
                                <option value="0">--Select--</option>
                                <option value="1">Outcome </option>
                                <option value="2">Output</option>
                                </select>
                                    </div>
                                
                                <div class="form-group">
                                     <label class="control-label" for="first-name">
                                  Indicator No: </label>
                                    {!! Form::text('ind', '' ,['class' => 'form-control'] ) !!}
                                </div>
                                </div>

                            </div>  
                            <div class="form-group">
                               <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">
Priority of police strategy
                                <span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                {!! Form::text('police_str', isset($posts) ? $posts->police_str : '' ,['class' => 'form-control'] ) !!}
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
                                {!! Form::text('imp_area', isset($posts) ? $posts->imp_area : '' ,['class' => 'form-control'] ) !!}
                                </div>

                            </div> 
                            <div class="form-group">
                                {!! Form::label('imp_area','Estimated beneficiaries /participants (No)',array('class'=>'control-label col-md-3 col-sm-3 col-xs-12')) !!}
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <div class="row">
                                        <div class="col-md-6 col-sm-12 col-xs-12">
                                            <div class="form-group">
                                                {!! Form::label('dis','Disaggregation',array('class'=>'control-label')) !!}
                                                {!! Form::text('imp_area[]', isset($posts) ? $posts->imp_area[0] : '' ,['class' => 'form-control'] ) !!}
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-12 col-xs-12">
                                            <div class="form-group">
                                                    {!! Form::label('f','Female',array('class'=>'control-label')) !!}
                                                    {!! Form::text('imp_area[]', isset($posts) ? $posts->imp_area[1] : '' ,['class' => 'form-control'] ) !!}
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-12 col-xs-12">
                                            <div class="form-group">
                                                    {!! Form::label('m','Male',array('class'=>'control-label')) !!}
                                                    {!! Form::text('imp_area[]', isset($posts) ? $posts->imp_area[2] : '' ,['class' => 'form-control'] ) !!}
                                                </div>
                                        </div>
                                        <div class="col-md-6 col-sm-12 col-xs-12">
                                            <div class="form-group">
                                                {!! Form::label('total','Total',array('class'=>'control-label')) !!}
                                                {!! Form::text('imp_area[]', isset($posts) ? $posts->imp_area[3] : '' ,['class' => 'form-control'] ) !!}
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-12 col-xs-12">
                                            <div class="form-group">
                                                {!! Form::label('dis_g','Dis. Group',array('class'=>'control-label')) !!}
                                                 {!! Form::text('imp_area[]',isset($posts) ? $posts->imp_area[4] : '' ,['class' => 'form-control'] ) !!}
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
                                                {!! Form::label('type','Type',array('class'=>'control-label ')) !!}
                                                {!! Form::text('p_budget[]', isset($posts) ? $posts->p_budget[0] : '' ,['class' => 'form-control'] ) !!}
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-12 col-xs-12">
                                            <div class="form-group">
                                                {!! Form::label('travel','Travel',array('class'=>'control-label')) !!}
                                                {!! Form::text('p_budget[]', isset($posts) ? $posts->p_budget[1] : '' ,['class' => 'form-control'] ) !!}
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-12 col-xs-12">
                                            <div class="form-group">
                                                {!! Form::label('ac','Accom/Per-diem',array('class'=>'control-label')) !!}
                                                {!! Form::text('p_budget[]', isset($posts) ? $posts->p_budget[2] : '' ,['class' => 'form-control'] ) !!}
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-12 col-xs-12">
                                            <div class="form-group">
                                                {!! Form::label('program','Program',array('class'=>'control-label')) !!}
                                                {!! Form::text('p_budget[]',isset($posts) ? $posts->p_budget[3] : '' ,['class' => 'form-control'] ) !!}
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-12 col-xs-12">
                                            <div class="form-group">
                                                {!! Form::label('total','Total',array('class'=>'control-label')) !!}
                                                {!! Form::text('p_budget[]', isset($posts) ? $posts->p_budget[4]: '' ,['class' => 'form-control'] ) !!}
                                            </div>
                                        </div>
                                    </div> 
                                </div>
                            </div> 
                            <div class="form-group">
                                <label  class="control-label col-md-3 col-sm-3 col-xs-12" for="sel1">Target group</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                <select class="form-control" id="sel1" name="target">
                                <option value="0">--Select--</option>
                                <option value="1"  {{ ($posts->target=='1') 'selected' ?  : ''}} >Marginalized Community</option>
                                <option value="2"  {{ ($posts->target=='2') 'selected' ?  : ''}} >Women</option>
                                <option value="3"  {{ ($posts->target=='3') 'selected' ?  : ''}} >Police/Security institution</option>
                                <option value="4"  {{ ($posts->target=='4') 'selected' ?  : ''}} >Court/Lawyers</option>
                                <option value="5"  {{ ($posts->target=='5') 'selected' ?  : ''}} >Mediators/Centre</option>
                                <option value="6"  {{ ($posts->target=='6') 'selected' ?  : ''}} >Activist/professional</option>
                                <option value="7"  {{ ($posts->target=='7') 'selected' ?  : ''}} >Other Govt. organization</option>
                                <option value="8"  {{ ($posts->target=='8') 'selected' ?  : ''}} >General community</option>
                                <option value="9"  {{ ($posts->target=='9') 'selected' ?  : ''}} >Civil society</option>
                                <option value="10"  {{ ($posts->target=='10') 'selected' ?  : ''}} >Political leaders</option>
                                <option value="11"  {{ ($posts->target=='11') 'selected' ?  : ''}} >Journalist</option>
                                <option value="12">Others</option>
                                                                                           
                                </select>
                                </div>
                            </div>
                            <div class="form-group">    
                                {!! Form::label('name','Implementing Partners',array('class'=>'control-label col-md-3 col-sm-3 col-xs-12')) !!}

                                <div class="col-md-6 col-sm-6 col-xs-12" id="i_partners">
                                    {!! Form::text('i_partners[]', isset($posts) ? $posts->i_partners[] : ''  ,['class' => 'form-control'] ) !!}
                    
                                </div>
                                <div class="addmore"  >
                                    <a href="javascript:;" class="addmorebtn btn btn-primary" ><i class="fa fa-plus"></i> Add New </a>

                                </div>
                                
                           

                                <div class="add" style="display:none;">
                                    <div class="inner-wrap second">
                                    <input type="hidden" class="counter" name="counter[]" value="">
                                     <label  class="control-label col-md-3 col-sm-3 col-xs-12" for="sel1"></label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                    {!! Form::text('i_partners[]', '' ,['class' => 'form-control'] ) !!}
                                    </div>
                                    </div>
                                </div>

                            </div>

                            <div class="form-group">
                                {!! Form::label('name','Collaborative Partners',array('class'=>'control-label col-md-3 col-sm-3 col-xs-12')) !!}
                                 <div class="col-md-6 col-sm-6 col-xs-12">
                                    {!! Form::text('c_partners[]',  isset($posts) ? $posts->c_partners[] : '' ,['class' => 'form-control'] ) !!}
                                </div>
                                <div class="addmore">
                                    <a href="javascript:;" class="addmorebtn btn btn-primary"><i class="fa fa-plus"></i> Add New </a>
                                </div>
                                <div class="add" style="display:none;">
                                    <div class="inner-wrap second">
                                    <input type="hidden" class="counter" name="counter[]" value="">
                                    <div class="col-sm-12 col-md-12">
                                    {!! Form::text('c_partners[]', '' ,['class' => 'form-control'] ) !!}
                                    </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                {!! Form::label('r_persons[]','Resource persons',array('class'=>'control-label col-md-3 col-sm-3 col-xs-12')) !!}
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    {!! Form::text('r_persons[]',  isset($posts) ? $posts->r_persons[] : '' ,['class' => 'form-control'] ) !!}
                                </div>
                                <div class="addmore">
                                    <a href="javascript:;" class="addmorebtn btn btn-primary"><i class="fa fa-plus"></i> Add New </a>
                                </div>
                                <div class="add" style="display:none;">
                                    <div class="inner-wrap second">
                                    <input type="hidden" class="counter" name="counter[]" value="">
                                    <div class="col-sm-12 col-md-12">
                                    {!! Form::text('r_persons[]', '' ,['class' => 'form-control'] ) !!}
                                    </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                {!! Form::label('contact_person','Contact person for this activity:',array('class'=>'control-label col-md-3 col-sm-3 col-xs-12')) !!}
                                 
                                 <div class="col-md-6 col-sm-6 col-xs-12">
                                     <div class="row">
                                         <div class="col-md-6">
                                             <div class="form-group">
                                                 {!! Form::label('contact_person','Name:',array('class'=>'control-label')) !!}
                                                 {!! Form::text('contact_person[]',  isset($posts) ? $posts->c_persons[0] : '' ,['class' => 'form-control'] ) !!}
                                             </div>
                                         </div>
                                         <div class="col-md-6">
                                             <div class="form-group">
                                                {!! Form::label('contact_person','Position:',array('class'=>'control-label')) !!}
                                                {!! Form::text('contact_person[]',  isset($posts) ? $posts->c_persons[1] : '' ,['class' => 'form-control'] ) !!}
                                             </div>
                                         </div>
                                         <div class="col-md-6">
                                             <div class="form-group">
                                                 {!! Form::label('contact_person','Cell:',array('class'=>'control-label')) !!} 
                                                {!! Form::text('contact_person[]',  isset($posts) ? $posts->c_persons[2] : '' ,['class' => 'form-control'] ) !!}
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                            </div> 

                            
                            </form>
                        </div>
                        {!! Form::submit('Submit',['class'=>'btn btn-primary']) !!}
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>

      @endsection