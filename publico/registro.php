<?php
include("templates/header.php");
?>
<main class="page login-page">
    <section class="clean-block clean-form dark">
        <div class="container">
            <div class="block-heading">
                <h2 class="text-info">Registrar Usuario</h2>
                <p>El Registro es solo para personal administrativo.</p>
            </div>
            <form action="<?php echo htmlentities($_SERVER["PHP_SELF"]); ?>" method="post" enctype="multipart/form-data">
                <div class="mb-3"><label class="form-label" for="email">Correo :</label>
                    <input class="form-control item" type="email" id="correo" name="correo" value="<?php if(isset($_POST['correo'])){ echo $_POST['correo'];} ?>" >
                </div>
                <div class="mb-3"><label class="form-label" for="password">Contraseña :</label>
                    <input class="form-control" type="password" id="contra" name="contra"  value="<?php if(isset($_POST['contra'])){ echo $_POST['contra'];} ?>" >
                </div>
                <div class="mb-3"><label class="form-label" for="codigo">Codigo de Seguridad :</label>
                <div class="input-group">
                <input class="form-control" type="text" id="codigo" name="codigo"  value="<?php if(isset($_POST['codigo'])){ echo $_POST['codigo'];} ?>" required>
                    <span class="input-group-btn">
                    <button class="btn btn-primary" type="submit" name="ver">Verificar</button>
                    </span>
                </div>
                </div>
                <?php
                include("../acciones/validacionregistro.php");
                ?>
            </form>
        </div>
    </section>
</main>
<?php
include("templates/footer.php");
?>