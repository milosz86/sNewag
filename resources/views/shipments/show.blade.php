@extends('layouts.app')

@section('content')
  <div class="container">

    <div class="panel panel-default">

      <div class="panel-heading text-center"><h3>{{ $shipment->part->name }}</h3></div>

      <div class="panel-body text-center">


        <p class="text-center"><strong>Mianownica:</strong> <span class="text-danger">{{ $shipment->part->number }}</span></p>
        <p class="text-center"><strong>Producent:</strong> <span class="text-danger">{{ $shipment->part->createdby }}</span></p>
        <p class="text-center"><strong>Dodane przez:</strong> <span class="text-danger">{{ $shipment->user->name }}&nbsp{{$shipment->user->surname}}</span>&nbsp<strong>w dniu</strong>&nbsp <span class="text-danger">{{$shipment->date}}</span></p>
        <p class="text-center"><strong>Edytowane w dniu:</strong> <span class="text-danger">{{ $shipment->updated_at }}</span>&nbsp<strong>przez</strong>&nbsp<span class="text-danger">{{$shipment->getEditorsName()->name}}&nbsp{{$shipment->getEditorsName()->surname}}</p>
          <p class="text-center"><strong>Numery seryjne:</strong> <span class="text-danger">{{ $shipment->serial }}</span></p>
          <p class="text-center"><strong>Dodatkowe informacje:</strong> <span class="text-danger">{{ $shipment->info }}</span></p>
          
          <br>
          <br>
          <a class="btn btn-xm btn-info" href="{{ URL::to('shipments/') }}">Powrót</a>

        </p>
      </div>
    </div>

  </div>
@endsection
