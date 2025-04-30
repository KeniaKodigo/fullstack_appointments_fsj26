@extends('home')

<!-- llamamos el nombre del yield para que el contenido cambie -->
@section('content-dinamico')
    {{-- @php
        dd($patients)
    @endphp --}}
    <h2 class="text-center title">Listado de Pacientes</h2>

    @if (session('success'))
        <div class="position-fixed top-0 end-0 p-3" style="z-index: 1055">
            <div id="toastSuccess" class="toast align-items-center text-white bg-success border-0 show" role="alert" aria-live="assertive" aria-atomic="true">
                <div class="d-flex">
                    <div class="toast-body">
                        {{ session('success') }}
                    </div>
                    <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
                </div>
            </div>
        </div>
    @endif

    <a href="{{url('/patients/create')}}" class="btn btn-patient">Registro de Pacientes</a>

    <table class="table my-4">
        <thead>
            <th>#</th>
            <th>Nombre</th>
            <th>Genero</th>
            <th>Telefono</th>
            <th>Correo Electronico</th>
            <th>Acciones</th>
        </thead>
        <tbody>
            @foreach ($patients as $item)
                <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->name}}</td>
                    <td>{{$item->gender}}</td>
                    <td>{{$item->phone}}</td>
                    <td>{{$item->email}}</td>
                    <td>
                        <a href="{{route('patients.edit', $item->id)}}" class="btn btn-warning"><i class="bi bi-pencil-square"></i></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <!-- Agregamos esto para mostrar la paginación -->
    <div class="d-flex justify-content-center">
        {{ $patients->links() }}
    </div>
@endsection

