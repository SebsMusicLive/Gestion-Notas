<?php

include '../app/config.php';
include '../admin/layout/parte1.php';
include '../app/controllers/roles/listado_de_roles.php';
include '../app/controllers/usuarios/listado_de_usuarios.php';
include '../app/controllers/niveles/listado_de_niveles.php';
include '../app/controllers/grados/listado_de_grados.php';
include '../app/controllers/materias/listado_de_materias.php';
include '../app/controllers/administrativos/listado_de_administrativos.php';


?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Main content -->
    <br>
    <div class="container">
      <div class="container-fluid">
        <div class="row">
          <h1><?=APP_NAME;?></h1>
        </div>
        <!-- /.row -->
         <br>
         <div class="row">
         <div class="col-lg-3 col-6">
            <!-- small card -->
            <div class="small-box bg-success">
              <div class="inner">
                <?php
                $contador_roles = 0;

                foreach($roles as $rol) { 
                  $contador_roles = $contador_roles+1;
                }?>
                <h3><?=$contador_roles;?></h3>

                <p>Roles registrados</p>
              </div>
              <div class="icon">
                <i class="fas"><i class="bi bi-tag"></i></i>
              </div>
              <a href="<?= APP_URL;?>admin/roles" class="small-box-footer">
                Más información <i class="fas fa-arrow-circle-right"></i>
              </a>
            </div>
          </div>
          <div class="col-lg-3 col-6">
            <!-- small card -->
            <div class="small-box bg-info">
              <div class="inner">
                <?php
                $contador_usuarios = 0;

                foreach($usuarios as $usuario) { 
                  $contador_usuarios = $contador_usuarios+1;
                }?>
                <h3><?=$contador_usuarios;?></h3>

                <p>Usuarios registrados</p>
              </div>
              <div class="icon">
                <i class="fas"><i class="bi bi-people-fill"></i></i>
              </div>
              <a href="<?= APP_URL;?>admin/usuarios" class="small-box-footer">
                Más información <i class="fas fa-arrow-circle-right"></i>
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-6">
            <!-- small card -->
            <div class="small-box bg-primary">
              <div class="inner">
                <?php
                $contador_niveles = 0;

                foreach($niveles as $nivel) { 
                  $contador_niveles = $contador_niveles+1;
                }?>
                <h3><?=$contador_niveles;?></h3>

                <p>Niveles registrados</p>
              </div>
              <div class="icon">
                <i class="fas"><i class="bi bi-bookshelf"></i></i>
              </div>
              <a href="<?= APP_URL;?>admin/niveles" class="small-box-footer">
                Más información <i class="fas fa-arrow-circle-right"></i>
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-6">
            <!-- small card -->
            <div class="small-box bg-warning">
              <div class="inner">
                <?php
                $contador_de_grados = 0;

                foreach($grados as $grado) { 
                  $contador_de_grados = $contador_de_grados+1;
                }?>
                <h3><?=$contador_de_grados;?></h3>

                <p>Grados registrados</p>
              </div>
              <div class="icon">
                <i class="fas"><i class="bi bi-bar-chart-steps"></i></i>
              </div>
              <a href="<?= APP_URL;?>admin/grados" class="small-box-footer">
                Más información <i class="fas fa-arrow-circle-right"></i>
              </a>
            </div>
          </div>
         </div>
         <div class="row">
         <div class="col-lg-3 col-6">
            <!-- small card -->
            <div class="small-box bg-danger">
              <div class="inner">
                <?php
                $contador_de_materias = 0;

                foreach($materias as $materia) { 
                  $contador_de_materias = $contador_de_materias+1;
                }?>
                <h3><?=$contador_de_materias;?></h3>

                <p>Materias registradas</p>
              </div>
              <div class="icon">
                <i class="fas"><i class="bi bi-journal-text"></i></i>
              </div>
              <a href="<?= APP_URL;?>admin/materias" class="small-box-footer">
                Más información <i class="fas fa-arrow-circle-right"></i>
              </a>
            </div>
          </div>
          <div class="col-lg-3 col-6">
            <!-- small card -->
            <div class="small-box bg-default">
              <div class="inner">
                <?php
                $contador_de_administrativos = 0;

                foreach($administrativos as $administrativo) { 
                  $contador_de_administrativos = $contador_de_administrativos+1;
                }?>
                <h3><?=$contador_de_administrativos;?></h3>

                <p>Administrativos registrados</p>
              </div>
              <div class="icon">
                <i class="fas"><i class="bi bi-person-lines-fill"></i></i>
              </div>
              <a href="<?= APP_URL;?>admin/administrativos" class="small-box-footer">
                Más información <i class="fas fa-arrow-circle-right"></i>
              </a>
            </div>
          </div>
         </div>
         
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

<?php

include("../admin/layout/parte2.php");
include('../layout/mensajes.php');
?>