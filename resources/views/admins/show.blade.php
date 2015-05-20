@extends('layouts.master')

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
            Show Admin
            <div class="panel-nav pull-right" style="margin-top: -7px;">
                <a href="{!! route('admins.edit', $admin->id) !!}" class="btn btn-default">Edit</a>
                <a href="{!! route('admins.index') !!}" class="btn btn-default">Back</a>
            </div>
        </div>
        <table class="table table-stripped table-bordered">
            <tr>
                <td><b>ID</b></td>
                <td>{!! $admin->id !!}</td>
            </tr>

			<tr>
                <td><b>Aktivitas</b></td>
                <td>{!! $admin->aktivitas !!}</td>
            </tr>			<tr>
                <td><b>Deskripsi</b></td>
                <td>{!! $admin->deskripsi !!}</td>
            </tr>			<tr>
                <td><b>Tgl_dead</b></td>
                <td>{!! $admin->tgl_dead !!}</td>
            </tr>			<tr>
                <td><b>Status</b></td>
                <td>{!! $admin->status !!}</td>
            </tr>

            <tr>
                <td><b>Created At</b></td>
                <td>{!! $admin->created_at !!}</td>
            </tr>
        </table>
    </div>
@stop