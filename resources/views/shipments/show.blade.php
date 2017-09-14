@extends('layouts.app')

@section('content')
  <div class="container">


    <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="text-center">{{ $shipment->part->name }}</h3>
      </div>
    </div>



<div class="jumbotron text-center">

    <p>
        <strong>Mianownica:</strong><br> {{ $shipment->part->number }}<br>
        <strong>Producent:</strong><br> {{ $shipment->part->createdby }}<br>
        <strong>Wprowadzone przez:</strong><br> {{ $shipment->user->name }}&nbsp{{$shipment->user->surname}}&nbsp <strong>dnia</strong>&nbsp{{$shipment->date}}<br>
        <strong>Edytowane:</strong><br> {{ $shipment->updated_at }}&nbsp <strong>przez</strong>&nbsp{{$shipment->getEditorsName()->name}}&nbsp{{$shipment->getEditorsName()->surname}}<br>
        <strong>Numery seryjne:</strong><br> {{ $shipment->serial }}<br>
        <strong>Dodatkowe informacje:</strong><br> {{ $shipment->info }}
<br>
<br>
        <a class="btn btn-xm btn-info" href="{{ URL::to('shipments/') }}">Powrót</a>

    </p>
</div>

</div>
@endsection
