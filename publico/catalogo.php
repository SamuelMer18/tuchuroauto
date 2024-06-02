<?php
include("templates/header.php");
?>
<script type="text/javascript">
    function ocultar1() {
        document.getElementById('pro1').style.display = 'block';
            document.getElementById('products1').style.display = 'block';      
            document.getElementById('products2').style.display = 'none';
            document.getElementById('products3').style.display = 'none';   
    }
    function ocultar2() {
            document.getElementById('products1').style.display = 'none';
            document.getElementById('products2').style.display = 'block';
            document.getElementById('products3').style.display = 'none';   
    }
    function ocultar3() {
            document.getElementById('products1').style.display = 'none';
            document.getElementById('products2').style.display = 'none';
            document.getElementById('products3').style.display = 'block';   
    }
</script>
<main class="page catalogo">
        <section class="clean-block clean-catalog dark">
            <div class="container">
                <div class="block-heading">
                    <h2 class="text-info">Catálogo</h2>
                    <p>Tu Churo Auto tiene modelos de autos que ofrecen algo para todos. Puedes confiar en Tu Churo Auto, ya sea que estés buscando un auto compacto para ir al trabajo, uno deportivo para divertirte o un vehículo familiar para transportar a tus seres queridos a donde sea que necesiten ir de manera segura.</p>
                </div>
                <div class="content">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="d-none d-md-block">
                                <div class="filters">
                                    <div class="filter-item">
                                        <h3>Categorias</h3>
                                        <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-1"><label class="form-check-label" for="formCheck-1">Urbano</label></div>
                                        <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-2"><label class="form-check-label" for="formCheck-2">Sedan</label></div>
                                        <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-3"><label class="form-check-label" for="formCheck-3">Hatchback</label></div>
                                        <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-4"><label class="form-check-label" for="formCheck-4">Deportivo</label></div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <div class="products">
                                <div id="products1">
                                <!-- Productos Fila 1 -->
                                <div class="row g-0">
                                    <div class="col-12 col-md-6 col-lg-4">
                                        <div class="clean-product-item">
                                            <div class="image"><a href="#"><img class="img-fluid d-block mx-auto" src="../assets/img/tech/priusprime22.jpg"></a></div>
                                            <div class="product-name"><a href="#">Toyota Prius Prime 2022</a></div>
                                            <div class="about">
                                                <div class="rating"><img src="../assets/img/star.svg"><img src="../assets/img/star.svg"><img src="../assets/img/star.svg"><img src="../assets/img/star-half-empty.svg"><img src="../assets/img/star-empty.svg"></div>
                                                <div class="price">
                                                    <h3>$34.550</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 col-lg-4">
                                        <div class="clean-product-item">
                                            <div class="image"><a href="#"><img class="img-fluid d-block mx-auto" src="../assets/img/tech/corolla.png"></a></div>
                                            <div class="product-name"><a href="#">Toyota Corolla 2022</a></div>
                                            <div class="about">
                                                <div class="rating"><img src="../assets/img/star.svg"><img src="../assets/img/star.svg"><img src="../assets/img/star.svg"><img src="../assets/img/star-half-empty.svg"><img src="../assets/img/star-empty.svg"></div>
                                                <div class="price">
                                                    <h3>$20.425</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 col-lg-4">
                                        <div class="clean-product-item">
                                            <div class="image"><a href="#"><img class="img-fluid d-block mx-auto" src="../assets/img/tech/dzire.jpg"></a></div>
                                            <div class="product-name"><a href="#">Suzuki DZIREZ</a></div>
                                            <div class="about">
                                                <div class="rating"><img src="../assets/img/star.svg"><img src="../assets/img/star.svg"><img src="../assets/img/star.svg"><img src="../assets/img/star-half-empty.svg"><img src="../assets/img/star-empty.svg"></div>
                                                <div class="price">
                                                    <h3>$16.190</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 col-lg-4">
                                        <div class="clean-product-item">
                                            <div class="image"><a href="#"><img class="img-fluid d-block mx-auto" src="../assets/img/tech/celerio.jpg"></a></div>
                                            <div class="product-name"><a href="#">Suzuki CELERIO</a></div>
                                            <div class="about">
                                                <div class="rating"><img src="../assets/img/star.svg"><img src="../assets/img/star.svg"><img src="../assets/img/star.svg"><img src="../assets/img/star-half-empty.svg"><img src="../assets/img/star-empty.svg"></div>
                                                <div class="price">
                                                    <h3>$15.790</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 col-lg-4">
                                        <div class="clean-product-item">
                                            <div class="image"><a href="#"><img class="img-fluid d-block mx-auto" src="../assets/img/tech/versa.jpg"></a></div>
                                            <div class="product-name"><a href="#">Nissan VERSA</a></div>
                                            <div class="about">
                                                <div class="rating"><img src="../assets/img/star.svg"><img src="../assets/img/star.svg"><img src="../assets/img/star.svg"><img src="../assets/img/star-half-empty.svg"><img src="../assets/img/star-empty.svg"></div>
                                                <div class="price">
                                                    <h3>$18.990</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 col-lg-4">
                                        <div class="clean-product-item">
                                            <div class="image"><a href="#"><img class="img-fluid d-block mx-auto" src="../assets/img/tech/frontier.jpg"></a></div>
                                            <div class="product-name"><a href="#">Nissan Frontier</a></div>
                                            <div class="about">
                                                <div class="rating"><img src="../assets/img/star.svg"><img src="../assets/img/star.svg"><img src="../assets/img/star.svg"><img src="../assets/img/star-half-empty.svg"><img src="../assets/img/star-empty.svg"></div>
                                                <div class="price">
                                                    <h3>$28.990</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 col-lg-4">
                                        <div class="clean-product-item">
                                            <div class="image"><a href="#"><img class="img-fluid d-block mx-auto" src="../assets/img/tech/tundra.jpg"></a></div>
                                            <div class="product-name"><a href="#">Toyota Tundra</a></div>
                                            <div class="about">
                                                <div class="rating"><img src="../assets/img/star.svg"><img src="../assets/img/star.svg"><img src="../assets/img/star.svg"><img src="../assets/img/star-half-empty.svg"><img src="../assets/img/star-empty.svg"></div>
                                                <div class="price">
                                                    <h3>$50.615</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 col-lg-4">
                                        <div class="clean-product-item">
                                            <div class="image"><a href="#"><img class="img-fluid d-block mx-auto" src="../assets/img/tech/mustang.jpg"></a></div>
                                            <div class="product-name"><a href="#">Ford Mustang</a></div>
                                            <div class="about">
                                                <div class="rating"><img src="../assets/img/star.svg"><img src="../assets/img/star.svg"><img src="../assets/img/star.svg"><img src="../assets/img/star-half-empty.svg"><img src="../assets/img/star-empty.svg"></div>
                                                <div class="price">
                                                    <h3>$27.470</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 col-lg-4">
                                        <div class="clean-product-item">
                                            <div class="image"><a href="#"><img class="img-fluid d-block mx-auto" src="../assets/img/tech/superduty.jpeg"></a><a href="#"></a></div>
                                            <div class="product-name"><a href="#">Ford Super Duty</a></div>
                                            <div class="about">
                                                <div class="rating"><img src="../assets/img/star.svg"><img src="../assets/img/star.svg"><img src="../assets/img/star.svg"><img src="../assets/img/star-half-empty.svg"><img src="../assets/img/star-empty.svg"></div>
                                                <div class="price">
                                                    <h3>$31.520</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </div>
                                <div id="products2" style="display: none">
                                <!-- Productos Fila 2 -->
                                <div class="row g-0">
                                    <div class="col-12 col-md-6 col-lg-4">
                                        <div class="clean-product-item">
                                            <div class="image"><a href="#"><img class="img-fluid d-block mx-auto" src="../assets/img/tech/priusprime22.jpg"></a></div>
                                            <div class="product-name"><a href="#">Toyota Prius </a></div>
                                            <div class="about">
                                                <div class="rating"><img src="../assets/img/star.svg"><img src="../assets/img/star.svg"><img src="../assets/img/star.svg"><img src="../assets/img/star-half-empty.svg"><img src="../assets/img/star-empty.svg"></div>
                                                <div class="price">
                                                    <h3>$50.000</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 col-lg-4">
                                        <div class="clean-product-item">
                                            <div class="image"><a href="#"><img class="img-fluid d-block mx-auto" src="../assets/img/tech/corolla.png"></a></div>
                                            <div class="product-name"><a href="#">Toyota Corolla 2022</a></div>
                                            <div class="about">
                                                <div class="rating"><img src="../assets/img/star.svg"><img src="../assets/img/star.svg"><img src="../assets/img/star.svg"><img src="../assets/img/star-half-empty.svg"><img src="../assets/img/star-empty.svg"></div>
                                                <div class="price">
                                                    <h3>$20.425</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 col-lg-4">
                                        <div class="clean-product-item">
                                            <div class="image"><a href="#"><img class="img-fluid d-block mx-auto" src="../assets/img/tech/dzire.jpg"></a></div>
                                            <div class="product-name"><a href="#">Suzuki DZIREZ</a></div>
                                            <div class="about">
                                                <div class="rating"><img src="../assets/img/star.svg"><img src="../assets/img/star.svg"><img src="../assets/img/star.svg"><img src="../assets/img/star-half-empty.svg"><img src="../assets/img/star-empty.svg"></div>
                                                <div class="price">
                                                    <h3>$16.190</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 col-lg-4">
                                        <div class="clean-product-item">
                                            <div class="image"><a href="#"><img class="img-fluid d-block mx-auto" src="../assets/img/tech/celerio.jpg"></a></div>
                                            <div class="product-name"><a href="#">Suzuki CELERIO</a></div>
                                            <div class="about">
                                                <div class="rating"><img src="../assets/img/star.svg"><img src="../assets/img/star.svg"><img src="../assets/img/star.svg"><img src="../assets/img/star-half-empty.svg"><img src="../assets/img/star-empty.svg"></div>
                                                <div class="price">
                                                    <h3>$15.790</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 col-lg-4">
                                        <div class="clean-product-item">
                                            <div class="image"><a href="#"><img class="img-fluid d-block mx-auto" src="../assets/img/tech/versa.jpg"></a></div>
                                            <div class="product-name"><a href="#">Nissan VERSA</a></div>
                                            <div class="about">
                                                <div class="rating"><img src="../assets/img/star.svg"><img src="../assets/img/star.svg"><img src="../assets/img/star.svg"><img src="../assets/img/star-half-empty.svg"><img src="../assets/img/star-empty.svg"></div>
                                                <div class="price">
                                                    <h3>$18.990</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 col-lg-4">
                                        <div class="clean-product-item">
                                            <div class="image"><a href="#"><img class="img-fluid d-block mx-auto" src="../assets/img/tech/frontier.jpg"></a></div>
                                            <div class="product-name"><a href="#">Nissan Frontier</a></div>
                                            <div class="about">
                                                <div class="rating"><img src="../assets/img/star.svg"><img src="../assets/img/star.svg"><img src="../assets/img/star.svg"><img src="../assets/img/star-half-empty.svg"><img src="../assets/img/star-empty.svg"></div>
                                                <div class="price">
                                                    <h3>$28.990</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 col-lg-4">
                                        <div class="clean-product-item">
                                            <div class="image"><a href="#"><img class="img-fluid d-block mx-auto" src="../assets/img/tech/tundra.jpg"></a></div>
                                            <div class="product-name"><a href="#">Toyota Tundra 2020</a></div>
                                            <div class="about">
                                                <div class="rating"><img src="../assets/img/star.svg"><img src="../assets/img/star.svg"><img src="../assets/img/star.svg"><img src="../assets/img/star-half-empty.svg"><img src="../assets/img/star-empty.svg"></div>
                                                <div class="price">
                                                    <h3>$70.000</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 col-lg-4">
                                        <div class="clean-product-item">
                                            <div class="image"><a href="#"><img class="img-fluid d-block mx-auto" src="../assets/img/tech/mustang.jpg"></a></div>
                                            <div class="product-name"><a href="#">Ford Mustang</a></div>
                                            <div class="about">
                                                <div class="rating"><img src="../assets/img/star.svg"><img src="../assets/img/star.svg"><img src="../assets/img/star.svg"><img src="../assets/img/star-half-empty.svg"><img src="../assets/img/star-empty.svg"></div>
                                                <div class="price">
                                                    <h3>$54.000</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 col-lg-4">
                                        <div class="clean-product-item">
                                            <div class="image"><a href="#"><img class="img-fluid d-block mx-auto" src="../assets/img/tech/superduty.jpeg"></a><a href="#"></a></div>
                                            <div class="product-name"><a href="#">Ford Super Duty</a></div>
                                            <div class="about">
                                                <div class="rating"><img src="../assets/img/star.svg"><img src="../assets/img/star.svg"><img src="../assets/img/star.svg"><img src="../assets/img/star-half-empty.svg"><img src="../assets/img/star-empty.svg"></div>
                                                <div class="price">
                                                    <h3>$40.000</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </div>
                                <div id="products3" style="display: none">
                                <!-- Productos Fila 3 -->                                
                                <div class="row g-0">
                                    <div class="col-12 col-md-6 col-lg-4">
                                        <div class="clean-product-item">
                                            <div class="image"><a href="#"><img class="img-fluid d-block mx-auto" src="../assets/img/tech/priusprime22.jpg"></a></div>
                                            <div class="product-name"><a href="#">Toyota Prius Prime 2022</a></div>
                                            <div class="about">
                                                <div class="rating"><img src="../assets/img/star.svg"><img src="../assets/img/star.svg"><img src="../assets/img/star.svg"><img src="../assets/img/star-half-empty.svg"><img src="../assets/img/star-empty.svg"></div>
                                                <div class="price">
                                                    <h3>$34.550</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 col-lg-4">
                                        <div class="clean-product-item">
                                            <div class="image"><a href="#"><img class="img-fluid d-block mx-auto" src="../assets/img/tech/corolla.png"></a></div>
                                            <div class="product-name"><a href="#">Toyota Corolla 2022</a></div>
                                            <div class="about">
                                                <div class="rating"><img src="../assets/img/star.svg"><img src="../assets/img/star.svg"><img src="../assets/img/star.svg"><img src="../assets/img/star-half-empty.svg"><img src="../assets/img/star-empty.svg"></div>
                                                <div class="price">
                                                    <h3>$20.425</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 col-lg-4">
                                        <div class="clean-product-item">
                                            <div class="image"><a href="#"><img class="img-fluid d-block mx-auto" src="../assets/img/tech/dzire.jpg"></a></div>
                                            <div class="product-name"><a href="#">Suzuki DZIREZ</a></div>
                                            <div class="about">
                                                <div class="rating"><img src="../assets/img/star.svg"><img src="../assets/img/star.svg"><img src="../assets/img/star.svg"><img src="../assets/img/star-half-empty.svg"><img src="../assets/img/star-empty.svg"></div>
                                                <div class="price">
                                                    <h3>$16.190</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 col-lg-4">
                                        <div class="clean-product-item">
                                            <div class="image"><a href="#"><img class="img-fluid d-block mx-auto" src="../assets/img/tech/celerio.jpg"></a></div>
                                            <div class="product-name"><a href="#">Suzuki CELERIO</a></div>
                                            <div class="about">
                                                <div class="rating"><img src="../assets/img/star.svg"><img src="../assets/img/star.svg"><img src="../assets/img/star.svg"><img src="../assets/img/star-half-empty.svg"><img src="../assets/img/star-empty.svg"></div>
                                                <div class="price">
                                                    <h3>$15.790</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 col-lg-4">
                                        <div class="clean-product-item">
                                            <div class="image"><a href="#"><img class="img-fluid d-block mx-auto" src="../assets/img/tech/versa.jpg"></a></div>
                                            <div class="product-name"><a href="#">Nissan VERSA</a></div>
                                            <div class="about">
                                                <div class="rating"><img src="../assets/img/star.svg"><img src="../assets/img/star.svg"><img src="../assets/img/star.svg"><img src="../assets/img/star-half-empty.svg"><img src="../assets/img/star-empty.svg"></div>
                                                <div class="price">
                                                    <h3>$18.990</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 col-lg-4">
                                        <div class="clean-product-item">
                                            <div class="image"><a href="#"><img class="img-fluid d-block mx-auto" src="../assets/img/tech/frontier.jpg"></a></div>
                                            <div class="product-name"><a href="#">Nissan Frontier</a></div>
                                            <div class="about">
                                                <div class="rating"><img src="../assets/img/star.svg"><img src="../assets/img/star.svg"><img src="../assets/img/star.svg"><img src="../assets/img/star-half-empty.svg"><img src="../assets/img/star-empty.svg"></div>
                                                <div class="price">
                                                    <h3>$28.990</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 col-lg-4">
                                        <div class="clean-product-item">
                                            <div class="image"><a href="#"><img class="img-fluid d-block mx-auto" src="../assets/img/tech/tundra.jpg"></a></div>
                                            <div class="product-name"><a href="#">Toyota Tundra</a></div>
                                            <div class="about">
                                                <div class="rating"><img src="../assets/img/star.svg"><img src="../assets/img/star.svg"><img src="../assets/img/star.svg"><img src="../assets/img/star-half-empty.svg"><img src="../assets/img/star-empty.svg"></div>
                                                <div class="price">
                                                    <h3>$50.615</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 col-lg-4">
                                        <div class="clean-product-item">
                                            <div class="image"><a href="#"><img class="img-fluid d-block mx-auto" src="../assets/img/tech/mustang.jpg"></a></div>
                                            <div class="product-name"><a href="#">Ford Mustang</a></div>
                                            <div class="about">
                                                <div class="rating"><img src="../assets/img/star.svg"><img src="../assets/img/star.svg"><img src="../assets/img/star.svg"><img src="../assets/img/star-half-empty.svg"><img src="../assets/img/star-empty.svg"></div>
                                                <div class="price">
                                                    <h3>$27.470</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 col-lg-4">
                                        <div class="clean-product-item">
                                            <div class="image"><a href="#"><img class="img-fluid d-block mx-auto" src="../assets/img/tech/superduty.jpeg"></a><a href="#"></a></div>
                                            <div class="product-name"><a href="#">Ford Super Duty</a></div>
                                            <div class="about">
                                                <div class="rating"><img src="../assets/img/star.svg"><img src="../assets/img/star.svg"><img src="../assets/img/star.svg"><img src="../assets/img/star-half-empty.svg"><img src="../assets/img/star-empty.svg"></div>
                                                <div class="price">
                                                    <h3>$31.520</h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </div>
                                <nav>
                                    <ul class="pagination">
                                        <li class="page-item disabled"><a class="page-link" aria-label="Previous"><span aria-hidden="true">«</span></a></li>
                                        <li class="page-item" id="pro1"><a class="page-link" href="#products1" id="pro1" onclick="ocultar1();">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#products2" id="pro2" onclick="ocultar2();">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#products3" id="pro3" onclick="ocultar3();">3</a></li>
                                        <li class="page-item"><a class="page-link" aria-label="Next"><span aria-hidden="true">»</span></a></li>
                                    </ul>
                                </nav> 
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </section>
    </main>
<?php
include("templates/footer.php");
?>