@extends('layouts.app')

@section('content')
  <div class="container">


  <h1>Wszystkie serwisy</h1>

  <!-- will be used to show any messages -->
  @if (Session::has('message'))
      <div class="alert alert-info">{{ Session::get('message') }}</div>
  @endif

  <table class="table table-striped table-bordered">
      <thead>
          <tr>
              <td>ID</td>
              <td>Nazwa</td>
              <td>Akcja</td>
          </tr>
      </thead>
      <tbody>
        @foreach($services as $key => $value)
          <tr>
              <td>{{ $value->id }}</td>
              <td>{{ $value->name }}</td>

              <!-- we will also add show, edit, and delete buttons -->
              <td>

                  <!-- delete the service (uses the destroy method DESTROY /services/{id} -->
                  <!-- we will add this later since its a little more complicated than the other two buttons -->
                  {{ Form::open(array('url' => 'services/' . $value->id, 'class' => 'pull-right')) }}
                      {{ Form::hidden('_method', 'DELETE') }}
                      {{ Form::submit('Usun serwis', array('class' => 'btn btn-warning')) }}
                  {{ Form::close() }}

                  <!-- show the service (uses the show method found at GET /services/{id} -->
                  <a class="btn btn-small btn-success" href="{{ URL::to('services/' . $value->id) }}">Pokaz serwis</a>

                  <!-- edit this service (uses the edit method found at GET /services/{id}/edit -->
                  <a class="btn btn-small btn-info" href="{{ URL::to('services/' . $value->id . '/edit') }}">Edytuj serwis</a>

              </td>
          </tr>
      @endforeach
      </tbody>
  </table>

  </div>
@endsection
