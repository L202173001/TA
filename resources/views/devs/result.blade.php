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
                                        <h1 class="h4 text-gray-900 mb-4">Troubleshoot Result</h1>
                                        <hr>
                                    </div>
                                    <div class="result">
                                        @if ($status == False)
                                        <table width="100%">
                                            <tr>
                                                <td width="15%"><b>Name</b></td>
                                                <td width="1%">:</td>
                                                <td class="result">{{ $name }}</td>
                                            </tr>
                                            <tr>
                                                <td><b>Phone</b></td>
                                                <td>:</td>
                                                <td class="result">{{ $phone }}</td>
                                            </tr>

                                            
                                            @foreach ($symptoms as $item)
                                              @if ($loop -> first)
                                                <tr>
                                                  <td><b>Selected Symptoms</b></td>
                                                  <td>:</td>
                                                  <td class="result">- {{ $item -> SymptomCode -> symptom }}</td>
                                                </tr>
                                              @else
                                                <tr>
                                                  <td></td>
                                                  <td></td>
                                                  <td class="result">- {{ $item -> SymptomCode -> symptom }}</td>
                                                </tr>
                                              @endif
                                            @endforeach
                                            
                                            <tr>
                                                <td><b>Result</b><br><i>Forward Chaining</i></td>
                                                <td>:</td>
                                                <td class="result">No information was found which symptoms you have, because of our limited data.</td>
                                            </tr>
                                        </table>
                                        <center>
                                        <button onclick="window.location='/troubleshoot'" class="btn btn-solid-lg mt-5">Diagnosis Again</button>
                                        @else
                                        <table width="100%">
                                            <tr>
                                                <td width="15%"><b>Name</b></td>
                                                <td width="1%">:</td>
                                                <td class="result">{{ $name }}</td>
                                            </tr>
                                            <tr>
                                                <td><b>Phone</b></td>
                                                <td>:</td>
                                                <td class="result">{{ $phone }}</td>
                                            </tr>
                                            
                                            @foreach ($symptoms as $item)
                                              @if ($loop -> first)
                                                <tr>
                                                  <td><b>Selected Symptoms</b></td>
                                                  <td>:</td>
                                                  <td class="result">- {{ $item -> SymptomCode -> symptom }}</td>
                                                </tr>
                                              @else
                                                <tr>
                                                  <td></td>
                                                  <td></td>
                                                  <td class="result">- {{ $item -> SymptomCode -> symptom }}</td>
                                                </tr>
                                              @endif
                                            @endforeach
                                            <tr>
                                                <td><b>Result</b><br><i>Forward Chaining</i></td>
                                                <td>:</td>
                                                <td class="result">{{ $trouble->troubles_code }} - {{ $trouble->trouble }}</td>
                                            </tr>
                                            <tr>
                                                <td><b>Solutions</b></td>
                                                <td>:</td>
                                                <td class="result">{{ $trouble->solution }}</td>
                                            </tr>
                                        </table>
                                        <center>
                                        <button onclick="window.location='/troubleshoot'" class="btn btn-solid-lg mt-5">Diagnosis Again</button>
                                        @endif
                                    </div>
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