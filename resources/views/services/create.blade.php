@extends('layouts.app')

@section('content')
  <div class="container">


<h1>Dodaj serwis</h1>

<!-- if there are creation errors, they will show here -->
{{ HTML::ul($errors->all()) }}

{{ Form::open(array('url' => 'services')) }}

    <div class="form-group">
        {{ Form::label('name', 'Name') }}
        {{ Form::text('name', Input::old('name'), array('class' => 'form-control')) }}
    </div>


    {{ Form::submit('Stworz serwis!', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

</div>
@endsection
