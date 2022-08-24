<?php
include("../template-admin/header.php");

// Validar información
$idLibro = (isset($_POST['idLibro']))?$_POST['idLibro']:"";
$nombreLibro = (isset($_POST['nombreLibro']))?$_POST['nombreLibro']:"";
$descripcionLibro = (isset($_POST['descripcionLibro']))?$_POST['descripcionLibro']:"";
$precioLibro = (isset($_POST['precioLibro']))?$_POST['precioLibro']:"";
$imagen = (isset($_FILES['imagen']['name']))?$_FILES['imagen']['name']:"";
$accion = (isset($_POST['accion']))?$_POST['accion']:"";

echo $idLibro."<br/>";
echo $nombreLibro."<br/>";
echo $descripcionLibro."<br/>";
echo $precioLibro."<br/>";
echo $imagen."<br/>";
echo $accion."<br/>";

switch($accion){
    case "agregar":
        echo  "Presionado botón de agregar";
    break;
    case "modificar":
        echo  "Presionado botón de modificar";
    break;
    case "cancelar":
        echo  "Presionado botón de cancelar";
    break;
}
?>

<div class="col-md-5 my-5">
    <div class="card">
        <div class="card-header">
            <h5 class="card-title">Datos de libro</h5>
        </div>
        <div class="card-body">

            <p>Formulario de agregar libros</p>
            <form method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label>ID:</label>
                    <input type="text" class="form-control" name="idLibro" placeholder="Id">
                </div>
                <div class="form-group">
                    <label>Nombre de libro:</label>
                    <input type="text" class="form-control" name="nombreLibro" placeholder="Nombre del libro">
                </div>
                <div class="form-group">
                    <label>Descripción</label>
                    <input type="text" class="form-control" name="descripcionLibro" placeholder="Descripción del libro">
                </div>
                <div class="form-group">
                    <label>Precio del libro:</label>
                    <input type="text" class="form-control" name="precioLibro">
                </div>
                <div class="form-group">
                    <label>Imagen del libro:</label>
                    <input type="file" class="form-control" name="imagen">
                </div>

                <div class="botones text-center">
                    <button type="submit" class="btn btn-success" name="accion" value="agregar">Agregar</button>
                    <button type="button" class="btn btn-warning" name="accion" value="modificar">Modificar</button>
                    <button type="button" class="btn btn-secondary" name="accion" value="cancelar">Cancelar</button>
                </div>

            </form>

        </div>
    </div>
</div>

<div class="col-md-6 my-5">
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Precio</th>
                <th>Imagen</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Tokyo</td>
                <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum.</td>
                <td>$48.000</td>
                <td>imagen.jpg</td>
                <td>Seleccinar | Borrar</td>
            </tr>
        </tbody>
    </table>
</div>


    <?php
    include("../template-admin/footer.php");

    ?>