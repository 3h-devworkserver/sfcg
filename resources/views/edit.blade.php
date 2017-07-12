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
        <div class="">

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
                                    <h2>Add New Project <small>different form elements</small></h2>
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
                                            <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Donor Code</label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input name="donor_code" class="form-control col-md-7 col-xs-12" value="{{ $project->donor_code }}" type="text" name="middle-name">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Partners</label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input id="middle-name" value="{{ $project->partners }}" class="form-control col-md-7 col-xs-12" type="text" name="partners">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">District</label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input id="middle-name" value="{{ $project->district }}"class="form-control col-md-7 col-xs-12" type="text" name="district">
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
                                            <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Total Budget</label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input id="middle-name" class="form-control col-md-7 col-xs-12" value="{{ $project->total_budget }}" type="text" name="total_budget">
                                            </div>
                                        </div>
                                        <div class="ln_solid"></div>
                                        <div class="form-group" >
                                            <div class="col-md-6 col-sm-6
                                     col-xs-12 col-md-offset-3">
                                                {{--                                        {{ link_to_route('home','Cancel',null, ['class'=>'btn btn-primary']) }}--}}
                                                <a href="{{ url('home') }}" class="btn btn-primary">Cancel</a>
                                                <button class="btn btn-primary" type="reset">Reset</button>
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

        </div>
    </div>
    @include('partials.footer')

@endsection

@section('script')
    @include('partials.scripts.home')

@endsection