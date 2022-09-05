@extends('layouts.app')
@section('content')

<form action="{{ url('/users')}}" method="post" enctype="multipart/form-data">
@csrf
@include('app.form',['modo'=>'Crear']);

</form>
@endsection
