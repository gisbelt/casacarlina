<?php
session_start();
$sesion = session_id();
// echo $sesion;
?>
<!-- Esto es lo primero que quiero que vea el usuario -->
<div id="carouselId" class="carousel slide " data-bs-ride="carousel">
    <ol class="carousel-indicators">
        <li data-bs-target="#carouselId" data-bs-slide-to="0" class="active"></li>
        <li data-bs-target="#carouselId" data-bs-slide-to="1"></li>
        <li data-bs-target="#carouselId" data-bs-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
        <div class="carousel-item active">
            <img class="img-fluid centrado" src="./administrador/img/sala3.jpg" alt="First slide" style="width: 100%; height:440px;">
        </div>
        <div class="carousel-item">
            <img class="img-fluid centrado" src="./administrador/img/sala2.jpg" alt="Second slide" style="width: 100%; height:440px;">
        </div>
        <div class="carousel-item">
            <img class="img-fluid centrado" src="./administrador/img/sala.jpg" alt="Third slide" style="width: 100%; height:440px;">
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselId" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselId" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
</div>
<br><br>

<!-- ********************************* -->

<h1 class="display-4 text-center">Productos destacados</h1>
<hr class="my-4">

<!-- ********************************* -->

<div class="contenedor">
    <div class="caja">
        <img src="./administrador/img/sala.jpg" alt="">
        <p>Imagen</p>
    </div>
    <div class="caja">
        <img src="./administrador/img/sala.jpg" alt="">
        <p>Imagen</p>
    </div>
    <div class="caja">
        <img src="./administrador/img/sala.jpg" alt="">
        <p>Imagen</p>
    </div>
    <div class="caja">
        <img src="./administrador/img/sala.jpg" alt="">
        <p>Imagen</p>
    </div>
    <div class="caja">
        <img src="./administrador/img/sala.jpg" alt="">
        <p>Imagen</p>
    </div>
    <div class="caja">
        <img src="./administrador/img/sala.jpg" alt="">
        <p>Imagen</p>
    </div>
</div>
<hr class="my-4">
<!-- Agregar slider de target  -->

<!-- ********************************* -->

<br><br>
<div class="container">
<div class="row">
    
    <?php foreach($articulos as $articulos) { ?>
    <div class="col-md-4">
        <div class="card">
            <img class="card-img-top" src="./administrador/img/<?php echo $articulos->imagen;?>" alt="" style="width: 100%; height: 300px;">
            <div class="card-body centrado">
                <h5 class="card-title text-dark text-center " style=""><?php echo $articulos->nombre_articulo;?></h5>
                <h6 class="card-title text-success text-center">$<?php echo number_format($articulos->precio_venta, 2);?></h6>
                <hr class="my-2">
                <!-- botones  -->
                <div class="centrar_vertical">
                    <div class="caja_btn_ver">
                        <a name="" id="" class="btn btn-info" href="" role="button">Ver</a>
                    </div>
                    <!-- Si ya está en carrito  -->
                    <!-- <form action="" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="id_articulos" value="<?php echo $articulos->id_articulos ?>">
                        <span name="" id="" class="btn btn-success" style="margin-top: 10px;">En el carrito</span>
                        <button type="submit" name="" id="" class="btn btn-danger" style="margin-top: 10px;">Quitar del carrito</button>
                    </form> -->
                    <!-- Si no está en carrito -->
                    <div class="caja_btn_agregar">
                        <a name="agregar_carrito1" id="<?php echo $articulos->id_articulos ?>" class="btn btn-danger agregar_carrito1">
                            <i class="bi bi-plus"></i>
                        </a>
                    </div>
                </div>
                <!-- botones  -->
            </div>
        </div>
    </div>
    <?php } ?>
</div>
</div> <!--  Container -->

<!-- ********************************* -->  

<br><br>
<div class="p-5 bg-dark text-center">
    <div class="container">
        <h1 class="display-3 text-light">Promoción</h1>
        <p class="lead text-light">20% DE DESCUENTO</p>
        <hr class="my-2 text-dark">
        <p class="text-light">Todo lo que veas a partir de acá, lo tendrás a un 20% de descuento</p>
        <p class="lead">
            <a class="btn btn-info btn-lg" href="Jumbo action link" role="button">Ver más</a>
        </p>
    </div>
</div>

<!-- ********************************* -->

