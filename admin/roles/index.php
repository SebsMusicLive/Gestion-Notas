<?php

include ('../../app/config.php');
include ('../../admin/layout/parte1.php');

include ('../../app/controllers/roles/listado_de_roles.php');

?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Main content -->
  <br>
  <div class="content">
    <div class="container">
      <div class="row">
        <h1>Listado de Roles</h1>
      </div>
      <!-- /.row -->
      <br>

      <div class="row">
        <div class="col-md-12">
          <div class="card card-outline card-primary">
            <div class="card-header">
              <h3 class="card-title">Roles Registrados</h3>

              <div class="card-tools">
                <a href="create.php" class="btn btn-success"><i class="nav-icon fas"><i
                      class="bi bi-plus-square"></i></i> Crear nuevo rol</a>
              </div>
              <!-- /.card-tools -->
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table class="table table-striped table-bordered table-hover table-sm">
                <thead>
                  <tr>
                    <th><center>Nro</center></th>
                    <th><center>Nombre del rol</center></th>
                    <th><center>Acciones</center></th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $contador_rol = 0;
                  foreach ($roles as $rol) {
                    //echo $nombre_rol = $rol['nombre_rol'];
                    $contador_rol = $contador_rol + 1;
                    $id_rol = $rol['id_rol']; ?>
                    <tr>
                      <td style="text-align:center"><?= $contador_rol ?></td>
                      <td style="text-align:center"><?= $rol['nombre_rol']; ?></td>
                      <td style="text-align:center">
                        <div class="btn-group" role="group" aria-label="Basic example">
                          <button type="button" class="btn btn-info btn-sm"><i class="bi bi-eye"></i></button>
                          <button type="button" class="btn btn-success btn-sm"><i class="bi bi-pencil"></i></button>
                          <button type="button" class="btn btn-danger btn-sm"><i class="bi bi-trash"></i></button>
                        </div>
                      </td>
                    </tr>
                    <?php
                  }
                  ?>

                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php

include ("../../admin/layout/parte2.php");
include ('../../layout/mensajes.php');
?>