<?php

$id_config_institucion = $_GET['id'];

include('../../../app/config.php');
include('../../../admin/layout/parte1.php');

include('../../../app/controllers/configuraciones/institucion/datos_institucion.php');


?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Main content -->
    <br>
    <div class="content">
        <div class="container">
            <div class="row">
                <h1>Institución: <?= $nombre_institucion ?></h1>
            </div>
            <!-- /.row -->
            <br>

            <div class="row">
                <div class="col-md-12">
                    <div class="card card-outline card-info">
                        <div class="card-header">
                            <h3 class="card-title">Datos registrados</h3>

                            <!-- /.card-tools -->
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">

                            <div class="row">
                                <div class="col-md-8">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="">Nombre de la Institución <b>*</b></label>
                                                <input type="text" name="nombre_institucion" class="form-control" value="<?= $nombre_institucion; ?>" readonly>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="">Correo de la Institución</label>
                                                <input type="email" name="correo" class="form-control" value="<?= $correo; ?>" readonly>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="">Teléfono</label>
                                                <input type="text" name="telefono" class="form-control" value="<?= $telefono; ?>" readonly>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="">Celular <b>*</b></label>
                                                <input type="text" name="celular" class="form-control" value="<?= $celular; ?>" readonly>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="">Dirección <b>*</b></label>
                                                <input type="text" name="direccion" class="form-control" value="<?= $direccion; ?>" readonly>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="">Logo de la institución</label>
                                                <br>
                                                <br>
                                                <center>
                                                    <img src="<?= APP_URL . "/public/img/configuracion/" . $logo; ?>" alt="" width="100%">
                                                </center>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <a href="<?= APP_URL; ?>admin/configuraciones/institucion" class="btn btn-secondary">Volver</a>
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

include("../../../admin/layout/parte2.php");
include('../../../layout/mensajes.php');
?>

<script>
    function archivo(evt) {
        var files = evt.target.files; //File listObjects
        //Obtenemos la imagen del campo file
        for (var i = 0, f; f = files[i]; i++) {
            //Solo admitimos imágenes
            if (!f.type.match('image.*')) {
                continue;
            }
            var reader = new FileReader();
            reader.onload = (function(theFile) {
                return function(e) {
                    //Insertamos la imagen
                    document.getElementById("list").innerHTML = ['<img class="thumb thumbnail" src="', e.target.result, '" width="300px" title="', escape(theFile.name), '"/>'].join('');
                };
            })(f);
            reader.readAsDataURL(f);
        }
    }

    document.getElementById("file").addEventListener('change', archivo, false);
</script>