<br><br>
<div class="container">
<div class="row">
    <?php foreach($articulosDes as $articulosDes) { ?>
    <div class="col-md-6 mb-3">
        <div class="card">
            <img class="card-img-top" src="./administrador/img/<?php echo $articulosDes->imagen;?>" alt="" style="height: 444px;">
            <div class="card-body">
                <h5 class="card-title text-dark text-center"><?php echo $articulosDes->nombre_articulo;?></h5>
                <h6 class="card-title text-success text-center"">$<?php echo number_format($articulosDes->precio_venta, 2);;?></h6>
                <hr class="my-2">
                <!-- botones  -->
                <div class="centrar_vertical">
                    <div class="caja_btn_ver">
                        <a name="" id="" class="btn btn-info" href="" role="button">Ver más</a>
                    </div>
                    <div>
                        <form action="" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="id_articulos" value="<?php echo $articulosDes->id_articulos ?>">
                            <button type="submit" name="agregar_carrito2" id="" class="btn btn-danger centrado">
                                <i class="bi bi-plus"></i>
                            </button>
                        </form>
                    </div>
                </div>
                <!-- botones  -->
            </div>
        </div>
    </div>
    <?php } ?>
</div>
</div> <!--  Container -->

<!-- ********************************* -->

<!-- Modal para mostrar mensaje de éxito al agregar un carrito  -->
<div class="carrito_agregado modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">¡En hora buena!</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Se ha agregado el producto al carrito exitosamente
            </div>
            <div class="modal-footer">
                <a href="?controlador=carrito&accion=vercarrito" class="btn btn-primary">Ver Carrito</a>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- ********************************* -->

<br><br>
<footer>
    <!-- Section: Social media -->
    <section class="d-flex justify-content-between p-4 bg-info">
        <!-- primary|secondary|success|danger|warning|info|light|dark|link -->
        <!-- Left -->
        <div class="me-5">
            <span class="default">Mantente conectado con nosotros en las redes sociales</span>
        </div>
        <!-- Left -->

        <!-- Right -->
        <div>
            <a href="" class="text-decoration-none default me-4">
            <i class="bi bi-facebook"></i>
            </a>
            <a href="" class="text-decoration-none default me-4">
            <i class="bi bi-twitter"></i>
            </a>
            <a href="" class="text-decoration-none default me-4">
            <i class="bi bi-google"></i>
            </a>
            <a href="" class="text-decoration-none default me-4">
            <i class="bi bi-instagram"></i>
            </a>
            <a href="" class="text-decoration-none default me-4">
            <i class="bi bi-linkedin"></i>
            </a>
        </div>
        <!-- Right -->        
    </section>
    <!-- Section: Social media -->

    <!-- Section: Links  -->
    <section class="">
        <div class="container text-center text-md-start mt-5">
            <!-- Grid row -->
            <div class="row mt-3">
                <!-- Grid column -->
                <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                    <!-- Content -->
                    <h6 class="text-uppercase fw-bold">Tienda Casa Carlina</h6>
                    <hr class="mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color: #7c4dff; height: 2px" />
                    <p>
                    ¡Tu tiendita de confianza!
                    </p>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                    <!-- Links -->
                    <h6 class="text-uppercase fw-bold">Dirección</h6>
                    <hr class="mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color: #7c4dff; height: 2px" />
                    <p> Av. Los Horcones, Av. La Salle, Barquisimeto 3001, Lara</p>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                    <!-- Links -->
                    <h6 class="text-uppercase fw-bold">Redes Sociales</h6>
                    <hr class="mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color: #7c4dff; height: 2px" />
                    <p> <a href="#" class="" style="text-decoration: none;"><i class="bi bi-twitter"></i> Twitter</a> </p>
                    <p> <a href="#" class="" style="text-decoration: none;"><i class="bi bi-instagram"></i> Instagram</a> </p>
                    <p> <a href="#" class="" style="text-decoration: none;"><i class="bi bi-facebook"></i> Facebook</a> </p>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                    <!-- Links -->
                    <h6 class="text-uppercase fw-bold">Contacto</h6>
                    <hr class="mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color: #7c4dff; height: 2px"/>
                    <p><i class="bi bi-envelope"></i>contacto@casacarlina.com.ve</p>
                    <p><i class="bi bi-telephone"></i> +58 587 7489</p>
                </div>
                <!-- Grid column -->
            </div>
            <!-- Grid row -->
        </div>
    </section>
    <!-- Section: Links  -->

    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
        © 2021 Copyright:
        <a class="text-white" href="http://upaebvirtual.edu.ve/web/"> Gisbel Torres</a>
    </div>
    <!-- Copyright -->

</footer>