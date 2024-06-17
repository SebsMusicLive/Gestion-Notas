<?php

include ('../../../app/config.php');
include ('../../../admin/layout/parte1.php');

?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Main content -->
  <br>
  <div class="content">
    <div class="container">
      <div class="row">
        <h1>Creación de una nueva gestión</h1>
      </div>
      <!-- /.row -->
      <br>

      <div class="row">
        <div class="col-md-12">
          <div class="card card-outline card-primary">
            <div class="card-header">
              <h3 class="card-title">Llene los datos</h3>

              <!-- /.card-tools -->
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <form action="<?=APP_URL;?>/app/controllers/configuraciones/gestion/create.php" method="post"><div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="">Gestión</label>
                            <input type="text" class="form-control" name="gestion" id="" required>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="">Estado</label>
                            <select name="estado" id="" class="form-control">
                                <option value="ACTIVO">ACTIVO</option>
                                <option value="INACTIVO">INACTIVO</option>
                            </select>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <button type="submit" class="btn btn-success"><i class="bi bi-floppy"></i> Guardar gestión</button>
                            <a href="<?=APP_URL;?>/admin/configuraciones/gestion" class="btn btn-secondary">Cancelar</a>
                        </div>
                    </div>
                </div>
            </form>

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

include ("../../../admin/layout/parte2.php");
include ('../../../layout/mensajes.php');
?>