@extends('app')
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="panel panel-default">
          <div class="panel-heading">
            Clients
            {!! link_to_route('client.create', 'Create Client', [], ['class' => 'btn btn-success btn-xs pull-right']) !!} 
          </div>
          <div class="panel-body">
            <table class="table table-hover">
              <thead>
                <tr>   
                  <div class="row">
                    <th class="col-md-4">Full Name</th>
                    <th class="col-md-4">Email Address</th>
                    <th class="col-md-3">Phone</th>
                    <th class="col-md-1">Action</th>
                  </div>
                </tr>
              </thead>       
              <tbody>
                @foreach($clients as $client)
                  <tr>
                    <td>{{ $client->name }}</td>
                    <td>{{ $client->email }}</td>
                    <td>{{ $client->phone }}</td>
                    <td>
                      <div class="btn-group btn-group-xs">
                        {!! link_to_route('client.edit', 'Edit', [$client->id], ['class' => 'btn btn-primary btn-xs']) !!}
                        {!! link_to_route('client.delete', 'Delete', [$client->id], ['class' => 'btn btn-danger btn-xs']) !!}
                      </div>
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
