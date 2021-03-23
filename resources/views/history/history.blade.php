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
								<h3 class="panel-title"><b>Troubleshoot History</b></h3>
							</div>
								<div class="panel-body">
									<table class="table">
										<thead>
											<tr>
												<th>No.</th>
												<th>Name</th>
												<th>Phone Number</th>
                                                <th>Troubleshoot Result</th>
												<th>Action</th>
											</tr>
										</thead>
										<tbody>
										@foreach($results as $no=>$result)
											<tr>
												<td>{{$results->firstItem()+$no }}</td>
												<td>{{$result->name}}</td>
												<td>{{$result->phone_number}}</td>
												@if(isset($result->Trouble->trouble))
												<td>{{$result->Trouble->trouble}}</td>
												@else
												<td>No information was found.
												@endif
												<td>
											
												<a href="{{ route('history.detail', ['result'=>$result->id])}}" class="btn btn-success btn-sm">
													<span class="fa fa-cog"></span>
												</a>
												@method('delete')	
												@csrf
												<a href="#" class="btn btn-danger btn-sm delete" result_id ="{{ $result->id }}">
													<span class="far fa-trash-alt"></span>
												</a>
												</td>
											</tr>
										@endforeach
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
@stop

@section('footer')
	<script>
		$('.delete').click(function(){
			var result_id = $(this).attr('result_id');
			swal({
				title: "Are you sure?",
				text: "Are you sure you want to delete symptom data with ID "+result_id+" ?",
				icon: "warning",
				buttons: true,
				dangerMode: true,
				})
				.then((willDelete) => {
					console.log(willDelete);
					if (willDelete) {
						url = "{{ route('history.destroy',['result'=>":id"]) }}";
						url = url.replace(':id', result_id);
						window.location = url;
					}
			});
		});
	</script>

@endsection