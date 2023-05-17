@extends('layout/plantilla')

@section('tituloPagina', 'Crud')

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
<!-- <div class="card"> -->

<div class="card-body">
    <h5>Lista de empleados</h5>
    <div class="row">
        <div class="col-sm-12">
            @if ($mensaje = Session::get('success'))
            <div class="alert alert-success" role="alert">
                {{ $mensaje }}
            </div>
            @endif


        </div>
    </div>
    <p>

        <a href="{{route('empleados.create')}}" class="btn" style="background-color: #6495ED; margin-left:90%;">


            <span style="color: white;" class="fas fa-user-plus"></span> Crear
        </a>
    </p>

    <p class="card-text">
    <div class="table table-responsive">
        <table>
            <thead>
                <tr>
                    <th><i class="fas fa-user"></i>Nombre</th>
                    <th><i class="fas fa-envelope"></i>Email</th>
                    <th><i class="fas fa-venus-mars"></i>Sexo</th>
                    <th><i class="fas fa-briefcase"></i>Area</th>
                    <th><i class="fas fa-envelope"></i>Boletin</th>
                    <th>Modificar</th>
                    <th></i>Eliminar</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($datos as $item)
                <tr>
                    <td>{{$item->nombre}}</td>
                    <td>{{$item->email}}</td>
                    <td>{{$item->sexo}}</td>
                    <td>{{$item->nombre_area}}</td>
                    <td>{{$item->boletin}}</td>
                    <td> <form action="{{ route("empleados.edit", $item->id) }}" method="GET">
                        <button >
                            <i class="fas fa-edit"></i>
                        </button>    
                    </form>
                </td>
                <td> <form action="{{ route("empleados.show", $item->id) }}" method="GET">
                        <button >
                            <i class="fas fa-trash"></i>
                        </button>
                    </form></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="row">
        <div class="col-sm-12">

        </div>
    </div>
    </p>
</div>
<!-- </div> -->

@endsection