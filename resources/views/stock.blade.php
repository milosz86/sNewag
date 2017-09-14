@extends('layouts.app')

@section('content')
  <div class="container">

    <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="text-center">STAN MAGAZYNOWY</h3>
      </div>
    </div>


<table class="table table-responsive" style="background:white;">
  <thead>
      <tr>

          <td class="text-center"><h4>Nazwa</h4></td>
          <td class="text-center"><h4>Mianownica</h4></td>
          <td class="text-center"><h4>Ilość</h4></td>

      </tr>
  </thead>
  <tbody>
  @foreach($summary as $key => $value)
      <tr>

          <td class="text-center">{{ $value->part->name }}</td>
          <td class="text-center">{{ $value->part->number }}</td>
          <td class="text-center">{{ $value->sum }}</td>

      </tr>
  @endforeach
  </tbody>
</table>

  </div>
@endsection
