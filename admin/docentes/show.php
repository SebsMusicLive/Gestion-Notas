<?php
$id_docente = $_GET['id'];

include '../../app/config.php';
include '../../admin/layout/parte1.php';
include '../../app/controllers/roles/listado_de_roles.php';
include '../../app/controllers/docentes/datos_del_docente.php';

?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Main content -->
    <br>
    <div class="content">
        <div class="container">
            <div class="row">
                <h1>Personal docente: <?= $nombres.' '.$apellidos;?></h1>
            </div>
            <!-- /.row -->
            <br>

            <div class="row">
                <div class="col-md-12">
                    <div class="card card-outline card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Datos registrados</h3>

                            <!-- /.card-tools -->
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="">Nombre del rol</label>
                                            <input type="text" class="form-control" name="nombre_rol" id="" value="<?= $nombre_rol;?>" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="">Nombres</label>
                                            <input type="text" class="form-control" name="nombres" id="" value="<?= $nombres;?>" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="">Apellidos</label>
                                            <input type="text" class="form-control" name="apellidos" id="" value="<?= $apellidos;?>" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="">Documento de identidad</label>
                                            <input type="number" class="form-control" name="documento_identidad" id="" value="<?= $documento_identidad;?>" readonly>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="">Fecha de nacimiento</label>
                                            <input type="date" name="fecha_nacimiento" class="form-control" value="<?= $fecha_nacimiento;?>" readonly>
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
                                <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="">Especialidad</label>
                                            <input type="text" class="form-control" name="especialidad" value="<?= $especialidad;?>" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="">Antigüedad</label>
                                            <input type="text" class="form-control" name="antiguedad" value="<?= $antiguedad;?>" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Direccion</label>
                                            <input type="address" class="form-control" name="direccion" value="<?= $direccion;?>" readonly>
                                        </div>
                                    </div>
                                    
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <a href="<?= APP_URL; ?>admin/docentes" class="btn btn-secondary">Volver</a>
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