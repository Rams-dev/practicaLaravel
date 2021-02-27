<label for="Nombre">Nombre</label>
<input type="text" value="{{ $empleado->Nombre}}" name="Nombre">
<br>
<label for="ApellidoPaterno">Apellido Paterno</label>

<input type="text" value="{{ $empleado->ApellidoPaterno}}" name="ApellidoPaterno">
<br>
<label for="ApellidoMaterno">Apellido Materno</label>
<input type="text" value="{{ $empleado->ApellidoMaterno}}" name="ApellidoMaterno">
<br>

<label for="Correo">Correo</label>
<input type="email" value="{{ $empleado->Correo}}" name="Correo">
<br>

<label for="Foto">Foto</label>
<img src="{{ asset('storage').'/'.$empleado->Foto }}" alt="">

<input type="file" value="" name="Foto">
<br>

<input type="submit" value="Enviar">
