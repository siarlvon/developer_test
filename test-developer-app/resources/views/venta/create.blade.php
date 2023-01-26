@extends('themes.app')

@section('title', 'Nueva venta para un cliente')

@section('content')
    <h3>
        Registrar venta
    </h3>

    <form action="{{ route('venta.store') }}" method="POST">
        @csrf
        <div class="row">
            <div class="col-sm-6">
                <label for="nameInput" class="form-label">Nombre</label>
                <input type="text" name="name" id="nameInput" class="form-control" placeholder="..."
                    value="{{ old('name') }}">
            </div>
            <div class="col-sm-6">
                <label for="stateInput" class="form-label">Estado</label>
                <input type="text" name="state" id="stateInput" class="form-control" placeholder="..."
                    value="{{ old('state') }}">
            </div>
            <div class="col-sm-12 text-end my-2">
                <button type="submit" class="btn btn-primary">
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
