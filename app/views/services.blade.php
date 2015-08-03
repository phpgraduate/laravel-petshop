@extends('main')

@section('content')
<h2>Services: </h2><div style="float:right;">{{ HTML::linkRoute('service.add','Add New') }}</div>
	<table class="table">
		<tr>
			<th>Service Name</th>
			<th>Pet Types</th>
			<th>Action</th>
		</tr>
		@foreach($services as $service)
			<tr>
			
			<td>{{ $service->name }}</td>
			<td>
				@foreach($service->pets as $pet)
					{{ $pet->name }} <br/>
				@endforeach
			</td>
			<td>{{ HTML::linkRoute('service.edit','Update Pets',$service->id) }}&nbsp;|&nbsp;{{ HTML::linkRoute('service.delete','Delete',$service->id) }}</td>
		</tr>
		@endforeach
	</table>
@stop