@extends('themes.app')

@section('title', 'Listado de clientes')

@section('content')
    <h3>
        Listado de clientes
    </h3>

    <table class="table table-striped">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Nombre</th>
                <th scope="col">E-mail</th>
                <th scope="col">Teléfono</th>
                <th scope="col">Opciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($clientes as $cliente)
                <tr>
                    <td>
                        {{ $cliente->name }}
                    </td>
                    <td>
                        {{ $cliente->email }}
                    </td>
                    <td>
                        {{ $cliente->tel }}
                    </td>
                    <td>
                        <a href=""><i class="fa-solid fa-pen-to-square"></i></a>
                        <a href=""><i class="fa-solid fa-trash"></i></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
