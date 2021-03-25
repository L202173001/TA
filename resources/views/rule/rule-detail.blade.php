@extends('layouts.backend')

@section('title','Rules Data')

@section('content')
    <div class="main">
    <div class="main-content">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-12">
							<!-- BASIC TABLE -->
							<div class="panel">
							<div class="panel-heading">
								<h3 class="panel-title"><b>Rule : {{ $trouble->trouble }}</b></h3>
								<div class="right">
                                    <a href="{{ route('rule.add', ['trouble'=>$troubles_code] ) }}" class="btn btn-primary btn-sm">
										<span class="fa fa-plus"></span>	
									</a>
								</div>
							</div>
								<div class="panel-body">
									<table class="table">
										<thead>
											<tr>
												<th>No.</th>
												<th>Symptom Code</th>
												<th>Symptoms</th>
												<th>Action</th>
											</tr>
										</thead>
										<tbody>
                                        @if($rules->isEmpty())
                                            <tr>
                                                <td colspan="4" align="center">The Rule is Empty</td>
                                            </tr>
                                        @else
                                            @foreach ($rules as $no=>$rule)
											<tr>
												<td>{{ ++$no}}</td>
												<td>{{ $rule->symptom->symptoms_code }}</td>
												<td>{{ $rule->symptom->symptom }}</td>
												<td>
													<!-- <a href="{{ route('rule.edit', ['rule'=>$rule->id]) }}" class="btn btn-warning btn-sm">
														<span class="far fa-edit"></span>
													</a> -->
													@method('delete')	
													@csrf
													<a href="#" class="btn btn-danger btn-sm delete" rule_id="{{ $rule->id }}" troubles_code="{{$rule->troubles_code}}">
														<span class="far fa-trash-alt"></span>
													</a>
												</td>
											</tr>
											@endforeach
                                        @endif
										</tbody>
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
@section('footer')
	<script>
		$('.delete').click(function(){
			var rule_id = $(this).attr('rule_id');
			var troubles_code = $(this).attr('troubles_code');
			swal({
				title: "Are you sure?",
				text: "Are you sure you want to delete rule data with ID "+rule_id+" ?",
				icon: "warning",
				buttons: true,
				dangerMode: true,
				})
				.then((willDelete) => {
					console.log(willDelete);
					if (willDelete) {
						url = "{{ route('rule.destroy',['trouble'=>":trouble",'rule'=>":id"]) }}";
						url = url.replace(':id', rule_id).replace(':trouble',troubles_code);
						window.location = url;
					}
			});
		});
	</script>

@endsection