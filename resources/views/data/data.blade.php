@extends('layouts.frontend')

@section('title','Expert Data')

@section('content')

	<div class="jumbotron text-center">
	<div class="container">
		<h1 class="display-4">Expert Data</h1>
	</div>	
	</div>
			<div class="container">
                <center>
                <h3>Symptoms Data</h3>
                <table class="table">
				    <thead> 
						<tr>
							<th>No.</th>
							<th>Code</th>
							<th>Symptoms</th>
						</tr>
					</thead>
					<tbody>
						@foreach($symptoms as $symptom)
						<tr>
							<td>{{ $loop->iteration }}</td>
							<td>{{$symptom->symptoms_code}}</td>
							<td>{{$symptom->symptom}}</td>
						</tr>
						@endforeach
					</tbody>
				</table>
				<h3>Trouble Data</h3>
                <table class="table">
				    <thead>
					<tr>
						<th>No.</th>
						<th>Code</th>
						<th>Trouble</th>
                        <th>Solutions</th>
					</tr>
					</thead>
					<tbody>
					@foreach($troubles as $trbl)
					<tr>
						<td>{{ $loop->iteration }}</td>
						<td>{{$trbl->troubles_code}}</td>
						<td>{{$trbl->trouble}}</td>
						<td>{{$trbl->solution}}</td>
					</tr>
					@endforeach
					</tbody>
				</table>
				<h3>Rule Data</h3>
                <table class="table">
				    <thead>
					<tr>
						<th>No.</th>
						<th>Trouble Code</th>
						<th>Trouble</th>
                        <th>Symptoms Code</th>
					</tr>
					</thead>
					<tbody>
					@foreach($vrules as $rules)
					<tr>
						<td>{{ $loop->iteration }}</td>
						<td>{{$rules->troubles_code}}</td>
						<td>{{$rules->trouble}}</td>
						<td>{{$rules->symptoms_code}}</td>
					</tr>
					@endforeach
					</tbody>
				</table>
				</center>
				</div>
                                    
@endsection