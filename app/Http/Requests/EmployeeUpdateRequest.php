<?php namespace App\Http\Requests;

class EmployeeUpdateRequest extends Request {
    public function authorize()
    {
        return true;
    }
    public function rules()
    {
        return [
            'name' => 'required',
            'phone' => 'required',
        ];
    }
    public function sanitize()
    {
        return $this->all();
    }
}
