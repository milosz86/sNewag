@extends('layouts.app')

@section('content')
  <div class="container">






<div class="jumbotron text-center">

    <h3>{{ $car->name }}</h3>
    <p>
        <strong>Numer rejestracyjny:</strong> {{ $car->reg_nr}}<br>
        <strong>Przebieg:</strong> {{ $car->distance }}<br>
        <strong>Data produkcji:</strong> {{ $car->production_date }}<br>
        <strong>Silnik:</strong> {{ $car->engine}}<br>
        <strong>Należący do serwisu:</strong> {{ $car->service->name}}<br>
        <strong>Osoba odpowiedzialna:</strong> {{ $car->user->name}}&nbsp{{$car->user->surname}}<br>
        <strong>Ubezpieczenie ważne do:</strong> {{ $car->insurance_date}}<br>
        <strong>Przegląd ważny do:</strong> {{ $car->service_date}}<br>
        <strong>Karta routex ważna do:</strong> {{ $car->card_date}}<br>
        <strong>Ostatnia aktualizacja:</strong> {{ $car->updated_at }}<br>

<br>
<br>
        <a class="btn btn-xm btn-info" href="{{ URL::to('cars/') }}">Powrót</a>

    </p>
</div>

</div>
@endsection
