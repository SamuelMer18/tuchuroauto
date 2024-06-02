<?php
include("templates/header.php");
?>
<main class="page login-page">
    <section class="clean-block clean-form dark">
        <div class="container">
            <div class="block-heading">
                <h2 class="text-info">Ingrese el codigo Proporcionado</h2>
                <p>Ingrese su codigo, que se le envio a su correo electronico.</p>
            </div>
            <form action="<?php echo htmlentities($_SERVER["PHP_SELF"]); ?>" method="post" enctype="multipart/form-data">
                <div class="mb-3"><label class="form-label" for="codigo">Ingrese el Codigo</label>
                    <input class="form-control" type="text" id="codigo" name="codigo" required>
                </div>
                <div class="mb-3">
                    <button class="btn btn-primary" type="submit" name="enviarcodigo">Confirmar</button>
                </div>
                <?php
                include("../acciones/codigorestablecer.php");
                ?>
            </form>
        </div>
    </section>
</main>
<?php
include("templates/footer.php");
?>