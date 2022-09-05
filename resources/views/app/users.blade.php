@extends('layouts.app')

@section('content')
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nombre</th>
        <th scope="col">Fecha Nacimiento</th>
        <th scope="col">Email</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($users as $user)
      <tr>
        <th scope="row">{{$user->id}}</th>
        <td>{{$user->name}}</td>
        <td>{{$user->date_of_birth}}</td>
        <td>{{$user->email_verified_at}}</td>
      </tr>
      @endforeach
     
      <tr>
    
    </tr>
    </tbody>


  </table>
  {{$users->render()}}
<a class="btn btn-primary" href="{{route('users.create')}}">crear usuario</a>
@endsection