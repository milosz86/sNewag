@extends('layouts.app')

@section('content')
  <div class="container">

    <div class="panel panel-default">

      <div class="panel-heading text-center"><h3>{{ $vehicle->name }}</h3></div>

      <div class="panel-body text-center">

<p class="text-center"><strong>Typ:</strong> <span class="text-danger">{{ $vehicle->type }}</span></p>
<p class="text-center"><strong>Data produkcji:</strong> <span class="text-danger">{{ $vehicle->production_date }}</span></p>
<p class="text-center"><strong>Obsługujący serwis:</strong> <span class="text-danger">{{ $vehicle->service->name }}</span></p>
        <br>
        <br>
        <a class="btn btn-xm btn-info" href="{{ URL::to('vehicles/') }}">Powrót</a>
      </p>

    </div>
  </div>
</div>
@endsection
