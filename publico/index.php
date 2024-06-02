<?php
include("templates/header.php");
?>
<main class="page index">
    <section class="clean-block clean-hero" style="background-image:url(&quot;../assets/img/scenery/variedad.jpg&quot;);color:rgba(0, 0, 255, 0.2);">
        <div class="text">
            <b><h1>Tu Churo Auto</h1></b>
            <p>Tu Churo Auto tiene modelos de autos que ofrecen algo para todos. Puedes confiar en Tu Churo Auto, ya sea que estés buscando un auto compacto para ir al trabajo, uno deportivo para divertirte o un vehículo familiar para transportar a tus seres queridos a donde sea que necesiten ir de manera segura.</p>
        </div>
    </section>
    
    <section class="clean-block slider dark">
        <div class="container">
            <div class="block-heading">
                <h2 class="text-info">Explora los vehículos</h2>
                <p>Eleva tus aventuras con rendimiento siempre al mando.</p>
            </div>
            <div class="carousel slide" data-bs-ride="carousel" id="carousel-1">
                <div class="carousel-inner">
                    <div class="carousel-item active"><img class="w-100 d-block" src="../assets/img/scenery/nissan.jpg" alt="Slide Image"></div>
                    <div class="carousel-item"><img class="w-100 d-block" src="../assets/img/scenery/xtrail.jpg" alt="Slide Image"></div>
                    <div class="carousel-item"><img class="w-100 d-block" src="../assets/img/scenery/mustang.jpg" alt="Slide Image"></div>
                    <div class="carousel-item"><img class="w-100 d-block" src="../assets/img/scenery/frontier.jpeg" alt="Slide Image"></div>
                    <div class="carousel-item"><img class="w-100 d-block" src="../assets/img/scenery/baleno.jpg" alt="Slide Image"></div>
                    <div class="carousel-item"><img class="w-100 d-block" src="../assets/img/scenery/raptor.jpg" alt="Slide Image"></div>
                </div>
                <div><a class="carousel-control-prev" href="#carousel-1" role="button" data-bs-slide="prev"><span class="carousel-control-prev-icon"></span><span class="visually-hidden">Previous</span></a><a class="carousel-control-next" href="#carousel-1" role="button" data-bs-slide="next"><span class="carousel-control-next-icon"></span><span class="visually-hidden">Next</span></a></div>
                <ol class="carousel-indicators">
                    <li data-bs-target="#carousel-1" data-bs-slide-to="0" class="active"></li>
                    <li data-bs-target="#carousel-1" data-bs-slide-to="1"></li>
                    <li data-bs-target="#carousel-1" data-bs-slide-to="2"></li>
                    <li data-bs-target="#carousel-1" data-bs-slide-to="3"></li>
                    <li data-bs-target="#carousel-1" data-bs-slide-to="4"></li>
                    <li data-bs-target="#carousel-1" data-bs-slide-to="5"></li>
                </ol>
            </div>
        </div>
    </section>

    <section class="clean-block clean-info dark">
        <div class="container">
           
            <div class="row align-items-center">
                <div class="col-md-6"><img class="img-thumbnail" src="../assets/img/scenery/tundra.jpg"></div>
                <div class="col-md-6">
                    <h3>Toyota TUNDRA</h3>
                    <div class="getting-started-info">
                        <p>Diseñada para aventuras memorables</p>
                    </div><button class="btn btn-outline-primary btn-lg" type="button">Detalle</button>
                </div>
            </div>
            <div class="block-heading">
                <h2 class="text-info">Información</h2>
                <p>Tu Churo Auto tiene modelos de autos que ofrecen algo para todos. Puedes confiar en Tu Churo Auto, ya sea que estés buscando un auto compacto para ir al trabajo, uno deportivo para divertirte o un vehículo familiar para transportar a tus seres queridos a donde sea que necesiten ir de manera segura.</p>
            </div>
        </div>
    </section>
</main>
<?php
include("templates/footer.php");
?>