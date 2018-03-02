@extends('layouts.app')

@section('content')
  <div class="container">


    <div class="panel panel-default">

      <div class="panel-heading text-center"><h3>{{ $part->name }}</h3></div>

      <div class="panel-body text-center">

        <p class="text-center"><strong>Mianownica:</strong> <span class="text-danger">{{ $part->number }}</span></p>
        <p class="text-center"><strong>Producent:</strong> <span class="text-danger">{{ $part->createdby }}</span></p>
        <p class="text-center"><strong>Dodane przez</strong> <span class="text-danger">{{ $part->user->name }}&nbsp{{$part->user->surname}}</span>&nbsp<strong>w dniu</strong>&nbsp <span class="text-danger">{{$part->created_at}}</span></p>
        <p class="text-center"><strong>Ostatnio edytowane:</strong> <span class="text-danger">{{ $part->updated_at }}</span></p>

        <br>
                <a class="btn btn-xm btn-info" href="{{ URL::to('parts/') }}">Powrót</a>

      </div>

    </div>



{{-- <div class="jumbotron text-center">

    <h3>{{ $part->name }}</h3>
    <p>
        <strong>Mianownica:</strong><br> {{ $part->number }}<br>
        <strong>Producent:</strong><br> {{ $part->createdby }}<br>
        <strong>Dodane przez:</strong><br> {{ $part->user->name }}&nbsp{{$part->user->surname}}<br> <strong>dnia</strong>&nbsp{{$part->created_at}}<br>
        <strong>Ostatnio edytowane:</strong><br> {{ $part->updated_at }}<br>

        <br>
        <br>
                <a class="btn btn-xm btn-info" href="{{ URL::to('parts/') }}">Powrót</a>
    </p>
</div> --}}

</div>
@endsection
