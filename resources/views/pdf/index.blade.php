@extends('layouts.admin')
@section('contenido')
<div class="row">
            <div class="col-xs-12">
              <div class="box box-info">
                <div class="box-header">
                  <h3 class="box-title">REPORTES DEL SISTEMA</h3>
                  <div class="box-tools">
                    <div class="input-group" style="width: 150px;">
                      <input type="text" name="table_search" class="form-control input-sm pull-right" placeholder="Buscar">
                      <div class="input-group-btn">
                        <button class="btn btn-sm btn-default"><i class="fa fa-search"></i></button>
                      </div>
                    </div>
                  </div>
                </div><!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                  <table class="table table-hover">
                   
                    <thead><tr>
                      <th>ID</th>
                      <th>Reporte</th>
                      <th>Ver</th>
                      <th>Descargar</th>
                    </tr></thead>
                    <tbody>
                    <tr>
                      <td>1</td>
                      <td>Reporte de ventas</td>
                      <td><a href="crear_reporte_porventa/1" target="_blank" ><button class="btn btn-block btn-primary btn-xs">Ver <i class="fa fa-eye"></i></button></a></td>
                      <td><a href="crear_reporte_porventa/2" target="_blank" ><button class="btn btn-block btn-success btn-xs">Descargar <i class="fa fa-download"></i></button></a></td>
                    </tr>
                   
                  </tbody></table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div>
 </div>

 {!!Form::close()!!}  
    @push ('scripts')
   
    @endpush
    @endsection