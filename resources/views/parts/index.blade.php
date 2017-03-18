@extends('layouts.app')

@section('content')
  <div class="container">


  <h1>Wszystkie Części</h1>

<br>

  <table class="table table-striped table-bordered">
    <thead>
        <tr>
            <td>ID</td>
            <td>Nazwa części</td>
            <td>Mianownica</td>
            <td>Producent</td>
            <td>Opcje</td>
        </tr>
    </thead>
    <tbody>
    @foreach($parts as $key => $value)
        <tr>
            <td>{{ $value->id }}</td>
            <td>{{ $value->name }}</td>
            <td>{{ $value->number }}</td>
            <td>{{ $value->createdby }}</td>

            <!-- we will also add show, edit, and delete buttons -->
            <td>

                <!-- delete the part (uses the destroy method DESTROY /parts/{id} -->
                {{ Form::open(array('url' => 'parts/' . $value->id, 'class' => 'pull-right')) }}
                    {{ Form::hidden('_method', 'DELETE') }}
                    {{ Form::submit('Usuń tą pozycję', array('class' => 'btn btn-warning')) }}
                {{ Form::close() }}
                <!-- show the part (uses the show method found at GET /parts/{id} -->
                <a class="btn btn-small btn-success" href="{{ URL::to('parts/' . $value->id) }}">Pokaż szczegóły</a>

                <!-- edit this part (uses the edit method found at GET /parts/{id}/edit -->
                <a class="btn btn-small btn-info" href="{{ URL::to('parts/' . $value->id . '/edit') }}">Edytuj</a>

            </td>
        </tr>
    @endforeach
    </tbody>
</table>

  </div>
@endsection
