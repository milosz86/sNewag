@extends('layouts.app')

@section('content')
  <div class="container">


    <h1>Edytujesz następującą pozycję:&nbsp {{ $vehicle->name }}</h1>

    <!-- if there are creation errors, they will show here -->
    {{ HTML::ul($errors->all()) }}

    {{ Form::model($vehicle, array('route' => array('vehicles.update', $vehicle->id), 'method' => 'PUT')) }}

        <div class="form-group">
            {{ Form::label('name', 'Nazwa pojazdu') }}
            {{ Form::text('name', null, array('class' => 'form-control')) }}
        </div>
        
        <div class="form-group">
            {{ Form::label('type', 'Typ') }}
            {{ Form::text('type', null, array('class' => 'form-control')) }}
        </div>

        <div class="form-group">
          {{ Form::label('warranty', 'Na gwarancji') }}
          {{ Form::select('warranty', array('1' => 'TAK', '0' => 'NIE'), null, array('class' => 'form-control'))}}
        </div>

        <div class="form-group">
            {{ Form::label('production_date', 'Data produkcji') }}
            {{ Form::date('production_date', null, array('class' => 'form-control')) }}
        </div>

        {{ Form::submit('Zapisz zmiany!', array('class' => 'btn btn-primary')) }}

    {{ Form::close() }}


</div>
@endsection
