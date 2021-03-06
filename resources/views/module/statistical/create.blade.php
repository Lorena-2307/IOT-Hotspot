@extends('adminlte::page')
@section('title', 'Hotspot-Estadistico')
@section('content_header')
   <!-- <h1>Menu Admin</h1>-->
@stop

@section('content')
@if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
@endif

@if ($message = Session::get('success'))

<div class="alert alert-success">

    <p>{{ $message }}</p>

</div>
@endif

 <!-- Main content Part Name : VST -->
 <!-- Part Size : 23.3 -->
 <section class="content">
      <div class="row">
        <div class="col-12">
            <div class="card card-success card-outline">
            <div class="card-header">
              <h3 class="card-title">Crear Estadistico</h3>
            </div>
            <!-- /.card-header 'id', 'estimate_proxy_size', 'development_hours' -->
            <div class="card-body">
            <!-- form start -->
            <form role="form" action="{{ route('statistical.store')}}" method="POST">
              @csrf
              <div class="card-body">
                <div class="form-group">
                  <label for="estimate_proxy_size">Tamaño Estimado</label>
                  <input type="text" class="form-control" name="estimate_proxy_size" id="estimate_proxy_size"  placeholder="Introduce statistical serie" required>
                </div>
                <div class="form-group">
                  <label for="development_hours">Horas Desarollo</label>
                  <input type="text" class="form-control" name="development_hours" id="development_hours"  placeholder="Introduce desarollo de horas" required>
                </div>
              </div>
              <!-- /.card-body -->

              <div class="card-footer">
                <a href="{{ route('statistical.index') }}" class="btn btn-default">Cancelar</a>
                <button type="submit" class="btn btn-success pull-right" >Enviar</button>
              </div>
            </form>
            </div>
            <!-- /.card -->
            <!-- form-->
            <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->   
@stop

@section('footer') 
<div class="pull-right hidden-xs"><b>Version</b> 2.0.0<strong>  Copyright &copy; 2020 <a href="http://hotspot.local/home" target="_blank">Hotspot</a>.</strong>  Todo los derechos Reservados.</div> 
@stop

@section('css')
@toastr_css    
@stop

@section('js')
@toastr_js
@toastr_render
@stop