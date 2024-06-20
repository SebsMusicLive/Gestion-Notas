<?php

include ('../../app/config.php');
include ('../../admin/layout/parte1.php');

include('../../app/controllers/configuraciones/gestion/listado_de_gestiones.php')
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Main content -->
  <br>
  <div class="content">
    <div class="container">
      <div class="row">
        <h1>Creación de un nuevo grado</h1>
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
                <form action="<?=APP_URL;?>/app/controllers/grados/create.php" method="post">
                    <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Gestion educativa</label>
                            <select name="gestion_id" id="" class="form-control">
                                <?php
                                foreach($gestiones as $gestion){ 
                                    if($gestion['estado'] == 1){ ?>
                                        <option value="<?= $gestion['id_gestion'];?>"><?= $gestion['gestion'];?></option>
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
                            <select name="grado" id="" class="form-control">
                                <option value="PREJARDIN">PRE JARDIN</option>
                                <option value="JARDIN">JARDIN</option>
                                <option value="TRANSICION">TRANSICIÓN</option>
                                <option value="PRIMARIA">PRIMARIA</option>
                                <option value="SECUNDARIA">SECUNDARIA</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="">Jornada</label>
                            <select name="jornada" id="" class="form-control">
                                <option value="MAÑANA">MAÑANA</option>
                                <option value="TARDE">TARDE</option>
                                <option value="NOCHE">NOCHE</option>
                            </select>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <button type="submit" class="btn btn-success"><i class="bi bi-floppy"></i> Guardar grado</button>
                            <a href="<?=APP_URL;?>/admin/grados" class="btn btn-secondary">Cancelar</a>
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