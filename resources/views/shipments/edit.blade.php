@extends('layouts.app')

@section('content')
  <div class="container">

    <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="text-center">{{ $shipment->part->name }}</h3>
      </div>
    </div>

    <div class="panel panel-default">
      <div class="panel-body">
        <!-- if there are creation errors, they will show here -->
        {{ HTML::ul($errors->all()) }}

        {{ Form::model($shipment, array('route' => array('shipments.update', $shipment->id), 'method' => 'PUT')) }}


        <div class="form-group">
          {{ Form::label('part_id', 'Nazwa części') }}
          {{ Form::select('part_id', $parts, null , array('class' => 'form-control'))}}
        </div>

        <div class="form-group">
          {{ Form::label('quantity', 'Ilość') }}
          {{ Form::number('quantity', null, array('class' => 'form-control')) }}
        </div>

        <div class="form-group">
          {{ Form::label('date', 'Data') }}
          {{ Form::date('date',Input::old('date'), array('class' => 'form-control')) }}
        </div>

        <div class="form-group">
          {{ Form::label('status', 'Status') }}
          {{ Form::select('status', array ('' => 'Wybierz status', 'Przysłano' => 'Przysłano', 'Wysłano' => 'Wysłano', 'Wykorzystano' => 'Wykorzystano'), null, array('class' => 'form-control'))}}
        </div>

        <div class="form-group">
          {{ Form::label('serial', 'Numer seryjny (opcjonalnie)') }}
          {{ Form::text('serial', null, array('class' => 'form-control')) }}
        </div>

        <div class="form-group">
          {{ Form::label('info', 'Dodatkowe informacje (opcjonalnie)') }}
          {{ Form::textarea('info', null, array('class' => 'form-control')) }}
        </div>


        {{ Form::submit('Zapisz zmiany!', array('class' => 'btn btn-primary')) }}

        {{ Form::close() }}
      </div>
    </div>




  </div>
@endsection
