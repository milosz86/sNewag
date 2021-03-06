@extends('layouts.app')

@section('content')
  <div class="container">


<h1>Dodaj część</h1>
<br>
<!-- if there are creation errors, they will show here -->
{{ HTML::ul($errors->all()) }}

{{ Form::open(array('url' => 'parts')) }}

    <div class="form-group">
        {{ Form::label('name', 'Nazwa części') }}
        {{ Form::text('name', Input::old('name'), array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('number', 'Mianownica') }}
        {{ Form::text('number', Input::old('number'), array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('createdby', 'Producent') }}
        {{ Form::text('createdby', Input::old('createdby'), array('class' => 'form-control')) }}
    </div>

    {{ Form::submit('Dodaj pozycję!', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

</div>
@endsection
