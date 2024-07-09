<?php

$id_grado = $_GET['id'];

include ('../../app/config.php');
include ('../../admin/layout/parte1.php');

include('../../app/controllers/niveles/listado_de_niveles.php');
include('../../app/controllers/grados/datos_grado.php');

?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Main content -->
  <br>
  <div class="content">
    <div class="container">
      <div class="row">
        <h1>Modificación del grado: <?= $curso;?></h1>
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
                <form action="<?=APP_URL;?>/app/controllers/grados/update.php" method="post">
                    <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Nivel</label>
                            <input type="text" name="id_grado" value='<?= $id_grado;?>' id="" hidden>
                            <select name="nivel_id" id="" class="form-control">
                                <?php
                                foreach($niveles as $nivel){ 
                                    ?>
                                        <option value="<?= $nivel['id_nivel'];?>"<?= $nivel_id ==  $nivel['id_nivel'] ?  'selected' : ''?>><?= $nivel['nivel']." - ".$nivel['jornada'];?></option>
                                        <?php
                                    
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Curso</label>
                            <select name="curso" id="" class="form-control">
                                <option value="INICIAL - PARVULOS" <?= $curso == 'INICIAL - PARVULOS' ? 'selected' : ''?>>INICIAL - PARVULOS</option>
                                <option value="INICIAL - PREJARDIN" <?= $curso == 'INICIAL - PREJARDIN' ? 'selected' : ''?>>INICIAL - PREJARDIN</option>
                                <option value="INICIAL - JARDIN" <?= $curso == 'INICIAL - JARDIN' ? 'selected' : ''?>>INICIAL - JARDIN</option>
                                <option value="INICIAL - TRANSICIÓN" <?= $curso == 'INICIAL - TRANSICIÓN' ? 'selected' : ''?>>INICIAL - TRANSICIÓN</option>
                                <option value="PRIMARIA - PRIMERO" <?= $curso == 'PRIMARIA - PRIMERO' ? 'selected' : ''?>>PRIMARIA - PRIMERO</option>
                                <option value="PRIMARIA - SEGUNDO" <?= $curso == 'PRIMARIA - SEGUNDO' ? 'selected' : ''?>>PRIMARIA - SEGUNDO</option>
                                <option value="PRIMARIA - TERCERO" <?= $curso == 'PRIMARIA - TERCERO' ? 'selected' : ''?>>PRIMARIA - TERCERO</option>
                                <option value="PRIMARIA - CUARTO" <?= $curso == 'PRIMARIA - CUARTO' ? 'selected' : ''?>>PRIMARIA - CUARTO</option>
                                <option value="PRIMARIA - QUINTO" <?= $curso == 'PRIMARIA - QUINTO' ? 'selected' : ''?>>PRIMARIA - QUINTO</option>
                                <option value="SECUNDARIA - SEXTO" <?= $curso == 'SECUNDARIA - SEXTO' ? 'selected' : ''?>>SECUNDARIA - SEXTO</option>
                                <option value="SECUNDARIA - SEPTIMO" <?= $curso == 'SECUNDARIA - SEPTIMO' ? 'selected' : ''?>>SECUNDARIA - SEPTIMO</option>
                                <option value="SECUNDARIA - OCTAVO" <?= $curso == 'SECUNDARIA - OCTAVO' ? 'selected' : ''?>>SECUNDARIA - OCTAVO</option>
                                <option value="SECUNDARIA - NOVENO" <?= $curso == 'SECUNDARIA - NOVENO' ? 'selected' : ''?>>SECUNDARIA - NOVENO</option>
                                <option value="SECUNDARIA - DÉCIMO" <?= $curso == 'SECUNDARIA - DECIMO' ? 'selected' : ''?>>SECUNDARIA - DÉCIMO</option>
                                <option value="SECUNDARIA - ONCE" <?= $curso == 'SECUNDARIA - ONCE' ? 'selected' : ''?>>SECUNDARIA - ONCE</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="">Grupo</label>
                            <select name="grupo" id="" class="form-control">
                                <option value="A" <?= $grupo == 'A' ? 'selected' : ''?>>A</option>
                                <option value="B" <?= $grupo == 'B' ? 'selected' : ''?>>B</option>
                                <option value="C" <?= $grupo == 'C' ? 'selected' : ''?>>C</option>
                                <option value="D" <?= $grupo == 'D' ? 'selected' : ''?>>D</option>
                                <option value="E" <?= $grupo == 'E' ? 'selected' : ''?>>E</option>
                                <option value="F" <?= $grupo == 'F' ? 'selected' : ''?>>F</option>
                            </select>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <button type="submit" class="btn btn-success"><i class="bi bi-floppy"></i> Actualizar grado</button>
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