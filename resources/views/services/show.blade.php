@extends('layouts.app')

@section('content')
  <div class="container">

    <div class="panel panel-default">

      <div class="panel-heading text-center"><h3>{{ $service->name }}</h3></div>

      <div class="panel-body text-center">


        <p class="text-center"><strong>Jakieś szczegółowe dane serwisu:</strong> <span class="text-danger">{{ $service->name }}</span></p>

        <br>
        <br>
        <a class="btn btn-xm btn-info" href="{{ URL::to('services/') }}">Powrót</a>

      </div>
    </div>
  </div>
@endsection
