@extends('layouts.master')

@section('content')
  <div class="panel panel-default">
	<div class="panel-heading">
		All Admins
		<div class="panel-nav pull-right" style="margin-top: -7px;">
			<a href="{!! route('admins.create') !!}" class="btn btn-default">Add New</a>
		</div>
	</div>
	<table class="table table-stripped table-bordered">
		<thead>
			<th class="text-center">#</th>
			<th>Aktivitas</th>
			<th>Deskripsi</th>
			<th>Tgl_dead</th>
			<th>Status</th>

			<th>Created At</th>
			<th class="text-center">Action</th>
		</thead>
		<tbody>
			@foreach ($admins as $admin)
				<tr>
					<td class="text-center">{!! $no !!}</td>
					<td>{!! $admin->aktivitas !!}</td>
					<td>{!! $admin->deskripsi !!}</td>
					<td>{!! $admin->tgl_dead !!}</td>
					<td>{!! $admin->status !!}</td>
		
					<td>{!! $admin->created_at !!}</td>
					<td class="text-center">
						<div class="btn-group">
							{!! Form::open(['method' => 'DELETE', 'route' => ['admins.destroy', $admin->id]]) !!}
							<a href="{!! route('admins.show', $admin->id) !!}" class="btn btn-sm btn-default" title="View" data-toggle="tooltip"><i class="glyphicon glyphicon-eye-open"></i></a>
							<a href="{!! route('admins.edit', $admin->id) !!}" class="btn btn-sm btn-default" title="Edit" data-toggle="tooltip"><i class="glyphicon glyphicon-edit"></i></a>
							<button type="submit" class="btn btn-sm btn-default" title="Delete" data-toggle="tooltip"><i class="glyphicon glyphicon-trash"></i></button>
							{!! Form::close() !!}
						</div>
					</td>
				</tr>
				<?php $no++; ?>
			@endforeach
		</tbody>
	</table>
	<div class="panel-footer">
		<div class="text-center">{!! $admins !!}</div>
	</div>
</div>
@stop