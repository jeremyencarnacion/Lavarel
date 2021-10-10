!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Eliminar ventas</title>
     @include('layout.script_cabezera');


</head>
<body>
     <div class="container">
     <h2>eliminar</h2>
     
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
          <form action="{{route('ventas.destroy',$vent->id)}}" method="POST">
              @method('DELETE')
               @csrf
               <center>
                   <h1>ATENCION esta punto de eliminar el siguiente registro</h1>
                   <br>
                   <br>
                   <br>
                   <h4>
                       <b>{{$vent->Total}} {{$vent->Nombre}}</b>
                    </4>
                </center>
                <center>
                    <h4>Deseas eliminar esta registro</h4>
                    <button type="submit" class="btn btn-primary">Eliminar</button>
                    <button type="submit" class="btn btn-primary" href="{{url ('ventas')}}">Volver</button>
                </center>
          </form>
</div>
@include('layout.script_pie');
</body>
</html>