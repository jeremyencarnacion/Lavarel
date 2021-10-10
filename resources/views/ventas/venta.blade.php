<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Venta</title>
    @include('layout.script_cabezera');
</head>
<body>
    
    @include('layout.script_pie');
    <div class =  "container">
    <h1>Reguistro de Venta</h1>
    <h3><a class="btn btn-sm btn-success" href="{{url('ventas/create')}}">Nueva Registro de Ventas <i class="fas fa-plus"></i></a></h3>
<div class="row">
               @if(Session('exito'))
               <div class="alert alert-success">
                    {{session('exito')}}
               </div>
               @endif
               @if(Session('error'))
               <div class="alert alert-danger">
                    {{session('error')}}
               </div>
               @endif
          </div>

    <table class="table table-striped"><thead>
    <tr>
      <th scope="col">Total</th>
      <th scope="col">Apellido</th>
      <th scope="col">Nombre</th>
      <th scope="col">Fechaavencimiento</th>
      <th scope="col">Igv</th>
      <th scope="col">Opciones</th>
    </tr>
  </thead>
  <tbody>
    @foreach($registros as $registro)
    <tr>
      <th scope="row">{{$registro->Total}}</th>
      <td>{{$registro->Apellido}}</td>
      <td>{{$registro->Nombre}}</td>
      <td>{{$registro->Fechaavencimiento}}</td>
      <td>{{$registro->IGV}}</td>
      <td>
          <a class="btn btn-sm btn-info" href="{{route('ventas.edit',$registro->id)}}"><i class="fas fa-pencil-alt"></i></a>
          <a class="btn btn-sm btn-danger" href="{{route('ventas.show',$registro->id)}}"><i class="fas fa-trash-alt"></i></a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
    </div>
@include('layout.script_pie')
</body>
</html>