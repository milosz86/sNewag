@extends('layouts.app')

@section('content')
  <div class="container">

<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="text-center">DODAJ NEWSA</h3>
  </div>
</div>

<div class="panel panel-default">
  <div class="panel-body">
    <!-- if there are creation errors, they will show here -->
    {{ HTML::ul($errors->all()) }}

    {{ Form::open(array('url' => '/')) }}
    {{ csrf_field() }}
        <div class="form-group">
            {{ Form::label('title', 'Tytuł') }}
            {{ Form::text('title', Input::old('title'), array('class' => 'form-control')) }}
        </div>

        <div class="form-group">
            {{ Form::label('body', 'Treść') }}
            {{ Form::textarea('body', Input::old('body'), array('class' => 'form-control')) }}
        </div>

        <div class="form-group">
            {{ Form::label('img', 'Tematyka') }}
            {{ Form::select('img', array ('impulsy.jpg' => 'IMPULSY', 'rzepin.jpg' => 'RZEPIN'), Input::old('img'), array('class' => 'form-control'))}}
        </div>


        {{ Form::submit('Dodaj newsa!', array('class' => 'btn btn-primary')) }}

    {{ Form::close() }}
  </div>
</div>



</div>
@endsection
