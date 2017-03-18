@extends('layouts.app')

@section('content')
  <div class="container">

<h1>Profil użytkownika</h1>

<hr>


@foreach ($users as $user)
 <h2>{{$user->name}}&nbsp{{$user->surname}}</h2>
 <h3>Przydzielony serwis:&nbsp{{$user->service->name}}</h3>
 <p>Id serwisu:&nbsp{{$user->service_id}}</p>

 </br>
 @endforeach

</div>
@endsection
