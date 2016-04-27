@extends('app')

@section('content')

<center>
<h4>Language</h4>
</center>
<table style="margin:15px">
	<thead>
		<tr>
			<td>Country ID</td>
			<td>Country Name</td>
			<td>Country AreaCode</td>
		</tr>
	</thead>
	<tbody>
		@foreach($data as $key)
		<tr>
			<td>{{$key->code}}</td>
			<td>{{$key->name_short}}</td>
			<td>{{$key->name_long}}</td>
		</tr>
		@endforeach
	</tbody>
</table>
@endsection