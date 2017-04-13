@extends('layouts.app')

@section('content')
  <div class="container">






<div class="jumbotron text-center">

    <h3>{{ $part->name }}</h3>
    <p>
        <strong>Mianownica:</strong> {{ $part->number }}<br>
        <strong>Producent:</strong> {{ $part->createdby }}<br>
        <strong>Dodane przez:</strong> {{ $part->user->name }}&nbsp{{$part->user->surname}}&nbsp <strong>dnia</strong>&nbsp{{$part->created_at}}<br>
        <strong>Ostatnio edytowane:</strong> {{ $part->updated_at }}<br>

        <br>
        <br>
                <a class="btn btn-xm btn-info" href="{{ URL::to('parts/') }}">Powrót</a>
    </p>
</div>

</div>
@endsection
