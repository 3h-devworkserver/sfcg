@extends('layouts.master')
    @section('content')

        <div class="x_panel">
            <div class="x_title">
                <h2>Edit Training Participation</h2>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <br />
                {{Form::model($training, ['route'=>['trainings.update', $training->id], 'id'=>'demo-form2', 'class'=>'form-horizontal form-label-left', 'data-parsley-validate', 'method'=>'patch'])}}
                {{-- <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="{!! route('trainings.store') !!} " method="post">
                    {{ csrf_field() }} --}}
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Name of participant
                        <span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        {{Form::text('name', null, ['class'=>'form-control col-md-7 col-xs-12'])}}
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Age<span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            {{Form::select('age_group', [''=>'-- Select Age Group --','Below 15'=>'Below 15','15-29'=>'15-29', '30-45'=>'30-45', '45-Above'=>'45-Above'], null, ['class'=>'form-control']) }}
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Caste<span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            {{Form::select('caste', [''=>'-- Select Caste --', 'Madhesi/Terai'=>'Madhesi/Terai','Dalit'=>'Dalit', 'Muslim'=>'Muslim', 'Tharu'=>'Tharu', 'Disadvantage'=>'Disadvantage', 'Brahmin/Chhetri'=>'Brahmin/Chhetri', 'Pahade'=>'Pahade', 'Others'=>'Others'], null, ['class'=>'form-control']) }}
                        </div>
                    </div>
    
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Gender<span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            {{Form::select('gender', [''=>'-- Select Gender --','Male'=>'Male','Female'=>'Female', 'Others'=>'Others'], null, ['class'=>'form-control']) }}
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Professional<span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            {{Form::select('professional', [''=>'-- Select Professional --', 'Govt official'=>'Govt official','Local leaders'=>'Local leaders', 'Youth leaders'=>'Youth leaders', 'Media persons'=>'Media persons', 'Civil society/NGO'=>'Civil society/NGO', 'Security'=>'Security', 'Court/Lawyers'=>'Court/Lawyers', 'Activists/human rights'=>'Activists/human rights', 'Others'=>'Others'], null, ['class'=>'form-control']) }}
                        </div>
                    </div>

                    <div class="ln_solid"></div>
                    <div class="form-group" >
                        <div class="col-md-6 col-sm-6
                         col-xs-12 col-md-offset-3">
                            <a href="{{ route('trainings.index') }}" class="btn btn-primary">Cancel</a>
                            {{-- <button class="btn btn-primary" type="reset">Reset</button> --}}
                            <button type="submit"  class="btn btn-success">Submit</button>
                        </div>
                    </div>


                {{-- </form> --}}
                {{Form::close()}}
            </div>
        </div>

    @endsection
