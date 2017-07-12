@extends('layouts.master')

@section('content')
    <div class="x_panel">
        <div class="x_title">
            <h2>Training Participation Management</h2>
            <ul class="nav navbar-right panel_toolbox">
                <li >
                    <form action="{!! route('trainings.create') !!}" >
                    {{ csrf_field() }}
                    {{-- <a href="{!! route('trainings.create') !!}" class="btn btn-primary">Add New training</a> --}}
                    <button class="btn btn-primary">Add New training Participation</button>
                    </form>
                </li>
            </ul>
            <div class="clearfix"></div>
        </div>
        <div class="x_content">
            <table id="datatable" class="table table-striped table-bordered">
                <thead>
                <tr>
                    <th>S.N.</th>
                    <th>Name</th>
                    <th>Age Group</th>
                    <th>Caste</th>
                    <th>Gender</th>
                    <th>Professional</th>
                    <th>Created At</th>
                    <th>Updated At</th>
                    <th>Action</th>
                </tr>
                </thead>

                <tbody>
                @foreach($trainings as $key=>$training)

                <tr>
                    <td> {{ $training->id }}</td>
                    <td> {{ $training->name }}</td>
                    <td> {{ $training->age_group }}</td>
                    <td> {{ $training->caste }}</td>
                    <td> {{ $training->gender }}</td>
                    <td> {{ $training->professional }}</td>
                    <td> {{ $training->created_at }}</td>
                    <td> {{ $training->updated_at }}</td>
                    <td>
                    {{--<a href=" {{ route('training.edit') }}" class="btn btn-primary btn-lg">--}}
                        {{ link_to_route('trainings.edit','',[$training->id],['class'=>'btn btn-primary btn-sm glyphicon glyphicon-edit']) }}
                    {{--<span class="glyphicon glyphicon-edit"></span>--}}
                    {{--</a>--}}
                    {{Form::open(['route'=>['trainings.destroy', $training->id] , 'method'=>'DELETE', 'class'=>'form-inline' ])}}
                        <a href="javascript:void(0);" class="btn btn-danger btn-sm submit"><span class="glyphicon glyphicon-remove"></span></a>
                    {{Form::close()}}
                    {{-- <a href="#"  class="btn btn-danger btn-lg">
                    <span class="glyphicon glyphicon-remove"></span>
                    </a> --}}
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
