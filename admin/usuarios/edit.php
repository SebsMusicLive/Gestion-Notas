<?php

$id_usuario = $_GET['id'];

include ('../../app/config.php');
include ('../../admin/layout/parte1.php');
include ('../../app/controllers/usuarios/datos_del_usuario.php');
include ('../../app/controllers/roles/listado_de_roles.php');

?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Main content -->
    <br>
    <div class="content">
        <div class="container">
            <div class="row">
                <h1>Modificar usuario: <?=$nombres;?></h1>
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
                            <form action="<?= APP_URL; ?>app/controllers/usuarios/update.php" method="post">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="">Nombre del rol</label>
                                            <input type="text" name="id_usuario" value="<?= $id_usuario;?>" hidden>
                                            <div class="form-inline">
                                                <select name="rol_id" id="rol_id" class="form-control">
                                                    <?php
                                                    foreach ($roles as $rol) {
                                                        $nombre_rol_tabla = $rol['nombre_rol'];
                                                        ?>
                                                        <option value="<?= $rol['id_rol']; ?>" <?php if($nombre_rol==$nombre_rol_tabla) {?> selected ='selected'<?php } ?>><?= $rol['nombre_rol']; ?>
                                                        </option>
                                                        <?php
                                                    }
                                                    ?>
                                                </select>
                                                <a href="<?= APP_URL; ?>admin/roles/create.php" style="margin-left:5px;"
                                                    class="btn btn-success"><i class="bi bi-plus-square"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="">Nombres del usuario</label>
                                            <input type="text" class="form-control" name="nombres" id="" value="<?= $nombres;?>"required>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="">Correo electrónico</label>
                                            <input type="email" class="form-control" name="email" id="" value= "<?= $email;?>" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="">Contraseña</label>
                                            <input type="password" class="form-control" name="password" id="">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="">Reperir contraseña</label>
                                            <input type="password" class="form-control" name="password_repeat" id="">
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-success"><i class="bi bi-floppy"></i>
                                                Guardar Cambios</button>
                                            <a href="<?= APP_URL; ?>admin/usuarios"
                                                class="btn btn-secondary">Cancelar</a>
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