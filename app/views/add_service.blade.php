@extends('main')

@section('content')
<h2>Services: </h2>
	{{ Form::open(['url' => '/service/save', 'method' => 'POST', 'autocomplete'=>'off']) }}
		<div class="form-group {{{ $errors->has('name') ? 'has-error' : '' }}}">
			<div class="col-md-12">
				<label class="control-label" for="name">Name</label>
				<div class="input-control">
					{{ Form::input('text', 'name', null, ['id'=>'name','class'=>'form-control']) }}
					{{ $errors->first('name', '<span class="help-block">:message</span>') }}
				</div>
			</div>
		</div>

		<div class="form-group {{{ $errors->has('pets') ? 'has-error' : '' }}}">
			<div class="col-md-12">
				<label class="control-label" for="pets">Pets</label>
				{{ Form::select('pets[]', $pets, null, ['multiple','class'=>'select2-multiple','id'=>'pets']) }}
				{{ $errors->first('pets', '<span class="help-block">:message</span>') }}
			</div>
		</div>
		<div class="form-actions text-right">
			<label class="col-sm-2 control-label"></label>
			<input type="submit" value="Save" class="btn btn-info">
		</div>
	{{ Form::close() }}
@stop