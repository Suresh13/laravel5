@extends('app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading clearfix">
                        <h3 class="panel-title pull-left">Employees</h3>
                        {!! link_to_route('employee.create', 'Create', [], ['class' => 'btn btn-success pull-right']) !!}
                    </div>
                    <div class="panel-body">
                        <table class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>Phone</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($employees as $employee)
                                <tr>
                                    <td>{!! $employee->name !!}</td>
                                    <td>{!! $employee->phone !!}</td>
                                    <td class="action-col">
                                        {!! link_to_route('employee.edit', 'Edit', [$employee->id], ['class' => 'btn btn-info btn-xs']) !!}
                                        {!! link_to_route('employee.delete', 'Delete', [$employee->id], ['class' => 'btn btn-danger btn-xs']) !!}
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
