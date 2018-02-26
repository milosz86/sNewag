@extends('layouts.app')

@section('content')
  <div class="container">


  <h3>Dane części:</h3>

<br>

  <table class="table table-responsive">
    <thead>
        <tr>

            <td class="text-center"><h4>Nazwa części</h4></td>
            <td class="text-center"><h4>Mianownica</h4></td>
            <td class="text-center"><h4></h4></td>
        </tr>
    </thead>
    <tbody>
    @foreach($parts as $key => $value)
        <tr>





            <td class="text-center">{{ $value->name }}</td>
            <td class="text-center">{{ $value->number }}
              {{ Form::open(array('url' => 'parts/' . $value->id)) }}
                  {{ Form::hidden('_method', 'DELETE') }}
                  {{ Form::submit('Usuń wpis', array('class' => 'btn btn-xs btn-danger')) }}
              {{ Form::close() }}
            </td>

            <!-- we will also add show, edit, and delete buttons -->
            <td class="text-center">
                <div class="btn-group-vertical">
                <!-- show the part (uses the show method found at GET /parts/{id} -->
                <a class="btn btn-xs btn-success" href="{{ URL::to('parts/' . $value->id) }}">Szczegóły</a>

                <!-- edit this part (uses the edit method found at GET /parts/{id}/edit -->
                <a class="btn btn-xs btn-info" href="{{ URL::to('parts/' . $value->id . '/edit') }}">Edytuj</a>
              </div><br>

            </td>
        </tr>
    @endforeach
    </tbody>
</table>

  </div>
@endsection
