@extends ('layouts.admin')
@section ('contenido')
<div class="row">
	<div class="col-lg-8 col-md-8 col-dm-8 col-xs-12">
	<h3> Listado de Usuarios <a href="usuario/create"><button class="btn btn-success btn-xs">Nuevo <i class="fa fa-plus"></i></button></a></h3>
	@include('seguridad.usuario.search')
	</div>
</div>
<div class="row">
	<div class="col-lg-12 col-md-12 col-dm-12 col-xs-12">
	<div class="table-responsive">
	<table class="table table-striped table-bordered table-condensed table-hover">
	<thead>
		<th>Id</th>
		<th>Nombre</th>
		<th>Email</th>
		<th>Opcciones</th>
	</thead>
	@foreach ($usuarios as $usu)
	<tr>
		<td>{{$usu->id}}</td>
		<td>{{$usu->name}}</td>
		<td>{{$usu->email}}</td>
		<td>
			<a href="{{URL::action('UsuarioController@edit',$usu->id)}}"><button class="btn btn-info">Editar <i class="fa fa-pencil-square-o"></i></button></a>
			<a href="" data-target="#modal-delete-{{$usu->id}}" data-toggle="modal"><button class="btn btn-danger">Eliminar <i class="fa fa-trash-o"></i></button></a>
		</td>
	</tr>
	@include('seguridad.usuario.modal')
	@endforeach
	</table>
	</div>
	{{$usuarios->render()}}
	</div>	
</div>
@endsection