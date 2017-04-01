@extends('layouts.app')

@section('content')
  <div class="container">






<div class="jumbotron text-center">

    <h3>{{ $part->name }}</h3>
    <p>
        <strong>Mianownica:</strong> {{ $part->number }}<br>
        <strong>Producent:</strong> {{ $part->createdby }}

        <br>
        <br>
                <a class="btn btn-xm btn-info" href="{{ URL::to('parts/') }}">Powrót</a>
    </p>
</div>

</div>
@endsection
