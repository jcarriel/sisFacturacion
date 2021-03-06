<!--articulo-->
@extends ('layouts.admin')
@section ('contenido')
<div class="row">
	<div class="col-lg-6 col-md-6 col-dm-6 col-xs-12">
		<h3>Nuevo Articulo</h3>
		@if(count($errors)>0)
		<div class="alert alert-danger">
			<ul>
				@foreach ($errors-> all() as $error)
				<li>
					{{$error}}
				</li>
				@endforeach
			</ul>
		</div>
		@endif
	</div>
</div>
{!!Form::open(array('url'=>'almacen/articulo','metodo'=>'POST','autocomplete'=>'off','files'=>'true'))!!}
{{Form::token()}}
<input type="hidden" name="_token" value="{{ csrf_token() }}">

<div class="row">
	<div class="col-lg-6 col-md-6 col-dm-12 col-xs-12">
		
		<div class="form-group">
			<label for="codigo">Codigo</label>
			<input type="text" name="codigo" maxlength="27" required value="{{$secuencial->numero}}" class="form-control" readonly placeholder="Codigo del articulo...">
		</div>
	</div>
	<div class="col-lg-6 col-md-6 col-dm-6 col-xs-12">
		<div class="form-group">
			<label for="nombre">Descripcción Corta</label>
			<input type="text" name="nombre" maxlength="85" required value="{{old('nombre')}}" class="form-control"
				placeholder="Nombre...">
		</div>
	</div>

	<div class="col-lg-4 col-md-4 col-dm-4 col-xs-12">
		<div class="form-group">
			<label>Categoria</label>
			<select name="idcategoria" id="idcategoria" class="form-control selectpicker" data-size="5"
				data-live-search="true">
				@foreach ($categorias as $cat)
				<option value="{{$cat->idcategoria}}"> {{$cat->nombre}} </option>
				@endforeach
			</select>
		</div>
	</div>
	<div class="col-lg-2 col-md-4 col-dm-4 col-xs-12">
		<div class="form-group">
			<label for="stock">Stock</label>
			<input type="number" name="stock" required value="{{0,old('stock')}}" class="form-control" placeholder="0"
				minlength="1">
		</div>
	</div>
	<div class="col-lg-2 col-md-4 col-dm-4 col-xs-12">
		<div class="form-group">
			<label for="iva">Ret. IVA &nbsp;&nbsp;</label><input type="checkbox" id="iva" onclick="activar('impuesto',this)">
			<select name="impuesto" id="impuesto" class="form-control selectpicker">
				@foreach($impuestos as $impuestos)
				<option value="{{$impuestos->valor}}">{{$impuestos->valor}}</option>
				@endforeach
			</select>
		</div>
	</div>
	<div class="col-lg-2 col-md-4 col-dm-4 col-xs-12">
		<div class="form-group">
			<label for="ice">Ret. ICE &nbsp;&nbsp;</label><input type="checkbox" id="ice" onclick="activar('reteica',this)">
			<select name="reteica" id="reteica" class="form-control selectpicker">
				@foreach($reteica as $reteica)
				<option value="{{$reteica->idica}}">{{$reteica->valor}}</option>
				@endforeach
			</select>
		</div>
	</div>
	<div class="col-lg-2 col-md-4 col-dm-4 col-xs-12">
		<div class="form-group">
			<label for="retefuente">Ret. Fuente &nbsp;&nbsp;</label><input type="checkbox" id="fuente" onclick="activar('retefuente',this)">
			<select name="retefuente" id="retefuente" class="form-control selectpicker">
				@foreach($retefuente as $retefuente)
				<option value="{{$retefuente->idretefuente}}">{{$retefuente->valor}}</option>
				@endforeach
			</select>
		</div>
	</div>
	<div class="col-lg-12 col-md-12 col-dm-12 col-xs-12">
		<div class="form-group">
			<label for="descripcion">Descripción del equipo o servicio</label>
			<textarea name=descripcion wrap=physical class="form-control" maxlength="400"></textarea>
			<br>
		</div>

		<div class="col-lg-6 col-md-6 col-dm-12 col-xs-12">
			<div class="form-group">
				<label for="nombre">Proveedor</label>
				<select name="idproveedor" id="idproveedor" class="form-control selectpicker" data-size="5"
					data-live-search="true">
					@foreach($personas as $persona)
					<option value="{{$persona->idpersona}}">{{$persona->nombre}}</option>
					@endforeach
				</select>
			</div>
		</div>

		<div class="col-lg-3 col-md-4 col-dm-4 col-xs-12">
			<div class="form-group">
				<label for="pcompra">Precio Compra sin IVA</label>
				<input type="number" name="precio_compra" id="precio_compra" required value="{{old('precio_compra')}}"
					class="form-control" placeholder="$ 0">
			</div>
		</div>

		<div class="col-lg-3 col-md-4 col-dm-4 col-xs-12">
			<div class="form-group">
				<label for="pventa">Precio Venta sin IVA</label>
				<input type="number" name="precio_venta" id="precio_venta" required value="{{old('precio_venta')}}"
					class="form-control" placeholder="$ 0">
			</div>
		</div>

		<div class="col-lg-3 col-md-4 col-dm-12 col-xs-12">
			<div class="form-group">
				<label>Tipo de Comprobante</label>
				<select name="tipo_comprobante" class="form-control">
					<option value="Factura"> Factura </option>
					<option value="Boleta"> Boleta </option>
					<option value="Ticket"> Ticket </option>
				</select>
			</div>
		</div>

		<div class="col-lg-3 col-md-4 col-dm-12 col-xs-12">
			<div class="form-group">
				<label for="serie_comprobante">Serie Comprobante</label>
				<input type="text" name="serie_comprobante" readonly value="<?php echo date("Y-m-d"); ?>"
					class="form-control" placeholder="Serie de comprobante...">
			</div>
		</div>

		<div class="col-lg-3 col-md-4 col-dm-12 col-xs-12">
			<div class="form-group">
				<label for="numero_comprobante">Numero de Comprobante</label>
				<input type="text" name="numero_comprobante" id="idingreso" required readonly value="{{$iingreso}}"
					class="form-control" placeholder="Numero de comprobante...">
			</div>
		</div>

		<div class="col-lg-3 col-md-4 col-dm-12 col-xs-12">
			<div class="form-group">
				<label for="idarticulo">Id Articulo</label>
				<input type="text" name="idarticulo" required readonly value="{{$idarticulo}}" class="form-control"
					placeholder="Numero de comprobante...">
			</div>
		</div>

		<div class="col-lg-12 col-md-12 col-dm-12 col-xs-12">
			<div class="form-group">
				<label for="imagen">Imagen</label>
				<input type="file" name="imagen" class="form-control">
			</div>
		</div>
		<div class="col-lg-6 col-md-6 col-dm-6 col-xs-12">
			<div class="form-group">
				<button class="btn btn-primary" type="submit" id="guardar">Guardar <i
						class="fa fa-floppy-o"></i></button>
				<button class="btn btn-danger" type="reset">Restablecer <i class="fa fa-repeat"></i></button>
				<a class="btn btn-primary" href="{{URL::to('almacen/articulo')}}" role="button">Cancelar <i
						class="fa fa-ban"></i></a>
			</div>
		</div>
	</div>
	{!!Form::close()!!}
	@push ('scripts')
	<script>
		$(document).on('ready', function() {
			var x = document.getElementById('idcategoria');
			var option = document.createElement("option");
			option.text = "Seleccione Opccion";
			x.add(option, x[0]);
			document.getElementById('idcategoria').selectedIndex = 0;
			document.getElementById('impuesto').selectedIndex = 1;
		});

		function textCounter(field, countfield, maxlimit) {
			if (field.value.length > maxlimit) {
				field.value = field.value.substring(0, maxlimit);
				countfield.value = 'max characters';
			} else { // otherwise, update 'characters left' counter
				countfield.value = field.value.length;
			}
		}
	</script>

<script>
	function activar(select,check){
		// document.getElementById('reteica').removeAttribute("disabled");
		$('#impuesto').prop('disabled', true);
		check.addEventListener("change", comprueba, false);
		function comprueba(){
			if(check.checked){

				if (check.id == 'iva') {
					console.log(select)
					
				}
			}else{
				console.log('off')
			}
		}
	}
</script>
	@endpush
	@endsection