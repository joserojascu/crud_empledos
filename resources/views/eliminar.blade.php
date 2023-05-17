@extends('layout/plantilla')

@section("tituloPagina", "Eliminar")

@section('contenido')
<style>
    table {
        width: 100%;
        border-collapse: collapse;
    }

    th,
    td {
        padding: 10px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }

    th i {
        margin-right: 5px;
        border-color: black;
    }

    th,
    td {
        border: none;
    }

    table {
        width: 100%;
        border-collapse: collapse;
    }

    a{
        color: black;
        /* background-color: black; */
    }


    tbody tr:nth-child(odd) {
        background-color: #f9f9f9;
    }

    tbody tr:nth-child(even) {
        background-color: #ffffff;
    }
</style>
{{-- <div class="card"> --}}
    <h5 >Eliminar una Empleado</h5>

    <p class="card-text">
        <div class="table table-responsive">
            <div class="alert alert-danger" role="alert">
                Estas seguro de eliminar este registro
            </div>
            <table>
                <thead>
                    <tr>
                        <th><i class="fas fa-user"></i>Nombre</th>
                        <th><i class="fas fa-envelope"></i>Email</th>
                        <th><i class="fas fa-venus-mars"></i>Sexo</th>
                        <th><i class="fas fa-briefcase"></i>Area</th>
                        <th><i class="fas fa-envelope"></i>Boletin</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{$empleados->nombre}}</td>
                        <td>{{$empleados->email}}</td>
                        <td>{{$empleados->sexo}}</td>
                        <td>{{$empleados->area_id}}</td>
                        <td>{{$empleados->boletin}}</td>
                    </tr>
                </tbody>
            </table>
            <br>
            <form action="{{ route('empleados.destroy', $empleados->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <a href="{{ route("empleados.index") }}" class="btn btn-info" >
                    <span class="fas fa-undo-alt"></span> Regresar
                </a>
                <button class="btn btn-danger">
                    <span class="fas fa-user-times"></span> Eliminar 
                </button>
            </form>
        </div>
        <div class="row">
            <div class="col-sm-12">
            </div>
        {{-- </div> --}}
        </p>
@endsection

