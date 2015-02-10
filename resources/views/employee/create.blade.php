@extends('app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                {!! Form::open(['route' => ['employee.store'], 'role' => 'form', 'class' => 'form-horizontal' ]) !!}
                <div class="panel panel-default">
                    <div class="panel-heading clearfix">
                        <h3 class="panel-title pull-left">Create Employee</h3>
                        {!! link_to_route('employee.index', 'Employees', [], ['class' => 'btn btn-primary pull-right']) !!}
                    </div>
                    <div class="panel-body">
                        @include('employee.form')
                    </div>
                    <div class="panel-footer">
                        <button class="btn btn-success">Create</button>
                        {!! link_to_route('employee.index', 'Cancel', [], ['class' => 'btn btn-default']) !!}
                    </div>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection