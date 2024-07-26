<?php

$id_administrativo = $_GET['id'];

include '../../app/config.php';
include '../../admin/layout/parte1.php';
include '../../app/controllers/administrativos/datos_de_administrativo.php';

?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Main content -->
    <br>
    <div class="content">
        <div class="container">
            <div class="row">
                <h1>Personal administrativo: <?= $nombres." ".$apellidos;?></h1>
            </div>
            <!-- /.row -->
            <br>

            <div class="row">
                <div class="col-md-12">
                    <div class="card card-outline card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Datos registrados/h3>

                            <!-- /.card-tools -->
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="">Nombre del rol</label>
                                            <a href="<?= APP_URL; ?>admin/roles/create.php" style="margin-left:5px;" class="btn btn-success btn-sm"><i class="bi bi-plus-square"></i></a>
                                            <div class="form-inline">
                                               <input type="text" class="form-control" value="<?= $nombre_rol;?>" readonly>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="">Nombres</label>
                                            <input type="text" class="form-control" name="nombres" value="<?= $nombres;?>" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="">Apellidos</label>
                                            <input type="text" class="form-control" name="apellidos" value="<?= $apellidos;?>" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="">Documento de identidad</label>
                                            <input type="number" class="form-control" name="documento_identidad" value="<?= $documento_identidad;?>" readonly>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="">Fecha de nacimiento</label>
                                            <input type="text" name="fecha_nacimiento" class="form-control" value="<?= $fecha_nacimiento;?>" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="">Celular</label>
                                            <input type="number" name="celular" class="form-control" value="<?= $celular;?>" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="">Profesión</label>
                                            <input type="text" name="profesion" class="form-control" value="<?= $profesion;?>" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                    <div class="form-group">
                                            <label for="">Correo</label>
                                            <input type="email" name="email" class="form-control" value="<?= $email;?>" readonly>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Direccion</label>
                                            <input type="address" class="form-control" name="direccion" value="<?= $direccion;?>" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="">Fecha de creación</label>
                                            <input type="address" class="form-control" name="direccion" value="<?= $fyh_creacion;?>" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="">Estado</label>
                                            <?php
                                            if($estado == 1){ ?>
                                            <input type="text" class="form-control" name="estado" value="ACTIVO" readonly>
                                            <?php
                                            } else{ ?>
                                            <input type="text" class="form-control" name="estado" value="INACTIVO" readonly>
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
                                            <a href="<?= APP_URL; ?>admin/administrativos" class="btn btn-secondary">Volver atrás</a>
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

include("../../admin/layout/parte2.php");
include('../../layout/mensajes.php');
?>