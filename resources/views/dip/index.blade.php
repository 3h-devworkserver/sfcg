@extends('layouts.master')

@section('content')

    <div class="x_panel">
        <div class="x_title">
            <h2>DIP Management</h2>
            <ul class="nav navbar-right panel_toolbox">
                <li >
                    <form action="{!! route('dip.create') !!}" >
                    {{ csrf_field() }}
                    {{-- <a href="{!! route('trainings.create') !!}" class="btn btn-primary">Add New training</a> --}}
                    <button class="btn btn-primary">Add New DIP</button>
                    </form>
                </li>
            </ul>
            <div class="clearfix"></div>
        </div>
        <div class="x_content">
            <table id="datatable" class="table table-striped table-bordered">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Name of the activities</th>
                    <th>Activity type</th>
                    <th>Implementation date</th>
                    <th>Action</th>
                   
                </tr>
                </thead>

                <tbody>
                @foreach($posts as $p)

                <tr>
                    <td> {{ $p->id }}</td>
                    <td> {{ $p->name }}</td>
                    <td> {{ $p->act_type }}</td>
                    <td> {{ $p->imp_date}}</td>
                    
                    <td>
                    {{--<a href=" {{ route('training.edit') }}" class="btn btn-primary btn-lg">--}}
                        {{-- {{ link_to_route('dip.edit','',[$p->id],['class'=>'btn btn-primary btn-sm glyphicon glyphicon-edit']) }} --}}
                    {{--<span class="glyphicon glyphicon-edit"></span>--}}
                    {{--</a>--}}
                    {{Form::open(['route'=>['dip.destroy', $p->id] , 'method'=>'DELETE', 'class'=>'form-inline' ])}}
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
