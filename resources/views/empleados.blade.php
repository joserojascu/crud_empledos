@extends('layout/plantilla')

@section('tituloPagina', 'Crear empleado')

@section('contenido')


    <div class="card-body mx-auto" style="width: 60%;">
        <h5>Crear empleado</h5>
        <br>
        <p class="card-text">
        <form action="{{ route('empleados.store') }}" method="POST">
            @csrf
            <div class="row">
                <div class="col-md-6" style="text-align: right">
                    <label for="nombre">Nombre Completo *</label>
                </div>
                <div class="col-md-6" style="text-align: right">
                    <input type="text" name="nombre" placeholder="Nombre completo de empleado" class="form-control"
                        required>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-6" style="text-align: right">
                    <label for="correo">Correo Electronico *</label>
                </div>
                <div class="col-md-6">
                    <input type="text" name="correo" placeholder="Correo electrónico" class="form-control" required>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-6" style="text-align: right">
                    <label for="sexo">Sexo *</label>
                </div>
                <div class="col-md-6">
                    <label>
                        <input type="radio" name="sexo" value="M" checked>
                        Masculino
                    </label>
                    <br>
                    <label>
                        <input type="radio" name="sexo" value="F">
                        Femenino
                    </label>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-6" style="text-align: right">
                    <label for="area_id">Area *</label>
                </div>
                <div class="col-md-6">
                    <select name="area_id" class="form-control">
                        @foreach ($areas as $item)
                            <option value="{{ $item->id }}"> {{ $item->nombre }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-6" style="text-align: right">
                    <label for="descripcion">Descripción *</label>
                </div>
                <div class="col-md-6">
                    <textarea name="descripcion" placeholder="Descripcón de la experiencia del empleado" id="" cols="10"
                        rows="2" class="form-control"></textarea>
                </div>
            </div>
            <br>

            <div class="row">
                <div class="col-md-6">

                </div>
                <div class="col-md-6">
                    <input type="checkbox" name="boletin" value="1"> <label for="paterno"> Deseo recibir boletin
                        informativo</label>
                </div>
            </div>
            <br>

            <div class="row">
                <div class="col-md-6" style="text-align: right">
                    <label for="roles">Roles *</label>
                </div>
                <div class="col-md-6">
                    @foreach ($roles as $id => $nombre)
                        <div>
                            <input type="checkbox" name="roles[]" value="{{ $id }}">
                            <label>{{ $nombre }}</label>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="row">
                <div class="col-md-6" style="text-align: right">

                </div>
                <div class="col-md-6">
                    <button class="btn btn-primary">
                        Guardar
                    </button>
                </div>
            </div>

        </form>
        </p>
    </div>

@endsection
