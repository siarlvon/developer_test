@extends('themes.app')

@section('title', 'Nueva dirección para un cliente')

@section('content')
    <h3>
        Registrar dirección
    </h3>

    <form action="{{ route('direccion.store') }}" method="POST">
        @csrf
        <div class="row">
            <div class="col-sm-12">
                <label for="addressInput" class="form-label">Dirección</label>
                <input type="text" name="address" id="addressInput" class="form-control" placeholder="..."
                    value="{{ old('address') }}">
            </div>
            <div class="col-sm-6">
                <label for="cityInput" class="form-label">Ciudad</label>
                <input type="text" name="city" id="cityInput" class="form-control" placeholder="..."
                    value="{{ old('city') }}">
            </div>
            <div class="col-sm-6">
                <label for="countryInput" class="form-label">País</label>
                <input type="text" name="tel" id="countryInput" class="form-control" placeholder="..."
                    value="{{ old('country') }}">
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
