@extends('layouts.master')

@section('content')
    <div class="x_panel">
        <div class="x_title">
            <h2>Staff Management</h2>
            <ul class="nav navbar-right panel_toolbox">
                <li >
                    <form action="{!! route('staffs.create') !!}" >
                    <button class="btn btn-primary">Add New Staff</button>
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
                    <th>Joined Date</th>
                    <th>Designation</th>
                    <th>Salary</th>
                    <th>Assigned Project</th>
                    <th>Created At</th>
                    <th>Updated At</th>
                    <th>Action</th>
                </tr>
                </thead>

                <tbody>
                @foreach($staffs as $staff)

                <tr>
                    <td> {{ $staff->id }}</td>
                    <td> {{ $staff->name }}</td>
                    <td> {{ $staff->address }}</td>
                    <td> {{ $staff->contact_no }}</td>
                    <td> {{ $staff->email }}</td>
                    <td> {{ $staff->joined_date }}</td>
                    <td> {{ $staff->designation }}</td>
                    <td> NPR {{ $staff->salary }}</td>
                    <td> {{ $staff->project->project_name }}</td>
                    <td> {{ $staff->created_at }}</td>
                    <td> {{ $staff->updated_at }}</td>
                    <td>
                        {{ link_to_route('staffs.edit','',[$staff->id],['class'=>'btn btn-primary btn-sm glyphicon glyphicon-edit']) }}
                    {{Form::open(['route'=>['staffs.destroy', $staff->id] , 'method'=>'DELETE', 'class'=>'form-inline' ])}}
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
