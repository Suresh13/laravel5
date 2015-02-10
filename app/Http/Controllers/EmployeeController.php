<?php namespace App\Http\Controllers;

use App\Employee;
use App\Http\Requests\EmployeeStoreRequest;
use App\Http\Requests\EmployeeUpdateRequest;
use Illuminate\Http\Request;
use Illuminate\Routing\ResponseFactory;

class EmployeeController extends Controller {

	protected $employee;
	protected $response;
	protected $request;

	public function __construct(Employee $employee, ResponseFactory $response, Request $request) {
		$this->employee = $employee;
		$this->response = $response;
		$this->request = $request;
	}

	public function index() {
		$employees = $this->employee->all();
		return view('employee.index', compact('employees'));
	}

	public function create() {
		return view('employee.create');
	}
	public function store(EmployeeStoreRequest $request) {

		// Above EmployeeStoreRequest is added for validate the request.
		// You can create these request validation classes in App\Http\Requests
		// Name of the file and class is: <ModuleName><ActionName>Request
		// You can add the fields are to be validated inside rules array
		//For more information see http://laravel.com/docs/5.0/validation

		$employee = new $this->employee;
		$employee->name = $request->input('name');
		$employee->phone = $request->input('phone');
		$employee->save();
		return redirect()->route('employee.index');
	}
	public function edit($id) {
		$employee = $this->employee->find($id);
		return view('employee.edit', compact('employee'));
	}
	public function update(EmployeeUpdateRequest $request, $id) {

		$employee = $this->employee->find($id);
		$employee->name = $request->input('name');
		$employee->phone = $request->input('phone');
		$employee->save();
		return redirect()->route('employee.index');
	}
	public function delete($id) {
		$employee = $this->employee->find($id);
		return view('employee.delete', compact('employee'));
	}
	public function destroy($id) {
		$employee = $this->employee->find($id);
		$employee->delete();
		return redirect()->route('employee.index');
	}
}