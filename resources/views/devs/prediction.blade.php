@extends('layouts.navbar')

@section('title','Troubleshoot Data User')

@section('content')
<div class="jumbotron">
    <div class="container">
        <!-- Outer Row -->
        <div class="row justify-content-center mt-md-5">
            <div class="col-lg-12 text-center mt-md-5">
                <h1>Troubleshoot</h1>
            </div>
            <div class="col-lg-12">  
                <div class="card o-hidden border-0 shadow-lg mt-3">
                    <div class="card-body">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Choose Your Symptoms</h1>
                                        <hr>
                                    </div>
                                    <form action="{{ route('prediction.action') }}" method="POST">
                                        @csrf
                                        <p>Name</p>
                                        <input type="text" name="name">
                                        <p>Phone</p>
                                        <input type="text" name="phone">
                                        @foreach ($symptoms as $no=>$symptom)
                                            <p>{{++$no}} . {{$symptom->symptom}}</p>
                                            <input type="radio" name="{{$symptom->symptoms_code}}" value="Yes"> Yes
                                            <input type="radio" name="{{$symptom->symptoms_code}}" value="No"> No
                                            <br>
                                            <br>
                                        @endforeach
                                        <button type="submit" class="btn btn-solid-lg">DIAGNOSE</button>
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