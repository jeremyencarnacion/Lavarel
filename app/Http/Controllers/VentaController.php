<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Models\Ventas;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class VentaController extends Controller
{
    public function index()
    {
        
        $registros=Ventas::get();
        return view ('ventas.venta',compact('registros'));
        // <return $registros;
    }
    public function create()
    {
        return view ('ventas.reguistre'); 
    }
    public function store(Request $request)
    {
        // <return $request;
        $vent=new Ventas;
        $vent->Total=$request->txt_Total;
        $vent->Apellido=$request->txt_Apellido;
        $vent->Nombre=$request->txt_Nombre;
        $vent->Fechaavencimiento=$request->txt_Fechaavencimiento;
        $vent->IGV=$request->txt_IGV;

        $vent->save();
        if ($vent-> save()) {
            Session::flash('exito', 'Se ha registrado correctamente');
            return Redirect::to ('ventas');
        }
       else {
           Session::flash('error','Ocurrio un problema, verifique');
           return Redirect::to ('ventas.create');
       }
        }

    public function show($id)
    {
    }
    public function edit($id)
    {
    }
    public function update(Request $request, $id)
    {
    }
    public function destroy($id)
    {
    }
}
