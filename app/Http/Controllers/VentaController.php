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
        $request->validate(
        [
            'txt_Total'=>'required',
            'txt_Apellido'=>'required',

        ]);
        
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
           Session::flash('error','Ocurrio un error al registrar, verifique');
           return Redirect::to ('ventas.create');
       }
        }

    public function show($id)
    {
       //return "Estoy en el metodo show";
       $vent=Ventas::findOrFail($id);
       return view ('ventas.eliminar',compact('vent'));
    }
    public function edit($id)
    {
 //return 'el id de este campo es'.$id;
    $vent=Ventas::findOrFail($id);
    return view ('ventas.editar',compact('vent')); 
    }
    public function update(Request $request, $id)
    
    {
        //  return "Estoy en el metodo de";
        $vent=Ventas::findOrFail($id);
        $vent->Total=$request->txt_Total;
        $vent->Apellido=$request->txt_Apellido;
        $vent->Nombre=$request->txt_Nombre;
        $vent->Fechaavencimiento=$request->txt_Fechaavencimiento;
        $vent->IGV=$request->txt_IGV;

        $vent->save();
        if ($vent-> save()) {
            Session::flash('exito', 'Se ha actualizado correctamente');
            return Redirect::to ('ventas');
        }
       else {
           Session::flash('error','Ocurrio un problema, verifique');
           return Redirect::to ('ventas/'.$id.'/edit');
       }
    }
    public function destroy($id)
    {
        //return "estoy en el metodo destroy";
        ventas::destroy($id);

                Session::flash('exit',"departamento eliminado con exito");
                return Redirect::to('ventas');
    }
}