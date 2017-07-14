@extends('layouts.master')
    @section('content')

        <div class="x_panel">
            <div class="x_title">
                <h2>Edit Staff Profile</h2>
                <div class="clearfix"></div>
            </div>
            
            <div class="x_content">
                <br />
                {{Form::model($staff, ['route'=>['staffs.update', $staff->id], 'id'=>'demo-form2', 'class'=>'form-horizontal form-label-left', 'data-parsley-validate', 'method'=>'patch'])}}
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Name of Staff<span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            {{Form::text('name', null, ['class'=>'form-control col-md-7 col-xs-12'])}}
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Address<span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            {{Form::text('address', null, ['class'=>'form-control col-md-7 col-xs-12'])}}
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" >Contact No<span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            {{Form::text('contact_no', null, ['class'=>'form-control col-md-7 col-xs-12'])}}
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" >Email<span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            {{Form::email('email', null, ['class'=>'form-control col-md-7 col-xs-12'])}}
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" >Joined Date<span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <fieldset>
                                <div class="control-group">
                                    <div class="controls">
                                        {{Form::text('joined_date', null, ['class'=>'form-control has-feedback-left col-md-7 col-xs-12', 'id'=>'single_cal4'])}}
                                            <span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span>
                                    </div>
                                </div>
                            </fieldset>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" >Designation<span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            {{Form::text('designation', null, ['class'=>'form-control col-md-7 col-xs-12'])}}
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" >Salary<span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                         <div class="input-group">
                            <span class="input-group-addon">NPR</span>
                            {{ Form::input('number', 'salary',  null, ['step'=>'any', 'min'=>'1', 'placeholder'=>'Enter Salary', 'class' => 'form-control col-md-7 col-xs-12']) }}
                        </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" >Assigned Project<span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            {{Form::select('project_id', $projects, null, ['class'=>'form-control col-md-7 col-xs-12', 'placeholder'=>'-- Select Project --'])}}
                        </div>
                    </div>

                    <div class="ln_solid"></div>
                    <div class="form-group" >
                        <div class="col-md-6 col-sm-6
                         col-xs-12 col-md-offset-3">
                            <a href="{{ route('staffs.index') }}" class="btn btn-primary">Cancel</a>
                            {{-- <button class="btn btn-primary" type="reset">Reset</button> --}}
                            <button type="submit"  class="btn btn-success">Submit</button>
                        </div>
                    </div>

                {{-- </form> --}}
                {{Form::close()}}
            </div>
        </div>

    @endsection
