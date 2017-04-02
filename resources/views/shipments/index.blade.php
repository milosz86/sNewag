@extends('layouts.app')

@section('content')
  <div class="container">


  <h1>Wysyłka/odbiór części:</h1>

<br>

  <table class="table table-responsive">
    <thead>
        <tr>
            <td class="text-center"><h3></h3></td>
            <td class="text-center"><h3>Nazwa</h3></td>
            <td class="text-center"><h3>Status</h3></td>
            <td class="text-center"><h3>Ilość</h3></td>
            <td class="text-center"><h3>Data</h3></td>
            <td class="text-center"><h3></h3></td>
        </tr>
    </thead>
    <tbody>
    @foreach($shipments as $key => $value)
        <tr>

            <td class="text-center">
              {{ Form::open(array('url' => 'shipments/' . $value->id)) }}
                  {{ Form::hidden('_method', 'DELETE') }}
                  {{ Form::submit('Usuń tą pozycję', array('class' => 'btn btn-xs btn-danger')) }}
              {{ Form::close() }}

            </td>
            <td class="text-center">{{ $value->part->name }}</td>
            <td class="text-center">{{ $value->status }}</td>
            <td class="text-center">{{ $value->quantity }}</td>
            <td class="text-center">{{ $value->date }}</td>



            <td class="text-center">
                <div class="btn-group">

                <a class="btn btn-sm btn-success" href="{{ URL::to('shipments/' . $value->id) }}">Pokaż szczegóły</a>


                <a class="btn btn-sm btn-info" href="{{ URL::to('shipments/' . $value->id . '/edit') }}">Edytuj</a>
              </div><br>

            </td>
        </tr>
    @endforeach
    </tbody>
</table>

  </div>
@endsection
