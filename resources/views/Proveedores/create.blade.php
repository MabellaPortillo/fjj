@extends('fondo')
@section('layout')
  {!!Form::open(['class' =>'form-horizontal form-label-left input_mask','autocomplete'=>'off','route' =>'proveedores.store','method' =>'POST'])!!}
  <div class="col-md-6 col-xs-12">
    <div class="x_panel">
      <div class="x_title">
        <h2>Proveedor <small>Nuevo</small></h2>
        <div class="clearfix"></div>
      </div>
      @include('Proveedores.Formularios.form')
    </div>
  </div>
  {!!Form::close()!!}
@endsection
