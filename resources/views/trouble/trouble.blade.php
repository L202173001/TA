@extends('layouts.backend')

@section('title','Troubles Data')

@section('content')
    <div class="main">
    <div class="main-content">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-12">
							<!-- BASIC TABLE -->
							<div class="panel">
							<div class="panel-heading">
								<h3 class="panel-title"><b>Trouble Data</b></h3>
								<div class="right">
									<a href="{{ route('trouble.add') }}" class="btn btn-primary btn-sm">
										<span class="fa fa-plus"></span>	
									</a>
								</div>
							</div>
								<div class="panel-body">
									<table class="table">
										<thead>
											<tr>
												<th>No.</th>
												<th>Code</th>
												<th width='200px'>Trouble</th>
                                                <th width='600px'>Solutions</th>
												<th>Action</th>
											</tr>
											@foreach($troubles as $no=>$trbl)
											<tr>
												<td>{{$troubles->firstItem()+$no }}</td>
												<td>{{$trbl->troubles_code}}</td>
												<td>{{$trbl->trouble}}</td>
												<td>{{$trbl->solution}}</td>
												<td>
														<a href="{{ route('trouble.edit', ['trouble'=>$trbl->troubles_code]) }}" class="btn btn-warning btn-sm">
															<span class="far fa-edit"></span>
														</a>
														@method('delete')
														@csrf
														<a href="#" class="btn btn-danger btn-sm delete" trouble_code="{{$trbl->troubles_code}}">
														<span class="far fa-trash-alt"></span>
														</a>
												</td>
											</tr>
											@endforeach
										</thead>
										<tbody>
											
										</tbody>
									</table>
									{{$troubles->links()}}
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
			var trouble_code = $(this).attr('trouble_code');
			swal({
				title: "Are you sure?",
				text: "Are you sure you want to delete trouble data with ID "+trouble_code+" ?",
				icon: "warning",
				buttons: true,
				dangerMode: true,
				})
				.then((willDelete) => {
					console.log(willDelete);
					if (willDelete) {
						url = "{{ route('trouble.destroy',['trouble'=>":id"]) }}";
						url = url.replace(':id', trouble_code);
						window.location = url;
					}
			});
		});
	</script>

@endsection