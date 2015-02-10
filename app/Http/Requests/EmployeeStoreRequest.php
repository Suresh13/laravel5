<?php namespace App\Http\Requests;

class EmployeeStoreRequest extends Request {
    public function authorize()
    {
        return true;
    }
    public function rules()
    {
        return [
            'name' => 'required',
            'phone_number' => 'required',
        ];
    }
    public function sanitize()
    {
        return $this->all();
    }
}
