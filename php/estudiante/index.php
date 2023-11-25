<?php
    require_once('estudianteModel.php');
    $object = new estudianteModel();
    $rows = $object->listar();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estudiantes</title>
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link rel="stylesheet" href="../../css/table.css">
</head>
<body>
    <?php
    require_once('../navbar.php')
    ?>
    <section class="intro">
    <div class="container">
    <div class="mb-3"></div>
        <h2>Listado de estudiantes</h2>
    </div>   
    <div class="mb-3"></div>
        <a href="./create.php" class="btn btn.primary">Agregar</a>
        <a href="javascript:imprimir('ventana')" class="btn btn.info">Imprimir</a>
    </div>
        <div class="table-responsive table-scroll" data-mbd-perfect-scrollbar="true" style="position: relative; height=700px;">
        <table class="table table-striped mb-0">
            <thead style = "background-color = #002d72;">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellido</th>
                    <th scope="col">Operaciones</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach ($rows as $row) {?>
                <tr>
                    <td><?=$row['idEstudiante']?></td>
                    <td><?=$row['nombre']?></td>
                    <td><?=$row['apellido']?></td>
                    <td>
                        <a class="btn btn-info" href="">Ver</a>
                        <a class="btn btn-warning" href="">Editar</a>
                        <a class="btn btn-danger" href="">Eliminar</a>
                        <?php
                            include('viewModal.php');
                            include('deleteModal.php');
                        ?>
                    </td>
                </tr>
                <?php }?>
            </tbody>
        </table>
        </div>
    </div>
    </section>
    <!-- area de impresion-->
    <div class="container" id="ventana" style="display: none">
    <div class="mb-3"></div>
        <h2>Listado de estudiantes</h2>
        <h4><?date('d/m/Y')?></h4>
    </div>
        <div class="table-responsive table-scroll" data-mbd-perfect-scrollbar="true" style="position: relative; height=700px;">
        <table class="table table-striped mb-0">
            <thead style = "background-color = #002d72;">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellido</th>
                    <th scope="col">Operaciones</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach ($rows as $row) {?>
                <tr>
                    <td><?=$row['idEstudiante']?></td>
                    <td><?=$row['nombre']?></td>
                    <td><?=$row['apellido']?></td>
                    <td><?=$row['codigocurso']?></td>
                </tr>
                <?php }?>
            </tbody>
        </table>
        </div>
        <!-- fin de impresion-->
</body>
<script src="../../js/bootstrap.bundle.min.js"></script>
<script src="../../js/print.js"></script>
</html>