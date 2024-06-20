<?php

include ('../../app/config.php');
include ('../../admin/layout/parte1.php');

include ('../../app/controllers/niveles/listado_de_niveles.php');

?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Main content -->
  <br>
  <div class="content">
    <div class="container">
      <div class="row">
        <h1>Listado de Niveles</h1>
      </div>
      <!-- /.row -->
      <br>

      <div class="row">
        <div class="col-md-12">
          <div class="card card-outline card-primary">
            <div class="card-header">
              <h3 class="card-title">Niveles Registrados</h3>

              <div class="card-tools">
                <a href="create.php" class="btn btn-success"><i class="nav-icon fas"><i
                      class="bi bi-plus-square"></i></i> Crear nuevo nivel</a>
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
                      <center>Gestión educativa</center>
                    </th>
                    <th>
                      <center>Nivel</center>
                    </th>
                    <th>
                      <center>Jornada</center>
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
                  $contador_niveles = 0;
                  foreach ($niveles as $nivel) {
                    //echo $nombre_rol = $nivel['nombre_rol'];
                    $contador_niveles = $contador_niveles + 1;
                    $id_nivel = $nivel['id_nivel']; ?>
                    <tr>
                      <td style="text-align:center"><?= $contador_niveles ?></td>
                      <td style="text-align:center"><?= $nivel['gestion']; ?></td>
                      <td style="text-align:center"><?= $nivel['nivel']; ?></td>
                      <td style="text-align:center"><?= $nivel['jornada']; ?></td>
                      <td style="text-align:center"><?php 
                      if($nivel['estado'] == 1){?>
                        <button class="btn btn-success btn-sm" style="border-radius: 10%;"> ACTIVO </button>
                      <?php
                      }else{?>
                      <button class="btn btn-success btn-sm" style="border-radius: 10%;"> INACTIVO </button>
                    <?php }
                      ?></td>
                      <td style="text-align:center">
                        <div class="btn-group" role="group" aria-label="Basic example">
                          <a type="button" href="show.php?id=<?=$id_nivel;?>" class="btn btn-info btn-sm"><i
                              class="bi bi-eye"></i></a>
                          <a type="button" href="edit.php?id=<?=$id_nivel;?>" class="btn btn-success btn-sm"><i
                              class="bi bi-pencil"></i></a>
                          <form action="<?=APP_URL;?>/app/controllers/niveles/delete.php" onclick="preguntar<?=$id_nivel;?>(event)" method="post" id="miFormulario<?=$id_nivel;?>">
                            <input type="text" name="id_nivel" value="<?=$id_nivel;?>" hidden>
                            <button type="submit" class="btn btn-danger btn-sm" style="border-radius:0px 5px 5px 0px"><i
                                class="bi bi-trash"></i></button>
                          </form>
                          <script>
                            function preguntar<?=$id_nivel;?>(event) {
                              event.preventDefault();
                              Swal.fire({
                                title: 'Eliminar nivel',
                                text: '¿Desea eliminar este nivel?',
                                icon: 'question',
                                showDenyButton: true,
                                confirmButtonText: 'Eliminar',
                                confirmButtonColor: '#a5161d',
                                denyButtonColor: '#270a0a',
                                denyButtonText: 'Cancelar',
                              }).then((result) => {
                                if (result.isConfirmed) {
                                  var form = $('#miFormulario<?=$id_nivel;?>');
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

include ("../../admin/layout/parte2.php");
include ('../../layout/mensajes.php');
?>



<script>
  $(function () {
    $("#example1").DataTable({
      "pageLength": 5,
      "language": {
        "emptyTable": "No hay información",
        "info": "Mostrando _START_ a _END_ de _TOTAL_ Niveles",
        "infoEmpty": "Mostrando 0 a 0 de 0 Niveles",
        "infoFiltered": "(Filtrado de _MAX_ total Niveles)",
        "infoPostFix": "",
        "thousands": ",",
        "lengthMenu": "Mostrar _MENU_ Niveles",
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