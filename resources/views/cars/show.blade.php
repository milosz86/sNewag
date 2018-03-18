@extends('layouts.app')

@section('content')
  <div class="container">

    <div class="panel panel-default">

      <div class="panel-heading text-center"><h3>{{ $car->name }}</h3></div>

      <div class="panel-body text-center">

        <p class="text-center"><strong>Numer rejestracyjny:</strong> <span class="text-danger">{{ $car->reg_nr}}</span></p>
        <p class="text-center"><strong>Przebieg:</strong> <span class="text-danger">{{ $car->distance }}</span></p>
        <p class="text-center"><strong>Data produkcji:</strong> <span class="text-danger">{{ $car->production_date }}</span></p>
        <p class="text-center"><strong>Silnik:</strong> <span class="text-danger">{{ $car->engine}}</span></p>
        <p class="text-center"><strong>Należący do serwisu:</strong> <span class="text-danger">{{ $car->service->name}}</span></p>
        <p class="text-center"><strong>Osoba odpowiedzialna:</strong> <span class="text-danger">{{ $car->user->name}}&nbsp{{$car->user->surname}}</span></p>
        <p class="text-center"><strong>Ubezpieczenie ważne do:</strong> <span class="text-danger">{{ $car->insurance_date}}</span></p>
        <p class="text-center"><strong>Przegląd ważny do:</strong> <span class="text-danger">{{ $car->service_date}}</span></p>
        <p class="text-center"><strong>Karta routex ważna do:</strong> <span class="text-danger">{{ $car->card_date}}</span></p>
        <p class="text-center"><strong>Ostatnia aktualizacja:</strong> <span class="text-danger">{{ $car->updated_at }}</span></p>
        
        <br>
        <br>
        <a class="btn btn-xm btn-info" href="{{ URL::to('cars/') }}">Powrót</a>



      </div>
    </div>
  </div>
@endsection
