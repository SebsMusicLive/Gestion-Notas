<?php

$id_materia = $_GET['id'];

include '../../app/config.php';
include '../../admin/layout/parte1.php';

include '../../app/controllers/materias/datos_materia.php';
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Main content -->
  <br>
  <div class="content">
    <div class="container">
      <div class="row">
        <h1>Modificar materia: <?= $materia;?></h1>
      </div>
      <!-- /.row -->
      <br>

      <div class="row">
        <div class="col-md-12">
          <div class="card card-outline card-success">
            <div class="card-header">
              <h3 class="card-title">Llene los datos</h3>

              <!-- /.card-tools -->
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <form action="<?=APP_URL;?>/app/controllers/materias/update.php" method="post">
                    <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <input type="text" value="<?= $id_materia;?>" name="id_materia" id="" hidden>
                            <label for="">Materia</label>
                            <input type="text" name="materia" value="<?= $materia;?>" class="form-control" id="" required>
                        </div>
                    </div>
                    </div>
                
                <hr>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <button type="submit" class="btn btn-success"><i class="bi bi-floppy"></i> Actualizar materia</button>
                            <a href="<?=APP_URL;?>/admin/materias" class="btn btn-secondary">Cancelar</a>
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

include ("../../admin/layout/parte2.php");
include ('../../layout/mensajes.php');
?>