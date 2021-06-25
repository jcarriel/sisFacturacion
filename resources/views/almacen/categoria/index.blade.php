@extends ('layouts.admin')
@section ('contenido')
<div class="row">
	<div class="col-lg-8 col-md-8 col-dm-8 col-xs-12">
	<h3> Listado de Categorias <a href="categoria/create"><button class="btn btn-success btn-xs">Nuevo	<i class="fa fa-plus"></i>
</button></a></h3>
	@include('almacen.categoria.search')
	</div>
</div>
<div class="row">
	<div class="col-lg-12 col-md-12 col-dm-12 col-xs-12">
	<div class="table-responsive">
	<table class="table table-striped table-bordered table-condensed table-hover">
	<thead>
		<th>Id</th>
		<th>Nombre</th>
		<th>descripcion</th>
		<th>Opcciones</th>
	</thead>
	@foreach ($categorias as $cat)
	<tr>
		<td>{{$cat->idcategoria}}</td>
		<td>{{$cat->nombre}}</td>
		<td>{{$cat->descripcion}}</td>
		<td>
			<a href="{{URL::action('CategoriaController@edit',$cat->idcategoria)}}"><button class="btn btn-info">Editar <i class="fa fa-pencil-square-o"></i>
 </button></a>
			<a href="" data-target="#modal-delete-{{$cat->idcategoria}}" data-toggle="modal"><button class="btn btn-danger">Eliminar <i class="fa fa-trash-o"></i></button></a>
		</td>
	</tr>
	@include('almacen.categoria.modal')
	@endforeach
	</table>
	</div>
	{{$categorias->render()}}
	</div>	
</div>
@endsection