@extends('layouts.app')

@section('content')
  <div class="container">


<h1>Wprowadź przesyłkę</h1>
<br>
<!-- if there are creation errors, they will show here -->
{{ HTML::ul($errors->all()) }}

{{ Form::open(array('url' => 'shipments')) }}


    <div class="form-group">
        {{ Form::label('part_id', 'Nazwa części') }}
        {{ Form::select('part_id', array('' => 'Wybierz część') + $parts, Input::old('part_id'), array('class' => 'form-control'))}}
    </div>

    <div class="form-group">
        {{ Form::label('quantity', 'Ilość') }}
        {{ Form::number('quantity', Input::old('quantity'), array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('date', 'Data') }}
        {{ Form::date('date', \Carbon\Carbon::now() , array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('status', 'Status') }}
        {{ Form::select('status', array ('' => 'Wybierz status', 'Przysłano' => 'Przysłano', 'Wysłano' => 'Wysłano', 'Wykorzystano' => 'Wykorzystano'), Input::old('status'), array('class' => 'form-control'))}}
    </div>

    <div class="form-group">
        {{ Form::label('serial', 'Numer seryjny (opcjonalnie)') }}
        {{ Form::text('serial', Input::old('serial'), array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('info', 'Dodatkowe informacje (opcjonalnie)') }}
        {{ Form::textarea('info', Input::old('info'), array('class' => 'form-control')) }}
    </div>





    {{ Form::submit('Dodaj pozycję!', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

</div>
@endsection
