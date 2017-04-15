@extends('layouts.app')

@section('content')
  <div class="container">


  <h3>Dane pojazdów:</h3>

<br>

  <table class="table table-responsive">
    <thead>
        <tr>
            <td class="text-center"><h4>Nazwa pojazdu</h4></td>
            <td class="text-center"><h4>Typ</h4></td>
            <td class="text-center"><h4></h4></td>
        </tr>
    </thead>
    <tbody>
    @foreach($vehicles as $key => $value)
        <tr>





            <td class="text-center">{{ $value->name }}
              {{ Form::open(array('url' => 'vehicles/' . $value->id)) }}
                  {{ Form::hidden('_method', 'DELETE') }}
                  {{ Form::submit('Usuń pojazd', array('class' => 'btn btn-xs btn-danger')) }}
              {{ Form::close() }}
            </td>
            <td class="text-center">{{ $value->type }}</td>



            <td class="text-center">
                <div class="btn-group-vertical">

                <a class="btn btn-xs btn-success" href="{{ URL::to('vehicles/' . $value->id) }}">Szczegóły</a>


                <a class="btn btn-xs btn-info" href="{{ URL::to('vehicles/' . $value->id . '/edit') }}">Edytuj</a>
              </div><br>

            </td>
        </tr>
    @endforeach
    </tbody>
</table>

  </div>
@endsection
