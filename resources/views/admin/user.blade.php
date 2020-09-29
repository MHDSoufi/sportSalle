@extends('adminlte::page')
<!-- LE TABLEAU DES UTILISATEURS-->
@section('content')
<div class="card">
    <div class="card-header">
        <h2 class="card-title">Listes des utilisateurs</h2>

        </div>
            <!-- /.card-header -->
          <div class="card-body">
            <table id="example2" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>utilisateur</th>
                  <th>forfait</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>

                    @foreach($users as $user)
                    <tr>
                     <td>{{$user->nom}}</td>
                     <td>{{App\Models\Forfait::find($user->forfait_id)->intitulet}}</td>
                     <td>
                       <a href=""  class="btn btn-default">Voir <i class="fas fa-eye"></i></a>
                       <a href="" class="btn btn-info">Modifier <i class="fas fa-edit"></i></a>
                      <button type="submit" class="btn btn-danger" style="         border-top-left-radius: 0;
                              border-bottom-left-radius: 0;"
                             data-toggle="modal" data-target="#modal-default"
                             >Suprimer <i class="fas fa-trash" style="color: black;"></i></button>
                     </td>
                     </tr>
                    @endforeach
                </tbody>
                <tfoot>
                </tfoot>
              </table>
            </div>
            <!-- /.card-body -->
  </div>
@stop
@section('plugins.Datatables', true)
@section('js')
<script type="text/javascript">

	$(function () {
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": true,
      "oLanguage": {"sUrl": "//cdn.datatables.net/plug-ins/1.10.20/i18n/French.json"},
      "columns": [
                    { "width": "30%" },
                    { "width": "30%" },
                    { "width": "40%" }
                  ],
     });
  });
</script>
@stop
