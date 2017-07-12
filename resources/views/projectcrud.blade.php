<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>Project Management</h2>
                <ul class="nav navbar-right panel_toolbox">
                    <li >
                    <form action="{!! route('project.create') !!}" >
                    {{ csrf_field() }}
                    <button class="btn btn-primary">Add New Project</button>
                    </form>
                </ul>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <table id="datatable" class="table table-striped table-bordered">
                    <thead>
                    <tr>
                        <th>S.N.</th>
                        <th>Project Code</th>
                        <th>Project Name</th>
                        <th>Donor Code</th>
                        <th>Partners</th>
                        <th>District</th>
                        <th>Signed Date</th>
                        <th>Total Budget</th>
                        <th>Action</th>
                    </tr>
                    </thead>

                    <tbody>
                    @foreach($projects as $key=>$project)

                    <tr>
                        <td> {{ $project->id }}</td>
                        <td> {{ $project->project_code }}</td>
                        <td> {{ $project->project_name }}</td>
                        <td> {{ $project->donor_code }}</td>
                        <td> {{ $project->partners }}</td>
                        <td> {{ $project->district }}</td>
                        <td> {{ $project->signed_date }}</td>
                        <td> NPR {{ $project->total_budget }}</td>
                        <td>
                        {{--<a href=" {{ route('project.edit') }}" class="btn btn-primary btn-lg">--}}
                            {{ link_to_route('project.edit','',[$project->id],['class'=>'btn btn-primary btn-sm  glyphicon glyphicon-edit']) }}
                        {{--<span class="glyphicon glyphicon-edit"></span>--}}
                        {{--</a>--}}
                        {{Form::open(['route'=>['project.destroy', $project->id] , 'method'=>'DELETE', 'class'=>'form-inline' ])}}
                            <a href="javascript:void(0);" class=" test btn btn-danger btn-sm submit"><span class="glyphicon glyphicon-remove"></span></a>
                        {{Form::close()}}
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>