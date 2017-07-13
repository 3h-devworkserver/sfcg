@extends('layouts.master')

@section('content')
    <div class="x_panel">
        <div class="x_title">
            <h2>NGO Profile Management</h2>
            <ul class="nav navbar-right panel_toolbox">
                <li >
                    <form action="{!! route('ngo.create') !!}" >
                    {{ csrf_field() }}
                    {{-- <a href="{!! route('ngos.create') !!}" class="btn btn-primary">Add New ngo</a> --}}
                    <button class="btn btn-primary">Add New NGO Profile</button>
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
                    <th>Name</th>
                    <th>Address</th>
                    <th>Contact No</th>
                    <th>Email</th>
                    <th>Established At</th>
                    <th>Primary Project</th>
                    <th>Funded By</th>
                    <th>Created At</th>
                    <th>Updated At</th>
                    <th>Action</th>
                </tr>
                </thead>

                <tbody>
                @foreach($ngos as $ngo)

                <tr>
                    <td> {{ $ngo->id }}</td>
                    <td> {{ $ngo->name }}</td>
                    <td> {{ $ngo->address }}</td>
                    <td> {{ $ngo->contact_no }}</td>
                    <td> {{ $ngo->email }}</td>
                    <td> {{ $ngo->established_date }}</td>
                    <td> {{ $ngo->primary_project }}</td>
                    <td> {{ $ngo->funded_by }}</td>
                    <td> {{ $ngo->created_at }}</td>
                    <td> {{ $ngo->updated_at }}</td>
                    <td>
                        {{ link_to_route('ngo.edit','',[$ngo->id],['class'=>'btn btn-primary btn-sm glyphicon glyphicon-edit']) }}
                    {{Form::open(['route'=>['ngo.destroy', $ngo->id] , 'method'=>'DELETE', 'class'=>'form-inline' ])}}
                        <a href="javascript:void(0);" class="btn btn-danger btn-sm submit"><span class="glyphicon glyphicon-remove"></span></a>
                    {{Form::close()}}
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection
