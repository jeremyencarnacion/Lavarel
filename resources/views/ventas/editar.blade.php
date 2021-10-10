<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>actualizar</title>
     @include('layout.script_cabezera');


</head>
<body>
     <div class="container">
     <h2>editar</h2>
     
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


     <hr>
          <form action="{{route('ventas.update',$vent->id)}}" method="POST">
              @method('PATCH')
               @csrf
               <div class="form-group">
                    <label for="exampleInputEmail1">Total</label>
                    <input type="text" class="form-control" id="txt_Total" name="txt_Total" required value="{{$vent->Total}}" >
               </div>
               <div class="form-group">
                    <label for="exampleInputEmail1">Apellido</label>
                    <input type="text" class="form-control" id="txt_Apellido" name="txt_Apellido" required value="{{$vent->Apellido}}">
               </div>
               <div class="form-group">
                    <label for="exampleInputEmail1">Nombre</label>
                    <input type="text" class="form-control" id="txt_Nombre" name="txt_Nombre"required value="{{$vent->Nombre}}">
               </div>
               <div class="form-group">
                    <label for="exampleInputEmail1">Fechaavencimiento</label>
                    <input type="date" class="form-control" id="txt_Fechaavencimiento" name="txt_Fechaavencimiento" required value="{{$vent->Fechaavencimiento}}">
               </div>
               <div class="form-group">
                    <label for="exampleInputEmail1">IGV</label>
                    <input type="text" class="form-control" id="txt_IGV" name="txt_IGV" value="{{$vent->IGV}}">
               </div>
               <button type="submit" class="btn btn-primary">Editar</button>
          </form>
</div>
@include('layout.script_pie');
</body>
</html>