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
                           {!! Form::open( array( 'route'=> 'post.store','files' => true,'accept-charset'=>'UTF-8','method'=>'POST', 'class'=>'form-horizontal' ) ) !!}
                                
                            <div class="form-group">
                                {!! Form::label('name','Name of the activities',array('class'=>'control-label col-md-3 col-sm-3 col-xs-12')) !!}
                                <div class="col-sm-12 col-md-12">
                                {!! Form::text('name', '' ,['class' => 'form-control'] ) !!}
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="sel1">Category</label>
                                <select class="form-control" id="sel1" name="category">
                                
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
                            <div class="form-group">
                                {!! Form::label('obj','Main objective',array('class'=>'control-label col-md-3 col-sm-3 col-xs-12')) !!}
                                <div class="col-sm-12 col-md-12">
                                {!! Form::text('obj', '' ,['class' => 'form-control'] ) !!}
                                </div>
                            </div>    
                                
                            <div class="form-group">
                                {!! Form::label('out','Expected outcomes',array('class'=>'control-label col-md-3 col-sm-3 col-xs-12')) !!}
                                <div class="col-sm-12 col-md-12">
                                {!! Form::text('out', '' ,['class' => 'form-control'] ) !!}
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