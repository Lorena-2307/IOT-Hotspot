@extends('adminlte::page')
@section('title', 'Hotspot-Nfc')
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
          <div class="card card-primary card-outline">
            <div class="card-header">
              <h3 class="card-title">Tabla Nfc</h3>
              <a class="btn btn-xs btn-success float-right" href="{{ route('nfc.create') }}" role="button"><span class="fas fa-plus"></span></a>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="nfcTable" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>Id</th>
                  <th>Crd</th>
                  <th>Erb</th>
                  <th>Serie</th>
                  <th>C_Global</th>
                  <th>C_Corte</th>
                  <th>T_Global</th>
                  <th>T_Corte</th>
                  <th>Pzs</th>
                  <th>Ssid</th>
                  <th>Passw</th>
                  <th>Dns Server</th>
                  <th>Ip Server</th>
                  <th>Puerto</th>
                  <th>Protocol</th>
                  <th>Texto</th>
                  <th>FechMod</th>
                  <th>FechMod</th>
                  <th>Acciones</th>
                </tr>
                </thead>
                <tbody>
                @foreach($nfcs as $nfc)
                <tr>
                    <td>{{ $nfc->id }}</td>
                    <td>{{ $nfc->crd_id }}</td>
                    <td>{{ $nfc->erb_id }}</td>
                    <td>{{ $nfc->num_serie }}</td>
                    <td>{{ $nfc->count_global }}</td>
                    <td>{{ $nfc->count_between_cuts }}</td>
                    <td>{{ $nfc->time_global_between_cuts }}</td>
                    <td>{{ $nfc->time_between_cuts }}</td>
                    <td>{{ $nfc->prizes_count }}</td>
                    <td>{{ $nfc->ssid }}</td>
                    <td>{{ $nfc->password }}</td>
                    <td>{{ $nfc->dns_server }}</td>
                    <td>{{ $nfc->ip_server }}</td>
                    <td>{{ $nfc->port }}</td>
                    <td>{{ $nfc->protocol }}</td>
                    <td>{{ $nfc->text }}</td>
                    <td>{{ $nfc->created_at }}</td>
                    <td>{{ $nfc->updated_at }}</td>
                    <td>
                      <form role="form" action="{{ route('nfc.destroy',$nfc->id) }}" method="POST">
                      <a class="btn btn-info btn-xs" href="{{ route('nfc.show',$nfc->id) }}" role="button"><span class="fas fa-eye"></span></a> 
                      <a class="btn btn-warning btn-xs"  href="{{ route('nfc.edit',$nfc->id) }}" role="button"><span class="fas fa-pen"></span></a>
                      @csrf
                      @method('DELETE')
                      <button class="btn btn-danger btn-xs" type="submit"><span class="fas fa-trash"></span></button>
                      </form>
                    </td>
                </tr>
                @endforeach
                </tbody>
               <!-- <tfoot>
                 <tr>
                 <th>Id</th>
                  <th>Crd</th>
                  <th>Erb</th>
                  <th>Serie</th>
                  <th>Clv1</th>
                  <th>Clv2</th>
                  <th>Clv3</th>
                  <th>Clv4</th>
                  <th>Clv5</th>
                  <th>Ssid</th>
                  <th>Passw</th>
                  <th>Ip Server</th>
                  <th>Dns Server</th>
                  <th>Puerto</th>
                  <th>Protocol</th>
                  <th>Texto</th>
                  <th>FechMod</th>
                  <th>FechMod</th>
                  <th>Acciones</th>
                </tr>
                </tfoot>-->
              </table>
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
<script>
  $(function () {
     $('#nfcTable').DataTable({  
      'paging'      : true,
      'lengthChange': true,
      'searching'   : true,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false,
      'scrollX'     : true,
      'scrollY'     : false,
      'scrollCollapse': false,
      'language': {'url': '//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json'}   
    })
  });
</script>
@stop