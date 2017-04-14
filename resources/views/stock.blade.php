@extends('layouts.app')

@section('content')
  <div class="container">


  <h1>Stan Magazynowy</h1>

<br>

<table class="table table-responsive">
  <thead>
      <tr>

          <td class="text-center"><h3>Nazwa</h3></td>
          <td class="text-center"><h3>Mianownica</h3></td>
          <td class="text-center"><h3>Ilość</h3></td>

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
