<?php include("../../templates/header.php"); ?>
<br>
<br>
<h2>Usuarios</h2>
<div class="card">
    <div class="card-header">
        <a name="" id="" class="btn btn-primary" href="crear.php" role="button">Agregar registro</a>
    </div>
    <div class="card-body">
        <div class="table-responsive-sm">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nombre del usuario</th>
                        <th scope="col">Contraseña</th>
                        <th scope="col">Email</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="">
                        <td scope="row">1</td>
                        <td>Benjamin Castro</td>
                        <td>osososos</td>
                        <td>benjas@gmail.com</td>
                        <td>
                            <a name="" id="" class="btn btn-info" href="crear.php" role="button">Editar</a>
                            <a name="" id="" class="btn btn-danger" href="crear.php" role="button">Eliminar</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php include("../../templates/footer.php"); ?>