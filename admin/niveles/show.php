<?php
$id_nivel = $_GET['id'];

include ('../../app/config.php');
include ('../../admin/layout/parte1.php');

include('../../app/controllers/niveles/datos_del_nivel.php');
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Main content -->
  <br>
  <div class="content">
    <div class="container">
      <div class="row">
        <h1>Nivel: <?=$nivel;?></h1>
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
                <form action="<?=APP_URL;?>/app/controllers/niveles/create.php" method="post">
                    <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Gestion educativa</label>
                            <input type="text" class="form-control" value="<?= $gestion;?>" disabled>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Nivel</label>
                            <input type="text" class="form-control" value="<?= $nivel;?>" disabled>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">Jornada</label>
                            <input type="text" class="form-control" value="<?= $jornada;?>" disabled>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">Fecha y hora de creación</label>
                            <input type="text" class="form-control" value="<?= $fyh_creacion;?>" disabled>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">Estado</label>
                            <?php 
                                if($estado==1){?>
                            <input type="text" class="form-control" value="ACTIVO" disabled>
<?php
                                }else{?>
                            <input type="text" class="form-control" value="INACTIVO" disabled>
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
                            <a href="<?=APP_URL;?>/admin/niveles" class="btn btn-secondary">Volver</a>
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