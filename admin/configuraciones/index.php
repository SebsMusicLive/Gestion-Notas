<?php

include ('../../app/config.php');
include ('../../admin/layout/parte1.php');


?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Main content -->
    <br>
    <div class="content">
        <div class="container">
            <div class="row">
                <h1>Configuraciones del sistema</h1>
            </div>
            <!-- /.row -->
            <br>

            <div class="row">
                <div class="col-md-4 col-sm-6 col-12">
                    <div class="info-box">
                        <span class="info-box-icon bg-primary"><i class="bi bi-house"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text"><b>Datos de la institución</b></span>
                            <a href="institucion" class="btn btn-primary btn-sm">Configurar</a>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
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