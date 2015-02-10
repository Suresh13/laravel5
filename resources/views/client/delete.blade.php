@extends('app')
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="panel panel-default">
          <div class="panel-heading">
           {!! link_to_route('client.index', 'Clients') !!} <span class="text-muted">/ Delete Client - {{$client->name}}</span>
          </div>
          <div class="panel-body">
            <div class="col-md-8 col-md-offset-2">
              {!! Form::open(['route' => ['client.destroy', $client->id], 'method' => 'DELETE']) !!}
                <p>Are you sure you want to delete this client record?</p>
                <dl class="dl-horizontal bg-warning">
                  <br>
                  <dt>Full Name</dt>
                  <dd>{{$client->name}}</dd>
                  <dt>Email Address</dt>
                  <dd>{{$client->email}}</dd>
                  <dt>Phone Number</dt>
                  <dd>{{$client->phone}}</dd>
                  <br>
                </dl>
                <div class="row">
                  <div class="form-group col-md-3">
                    {!! Form::submit('Delete', array('class' => 'btn btn-danger btn-block btn-sm')) !!}
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
