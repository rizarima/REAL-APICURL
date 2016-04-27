@extends('app')

@section('content')
<table>
	<thead>
		<tr>
			<th>Code</th>
			<th>Name</th>
		</tr>
	</thead>
	<tbody>
		@foreach($data as $key)
			<tr>
				<td>{{$key->country_id}}</td>
				<td>{{$key->name_long}}</td>
				<td>{{$key->name_short}}</td>
			</tr>
		@endforeach
	</tbody>
</table>
@endsection