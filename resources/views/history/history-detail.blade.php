@extends('layouts.backend')

@section('title','Troubleshoot History Data')

@section('content')
    <div class="main">
    <div class="main-content">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-12">
							<!-- BASIC TABLE -->
							<div class="panel">
							<div class="panel-heading">
								<h3 class="panel-title">Troubleshoot History</h3>
							</div>
								<div class="panel-body">
									<table class="table">
                  <thead>
									        <tr>
                                                <td width="15%"><b>Name</b></td>
                                                <td width="1%">:</td>
                                                <td class="result">{{$result->name}}</td>
                                            </tr>
                  </thead>
                                            <tr>
                                                <td><b>Phone</b></td>
                                                <td>:</td>
                                                <td class="result">{{$result->phone_number}}</td>
                                            </tr>
                                            @foreach ($result->History as $item)
                                              @if ($loop -> first)
                                                <tr>
                                                  <td><b>Selected Symptoms</b></td>
                                                  <td>:</td>
                                                  <td class="result">{{ $item -> SymptomCode -> symptoms_code }} - {{ $item -> SymptomCode -> symptom }}</td>
                                                </tr>
                                              @else
                                                <tr>
                                                  <td></td>
                                                  <td></td>
                                                  <td class="result">{{ $item -> SymptomCode -> symptoms_code }} - {{ $item -> SymptomCode -> symptom }}</td>
                                                </tr>
                                              @endif
                                            @endforeach
                                            <tr>
                                                <td><b>Result</b><br><i>Forward Chaining</i></td>
                                                <td>:</td>
                                                @if(isset($result->Trouble->trouble))
												<td class="result">{{$result->Trouble->trouble}}</td>
												@else
												<td class="result">No information was found.
												@endif
                                            </tr>
                                            <tr>
                                                <td><b>Solutions</b></td>
                                                <td>:</td>
                                                @if(isset($result->Trouble->solution))
												<td class="result">{{$result->Trouble->solution}}</td>
												@else
												<td class="result">No information was found.
												@endif
                                            </tr>	
									</table>
								</div>
							</div>
							<!-- END CONDENSED TABLE -->
						</div>
					</div>
				</div>
			</div>
			<!-- END MAIN CONTENT -->
		</div>
@endsection