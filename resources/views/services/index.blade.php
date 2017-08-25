@extends('layouts.app')

@section('content')
  <div class="container">


  <h1>Dane serwisów:</h1>

<br>

  <table class="table table-responsive">
      <thead>
          <tr>
              <td class="text-center"><h3></h3></td>
              <td class="text-center"><h3>Nazwa</h3></td>
              <td class="text-center"><h3></h3></td>

          </tr>
      </thead>
      <tbody>
        @foreach($services as $key => $value)
          <tr>
              <td class="text-center">
                {{ Form::open(array('url' => 'services/' . $value->id)) }}
                    {{ Form::hidden('_method', 'DELETE') }}
                    {{ Form::submit('Usuń tą pozycję', array('class' => 'btn btn-xs btn-danger')) }}
                {{ Form::close() }}

              </td>
              <td class="text-center">{{ $value->name }}</td>

              <!-- we will also add show, edit, and delete buttons -->
              <td class="text-center">
                <div class="btn-group-vertical">
                  <a class="btn btn-xs btn-success" href="{{ URL::to('services/' . $value->id) }}">Pokaż szczegóły</a>

                  <!-- edit this service (uses the edit method found at GET /services/{id}/edit -->
                  <a class="btn btn-xs btn-info" href="{{ URL::to('services/' . $value->id . '/edit') }}">Edytuj</a>

                </div>

              </td>

          </tr>
      @endforeach
      </tbody>
  </table>

  </div>
@endsection
