@extends('layouts.master')
    @section('content')

        <div class="x_panel">
            <div class="x_title">
                <h2>Add New NGO Profile</h2>
                <div class="clearfix"></div>
            </div>
            
            <div class="x_content">
                <br />
                {{Form::open(['route'=>'ngo.store', 'id'=>'demo-form2', 'class'=>'form-horizontal form-label-left', 'data-parsley-validate'])}}
                {{-- <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="{!! route('trainings.store') !!} " method="post">
                    {{ csrf_field() }} --}}
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Name of NGO<span class="required">*</span></label>
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
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" >Established Date<span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <fieldset>
                                <div class="control-group">
                                    <div class="controls">
                                        {{Form::text('established_date', null, ['class'=>'form-control has-feedback-left col-md-7 col-xs-12', 'id'=>'single_cal4'])}}
                                            <span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span>
                                    </div>
                                </div>
                            </fieldset>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" >Primary Project<span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            {{Form::text('primary_project', null, ['class'=>'form-control col-md-7 col-xs-12'])}}
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" >Funded By<span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            {{Form::text('funded_by', null, ['class'=>'form-control col-md-7 col-xs-12'])}}
                        </div>
                    </div>

                    <div class="ln_solid"></div>
                    <div class="form-group" >
                        <div class="col-md-6 col-sm-6
                         col-xs-12 col-md-offset-3">
                            <a href="{{ route('ngo.index') }}" class="btn btn-primary">Cancel</a>
                            {{-- <button class="btn btn-primary" type="reset">Reset</button> --}}
                            <button type="submit"  class="btn btn-success">Submit</button>
                        </div>
                    </div>

                {{-- </form> --}}
                {{Form::close()}}
            </div>
        </div>

    @endsection
