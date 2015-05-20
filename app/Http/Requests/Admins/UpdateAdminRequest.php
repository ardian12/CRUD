<?php namespace App\Http\Requests\Admins;

use App\Http\Requests\Request;

class UpdateAdminRequest extends Request {

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		return [
			'aktivitas' => 'required',
			'deskripsi' => 'required',
			'tgl_dead' => 'required',
			'status' => 'required',
		];
	}

}
