@extends('layouts.app')

@section('content')
  <div class="container">


    <h1>Edytujesz następującą pozycję:&nbsp {{ $part->name }}</h1>

    <!-- if there are creation errors, they will show here -->
    {{ HTML::ul($errors->all()) }}

    {{ Form::model($part, array('route' => array('parts.update', $part->id), 'method' => 'PUT')) }}

        <div class="form-group">
            {{ Form::label('name', 'Nazwa części') }}
            {{ Form::text('name', null, array('class' => 'form-control')) }}
        </div>

        <div class="form-group">
            {{ Form::label('number', 'Mianownica') }}
            {{ Form::text('number', null, array('class' => 'form-control')) }}
        </div>

        <div class="form-group">
            {{ Form::label('createdby', 'Producent') }}
            {{ Form::text('createdby', null, array('class' => 'form-control')) }}
        </div>

        {{ Form::submit('Zapisz zmiany!', array('class' => 'btn btn-primary')) }}

    {{ Form::close() }}


</div>
@endsection
