@extends ('layouts.admin')
@section ('contenido')
<div class="row">
	<div class="col-lg-8 col-md-8 col-dm-8 col-xs-12">
	<h3> Listado de Articulos <a href=""><button class="btn btn-success btn-xs" >Nuevo</button></a>
	<a href="#"><button class="btn btn-info btn-xs">Imprimir Listado</button></a></h3>
	@include('almacen.articulo.search')
	</div>
</div>
<div class="row">
	<div class="col-lg-12 col-md-12 col-dm-12 col-xs-12">
	<div class="table-responsive">
	<table class="table table-striped table-bordered table-condensed table-hover">
	<thead>
		<th class="col-sm-1">Id</th>
		<th class="col-sm-3">Nombre</th>
		<th class="col-sm-1">Código</th>
		<th class="col-sm-1">Stock</th>
		<th class="col-sm-1">Precio Compra</th>
		<th class="col-sm-1">Precio Venta</th>
		<th class="col-sm-2">Opcciones</th>
	</thead>
	@foreach ($users as $art)
	<tr>

	</tr>
	@endforeach 
	</table>

</div>
@endsection