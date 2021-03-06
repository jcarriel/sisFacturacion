@extends ('layouts.admin') 
@section ('contenido')
<div class="row">
	<div class="col-lg-4 col-md-6 col-dm-6 col-xs-12">
	<h3>Editar Cliente: {{$persona->nombre}}</h3>
	@if(count($errors)>0)
		<div class="alert alert-danger">
			<ul>
				@foreach ($errors->all() as $error)
					<li>
					{{$error}}
					</li>
				@endforeach
			</ul>
		</div>
		@endif
		</div>
</div>
{!! Form::model($persona,['method'=>'PATCH','route'=>['cliente.update',$persona->idpersona]]) !!}
{{Form::token()}}
<div class="row">	
<div class="col-lg-4 col-md-6 col-dm-6 col-xs-12">
	<div class="form-group">
			<label for="nombre">Empresa</label>
			<input type="text" name="nombre" value="{{$persona->nombre}}" class="form-control" placeholder="Nombre...">
		</div>
</div>

<div class="col-lg-4 col-md-6 col-dm-6 col-xs-12">
	<div class="form-group">
			<label>Documentos</label>
			<select name="tipo_documento" class="form-control">
			@if($persona->tipo_documento=='Cc')
				<option value="Cc" selected> Cedula </option>
				<option value="NIT"> NIT </option>
				<option value="PASSP"> PASSPORT </option>
				<option value="Registmerca"> Registro Mercantil </option>
			@elseif($persona->tipo_documento=='NIT')
			   <option value="Cc"> Cedula </option>
				<option value="NIT" selected> NIT </option>
				<option value="PASSP"> PASSPORT </option>
				<option value="Registmerca"> Registro Mercantil </option>
				@elseif($persona->tipo_documento=='PASSP')
			   <option value="Cc"> Cedula </option>
				<option value="NIT"> NIT </option>
				<option value="PASSP" selected> PASSPORT </option>
				<option value="Registmerca"> Registro Mercantil </option>
				@else($persona->tipo_documento=='Registmerca')
			   <option value="Cc"> Cedula </option>
				<option value="NIT"> NIT </option>
				<option value="PASSP"> PASSPORT </option>
				<option value="Registmerca" selected> Registro Mercantil </option>
			@endif
			</select>
		</div>
</div>

<div class="col-lg-4 col-md-6 col-dm-6 col-xs-12">
	<div class="form-group">
			<label for="num_documento">Numero de documento</label>
			<input type="text" name="num_documento" value="{{$persona->num_documento}}" class="form-control" placeholder="Numero de identificacion...">
		</div>
</div>

<div class="col-lg-4 col-md-6 col-dm-6 col-xs-12">
	<div class="form-group">
			<label for="nombrecontacto">Representante</label>
			<input type="text" name="nombrecontacto" value="{{$persona->nombrecontacto}}" class="form-control" placeholder="Persona de contacto">
		</div>
</div>

<div class="col-lg-4 col-md-6 col-dm-6 col-xs-12">
	<div class="form-group">
			<label for="telefono">Telefono</label>
			<input type="text" name="telefono" value="{{$persona->telefono}}" class="form-control" placeholder="telefono...">
		</div>
</div>

<div class="col-lg-4 col-md-6 col-dm-6 col-xs-12">
	<div class="form-group">
			<label for="email">Email</label>
			<input type="email" name="email" value="{{$persona->email}}" class="form-control" placeholder="email...">
		</div>
</div>

<div class="col-lg-4 col-md-6 col-dm-6 col-xs-12">
	<div class="form-group">
			<label for="nombre">Direcci??n</label>
			<input type="text" name="direccion" value="{{$persona->direccion}}" class="form-control" placeholder="Direcci??n...">
		</div>
</div>

<div class="col-lg-4 col-md-6 col-dm-6 col-xs-12">
	<div class="form-group">
			<label>Tipo de cuenta</label>
			<select name="tipocuenta" class="form-control">
				<option value="">Seleccione Opcci??n </option>
				<option value="Ahorros"> Ahorros </option>
				<option value="Corriente"> Corriente </option>
			</select>
		</div>
</div>

<div class="col-lg-4 col-md-6 col-dm-6 col-xs-12">
	<div class="form-group">
			<label for="banco">Banco</label>
			<input type="banco" name="banco" value="{{$persona->banco}}"  class="form-control" placeholder="banco">
		</div>
</div>
<div class="col-lg-4 col-md-6 col-dm-6 col-xs-12">
	<div class="form-group">
			<label for="numerodecuenta">Numero de cuenta</label>
			<input type="number" name="numerodecuenta" value="{{$persona->numerodecuenta}}"  class="form-control" placeholder="numero de cuenta">
		</div>
</div>
<div class="col-lg-12 col-md-12 col-dm-12 col-xs-12">
	<div class="form-group">
			<label for="notas">Datos relevantes del ciente</label>
			<input type="notas" name="notas" value="{{$persona->notas}}" placeholder="Informacio??n del cliente" class="form-control">
		</div>
</div>

<div class="col-lg-6 col-md-6 col-dm-6 col-xs-12">
	<div class="form-group">
			<button class="btn btn-primary" type="submit">Guardar <i class="fa fa-floppy-o"></i></button>
		 <a class="btn btn-default" href="/ventas/cliente" role="button">Cancelar <i class="fa fa-ban"></i></a>
	</div>
</div>
</div>
{!!Form::close()!!}
@endsection