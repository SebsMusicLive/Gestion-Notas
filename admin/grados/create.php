<?php

include ('../../app/config.php');
include ('../../admin/layout/parte1.php');

include('../../app/controllers/niveles/listado_de_niveles.php');
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
                            <label for="">Nivel</label>
                            <select name="nivel_id" id="" class="form-control">
                                <?php
                                foreach($niveles as $nivel){ 
                                    ?>
                                        <option value="<?= $nivel['id_nivel'];?>"><?= $nivel['nivel']." - ".$nivel['jornada'];?></option>
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
                                <option value="INICIAL - PARVULOS">INICIAL - PARVULOS</option>
                                <option value="INICIAL - PREJARDIN">INICIAL - PREJARDIN</option>
                                <option value="INICIAL - JARDIN">INICIAL - JARDIN</option>
                                <option value="INICIAL - TRANSICIÓN">INICIAL - TRANSICIÓN</option>
                                <option value="PRIMARIA - PRIMERO">PRIMARIA - PRIMERO</option>
                                <option value="PRIMARIA - SEGUNDO">PRIMARIA - SEGUNDO</option>
                                <option value="PRIMARIA - TERCERO">PRIMARIA - TERCERO</option>
                                <option value="PRIMARIA - CUARTO">PRIMARIA - CUARTO</option>
                                <option value="PRIMARIA - QUINTO">PRIMARIA - QUINTO</option>
                                <option value="SECUNDARIA - SEXTO">SECUNDARIA - SEXTO</option>
                                <option value="SECUNDARIA - SEPTIMO">SECUNDARIA - SEPTIMO</option>
                                <option value="SECUNDARIA - OCTAVO">SECUNDARIA - OCTAVO</option>
                                <option value="SECUNDARIA - NOVENO">SECUNDARIA - NOVENO</option>
                                <option value="SECUNDARIA - DÉCIMO">SECUNDARIA - DÉCIMO</option>
                                <option value="SECUNDARIA - ONCE">SECUNDARIA - ONCE</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="">Grupo</label>
                            <select name="grupo" id="" class="form-control">
                                <option value="A">A</option>
                                <option value="B">B</option>
                                <option value="C">C</option>
                                <option value="D">D</option>
                                <option value="E">E</option>
                                <option value="F">F</option>
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