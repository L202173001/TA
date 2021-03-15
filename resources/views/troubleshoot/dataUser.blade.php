@extends('layouts.navbar')

@section('title','Troubleshoot Data User')

@section('content') 
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
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Fill In the Following Data</h1>
                                    </div>
                                    <form  action='/dataUser/troubleshoot' method="POST" class="user">
                                    @csrf
                                        <div class="form-group">
                                            <input type="text" name="name" id="name"  class="form-control form-control-user @error('name') is-invalid @enderror" value="{{ old('name') }}" placeholder="Enter Your Name...">
                                            @error('name')<div class="invalid-feedback" >{{ $message }}</div>@enderror
                                        </div>
                                        <div class="form-group">
                                            <input type="tel" name="phone_no" id="phone_no" class="form-control form-control-user @error('phone_no') is-invalid @enderror" value="{{ old('phone_no') }}" placeholder="Phone Number">
                                            @error('phone_no')<div class="invalid-feedback" >{{ $message }}</div>@enderror
                                        </div>
                                        <!-- @if (session('status'))
                                        <div class="alert alert-danger">
                                            {{ session('status') }}
                                        </div>
                                        @endif -->
                                        <input type="submit" class="btn btn-solid-lg btn-block" value="Continue">
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