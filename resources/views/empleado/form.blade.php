
<h1>{{$modo}} empleados</h1>


<label for="Nombre">Nombre</label>
<input type="text" value="{{ isset($empleado->Nombre) ? $empleado->Nombre : '' }}" name="Nombre">
<br>
<label for="ApellidoPaterno">Apellido Paterno</label>

<input type="text" value="{{ isset($empleado->ApellidoPaterno) ? $empleado->ApellidoPaterno : ''}}" name="ApellidoPaterno">
<br>
<label for="ApellidoMaterno">Apellido Materno</label>
<input type="text" value="{{ isset($empleado->ApellidoMaterno) ? $empleado->ApellidoMaterno : '' }}" name="ApellidoMaterno">
<br>

<label for="Correo">Correo</label>
<input type="email" value="{{ isset($empleado->Correo) ? $empleado->Correo : ''}}" name="Correo">
<br>

<label for="Foto">Foto</label>
@if(isset($empleado->Foto))
<img src="{{ asset('storage').'/'.$empleado->Foto }}" width="100" heigth="100" alt="">
@endif
<input type="file" value="" name="Foto">
<br>

<input type="submit" value="{{$modo}} datos">
