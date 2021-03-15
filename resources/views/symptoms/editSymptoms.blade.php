@extends('layouts.backend')

@section('title','Edit Symptoms Data')

@section('content')
        <div class="main">
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-12">
                        <div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title"><b>Edit Symptoms </b></h3>
								</div>
								<div class="panel-body">
								<form action="{{ route('symptoms.update', ['symptom'=>$symptom->symptoms_code]) }}" method="post">
                                @method('patch')
     							@csrf
								 	<label for="symptoms_code" class="form-label"> Code </label>
									<input type="text" name="symptoms_code" id="symptoms_code" class="form-control @error('symptoms_code') is-invalid @enderror" value="{{ $symptom->symptoms_code }}" placeholder="Symptoms Code">
                                	@error('symptoms_code')<div class="invalid-feedback" >{{ $message }}</div>@enderror
									<br>
									<label for="symptom" class="form-label"> Symptoms</label>
									<input type="text" name="symptom" id="symptom" class="form-control @error('symptom') is-invalid @enderror" value="{{ $symptom->symptom }}" placeholder="Symptoms">
                                	@error('symptom')<div class="invalid-feedback" >{{ $message }}</div>@enderror
									<br>
									<button type="submit" class="btn btn-primary">Edit Symptoms Data</button>
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