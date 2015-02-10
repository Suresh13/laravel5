@extends('app')
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="panel panel-default">
          <div class="panel-heading">
            {!! link_to_route('client.index', 'Clients') !!} <span class="text-muted">/ Create Client</span>
          </div>
          <div class="panel-body">
            <div class="col-md-8 col-md-offset-2">
              {!! Form::open(['route' => ['client.store'], 'method' => 'POST']) !!}
                <div class="form-group">
                  {!! Form::label('full_name', 'Full Name') !!}
                  {!! Form::text('full_name', Input::old('full_name'), ['class' => 'form-control input-sm', 'placeholder' => 'Full Name']) !!}
                  {!! $errors->first('full_name', '<p class="text-danger"> :message</p>') !!}
                </div>
                <div class="form-group">
                  {!! Form::label('email_address', 'Email Address') !!}
                  {!! Form::email('email_address', Input::old('email_address'), ['class' => 'form-control input-sm', 'placeholder' => 'Email Address']) !!}
                  {!! $errors->first('email_address', '<p class="text-danger"> :message</p>') !!}
                </div>
                <div class="form-group">
                  {!! Form::label('phone_number', 'Phone Number') !!}
                  {!! Form::text('phone_number', Input::old('phone_number'), ['class' => 'form-control input-sm', 'placeholder' => 'Phone Number']) !!}
                  {!! $errors->first('phone_number', '<p class="text-danger"> :message</p>') !!}
                </div>
                <div class="row">
                  <div class="form-group col-md-3">
                    {!! Form::submit('Create', array('name'=>'Create', 'class' => 'btn btn-success btn-block btn-sm')) !!}
                  </div>
                  <div class="form-group col-md-3">
                    {!! Form::reset('Reset', array('class' => 'btn btn-info btn-block btn-sm')) !!}
                  </div>
                  <div class="form-group col-md-3 pull-right">
                    {!! link_to_route('client.index', 'Cancel', [], ['class' => 'btn btn-default btn-block btn-sm']) !!}
                  </div>
                </div>
              {!! Form::close() !!}
            </div>
        </div>
      </div>
    </div>
  </div>
@endsection
