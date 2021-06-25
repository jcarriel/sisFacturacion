@extends ('layouts.admin')
@section ('contenido')

<div class="row">
    <div class="col-lg-6 col-md-6 col-dm-6 col-xs-12">
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

<?php
?>
<input type="hidden" name="_token" value="{{ csrf_token() }}">
<div class="row">
    <div class="col-lg-6 col-md-6 col-dm-6 col-xs-12">
        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" required value="" class="form-control">
        </div>
    </div>
    <div class="col-lg-6 col-md-6 col-dm-6 col-xs-12">
        <div class="form-group">
            <label>Categoria</label>
            <select name="idcategoria" class="form-control">
            
            </select>
        </div>
    </div>
    <div class="col-lg-4 col-md-4 col-dm-4 col-xs-12">
        <div class="form-group">
            <label for="codigo">codigo</label>
            <input type="text" name="codigo" value="" class="form-control">
        </div>
    </div>

    <div class="col-lg-4 col-md-4 col-dm-4 col-xs-12">
        <div class="form-group">
            <label for="stock">Stock</label>
            <input type="text" name="stock" required value="" class="form-control">
        </div>
    </div>
    <div class="col-lg-4 col-md-4 col-dm-4 col-xs-12">
        <div class="form-group">
            <label for="impuesto">impuesto</label>
            <select name="impuesto" id="impuesto" selected="" class="form-control">
                
            </select>
        </div>
    </div>
    <div class="col-lg-12 col-md-12 col-dm-12 col-xs-12">
        <div class="form-group">
            <label for="descripcion">Descripcción</label>
            <textarea type="text" id="descripcion" name="descripcion" class="form-control" placeholder="descripcion del articulo" rows="2"></textarea>
        </div>
    </div>
    <div class="col-lg-6 col-md-6 col-dm-6 col-xs-12">
        <div class="form-group">
            <label for="imagen">Imagen</label>
            <input type="file" name="imagen" class="form-control">
            
        </div>
    </div>
    <div class="col-lg-6 col-md-6 col-dm-6 col-xs-12">
        <div class="form-group">
            <button class="btn btn-primary" type="submit">Guardar</button>
            <button class="btn btn-danger" type="reset">Cancelar</button>
        </div>
    </div>


</div>

@endsection