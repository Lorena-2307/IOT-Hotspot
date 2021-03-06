@extends('adminlte::page')
@section('title', 'Hotspot-Sensor')
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
            <div class="card card-success card-outline">
            <div class="card-header">
              <h3 class="card-title">Crear Sensor</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                  <!-- form start -->
            <form role="form" action="{{ route('sensor.store')}}" method="POST">
              @csrf
              <div class="card-body">
                <div class="form-group">
                  <label for="num_serie">Numero serie</label>
                  <input type="text" class="form-control" name="num_serie" id="num_serie"  placeholder="Introduce Numero de Serie" required>
                </div>
                <div class="form-group">
                  <label for="passw">Password</label>
                  <input type="password" pattern=".{6,}" class="form-control" name="passw" id="passw"  placeholder="Introduce Password" required>
                </div>
                <div class="form-group">
                  <label for="vol_1">Voltaje 1</label>
                  <input type="number" min="0.00" max="5" step="0.01" class="form-control" name="vol_1" id="vol_1"  placeholder="0.00" required>
                </div>
                <div class="form-group">
                  <label for="vol_2">Voltaje 2</label>
                  <input type="number" min="0.00" max="5" step="0.01" class="form-control" name="vol_2" id="vol_2"  placeholder="0.00" required>
                </div>
                <div class="form-group">
                  <label for="vol_3">Voltaje 2</label>
                  <input type="number" min="0.00" max="5" step="0.01" class="form-control" name="vol_3" id="vol_3"  placeholder="0.00" required>
                </div>
                <div class="form-group">
                    <label for="door_1">Puerta 1</label>
                        <select class="form-control" name="door_1" id="door_1"> 
                        <option>Off</option>
                        <option>On</option>
                        </select>
                </div>
                <div class="form-group">
                    <label for="door_2">Puerta 2</label>
                        <select class="form-control" name="door_2" id="door_2"> 
                        <option>Off</option>
                        <option>On</option>
                        </select>
                </div>
                <div class="form-group">
                    <label for="door_3">Puerta 3</label>
                        <select class="form-control" name="door_3" id="door_3"> 
                        <option>Off</option>
                        <option>On</option>
                        </select>
                </div>
                <div class="form-group">
                    <label for="door_4">Puerta 4</label>
                        <select class="form-control" name="door_4" id="door_4"> 
                        <option>Off</option>
                        <option>On</option>
                        </select>
                </div>
                <div class="form-group">
                    <label for="rlay_1">Relay 1</label>
                        <select class="form-control" name="rlay_1" id="rlay_1"> 
                        <option>Off</option>
                        <option>On</option>
                        </select>
                </div>
                <div class="form-group">
                    <label for="rlay_2">Relay 2</label>
                        <select class="form-control" name="rlay_2" id="rlay_2"> 
                        <option>Off</option>
                        <option>On</option>
                        </select>
                </div>
                <div class="form-group">
                    <label for="rlay_3">Relay 3</label>
                        <select class="form-control" name="rlay_3" id="rlay_3"> 
                        <option>Off</option>  
                        <option>On</option>
                        </select>
                </div>
                <div class="form-group">
                    <label for="rlay_4">Relay 4</label>
                        <select class="form-control" name="rlay_4" id="rlay_4"> 
                        <option>Off</option>  
                        <option>On</option>
                        </select>
                </div>
                <div class="form-group">
                <label for="text">Comentario</label>
                <textarea  type="text" class="form-control" name="text" id="text"  placeholder="Introduce Comentario"></textarea>
                </div>
                <!-- 
                <div class="form-group">
                  <label for="text">Comentario</label>
                  <input type="text" class="form-control" name="text" id="text"  placeholder="Introduce Comentario" required>
                </div>
                -->
                <div class="form-group">
                    <label for="erb_id">Asignar Erb</label>
                        <select class="form-control" name="erb_id" id="erb_id"> 
                          @foreach($erbs as $erb)
                          <option>{{ $erb->id }}</option>
                          @endforeach
                        </select>
              </div>
              </div>
              <!-- /.card-body -->

              <div class="card-footer">
                <a href="{{ route('sensor.index') }}" class="btn btn-default">Cancelar</a>
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