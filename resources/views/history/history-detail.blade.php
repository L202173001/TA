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
									        <tr>
                                                <td width="15%"><b>Name</b></td>
                                                <td width="1%">:</td>
                                                <td class="result"></td>
                                            </tr>
                                            <tr>
                                                <td><b>Phone</b></td>
                                                <td>:</td>
                                                <td class="result"></td>
                                            </tr>
                                            <tr>
                                                <td><b>Selected Symptoms</b></td>
                                                <td>:</td>
                                                <td class="result"></td>
                                            </tr>
                                            <tr>
                                                <td><b>Result</b><br><i>Forward Chaining</i></td>
                                                <td>:</td>
                                                <td class="result"></td>
                                            </tr>
                                            <tr>
                                                <td><b>Solutions</b></td>
                                                <td>:</td>
                                                <td class="result"></td>
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