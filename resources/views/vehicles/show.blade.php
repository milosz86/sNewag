@extends('layouts.app')

@section('content')
  <div class="container">






<div class="jumbotron text-center">

    <h3>{{ $vehicle->name }}</h3>
    <p>
        <strong>Typ:</strong> {{ $vehicle->type }}<br>
        <strong>Data produkcji:</strong> {{ $vehicle->production_date }}<br>
          <strong>Obsługujący serwis:</strong> {{ $vehicle->service->name }}
    </p>
</div>

</div>
@endsection
