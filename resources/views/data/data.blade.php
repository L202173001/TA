@extends('layouts.frontend')

@section('title','Expert Data')

@section('content')

<div class="jumbotron text-center">
  <div class="container pt-5">
    <h1 class="mt-5 mt-md-0">Expert Data</h1>
  </div>
</div>
<div class="container">
  <center>
    <h3>Symptoms Data</h3>
    <div class="table-responsive">
      <table class="table">
        <thead>
          <tr>
            <th>No.</th>
            <th>Code</th>
            <th>Symptoms</th>
          </tr>
        </thead>
        <tbody>
          @foreach($symptoms as $symptom)
          <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{$symptom->symptoms_code}}</td>
            <td>{{$symptom->symptom}}</td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
    
    <h3>Trouble Data</h3>
    <div class="table-responsive">
      <table class="table">
        <thead>
          <tr>
            <th>No.</th>
            <th>Code</th>
            <th>Trouble</th>
            <th>Solutions</th>
          </tr>
        </thead>
        <tbody>
          @foreach($troubles as $trbl)
          <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{$trbl->troubles_code}}</td>
            <td>{{$trbl->trouble}}</td>
            <td>{{$trbl->solution}}</td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>


    <h3 class="mt-5">Rule Data</h3>
    <div class="table-responsive">
      <table class="table">
        <thead>
          <tr>
            <th>No.</th>
            <th>Trouble Code</th>
            <th>Trouble</th>
            <th>Symptoms Code</th>
          </tr>
        </thead>
        <tbody>
          @foreach($vrules as $rules)
          <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{$rules->troubles_code}}</td>
            <td>{{$rules->trouble}}</td>
            <td>{{$rules->symptoms_code}}</td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </center>
</div>

@endsection