<?php
include("templates/header.php");
?>
<main class="page login-page">
    <section class="clean-block clean-form dark">
        <div class="container">
            <div class="block-heading">
                <h2 class="text-info">Inicio de Sesión</h2>
                <p>Inicio de sesión exclusivo para personal administrativo.</p>
            </div>
            <form action="<?php echo htmlentities($_SERVER["PHP_SELF"]); ?>" method="post" enctype="multipart/form-data">
                <div class="mb-3"><label class="form-label" for="email">Correo</label><input class="form-control item" type="email" id="correo" name="correo" value="<?php if(isset($_COOKIE['correo'])) echo $_COOKIE['correo']; ?>" required></div>
                <div class="mb-3"><label class="form-label" for="password">Contraseña</label><input class="form-control" type="password" id="contra" name="contra"  required></div>
                <a href="olvidocontrasena.php">Olvido su contraseña?</a>
                <div class="mb-3">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="recordar" name="recordar"><label class="form-check-label" for="checkbox">Recordarme</label>
                    </div>
                </div>
                <button class="btn btn-primary"  style="margin-right: 10px" type="submit" name="log">Iniciar Sesión</button>
                <?php
                include("../acciones/validacionlogin.php");
                ?>
            </form>
        </div>
    </section>
</main>
<?php
include("templates/footer.php");
?>