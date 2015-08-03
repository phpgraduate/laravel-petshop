@extends('main')

@section('content')
<h2>Pets: </h2><div style="float:right;">{{ HTML::linkRoute('pet.add','Add New') }}</div>
	<table class="table">
		<tr>
			<th>Pet Type</th>
			<th>Services</th>
			<th>Action</th>
		</tr>
		
		@foreach($pets as $pet)
			<tr>			
			<td>{{ $pet->name }}</td>
			<td>
				@foreach($pet->services as $service)
					{{ $service->name }} <br/>
				@endforeach
			</td>
			<td>{{ HTML::linkRoute('pet.edit','Update Services',$pet->id) }}&nbsp;|&nbsp;{{ HTML::linkRoute('pet.delete','Delete',$pet->id) }}</td>
		</tr>
		@endforeach
		
	</table>
@stop