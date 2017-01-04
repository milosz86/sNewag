@extends('layouts.app')

@section('content')
  <div class="container">


<h1>Edit {{ $service->name }}</h1>

<!-- if there are creation errors, they will show here -->
{{ HTML::ul($errors->all()) }}

{{ Form::model($service, array('route' => array('services.update', $service->id), 'method' => 'PUT')) }}

    <div class="form-group">
        {{ Form::label('name', 'Name') }}
        {{ Form::text('name', null, array('class' => 'form-control')) }}
    </div>



    {{ Form::submit('Edytuj serwis!', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

</div>
@endsection
