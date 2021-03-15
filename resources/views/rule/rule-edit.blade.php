@extends('layouts.backend')

@section('title','Add Symptoms Data')

@section('content')
        <div class="main">
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-12">
                        <div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title"><b>Edit Rule Data</b></h3>
								</div>
								<div class="panel-body">
								<form action="{{ route('rule.update', ['rule'=>$rule->id]) }}" method="post">
     							@csrf
								 	<label class="form-label"> Trouble</label>
                                    <input type="text" class="form-control @error('troubles_code') is-invalid @enderror" value="{{$rule->trouble->troubles_code}} - {{$rule->trouble->trouble}}" disabled>
                                    <input type="hidden" name="troubles_code" value="{{ $rule->troubles_code }}">
                                    @error('troubles_code')<div class="invalid-feedback" >{{ $message }}</div>@enderror
                                    <br>
                                    <label for="symptoms_code" class="form-label"> Symptom Code </label>
                                    <select name="symptoms_code" id="symptoms_code" class="form-control @error('symptoms_code') is-invalid @enderror">
                                        @foreach ($symptoms as $symp)
                                            @if ($symp->symptoms_code == $rule->symptoms_code)
                                                <option value="{{$symp->symptoms_code}}" selected>{{$symp->symptoms_code}} - {{ $symp->symptom }}</option>
                                            @else
                                                <option value="{{$symp->symptoms_code}}">{{$symp->symptoms_code}} - {{ $symp->symptom }}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                    @error('symptoms_code')<div class="invalid-feedback" >{{ $message }}</div>@enderror
									<!-- <input type="text" name="symptoms_code" id="symptoms_code" class="form-control @error('symptoms_code') is-invalid @enderror" value="" placeholder="Symptoms Code"> -->
									<br>
									<button type="submit" class="btn btn-primary">Save Rule</button>
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
