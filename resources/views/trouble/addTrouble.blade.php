@extends('layouts.backend')

@section('title','Add Troubles Data')

@section('content')
        <div class="main">
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-12">
                        <div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title"><b>Add Trouble Data</b></h3>
								</div>
								<div class="panel-body">
								<form action="{{ route('trouble.store') }}" method="post">
     							@csrf
								 	<label for="troubles_code" class="form-label">Code</label>
                                    <input type="text" name="troubles_code" id="troubles_code" class="form-control @error('troubles_code') is-invalid @enderror" value="{{ old('troubles_code') }}" placeholder="Troubles Code">
                                	@error('troubles_code')<div class="invalid-feedback" >{{ $message }}</div>@enderror
									<br>
									<label for="trouble" class="form-label">Troubles</label>
									<input type="text" name="trouble" id="trouble" class="form-control @error('trouble') is-invalid @enderror" value="{{ old('trouble') }}" placeholder="Troubles">
                                	@error('trouble')<div class="invalid-feedback" >{{ $message }}</div>@enderror
									<br>
                                    <label for="solution" class="form-label">Solutions</label>
                                    <textarea name="solution" id="solution" class="form-control @error('solution') is-invalid @enderror" value="{{ old('solution') }}" placeholder="Solutions">{{ old('solution') }}</textarea>
                                	@error('solution')<div class="invalid-feedback" >{{ $message }}</div>@enderror
									<br>
									<button type="submit" class="btn btn-primary">Add Troubles Data</button>
								</form>
								</div>
							</div>
                        </div>
					</div>
				</div>
			</div>
			<!-- END MAIN CONTENT -->
		</div>
@endsection