@extends('layouts.app')

@section('content')
  <div class="container">






<div class="jumbotron text-center">

    <h3>{{ $shipment->part->name }}</h3>
    <p>
        <strong>Mianownica:</strong> {{ $shipment->part->number }}<br>
        <strong>Producent:</strong> {{ $shipment->part->createdby }}<br>
        <strong>Wprowadzone przez:</strong> {{ $shipment->user->name }}&nbsp{{$shipment->user->surname}}&nbsp <strong>dnia</strong>&nbsp{{$shipment->date}}<br>
        <strong>Edytowane:</strong> {{ $shipment->updated_at }}&nbsp <strong>przez</strong>&nbsp{{$shipment->getEditorsName()->name}}&nbsp{{$shipment->getEditorsName()->surname}}<br>
        <strong>Numery seryjne:</strong> {{ $shipment->serial }}<br>
        <strong>Dodatkowe informacje:</strong><br> {{ $shipment->info }}
<br>
<br>
        <a class="btn btn-xm btn-info" href="{{ URL::to('shipments/') }}">Powrót</a>

    </p>
</div>

</div>
@endsection
