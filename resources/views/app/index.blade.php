@extends('layouts.app')
@section('content')
    <div class="d-grid gap-3">

        <div class="card text-center p-5 bg-light border">

            @if (Session::has('mensaje'))
                <div class="alert alert-success" role="alert">
                    {{ Session::get('mensaje') }}
                </div>
            @endif
            <div class="card-header">
                <ul class="nav nav-pills card-header-pills">
                    <li class="nav-item">
                        <a class="btn btn-success" href="{{ url('users/create') }}">Nuevo Usuario</a>
                    </li>
                </ul>
            </div>
            <div class="card-body">
                <h5 style="background-color:#376161; color:white; margin-bottom:0 " class="card-title py-3">
                    <td colspan="8" class="text-center">
                        Mostrar la lista de usuarios
                    </td>
                </h5>
                <table class="table table-dark table-striped">
                    <thead class="thead-light">

                        <tr>
                            <th>#</th>
                            <th>Nombre</th>
                            <th>Apellido Paterno</th>
                            <th>Apellido Materno</th>
                            <th>Fecha de Nacimiento</th>
                            <th>E-Mail</th>
                            <th>Foto</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>

                    <tbody>
                        @php( $count=1)
                      
                        @foreach ($users as $user)
                            <tr>
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->ApellidoPaterno }}</td>
                                <td>{{ $user->ApellidoMaterno }}</td>
                                <td>{{ $user->FechaNac }}</td>
                                <td>{{ $user->email }}</td>
                                <td>
                                    <img src="{{ asset('storage') . '/' . $user->Foto }}" width="100" alt="">
                                </td>
                                <td colspan="2">
                                    <a class="btn btn-primary" href="{{ url('/users/' . $user->id . '/edit') }}">
                                        Editar
                                    </a>
                                    <button data-bs-toggle="modal" data-bs-target="#modal{{ $user->id }}" type="button"
                                        class="btn btn-danger">Borrar</button>
                                </td>
                            </tr>
                            <!-- Modal -->
                            <div class="modal fade" id="modal{{ $user->id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
                                aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">¿Está seguro de eliminar este
                                                Usuario?</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            Esta acción no se puede revertir
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-success"
                                                data-bs-dismiss="modal">Cancelar</button>
                                            <form action="{{ route('users.destroy', $user->id) }}" method="POST">
                                                @csrf
                                                {{ method_field('DELETE') }}
                                                <button class="btn btn-danger" type="submit">Borrar</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </tbody>

                </table>
                {{ $users->render() }}
            </div>
        </div>

    </div>
@endsection
