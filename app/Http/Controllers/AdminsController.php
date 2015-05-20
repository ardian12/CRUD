<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Admin;
use App\Http\Requests\Admins\CreateAdminRequest;
use App\Http\Requests\Admins\UpdateAdminRequest;

class AdminsController extends Controller {

	public function __construct()
	{
		//
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$admins = Admin::latest()->paginate(20);

		$no = $admins->firstItem();

		return view('admins.index', compact('admins', 'no'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('admins.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(CreateAdminRequest $request)
	{
		$admin = Admin::create($request->all());

		return redirect()->route('admins.index');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$admin = Admin::findOrFail($id);

		return view('admins.show', compact('admin'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$admin = Admin::findOrFail($id);
	
		return view('admins.edit', compact('admin'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(UpdateAdminRequest $request, $id)
	{		
		$admin = Admin::findOrFail($id);

		$admin->update($request->all());

		return redirect()->route('admins.index');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$admin = Admin::findOrFail($id);
		
		$admin->delete();
	
		return redirect()->route('admins.index');
	}

}
