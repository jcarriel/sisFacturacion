{!! Form::open(array('url'=>'almacen/categoria','method'=>'get','autocomplete'=>'off','role'=>'search')) !!}
<div class="form-group">
	<div class="input-group">
		<input type="text" class="form-control" name="searchText" placeholder="Buscar..." value="{{$searchText}}">
		<span class="input-group-btn">
			<button type="submit" class="btn btn-primary">Buscar <i class="fa fa-search"></i>
</button>
		</span>
	</div>
</div>
{{Form::close()}}
