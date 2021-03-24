@extends('layouts.backend')

@section('title','Admin Dashboard')

@section('content')
    <!-- MAIN -->
		<div class="main">
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
					<!-- OVERVIEW -->
					<div class="panel panel-headline">
						<div class="panel-heading">
							<h3 class="panel-title">Dashboard</h3>
						</div>
						<div class="panel-body">
							<div class="row">
								<div class="col-md-3">
									<div class="metric">
										<span class="icon"><i class="fa fa-list"></i></span>
										<p>
											<span class="number">{{ $symptom }}</span>
											<span class="title">Symptoms</span>
										</p>
									</div>
								</div>
								<div class="col-md-3">
									<div class="metric">
										<span class="icon"><i class="fa fa-dice-six"></i></span>
										<p>
											<span class="number">{{ $trouble }}</span>
											<span class="title">Troubles</span>
										</p>
									</div>
								</div>
								<div class="col-md-3">
									<div class="metric">
										<span class="icon"><i class="fa fa-code"></i></span>
										<p>
											<span class="number">{{ $rule }}</span>
											<span class="title">Rule</span>
										</p>
									</div>
								</div>
								<div class="col-md-3">
									<div class="metric">
										<span class="icon"><i class="fa fa-database	"></i></span>
										<p>
											<span class="number">{{ $history }}</span>
											<span class="title">History</span>
										</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- END OVERVIEW -->
						</div>
					</div>
				</div>
			</div>
			<!-- END MAIN CONTENT -->
		</div>
		<!-- END MAIN -->
@endsection