<?php
$id_gestion = $_GET['id'];

include ('../../../app/config.php');
include ('../../../admin/layout/parte1.php');

include('../../../app/controllers/configuraciones/gestion/datos_gestion.php')

?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Main content -->
  <br>
  <div class="content">
    <div class="container">
      <div class="row">
        <h1>Gestion: <?=$gestion;?></h1>
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
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Gestion</label>
                            <input type="text" class="form-control" value="<?=$gestion;?>" readonly/>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Fecha y Hora de creación</label>
                            <input type="text" class="form-control" value="<?=$fyh_creacion;?>" readonly/>
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="">Estado</label>
                            <?php
                            if($estado == 1){?>
                              <input type="text" class="form-control" value="ACTIVO" readonly/>
                            <?php
                            }else{?>
                              <input type="text" class="form-control" value="INACTIVO" readonly/>
                            <?php
                            }
                            ?>
                            
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <a href="<?=APP_URL;?>/admin/configuraciones/gestion" class="btn btn-secondary">Volver</a>
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

include ("../../../admin/layout/parte2.php");
include ('../../../layout/mensajes.php');
?>