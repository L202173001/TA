@extends('layouts.navbar')

@section('title','Login Page Admin')

@section('content') 
<div class="jumbotron">
    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center mt-md-5">

            <div class="col-lg-6 mt-md-5">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Admin Login Page</h1>
                                    </div>
                                    <form  action='/postlogin' method="POST" id="login-form" class="user">
                                    @csrf
                                        <div class="form-group">
                                            <input type="text" name="email" id="email"  class="form-control form-control-user @error('email') is-invalid @enderror" value="{{ old('email') }}" placeholder="Enter Email Address...">
                                            @error('email')<div class="invalid-feedback" >{{ $message }}</div>@enderror
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="password" id="password" class="form-control form-control-user @error('password') is-invalid @enderror" value="{{ old('password') }}" placeholder="Password">
                                            @error('password')<div class="invalid-feedback" >{{ $message }}</div>@enderror
                                        </div>
                                        <!-- @if (session('status'))
                                        <div class="alert alert-danger">
                                            {{ session('status') }}
                                        </div>
                                        @endif -->
                                        <input type="submit" name="signin" id="signin" class="btn btn-solid-lg btn-block" value="Login">
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