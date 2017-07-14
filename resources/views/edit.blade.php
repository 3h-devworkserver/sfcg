
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
                                    <h2>Edit Project </h2>
                                   
                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">
                                    <br />
                                    <form  data-parsley-validate class="form-horizontal form-label-left"  method="POST" action="{{ route('project.update',  $project->id  ) }}">
                                        {{ method_field('PATCH') }}
                                        {{ Form::hidden('id', $project->id) }}
                                        {{ csrf_field() }}
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Project Code <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input type="text" name="project_code" required="required" class="form-control col-md-7 col-xs-12" value="{{ $project->project_code }}">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Project Name <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input type="text" id="last-name" name="project_name" value="{{ $project->project_name }}" required="required" class="form-control col-md-7 col-xs-12">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Donor Code<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input name="donor_code" class="form-control col-md-7 col-xs-12" value="{{ $project->donor_code }}" type="text" name="middle-name" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Partners<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input id="middle-name" value="{{ $project->partners }}" class="form-control col-md-7 col-xs-12" type="text" name="partners" required>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Zone<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                {{Form::select('zone_id', $zones, $project->zone_id, ['placeholder'=>'-- Select Zone --','class'=>'form-control col-md-7 col-xs-12 zone', 'required'])}}
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">District<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <select class="form-control col-md-7 col-xs-12 district" name="district_id" data-district ="{{$project->district_id}}" required>
                                                    <option value="">-- Select District --</option>
                                                    @foreach($districts as $district)
                                                    <option class="hide" data-attr="{{$district->zone_id}}" value="{{$district->district_id}}">{{$district->district_name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Signed Date <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                {{--<input id="birthday" class="date-picker form-control col-md-7 col-xs-12" required="required" type="text">--}}
                                                <fieldset>
                                                    <div class="control-group">
                                                        <div class="controls">
                                                            {{--<div class="col-md-11 xdisplay_inputx form-group has-feedback">--}}
                                                            <input type="text" value="{{ $project->signed_date }}" name="signed_date" class="form-control has-feedback-left" id="single_cal4" aria-describedby="inputSuccess2Status4">
                                                            <span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span>
                                                            <span id="inputSuccess2Status4" class="sr-only">(success)</span>
                                                            {{--</div>--}}
                                                        </div>
                                                    </div>
                                                </fieldset>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Total Budget<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <div class="input-group">
                                                    <span class="input-group-addon">NPR</span>
                                                    {{ Form::input('number', 'total_budget',  $project->total_budget, ['step'=>'any', 'min'=>'1', 'placeholder'=>'Enter Total Budget', 'class' => 'form-control col-md-7 col-xs-12', 'required']) }}
                                                </div>
                                                {{-- <input id="middle-name" class="form-control col-md-7 col-xs-12" value="{{ $project->total_budget }}" type="text" name="total_budget"> --}}
                                            </div>
                                        </div>
                                        <div class="ln_solid"></div>
                                        <div class="form-group" >
                                            <div class="col-md-6 col-sm-6
                                     col-xs-12 col-md-offset-3">
                                                {{--                                        {{ link_to_route('home','Cancel',null, ['class'=>'btn btn-primary']) }}--}}
                                                <a href="{{ url('/project') }}" class="btn btn-primary">Cancel</a>
                                                {{-- <button class="btn btn-primary" type="reset">Reset</button> --}}
                                                <button type="submit"  class="btn btn-success">Submit</button>
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

        


