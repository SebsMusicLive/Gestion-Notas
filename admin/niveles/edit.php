<?php

$id_nivel = $_GET['id'];

include ('../../app/config.php');
include ('../../admin/layout/parte1.php');

include('../../app/controllers/niveles/datos_del_nivel.php');
include('../../app/controllers/configuraciones/gestion/listado_de_gestiones.php');
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Main content -->
  <br>
  <div class="content">
    <div class="container">
      <div class="row">
        <h1>Modificar nivel: <?= $nivel;?></h1>
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
                <form action="<?=APP_URL;?>/app/controllers/niveles/update.php" method="post">
                    <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" name="id_nivel" value="<?= $id_nivel;?>" hidden>
                            <label for="">Gestion educativa</label>
                            <select name="gestion_id" id="" class="form-control">
                                <?php
                                foreach($gestiones as $gestion){ 
                                    if($gestion['estado'] == 1){ ?>
                                        <option value="<?= $gestion['id_gestion'];?>" <?php
                                        if($gestion_id == $gestion['id_gestion']){?> selected <?php }
                                        ?>>
                                            <?= $gestion['gestion'];?>
                                        </option>
                                        <?php
                                    }
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Grados</label>
                            <select name="nivel" id="" class="form-control">
                                <option value="PREJARDIN" <?php if($nivel == 'PREJARDIN'){?> selected <?php } ?>>PRE JARDIN</option>
                                <option value="JARDIN" <?php if($nivel == 'JARDIN'){?> selected <?php } ?>>JARDIN</option>
                                <option value="TRANSICION" <?php if($nivel == 'TRANSICION'){?> selected <?php } ?>>TRANSICIÓN</option>
                                <option value="PRIMARIA" <?php if($nivel == 'PRIMARIA'){?> selected <?php } ?>>PRIMARIA</option>
                                <option value="SECUNDARIA" <?php if($nivel == 'SECUNDARIA'){?> selected <?php } ?>>SECUNDARIA</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="">Jornada</label>
                            <select name="jornada" id="" class="form-control">
                                <option value="MAÑANA" <?php if($jornada == 'MAÑANA'){?> selected <?php } ?>>MAÑANA</option>
                                <option value="TARDE" <?php if($jornada == 'TARDE'){?> selected <?php } ?>>TARDE</option>
                                <option value="NOCHE" <?php if($jornada == 'NOCHE'){?> selected <?php } ?>>NOCHE</option>
                            </select>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <button type="submit" class="btn btn-success"><i class="bi bi-floppy"></i> Guardar Cambios  </button>
                            <a href="<?=APP_URL;?>/admin/niveles" class="btn btn-secondary">Cancelar</a>
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