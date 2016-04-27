@extends('app')

@section('content')
<center>
<h4>Currency</h4>
</center>
<table style="margin:15px">
	<thead>
		<tr>
			<td>Code</td>
			<td>Name</td>
		</tr>
	</thead>
	<tbody>
		@foreach($data as $key)
		<tr>
			<td>{{$key->code}}</td>
			<td>{{$key->name}}</td>
		</tr>
		@endforeach
	</tbody>
</table>
@endsection