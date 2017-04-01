@extends('layouts.app')

@section('content')
  <div class="container">




    <div class="jumbotron text-center">
        <h2>{{ $service->name }}</h2>
        <p>
            <strong>jakieś szczegolowe dane serwisu</strong><br>

            <br>
            <br>
                    <a class="btn btn-xm btn-info" href="{{ URL::to('services/') }}">Powrót</a>

        </p>
    </div>

</div>
@endsection
