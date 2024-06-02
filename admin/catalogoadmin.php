<?php
session_start();
include("templatesadmin/headeradmin.php");
?>
<main class="page login-page">
    <section class="clean-block clean-form dark">
        <div class="container">
            <div class="block-heading">
                <h2 class="text-info">Registrar Producto</h2>
            </div>
            <form action="<?php echo htmlentities($_SERVER["PHP_SELF"]); ?>" method="post" enctype="multipart/form-data">
                <div class="mb-3"><label class="form-label" for="modelo">Modelo</label><input class="form-control item" type="text" id="modelo" name="modelo" required></div>
                <div class="mb-3"><label class="form-label" for="precio">Precio</label><input class="form-control item" type="text" id="precio" name="precio" required></div>
                <div class="mb-3">
                    <label for="marca" class="control-label">Marca</label>
                    <select class="form-select" id="marca_id">
                        <option value="Toyota">Toyota</option>
                        <option value="Nissan">Nissan</option>
                        <option value="Suzuki">Suzuki</option>
                        <option value="Ford">Ford</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="estado" class="control-label">Estado</label>
                    <select class="form-select" id="marca_id">
                        <option value="Disponible">Disponible</option>
                        <option value="Agotado">Agotado</option>
                    </select>
                </div>
                <div class="mb-3"><label class="form-label" for="descripcion">Descripcion</label>
                    <textarea class="form-control item" id="descripcion" name="descripcion" rows="7" required></textarea>
                </div>
                <div class="mb-3">
                    <label for="formFileMultiple" class="form-label">Subir Imagenes</label>
                    <input class="form-control" type="file" id="imagenes" name="imagenes" multiple required>
                </div>
                <button class="btn btn-primary" type="submit" name="regauto">Registrar Auto</button>
                <?php
                include("../acciones/ingresarauto.php");
                ?>
            </form>
        </div>
    </section>
</main>
<?php
include("templatesadmin/footeradmin.php");
?>