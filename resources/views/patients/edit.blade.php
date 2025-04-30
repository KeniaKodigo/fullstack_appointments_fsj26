@extends('home')

@section('content-dinamico')
    <h2 class="title">Actualizacion de datos</h2>
    <form action="{{route('patients.update', $patient->id )}}" method="post">
        {{-- aclaramos que la peticion de la ruta es un PATCH --}}
        @method('PATCH')
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Nombre Completo</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $patient->name }}">
            @error('name')
                <small class="text-danger fw-bold">{{ $message }}</small>
            @enderror
        </div>
        <div class="mb-3">
            <label for="name" class="form-label">Direccion</label>
            <input type="text" class="form-control" name="address" value="{{ $patient->address }}">
            @error('address')
                <small class="text-danger fw-bold">{{ $message }}</small>
            @enderror
        </div>
        <div class="mb-3">
            <label for="name" class="form-label">Telefono</label>
            <input type="text" class="form-control" name="phone" value="{{ $patient->phone }}">
            @error('phone')
                <small class="text-danger fw-bold">{{ $message }}</small>
            @enderror
        </div>
        <div class="mb-3">
            <label for="name" class="form-label">Correo Electronico</label>
            <input type="text" class="form-control" name="email" value="{{ $patient->email }}">
            @error('email')
                <small class="text-danger fw-bold">{{ $message }}</small>
            @enderror
        </div>
        <div class="mb-3">
            <input type="submit" class="btn btn-dark" value="Actualizar Datos">
        </div>
    </form>
@endsection