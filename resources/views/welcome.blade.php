<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Construral</title>
    <link rel="stylesheet" href="css/app.css">
    <script src="js/app.js"></script>
</head>
<body>
   <!-- Include ayuda a traer el layout a esta parte y evitar colocar codigo repetido en cada view -->
    @include('layouts.layout')
   
<!-- Este codigo es del carrusel en el homepage -->
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block w-100" src="images/casa 1.jpg" alt="First slide" width="620" height="480">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="images/casa3.jpg" alt="Second slide" width="620" height="480">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="images/casa3.jpg" alt="Third slide" width="620" height="480">
                            </div>
                        </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- No supe como darle espacio al carrusel y a las cards que queria poner abajo y por eso puse un br xd  -->
    <div class="container">
        <br>
        <br>
        <p>
            <h3 class="text-center">Recent Works</h3>
        </p>
        <br>
        <!-- aqui puse las cards  -->
        <div class="card-deck">
        <div class="col-md-4">
            <div class="card">
                <img src="images/casa3.jpg"  width="100%" heigh="100%">
                <div class="card-body">
                    <h5 class="card-title">Special title treatment</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus error optio ipsam recusandae possimus animi aspernatur aliquid eius voluptates quod, laudantium culpa, in quibusdam nisi harum porro laboriosam iure eligendi.</p>
                    <a href="#" class="btn btn-primary">View project</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <img src="images/casa 1.jpg"  width="100%" heigh="100%">
                <div class="card-body">
                    <h5 class="card-title">Aqui iria el nombre del proyecto</h5>
                    <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nemo, commodi minima? Placeat consectetur dignissimos saepe obcaecati modi harum ea iusto facilis inventore, veritatis recusandae adipisci sit dicta eius illo odio.</p>
                    <a href="#" class="btn btn-primary">View project</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
            <img src="images/casa 1.jpg"  width="100%" heigh="100%">
                <div class="card-body">
                    <h5 class="card-title">Special title treatment</h5>
                    <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quibusdam ducimus maxime, id, sed ipsam sunt iure facere quidem doloribus aliquid sint iste nam quasi sit ex. Incidunt eveniet iusto molestias!</p>
                    <a href="#" class="btn btn-primary">View Project</a>
                </div>
            </div>
        </div>
    </div>  
    <br>
    <br>
    <div class="container col-md-12">
    
        <div class="" style="max-width: 720px;">
            <div class="row no-gutters">
                    <div class="col-md-6">
                        <img src="images/arquitecto.jpg" class="card-img" alt="...">
                    </div>
                <div class="col-md-6">
                    <div class="card-body">
                        <h5 class="card-title">Nombre del vatillo</h5>
                        <p class="card-text">Aqui va la descripcion del vato, que seguramente llame de la base de datos del la collection workers y en el documento hay un model que se llama description</p>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

    @include('layouts.footer')

</html>