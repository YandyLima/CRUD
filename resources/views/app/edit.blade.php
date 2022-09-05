@extends('layouts.app')
@section('content')
    <div class="d-grid gap-3">

        <div class="card p-5 bg-light border">

            <form action="{{ url('/users/' . $user->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                {{ method_field('PATCH') }}
                @include('app.form', ['modo' => 'Editar']);

            </form>
     
        </div>
    </div>
@endsection