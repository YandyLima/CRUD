<div class="d-grid gap-3 container mt-5">

    <div class="card p-3 col-md-8 mx-auto bg-light border">

        <h1 class="row justify-content-between">
            <span class="col-6">{{ $modo }} Usuario </span>
            
            <a class="btn btn-outline-success col-3 mb-1 me-3" href="{{ url('users/') }}">Regresar</a>
        </h1>
        <div class="mb-3">
            <label for="name" class="form-label">Nombre</label>
            <input  type="text" class="form-control" value="{{ isset($user->name) ? $user->name : old('name') }} " id="name"
                name="name">
               @error('name')
               <div class="alert alert-danger" role="alert">
                {{ $message }}
              </div>
               @enderror 

        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Primer Apellido</label>
            <input  type="text" class="form-control"
                value="{{ isset($user->ApellidoPaterno) ? $user->ApellidoPaterno : old('ApellidoPaterno') }}" id="ApellidoPaterno"
                name="ApellidoPaterno">
                @error('ApellidoPaterno')
                <div class="alert alert-danger" role="alert">
                 {{ $message }}
               </div>
                @enderror
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Segundo Apellido</label>
            <input  type="text" class="form-control"
                value="{{ isset($user->ApellidoMaterno) ? $user->ApellidoMaterno : old('ApellidoMaterno') }}" id="ApellidoMaterno"
                name="ApellidoMaterno">
                @error('ApellidoMaterno')
                <div class="alert alert-danger" role="alert">
                 {{ $message }}
               </div>
                @enderror
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Fecha de Nacimiento</label>
            <input  type="date" class="form-control" value="{{ isset($user->FechaNac) ? $user->FechaNac : old('FechaNac') }}"
                id="FechaNac" name="FechaNac">
                @error('FechaNac')
                <div class="alert alert-danger" role="alert">
                 {{ $message }}
               </div>
                @enderror
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">E-Mail</label>
            <input  type="email" class="form-control" value="{{ isset($user->email) ? $user->email : old('email') }}"
                id="email" name="email">
                @error('email')
                <div class="alert alert-danger" role="alert">
                 {{ $message }}
               </div>
                @enderror
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Contraseña</label>
            <input  type="text" class="form-control" value="{{ isset($user->password) ? $user->password : old('password') }}"
                id="password" name="password">
                @error('password')
                <div class="alert alert-danger" role="alert">
                 {{ $message }}
               </div>
                @enderror
        </div>

        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Foto</label>
            @if (isset($user->Foto))
                <img src="{{ asset('storage') . '/' . $user->Foto }}" width="100" alt="">
            @endif
            <input type="file" class="form-control mt-3" id="Foto" name="Foto">

        </div>

        <button type="submit" class="btn btn-primary col-4 mx-auto">{{ $modo }} Datos</button>

    </div>
</div>
 