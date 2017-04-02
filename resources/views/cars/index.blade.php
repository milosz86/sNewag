@extends('layouts.app')

@section('content')
  <div class="container">


  <h1>Samochody:</h1>

<br>

  <table class="table table-responsive">
    <thead>
        <tr>
            <td class="text-center"><h3></h3></td>
            <td class="text-center"><h3>Nazwa</h3></td>
            <td class="text-center"><h3>Przebieg</h3></td>
            <td class="text-center"><h3>Odpowiedzialny</h3></td>
            <td class="text-center"><h3></h3></td>
        </tr>
    </thead>
    <tbody>
    @foreach($cars as $key => $value)
        <tr>

            <td class="text-center">
              {{ Form::open(array('url' => 'cars/' . $value->id)) }}
                  {{ Form::hidden('_method', 'DELETE') }}
                  {{ Form::submit('Usuń tą pozycję', array('class' => 'btn btn-xs btn-danger')) }}
              {{ Form::close() }}

            </td>
            <td class="text-center">{{ $value->name }}</td>
            <td class="text-center">{{ $value->distance }}</td>
            <td class="text-center">{{ $value->user->name }}&nbsp{{$value->user->surname}}</td>



            <td class="text-center">
                <div class="btn-group">

                <a class="btn btn-sm btn-success" href="{{ URL::to('cars/' . $value->id) }}">Pokaż szczegóły</a>


                <a class="btn btn-sm btn-info" href="{{ URL::to('cars/' . $value->id . '/edit') }}">Edytuj</a>
              </div><br>

            </td>
        </tr>
    @endforeach
    </tbody>
</table>

  </div>
@endsection
