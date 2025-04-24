@extends('home')

<!-- llamamos el nombre del yield para que el contenido cambie -->
@section('content-dinamico')
    {{-- @php
        dd($patients)
    @endphp --}}
    <h2 class="text-center title">Listado de Pacientes</h2>

    <a href="{{url('/patients/create')}}" class="btn">Registro de Pacientes</a>

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
                    <td><button>Editar</button></td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection

