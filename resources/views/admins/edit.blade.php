@extends('layouts.master')

@section('content')

    <div class="panel panel-default">
        <div class="panel-heading">
            Edit Admin
            <div class="panel-nav pull-right" style="margin-top: -7px;">
                <a href="{!! route('admins.index') !!}" class="btn btn-default">Back</a>
            </div>
        </div>
        <div class="panel-body">
            @include('admins.form', ['model' => $admin])
        </div>
    </div>

@stop