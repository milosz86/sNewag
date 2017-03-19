@extends('layouts.app')

@section('content')
  <div class="container">


  <h1>Dane części:</h1>

<br>

  <table class="table table-responsive">
    <thead>
        <tr>
            <td class="text-center"><h3></h3></td>
            <td class="text-center"><h3>Nazwa części</h3></td>
            <td class="text-center"><h3>Mianownica</h3></td>
            <td class="text-center"><h3>Opcje</h3></td>
        </tr>
    </thead>
    <tbody>
    @foreach($parts as $key => $value)
        <tr>

            <td class="text-center">
              {{ Form::open(array('url' => 'parts/' . $value->id)) }}
                  {{ Form::hidden('_method', 'DELETE') }}
                  {{ Form::submit('Usuń tą pozycję', array('class' => 'btn btn-xs btn-danger')) }}
              {{ Form::close() }}

            </td>
            <td class="text-center">{{ $value->name }}</td>
            <td class="text-center">{{ $value->number }}</td>            

            <!-- we will also add show, edit, and delete buttons -->
            <td class="text-center">
                <div class="btn-group">
                <!-- show the part (uses the show method found at GET /parts/{id} -->
                <a class="btn btn-sm btn-success" href="{{ URL::to('parts/' . $value->id) }}">Pokaż szczegóły</a>

                <!-- edit this part (uses the edit method found at GET /parts/{id}/edit -->
                <a class="btn btn-sm btn-info" href="{{ URL::to('parts/' . $value->id . '/edit') }}">Edytuj</a>
              </div><br>

            </td>
        </tr>
    @endforeach
    </tbody>
</table>

  </div>
@endsection
