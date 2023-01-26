@extends('themes.app')

@section('title', 'Nuevo cliente')

@section('content')
    <h3>
        Registrar cliente
    </h3>

    <form action="{{ route('cliente.store') }}" method="POST">
        @csrf
        <div class="row">
            <div class="col-sm-12">
                <label for="nameInput" class="form-label">Nombre del cliente</label>
                <input type="text" name="name" id="nameInput" class="form-control" placeholder="..."
                    value="{{ old('name') }}">
            </div>
            <div class="col-sm-6">
                <label for="emailInput" class="form-label">E-mail del cliente</label>
                <input type="email" name="email" id="emailInput" class="form-control" placeholder="..."
                    value="{{ old('email') }}">
            </div>
            <div class="col-sm-6">
                <label for="telInput" class="form-label">Teléfono del cliente</label>
                <input type="tel" name="tel" id="telInput" class="form-control" placeholder="..."
                    value="{{ old('tel') }}">
            </div>
            <div class="col-sm-12 text-end my-2">
                <button type="submit" class="btn btn-secondary">
                    Guardar
                </button>
            </div>
        </div>
    </form>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
@endsection
