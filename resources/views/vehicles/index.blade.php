@extends('layouts.app')

@section('content')
  <div class="container">


  <h1>Dane pojazdów:</h1>

<br>

  <table class="table table-responsive">
    <thead>
        <tr>
            <td class="text-center"><h3></h3></td>
            <td class="text-center"><h3>Nazwa pojazdu</h3></td>
            <td class="text-center"><h3>Typ</h3></td>
            <td class="text-center"><h3>Na gwarancji</h3></td>
            <td class="text-center"><h3></h3></td>
        </tr>
    </thead>
    <tbody>
    @foreach($vehicles as $key => $value)
        <tr>

            <td class="text-center">
              {{ Form::open(array('url' => 'vehicles/' . $value->id)) }}
                  {{ Form::hidden('_method', 'DELETE') }}
                  {{ Form::submit('Usuń tą pozycję', array('class' => 'btn btn-xs btn-danger')) }}
              {{ Form::close() }}

            </td>
            <td class="text-center">{{ $value->name }}</td>
            <td class="text-center">{{ $value->type }}</td>
            <td class="text-center">{{ $value->warranty }}</td>


            <td class="text-center">
                <div class="btn-group">

                <a class="btn btn-sm btn-success" href="{{ URL::to('vehicles/' . $value->id) }}">Pokaż szczegóły</a>


                <a class="btn btn-sm btn-info" href="{{ URL::to('vehicles/' . $value->id . '/edit') }}">Edytuj</a>
              </div><br>

            </td>
        </tr>
    @endforeach
    </tbody>
</table>

  </div>
@endsection
