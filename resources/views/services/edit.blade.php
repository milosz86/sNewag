@extends('layouts.app')

@section('content')
  <div class="container">

    <div class="panel panel-default">

      <div class="panel-heading text-center"><h3>Edytujesz serwis:&nbsp {{ $service->name }}</h3></div>

      <div class="panel-body">

        <!-- if there are creation errors, they will show here -->
        {{ HTML::ul($errors->all()) }}

        {{ Form::model($service, array('route' => array('services.update', $service->id), 'method' => 'PUT')) }}

        <div class="form-group">
          {{ Form::label('name', 'Nazwa serwisu') }}
          {{ Form::text('name', null, array('class' => 'form-control')) }}
        </div>



        {{ Form::submit('Edytuj!', array('class' => 'btn btn-primary')) }}

        {{ Form::close() }}
      </div>
    </div>

  </div>
@endsection
