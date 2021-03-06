@extends('adminlte::page')
@section('title', 'Hotspot-Historial-Crd')
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

 <!-- Main content -->
 <section class="content">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Ver Historial Crd</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
            <form role="form">
              <div class="card-body">
                <div class="form-group">
                  <label for="id">Id</label>
                  <input type="text" class="form-control" value="{{ $historialcrd->id }}" readonly="readonly"/>
                </div>
                <div class="form-group">
                  <label for="crd_id">Id Crd</label>
                  <input type="text" class="form-control" value="{{ $historialcrd->crd_id }}" readonly="readonly"/>
                </div>
                <div class="form-group">
                  <label for="num_serie">Serie</label>
                  <input type="text" class="form-control" value="{{ $historialcrd->num_serie }}" readonly="readonly"/>
                </div>
                <div class="form-group">
                  <label for="name_machine">Nombre</label>
                  <input type="text" class="form-control" value="{{ $historialcrd->name_machine }}" readonly="readonly"/>
                </div>
                <div class="form-group">
                  <label for="nick_name">Alias</label>
                  <input type="text" class="form-control" value="{{ $historialcrd->nick_name }}" readonly="readonly"/>
                </div>
                <div class="form-group">
                  <label for="password">Password</label>
                  <input type="text" class="form-control" value="{{ $historialcrd->password }}" readonly="readonly"/>
                </div>
                <div class="form-group">
                  <label for="api_token">Token</label>
                  <input type="text" class="form-control" value="{{ $historialcrd->api_token }}" readonly="readonly"/>
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <a href="{{ route('historialcrd.index') }}" class="btn btn-info pull-right">Regresar</a>
              </div>
            </form>
            </div>
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