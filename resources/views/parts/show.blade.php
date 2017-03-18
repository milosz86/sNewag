@extends('layouts.app')

@section('content')
  <div class="container">



<h1>Showing {{ $part->name }}</h1>

<div class="jumbotron text-center">
    <h2>{{ $part->name }}</h2>
    <p>
        <strong>Mianownica:</strong> {{ $part->number }}<br>
        <strong>Producent:</strong> {{ $part->createdby }}
    </p>
</div>

</div>
@endsection
