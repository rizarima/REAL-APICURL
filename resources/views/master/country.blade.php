@extends('app')

@section('content')

<center>
<h4>Country</h4>
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
			<td>{{$key->country_id}}</td>
			<td>{{$key->country_name}}</td>
			<td>{{$key->country_areacode}}</td>
		</tr>
		@endforeach
	</tbody>
</table>
@endsection