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
        <h1>Materia: <?= $materia;?></h1>
      </div>
      <!-- /.row -->
      <br>

      <div class="row">
        <div class="col-md-12">
          <div class="card card-outline card-info">
            <div class="card-header">
              <h3 class="card-title">Datos registrados</h3>

              <!-- /.card-tools -->
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                    <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="">Materia</label>
                            <input type="text" name="materia" class="form-control" value="<?= $materia;?>" readonly>
                        </div>
                    </div>
                    </div>

                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="">Fecha y Hora de creación</label>
                          <input type="text" class="form-control" value="<?= $fyh_creacion;?>"readonly>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="">Estado</label>
                          <input type="text" class="form-control" value="<?php 
                          if($estado == 1){?>ACTIVO
                            <?php
                          }else{?>INACTIVO
                          <?php }
                          ?>"readonly>
                        </div>
                      </div>
                      
                    </div>
                
                <hr>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <a href="<?=APP_URL;?>/admin/materias" class="btn btn-secondary">Cancelar</a>
                        </div>
                    </div>
                </div>
            

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