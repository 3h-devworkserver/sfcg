@extends('layouts.app')



    @section('stylesheet')
        @include('partials.stylesheet.home')
    @endsection

    @section('class-body')
        nav-md
    @endsection



    @section('content')
        @include('partials.sidebar')
        @include('partials.header')

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
                                <select class="form-control" id="sel1" name="act_type">
                                <option value="0">--Select--</option>
                                <option value="1">Capacity development  </option>
                                <option value="2">Planning</option>
                                <option value="3">Meeting/workshop</option>
                                <option value="4">Research/study</option>
                                <option value="5">Dialogue/consultation   </option>
                                <option value="6">Awareness</option>
                                <option value="7">Seed-grant</option>
                                <option value="8">Trust Building</option>
                                <option value="9">Outreach</option>
                                <option value="10">Media</option>
                                <option value="11">Mediation</option>
                                <option value="12">Staff orientation</option>
                                <option value="13">Legal aid </option>
                                <option value="14">Others</option>
                                                            
                                </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">

                                <span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                {!! Form::text('obj', '' ,['class' => 'form-control'] ) !!}
                                </div>
                            </div>    
                                
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">
                                Expected outcomes
                                <span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                {!! Form::text('out', '' ,['class' => 'form-control'] ) !!}
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
                                {!! Form::label('imp_area','Estimated beneficiaries /participants (No)',array('class'=>'control-label col-md-3 col-sm-3 col-xs-12')) !!}
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <div class="row">
                                        <div class="col-md-6 col-sm-12 col-xs-12">
                                            <div class="form-group">
                                                {!! Form::label('dis','Disaggregation',array('class'=>'control-label')) !!}
                                                {!! Form::text('imp_area[]', '' ,['class' => 'form-control'] ) !!}
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-12 col-xs-12">
                                            <div class="form-group">
                                                    {!! Form::label('f','Female',array('class'=>'control-label')) !!}
                                                    {!! Form::text('imp_area[]', '' ,['class' => 'form-control'] ) !!}
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-12 col-xs-12">
                                            <div class="form-group">
                                                    {!! Form::label('m','Male',array('class'=>'control-label')) !!}
                                                    {!! Form::text('imp_area[]', '' ,['class' => 'form-control'] ) !!}
                                                </div>
                                        </div>
                                        <div class="col-md-6 col-sm-12 col-xs-12">
                                            <div class="form-group">
                                                {!! Form::label('total','Total',array('class'=>'control-label')) !!}
                                                {!! Form::text('imp_area[]', '' ,['class' => 'form-control'] ) !!}
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-12 col-xs-12">
                                            <div class="form-group">
                                                {!! Form::label('dis_g','Dis. Group',array('class'=>'control-label')) !!}
                                                 {!! Form::text('imp_area[]', '' ,['class' => 'form-control'] ) !!}
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
                                                {!! Form::text('p_budget[]', '' ,['class' => 'form-control'] ) !!}
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-12 col-xs-12">
                                            <div class="form-group">
                                                {!! Form::label('travel','Travel',array('class'=>'control-label')) !!}
                                                {!! Form::text('p_budget[]', '' ,['class' => 'form-control'] ) !!}
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-12 col-xs-12">
                                            <div class="form-group">
                                                {!! Form::label('ac','Accom/Per-diem',array('class'=>'control-label')) !!}
                                                {!! Form::text('p_budget[]', '' ,['class' => 'form-control'] ) !!}
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-12 col-xs-12">
                                            <div class="form-group">
                                                {!! Form::label('program','Program',array('class'=>'control-label')) !!}
                                                {!! Form::text('p_budget[]', '' ,['class' => 'form-control'] ) !!}
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-12 col-xs-12">
                                            <div class="form-group">
                                                {!! Form::label('total','Total',array('class'=>'control-label')) !!}
                                                {!! Form::text('p_budget[]', '' ,['class' => 'form-control'] ) !!}
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
                                <option value="1">Marginalized Community</option>
                                <option value="2">Women</option>
                                <option value="3">Police/Security institution</option>
                                <option value="4">Court/Lawyers</option>
                                <option value="5">Mediators/Centre</option>
                                <option value="6">Activist/professional</option>
                                <option value="7">Other Govt. organization</option>
                                <option value="8">General community</option>
                                <option value="9">Civil society</option>
                                <option value="10">Political leaders</option>
                                <option value="11">Journalist</option>
                                <option value="12">Others</option>
                                                                                           
                                </select>
                                </div>
                            </div>
                            <div class="form-group">    
                                {!! Form::label('name','Implementing Partners',array('class'=>'control-label col-md-3 col-sm-3 col-xs-12')) !!}

                                <div class="col-md-6 col-sm-6 col-xs-12" id="i_partners">
                                    {!! Form::text('i_partners[]', '' ,['class' => 'form-control'] ) !!}
                    
                                </div>
                                <div class="addmore"  >
                                    <a href="javascript:;" class="addmorebtn btn btn-primary" id="i_partners"><i class="fa fa-plus"></i> Add New </a>
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
                                    {!! Form::text('c_partners[]', '' ,['class' => 'form-control'] ) !!}
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
                                    {!! Form::text('r_persons[]', '' ,['class' => 'form-control'] ) !!}
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
                                                 {!! Form::text('contact_person[]', '' ,['class' => 'form-control'] ) !!}
                                             </div>
                                         </div>
                                         <div class="col-md-6">
                                             <div class="form-group">
                                                {!! Form::label('contact_person','Position:',array('class'=>'control-label')) !!}
                                                {!! Form::text('contact_person[]', '' ,['class' => 'form-control'] ) !!}
                                             </div>
                                         </div>
                                         <div class="col-md-6">
                                             <div class="form-group">
                                                 {!! Form::label('contact_person','Cell:',array('class'=>'control-label')) !!} 
                                                {!! Form::text('contact_person[]', '' ,['class' => 'form-control'] ) !!}
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                            </div> 

                            
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @include('partials.footer')
    @endsection

    @section('script')
        @include('partials.scripts.home')
    @endsection