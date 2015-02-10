<?php namespace App\Http\Controllers;

// Client Module - Suresh

use App\Client;
use App\Http\Requests\ClientStoreRequest;
use App\Http\Requests\ClientUpdateRequest;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class ClientController extends Controller {

	public function __construct(Client $client, Request $request) {
		$this->client = $client;
		$this->request = $request;
	}

	public function index()
	{
		$clients = $this->client->all();
		return view('client.index', compact('clients'));
	}

	public function create()
	{
		return view('client.create');
	}

	public function store(ClientStoreRequest $request)
	{
		$client = new $this->client;
		$client->name = $request->input('full_name');
		$client->email = $request->input('email_address');
		$client->phone = $request->input('phone_number');
		$client->save();
		return redirect()->route('client.index');
	}

	public function edit($id)
	{
		$client = $this->client->find($id);
		return view('client.edit', compact('client'));
	}

	public function update(ClientUpdateRequest $request, $id)
	{
		$client = $this->client->find($id);
		$client->name = $request->input('full_name');
		$client->email = $request->input('email_address');
		$client->phone = $request->input('phone_number');
		$client->save();
		return redirect()->route('client.index');
	}

	public function delete($id)
	{
		$client = $this->client->find($id);
		return view('client.delete', compact('client'));
	}

	public function destroy($id) {
		$client = $this->client->find($id);
		$client->delete();
		return redirect()->route('client.index');
	}
}
