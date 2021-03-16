@extends('layouts.navbar')

@section('title','Troubleshoot')

@section('content')
<link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet">

<div class="jumbotron">
    <div class="container">
        <!-- Outer Row -->
        <div class="row justify-content-center mt-md-5">

            <div class="col-lg-6 mt-md-5 text-center">
                <h1>Troubleshoot</h1>
                <div class="card o-hidden border-0 shadow-lg mt-3">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg">
                                <div class="p-5">
                                    <form  action="{{ route('troubleshoot.troubleshootResult') }}" method="POST" class="user" id="ms-form">
                                    @csrf
                                        <fieldset>
                                            <div class="text-center">
                                                <h1 class="h4 text-gray-900 mb-4">Fill In the Following Data</h1>
                                                <hr>
                                            </div>
                                            <div class="form-group">
                                                <input type="text" name="name" id="name"  class="form-control form-control-user @error('name') is-invalid @enderror" value="{{ old('name') }}" placeholder="Enter Your Name...">
                                                @error('name')<div class="invalid-feedback text-left" >{{ $message }}</div>@enderror
                                            </div>
                                            <div class="form-group">
                                                <input type="text" name="phone" id="phone" class="form-control form-control-user @error('phone') is-invalid @enderror" value="{{ old('phone') }}" placeholder="Phone Number">
                                                @error('phone')<div class="invalid-feedback text-left" >{{ $message }}</div>@enderror
                                            </div>
                                            <input type="button" name="next" id="next" onclick="nextForm(this)" class="btn btn-solid-lg btn-block" value="Continue">
                                        </fieldset>
                                        <!-- Symptomps -->
                                        @foreach ($symptoms as $no=>$symptom)
                                        <fieldset>
                                            <div class="text-center">
                                                <h1 class="h4 text-gray-900 mb-4">Choose Your Symptoms</h1>
                                                <hr>
                                            </div>
                                            <div class="form-group text-center">
                                                <h3>{{$symptom->symptoms_code}} - {{$symptom->symptom}}</h3>
                                            </div>
                                            <div class="row justify-content-center">
                                                <div class="col-md-3">
                                                <label class="container2">Yes
                                                    <input type="radio" name="{{$symptom->symptoms_code}}" value="Yes">
                                                    <span class="checkmark"></span>
                                                </label>
                                                </div>
                                                <div class="col-md-3">
                                                <label class="container2">No
                                                    <input type="radio" name="{{$symptom->symptoms_code}}" value="No">
                                                    <span class="checkmark"></span>
                                                </label>
                                                </div>
                                            </div>
 
                                            <button type="button" id="next" onclick="nextForm(this)" class="btn btn-solid-lg btn-outline-primary btn-block mt-3">Continue</button>
                                            <input type="button" id="previous" onclick="prevForm(this)" class="btn btn-outline-lg btn-block" value="Previous">

                                        </fieldset>
                                        @endforeach
                                        <fieldset>
                                            <div class="text-center">
                                                <h1 class="h4 text-gray-900 mb-4">Choose Your Symptoms</h1>
                                                <hr>
                                            </div>
                                            <div class="form-group text-center">
                                                <h3>Finish</h3>
                                            </div>
                                            <div class="form-group text-center">
                                                <p>Input is complete, are you sure of your input? If not, please check your input again. If you are sure, please press the submit button.</p>
                                            </div>
                                            <input type="button"  id="previous" onclick="prevForm(this)" class="btn btn-outline-lg btn-block" value="Previous">
                                            <input type="submit" name="submit" id="submit" class="btn btn-solid-lg btn-block" value="Submit">
                                        </fieldset>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>
</div>
@endsection

@push('scripts')
<script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script> --}}

<script type="text/javascript">
var current_
function nextForm(e) {
  var phone = document.forms["ms-form"]["phone"].value;
  var name = document.forms["ms-form"]["name"].value;
  if ((phone == "") || (name == "")) {
    toastr.error('Name and Phone Number must be filled out!', 'Error!')
    return false;
  } else {
    $(e).parent().next().show();
    $(e).parent().hide();
  }
    
}

function prevForm(e) {
    $(e).parent().prev().show();
    $(e).parent().hide();    
}

// $(document).ready(function() {
//   $("#ms-form").validate({
//     rules: {
//       name : {
//         required: true
//       },
//       phone: {
//         required: true,
//         number: true
//       }
//     },
//     messages : {
//       name: {
//       },
//       phone: {
//         number: "Please enter your phone number as a numerical value",
//       }
//     }
//   });
// });
</script>
@endpush