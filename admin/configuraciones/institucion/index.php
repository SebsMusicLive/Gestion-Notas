<?php

include ('../../../app/config.php');
include ('../../../admin/layout/parte1.php');

include('../../../app/controllers/configuraciones/institucion/listado_de_instituciones.php');


?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Main content -->
  <br>
  <div class="content">
    <div class="container">
      <div class="row">
        <h1>Listado de Instituciones</h1>
      </div>
      <!-- /.row -->
      <br>

      <div class="row">
        <div class="col-md-12">
          <div class="card card-outline card-primary">
            <div class="card-header">
              <h3 class="card-title">Instituciones Registradas</h3>

              <div class="card-tools">
                <a href="create.php" class="btn btn-success"><i class="nav-icon fas"><i
                      class="bi bi-plus-square"></i></i> Crear nueva institución</a>
              </div>
              <!-- /.card-tools -->
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table class="table table-striped table-bordered table-hover table-sm" id="example1">
                <thead>
                  <tr>
                    <th>
                      <center>Nro</center>
                    </th>
                    <th>
                      <center>Nombre de la institución</center>
                    </th>
                    <th>
                      <center>Logo</center>
                    </th>
                    <th>
                      <center>Dirección</center>
                    </th>
                    <th>
                      <center>Teléfono</center>
                    </th>
                    <th>
                      <center>Celular</center>
                    </th>
                    <th>
                      <center>Correo Electrónico</center>
                    </th>
                    <th>
                      <center>Fecha de creación</center>
                    </th>
                    <th>
                      <center>Estado</center>
                    </th>
                    <th>
                      <center>Acciones</center>
                    </th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $contador_institucion = 0;
                  foreach ($instituciones as $institucion) {
                    //echo $nombre_rol = $rol['nombre_rol'];
                    $id_config_institucion = $institucion ['id_config_institucion'];
                    $contador_institucion = $contador_institucion + 1;?>
                    <tr>
                      <td style="text-align:center"><?= $contador_institucion;?></td>
                      <td style="text-align:center"><?= $institucion['nombre_institucion']; ?></td>
                      <td style="text-align:center">
                        <img src="<?=APP_URL."/public/img/configuracion/".$institucion["logo"];?>" alt="" width="100px">
                      </td>
                      <td style="text-align:center"><?= $institucion['direccion']; ?></td>
                      <td style="text-align:center"><?= $institucion['telefono']; ?></td>
                      <td style="text-align:center"><?= $institucion['celular']; ?></td>
                      <td style="text-align:center"><?= $institucion['correo']; ?></td>
                      <td style="text-align:center"><?= $institucion['fyh_creacion']; ?></td>
                      <td style="text-align:center"><?= $institucion['estado']; ?></td>

                      <td style="text-align:center">
                        <div class="btn-group" role="group" aria-label="Basic example">
                          <a type="button" href="show.php?id=<?=$id_config_institucion;?>" class="btn btn-info btn-sm"><i
                              class="bi bi-eye"></i></a>
                          <a type="button" href="edit.php?id=<?=$id_config_institucion;?>" class="btn btn-success btn-sm"><i
                              class="bi bi-pencil"></i></a>
                          <form action="<?=APP_URL;?>/app/controllers/configuraciones/institucion/delete.php" onclick="preguntar<?=$id_config_institucion;?>(event)" method="post" id="miFormulario<?=$id_config_institucion;?>">
                            <input type="text" name="id_config_institucion" value="<?=$id_config_institucion;?>" hidden>
                            <button type="submit" class="btn btn-danger btn-sm" style="border-radius:0px 5px 5px 0px"><i
                                class="bi bi-trash"></i></button>
                          </form>
                          <script>
                            function preguntar<?=$id_config_institucion;?>(event) {
                              event.preventDefault();
                              Swal.fire({
                                title: 'Eliminar institución',
                                text: '¿Desea eliminar esta institución?',
                                icon: 'question',
                                showDenyButton: true,
                                confirmButtonText: 'Eliminar',
                                confirmButtonColor: '#a5161d',
                                denyButtonColor: '#270a0a',
                                denyButtonText: 'Cancelar',
                              }).then((result) => {
                                if (result.isConfirmed) {
                                  var form = $('#miFormulario<?=$id_config_institucion;?>');
                                  form.submit();
                                }
                              });
                            }
                          </script>
                        </div>
                      </td>
                    </tr>
                    <?php
                  }
                  ?>

                </tbody>
              </table>
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

include ("../../../admin/layout/parte2.php");
include ('../../../layout/mensajes.php');
?>



<script>
  $(function () {
    $("#example1").DataTable({
      "pageLength": 5,
      "language": {
        "emptyTable": "No hay información",
        "info": "Mostrando _START_ a _END_ de _TOTAL_ Instituciones",
        "infoEmpty": "Mostrando 0 a 0 de 0 Instituciones",
        "infoFiltered": "(Filtrado de _MAX_ total Instituciones)",
        "infoPostFix": "",
        "thousands": ",",
        "lengthMenu": "Mostrar _MENU_ Instituciones",
        "loadingRecords": "Cargando...",
        "processing": "Procesando...",
        "search": "Buscador",
        "zeroRecords": "Sin resultados encontrados",
        "paginate": {
          "firts": "primero",
          "last": "Ultimo",
          "next": "Siguiente",
          "previous": "Anterior"
        }
      },
      "responsive": true, "lengthChange": true, "autoWidth": false,
      buttons: [{
        extend: 'collection',
        text: 'Reportes',
        orientation: 'landscape',
        buttons: [{
          text: 'Copiar',
          extend: 'copy',
        }, {
          extend: 'pdf'
        }, {
          extend: 'csv'
        }, {
          extend: 'excel'
        }, {
          text: 'Imprimir',
          extend: 'print'
        }
        ]
      },
      {
        extend: 'colvis',
        text: 'Visor de columnas',
        collectionlayout: 'fixed three-column'
      }
      ],
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
  });
</script>