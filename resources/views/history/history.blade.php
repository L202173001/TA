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
											<td></td>
											<td></td>
											<td></td>
											<td></td>
											<td>
												<a href="{{ route('history.detail') }}" class="btn btn-success btn-sm">
													<span class="fa fa-cog"></span>
												</a>
											</td>
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