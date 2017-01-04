@extends('layouts.app')

@section('content')
  <div class="container">


<h1>Aktualnie {{ $service->name }}</h1>

    <div class="jumbotron text-center">
        <h2>{{ $service->name }}</h2>
        <p>
            <strong>jakieś szczegolowe dane serwisu</strong><br>

        </p>
    </div>

</div>
@endsection
