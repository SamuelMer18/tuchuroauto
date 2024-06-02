<?php
session_start();
include("templatesadmin/headeradmin.php");
?>
<main class="page index">
    <section class="clean-block clean-hero" style="background-image:url(&quot;../assets/img/tech/image4.jpg&quot;);color:rgba(9, 162, 255, 0.85);">
        <div class="text">
            <h2>Bienvenido</h2>
            <h3>
                <?php 
                $partes=explode("@", $_SESSION['correo']);
                echo ($partes[0]);?>
            </h3>
        </div>
    </section> 
</main>
<?php
include("templatesadmin/footeradmin.php");
?>