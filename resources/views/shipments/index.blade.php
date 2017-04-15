@extends('layouts.app')

@section('content')
  <div class="container">


  <h3>Części przesłane/wykorzystane:</h3>

<br>

  <table class="table table-responsive">
    <thead>
        <tr>
            <td class="text-center"><h4>Nazwa</h4></td>
            <td class="text-center"><h4>Status</h4></td>
            <td class="text-center"><h4></h4></td>
        </tr>
    </thead>
    <tbody>
    @foreach($shipments as $key => $value)
        <tr>


            <td class="text-center">{{ $value->part->name }}</td>
            <td class="text-center">{{ $value->status }}<br>{{ abs($value->quantity) }}&nbspszt.

              {{ Form::open(array('url' => 'shipments/' . $value->id)) }}
              {{ Form::hidden('_method', 'DELETE') }}
              {{ Form::submit('Usuń wpis', array('class' => 'btn btn-xs btn-danger')) }}
              {{ Form::close() }}

            </td>
            <td class="text-center">


                  <div class="btn-group-vertical">
                  <a class="btn btn-xs btn-success" href="{{ URL::to('shipments/' . $value->id) }}">Szczegóły</a>
                  <a class="btn btn-xs btn-info" href="{{ URL::to('shipments/' . $value->id . '/edit') }}">Edytuj</a>
                </div><br>
                {{ $value->date }}


            </td>
        </tr>
    @endforeach
    </tbody>
</table>



  </div>
@endsection
