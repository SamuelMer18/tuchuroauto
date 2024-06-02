<?php
include("templates/header.php");
?>
<main class="page login-page">
    <section class="clean-block clean-form dark">
        <div class="container">
            <div class="block-heading">
                <h2 class="text-info">Olvidó su contraseña?</h2>
                <p>Ingrese su correo electronico, se enviara un codigo unico para actualizar su contraseña.</p>
            </div>
            <form action="<?php echo htmlentities($_SERVER["PHP_SELF"]); ?>" method="post" enctype="multipart/form-data">
                <div class="mb-3"><label class="form-label" for="email">Correo Electronico :</label>
                    <input class="form-control item" type="email" id="correo" name="correo" required>
                </div>
                <div class="mb-3">
                    <button class="btn btn-primary" type="submit" name="recuperarbtn">Enviar Codigo</button>
                </div>
                <?php
                include("../acciones/recuperarcontra.php");
                ?>
            </form>
        </div>
    </section>
</main>
<?php
include("templates/footer.php");
?>