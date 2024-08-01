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
                <h1>Modificación del docente: <?= $nombres." ".$apellidos;?></h1>
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
                            <form action="<?= APP_URL; ?>app/controllers/docentes/update.php" method="post">
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                        <input type="text" name="id_docente" value="<?=$id_docente;?>" hidden>
                                            <input type="text" name="id_usuario" value="<?=$id_usuario;?>" hidden>
                                            <input type="text" name="id_persona" value="<?=$id_persona;?>" hidden>
                                            <label for="">Nombre del rol</label>
                                            <a href="<?= APP_URL; ?>admin/roles/create.php" style="margin-left:5px;" class="btn btn-success btn-sm"><i class="bi bi-plus-square"></i></a>
                                            <div class="form-inline">
                                                <select name="rol_id" id="rol_id" class="form-control">
                                                    <?php
                                                    foreach ($roles as $rol) {
                                                    ?>
                                                        <option value="<?= $rol['id_rol']; ?>"<?= $rol['nombre_rol']  == "DOCENTE"? "selected" : " "?>><?= $rol['nombre_rol']; ?>
                                                        </option>
                                                    <?php
                                                    }
                                                    ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="">Nombres</label>
                                            <input type="text" class="form-control" name="nombres" value="<?= $nombres;?>" required>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="">Apellidos</label>
                                            <input type="text" class="form-control" name="apellidos" value="<?= $apellidos;?>" required>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="">Documento de identidad</label>
                                            <input type="number" class="form-control" name="documento_identidad" value="<?= $documento_identidad;?>" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="">Fecha de nacimiento</label>
                                            <input type="date" name="fecha_nacimiento" class="form-control" value="<?= $fecha_nacimiento;?>" required>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="">Celular</label>
                                            <input type="number" name="celular" class="form-control" value="<?= $celular;?>" required>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="">Profesión</label>
                                            <input type="text" name="profesion" class="form-control" value="<?= $profesion;?>" required>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                    <div class="form-group">
                                            <label for="">Correo</label>
                                            <input type="email" name="email" class="form-control" value="<?= $email;?>" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="">Especialidad</label>
                                            <input type="text" class="form-control" name="especialidad" value="<?= $especialidad;?>" required>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="">Antigüedad</label>
                                            <input type="text" class="form-control" name="antiguedad" value="<?= $antiguedad;?>" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Direccion</label>
                                            <input type="address" class="form-control" name="direccion" value="<?= $direccion;?>" required>
                                        </div>
                                    </div>
                                    
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-success"><i class="bi bi-floppy"></i>
                                                Actualizar docente</button>
                                            <a href="<?= APP_URL; ?>admin/docentes" class="btn btn-secondary">Cancelar</a>
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

include("../../admin/layout/parte2.php");
include('../../layout/mensajes.php');
?>