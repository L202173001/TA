@extends('layouts.backend')

@section('title','Symptoms Data')

@section('content')
    <div class="main">
    <div class="main-content">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-12">
							<!-- BASIC TABLE -->
							<div class="panel">
							<div class="panel-heading">
								<h3 class="panel-title"><b>Symptoms Data</b></h3>
								<div class="right">
									<a href="{{ route('symptoms.add') }}" class="btn btn-primary btn-sm">
										<span class="fa fa-plus"></span>	
									</a>
								</div>
							</div>
								<div class="panel-body">
									<table class="table">
										<thead>
											<tr>
												<th width="100px">No.</th>
												<th width="100px">Code</th>
												<th width="750px">Symptoms</th>
												<th>Action</th>
											</tr>
										</thead>
										<tbody>
											@foreach($symptoms as $no=>$symptom)
											<tr>
												<td>{{$symptoms->firstItem()+$no }}</td>
												<td>{{$symptom->symptoms_code}}</td>
												<td>{{$symptom->symptom}}</td>
												<td>
												<!-- /symptoms/{{$symptom->symptoms_code}}/delete -->
													<!-- <form action="#" method="post">
														<a href="/editSymptoms/{{ $symptom->symptoms_code }}" class="btn btn-warning btn-sm">
															<span class="far fa-edit"></span>
														</a>
														@method('delete')
														@csrf
														<button type='submit' class='btn btn-danger btn-sm delete' symptom_code="{{$symptom->symptoms_code}}">
														<span class="far fa-trash-alt"></span></button>
													</form> -->
													<a href="{{ route('symptoms.edit', ['symptom'=>$symptom->symptoms_code]) }}" class="btn btn-warning btn-sm">
															<span class="far fa-edit"></span>
													</a>
													@method('delete')	
													@csrf
													<a href="#" class="btn btn-danger btn-sm delete" symptom_code="{{ $symptom->symptoms_code }}">
														<span class="far fa-trash-alt"></span>
													</a>
												</td>
											</tr>
											@endforeach
										</tbody>
									</table>
									{{$symptoms->links()}}
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
			var symptom_code = $(this).attr('symptom_code');
			swal({
				title: "Are you sure?",
				text: "Are you sure you want to delete symptom data with ID "+symptom_code+" ?",
				icon: "warning",
				buttons: true,
				dangerMode: true,
				})
				.then((willDelete) => {
					console.log(willDelete);
					if (willDelete) {
						url = "{{ route('symptoms.destroy',['symptom'=>":id"]) }}";
						url = url.replace(':id', symptom_code);
						window.location = url;
					}
			});
		});
	</script>

@endsection