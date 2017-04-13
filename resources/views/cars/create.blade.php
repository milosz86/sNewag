@extends('layouts.app')

@section('content')
  <div class="container">


<h1>Dodaj samochód</h1>
<br>
<!-- if there are creation errors, they will show here -->
{{ HTML::ul($errors->all()) }}

{{ Form::open(array('url' => 'cars')) }}



    <div class="form-group">
        {{ Form::label('name', 'Auto') }}
        {{ Form::text('name', Input::old('name'), array('class' => 'form-control')) }}
    </div>


    <div class="form-group">
        {{ Form::label('user_id', 'Osoba odpowiedzialna') }}
        {{ Form::select('user_id', array('' => 'Wybierz osobę') + $users, Input::old('user_id'), array('class' => 'form-control'))}}
    </div>

    <div class="form-group">
        {{ Form::label('production_date', 'Data produkcji') }}
        {{ Form::date('production_date', \Carbon\Carbon::now() , array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('insurance_date', 'Termin końca ubezpieczenia') }}
        {{ Form::date('insurance_date', \Carbon\Carbon::now() , array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('card_date', 'Termin ważności karty Routex') }}
        {{ Form::date('card_date', \Carbon\Carbon::now() , array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('service_date', 'Termin przeglądu') }}
        {{ Form::date('service_date', \Carbon\Carbon::now() , array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('distance', 'Przebieg pojazdu [km]') }}
        {{ Form::number('distance', Input::old('distance'), array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('engine', 'Silnik') }}
        {{ Form::text('engine', Input::old('engine'), array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('reg_nr', 'Numer rejestracyjny') }}
        {{ Form::text('reg_nr', Input::old('reg_nr'), array('class' => 'form-control')) }}
    </div>




    {{ Form::submit('Dodaj pozycję!', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

</div>
@endsection
