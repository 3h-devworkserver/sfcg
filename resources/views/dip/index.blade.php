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
                    <th>ID</th>
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

        <div class="row">
            <div class="col-sm-4">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Age Group</h2>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <table class="table table-striped table-bordered">
                            <tr>
                                <th>Age-Group</th>
                                <th>Male</th>
                                <th>Female</th>
                                <th>Total</th>
                            </tr>
                            <tr>
                                <th>Below 15</th>
                                <td>{{$maleBelow15}}</td>
                                <td>{{$femaleBelow15}}</td>
                                <td>{{$maleBelow15 + $femaleBelow15}} </td>
                            </tr>
                            <tr>
                                <th>15-29</th>
                                <td>{{$male15_29}}</td>
                                <td>{{$female15_29}}</td>
                                <td>{{$male15_29 + $female15_29 }}</td>
                            </tr>
                            <tr>
                                <th>30-45</th>
                                <td>{{$male30_45}}</td>
                                <td>{{$female30_45}}</td>
                                <td>{{$male30_45 + $female30_45}}</td>
                            </tr>
                            <tr>
                                <th>45-Above</th>
                                <td>{{$male45Above}}</td>
                                <td>{{$female45Above}}</td>
                                <td>{{$male45Above + $female45Above}}</td>
                            </tr>
                            <tr>
                                <th>Total</th>
                                <td>{{$maleBelow15 + $male15_29 + $male30_45 + $male45Above}}</td>
                                <td>{{$femaleBelow15 + $female15_29 + $female30_45 + $female45Above}}</td>
                                <td>{{$maleBelow15 + $femaleBelow15 + $male15_29 + $female15_29 + $male30_45 + $female30_45 + $male45Above + $female45Above}}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>

            <div class="col-sm-4">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Caste</h2>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <table class="table table-striped table-bordered">
                            <tr>
                                <th>Caste</th>
                                <th>Madhesi/Terai</th>
                                <th>Dalit</th>
                                <th>Muslim</th>
                                <th>Tharu</th>
                                <th>Disadvantage</th>
                                <th>Brahmin/Chhetri</th>
                                <th>Pahade</th>
                                <th>Others</th>
                                <th>Total</th>
                            </tr>
                            <tr>
                                <th>Below 15</th>
                                <td>{{$maleMadhesiTerai}}</td>
                                <td>{{$femaleMadhesiTerai}}</td>
                                <td>{{$maleMuslim}}</td>
                                <td>{{$femaleMuslim}}</td>
                                <td>{{$maleTharu}}</td>
                                <td>{{$femaleTharu}}</td>
                                <td>{{$maleDisadvantage}}</td>
                                <td>{{$femaleDisadvantage}}</td>
                                <td>{{$maleBrahminChhetri}}</td>
                                <td>{{$femaleBrahminChhetri}}</td>
                                <td>{{$malePahade}}</td>
                                <td>{{$femalePahade}}</td>
                                <td>{{$maleOthers}}</td>
                                <td>{{$femaleOthers}}</td>
                                <td>{{$maleBelow15 + $femaleBelow15}} </td>
                            </tr>
                            <tr>
                                <th>15-29</th>
                                <td>{{$male15_29}}</td>
                                <td>{{$female15_29}}</td>
                                <td>{{$male15_29 + $female15_29 }}</td>
                            </tr>
                            <tr>
                                <th>30-45</th>
                                <td>{{$male30_45}}</td>
                                <td>{{$female30_45}}</td>
                                <td>{{$male30_45 + $female30_45}}</td>
                            </tr>
                            <tr>
                                <th>45-Above</th>
                                <td>{{$male45Above}}</td>
                                <td>{{$female45Above}}</td>
                                <td>{{$male45Above + $female45Above}}</td>
                            </tr>
                            <tr>
                                <th>Total</th>
                                <td>{{$maleBelow15 + $male15_29 + $male30_45 + $male45Above}}</td>
                                <td>{{$femaleBelow15 + $female15_29 + $female30_45 + $female45Above}}</td>
                                <td>{{$maleBelow15 + $femaleBelow15 + $male15_29 + $female15_29 + $male30_45 + $female30_45 + $male45Above + $female45Above}}</td>
                            </tr>
                        </table>
                    </div>
                </div>

            </div>

            <div class="col-sm-4">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Professional</h2>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>

        </div>
       

@endsection
