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
								<h3 class="panel-title"><b>Rule Data</b></h3>
								<div class="right">
							</div>
							</div>
								<div class="panel-body">
									<table class="table">
										<thead>
											<tr>
												<th>No.</th>
												<th>Trouble</th>
												<th>Action</th>
											</tr>
										</thead>
										<tbody>
										@foreach($troubles as $no=>$trbl)
										<tr>
											<td>{{ ++$no }}</td>
											<td>{{$trbl->troubles_code}} - {{$trbl->trouble}}</td>
											<td>
												<a href="{{ route('rule.detail', ['trouble'=>$trbl->troubles_code]) }}" class="btn btn-success btn-sm">
													<span class="fa fa-cog"></span>
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
@endsection