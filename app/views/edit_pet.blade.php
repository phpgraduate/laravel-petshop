@extends('main')

@section('content')
<h2>Pets: </h2>
	{{ Form::model($pet, ['method' => 'PATCH', 'action' => ['PetsController@updatePet', $pet->id]]) }}
		<div class="form-group {{{ $errors->has('name') ? 'has-error' : '' }}}">
			<div class="col-md-12">
				<label class="control-label" for="name">Name</label>
				<div class="input-control">
					{{ Form::input('text', 'name', null, ['id'=>'name','class'=>'form-control', 'readonly']) }}
					{{ $errors->first('name', '<span class="help-block">:message</span>') }}
				</div>
			</div>
		</div>

		<div class="form-group {{{ $errors->has('services') ? 'has-error' : '' }}}">
			<div class="col-md-12">
				<label class="control-label" for="services">Services</label>
				{{ Form::select('services[]', $services, $pet->services()->lists('service_id'), ['multiple','class'=>'select2-multiple','id'=>'services']) }}
				{{ $errors->first('services', '<span class="help-block">:message</span>') }}
			</div>
		</div>
		<div class="form-actions text-right">
			<label class="col-sm-2 control-label"></label>
			<input type="submit" value="Save" class="btn btn-info">
		</div>
	{{ Form::close() }}
@stop
