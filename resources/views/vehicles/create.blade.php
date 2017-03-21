@extends('layouts.app')

@section('content')
  <div class="container">


<h1>Dodaj pojazd</h1>
<br>
<!-- if there are creation errors, they will show here -->
{{ HTML::ul($errors->all()) }}

{{ Form::open(array('url' => 'vehicles')) }}

    <div class="form-group">
        {{ Form::label('name', 'Nazwa pojazdu') }}
        {{ Form::text('name', Input::old('name'), array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('type', 'Typ') }}
        {{ Form::text('type', Input::old('type'), array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('warranty', 'Na gwarancji') }}
        {{ Form::select('warranty', array ('1' => 'TAK', '0' => 'NIE'), Input::old('warranty'), array('class' => 'form-control'))}}
    </div>

    <div class="form-group">
        {{ Form::label('production_date', 'Data produkcji') }}
        {{ Form::date('production_date', \Carbon\Carbon::now(), Input::old('production_date'), array('class' => 'form-control')) }}

    </div>

    {{ Form::submit('Dodaj pozycję!', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

</div>
@endsection
