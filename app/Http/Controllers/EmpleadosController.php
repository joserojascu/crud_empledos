<?php

namespace App\Http\Controllers;

use App\Models\Areas;
use App\Models\Empleados;
use App\Models\Roles;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EmpleadosController extends Controller
{
    //
    public function index()
    {
        $datos = DB::table('empleados')
    ->join('areas', 'empleados.area_id', '=', 'areas.id')
    ->select('empleados.id','empleados.nombre', 'empleados.email', 'empleados.sexo', 'areas.nombre as nombre_area', 'empleados.boletin', 'empleados.descripcion')
    ->get();
        // return $datos;
        return view('inicio', compact('datos'));
    }
    public function create()
    {
        //
        $areas = Areas::all();
        $roles = Roles::pluck('nombre', 'id');
        return view('empleados', compact('areas', 'roles'));
        // return $areas;
    }
    public function store(Request $request)
    {
        //
        $empleados = new Empleados();
        $empleados->nombre = $request->post('nombre');
        $empleados->email = $request->post('correo');
        $empleados->sexo = $request->post('sexo');
        $empleados->area_id = $request->post('area_id');
        $empleados->descripcion = $request->post('descripcion');
        $empleados->boletin = $request->post('boletin');
        $empleados->save();

        return redirect()->route("empleados.index")->with("success", "Agregado con exito!");
    }
    public function show($id)
    {
        //
        //servira para obtener un registro de nuestra tabla
        $empleados = Empleados::find($id);
        
        return view("eliminar" , compact('empleados'));
        // return $empleados;
    }
    public function edit($id)
    {
        $empleados = Empleados::find($id);
        $areas = Areas::all();
        $roles = Roles::pluck('nombre', 'id');
        return view("actualizar" , compact('empleados', 'areas','roles'));
        //
    }
    public function update(Request $request, $id)
    {
        //
        $empleados = Empleados::find($id);
        $empleados->nombre = $request->post('nombre');
        $empleados->email = $request->post('correo');
        $empleados->sexo = $request->post('sexo');
        $empleados->area_id = $request->post('area_id');
        $empleados->descripcion = $request->post('descripcion');
        $empleados->boletin = $request->post('boletin');
        $empleados->save();

        return redirect()->route("empleados.index")->with("success", "Actualizado con exito!");
    }
    public function destroy($id)
    {
        //
        $empleados = Empleados::find($id);
        $empleados->delete();
        return redirect()->route("empleados.index")->with("success", "Eliminado con exito!");
    }

}
