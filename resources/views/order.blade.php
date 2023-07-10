
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        @include('header');   
        
</head>

<div class="container">
@include('sidebar')
<div class="col-lg-9 mt-2 ">
    <div id="carouselExampleIndicators" class="carousel slide my-2  " data-bs-ride="true">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/baju4.jpeg" class="d-block w-100" alt="First slide" height="250px">
            </div>
            <div class="carousel-item">
                <img src="img/baju6.jpeg" class="d-block w-100" alt="Second slide" height="250px">
            </div>
            <div class="carousel-item">
                <img src="img/baju4.jpeg" class="d-block w-100" alt="Third slide" height="250px">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    
    <div class="satu">
        <center><img src="img/baju2.png" width="25px" height="25px" style="margin-left: 15px"><i> Adinda Collection</center></i>
    </img>
</div>
<div class="dua"></div>
<style type="text/css">
        body {
            background-color: gainsboro;
        }

        .satu {
            background-color: white;
            width: 100%;
            height: 28px;
            border-radius: 8px;
        }
        
        .dua {
            padding: 2px;
        }
    </style>
    <div class="row py-2">
        
        <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100" style="box-shadow: 7px 7px 10px skyblue">
                <a href="img/cardigan.jpeg"><img class="card-img-top" src="img/cardigan.jpeg" width="700px" height="150px" alt=""></a>
                <div class="card-body">
                    <h4 class="card-title">
                        <a href="img/cardigan.jpeg">Cardigan</a>
                    </h4>
                    <h5>Rp.120.000</h5>
                    <p class="card-text">Penjelasan bahan baju dan yang lain nya.</p>
					<button class="btn btn-success bi bi-cart4" style="color: "> BUY</button>
                </div>
                <div class="card-footer">
                    <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9733;</small>
                </div>
            </div>
        </div>
        
        <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100" style="box-shadow: 7px 7px 10px skyblue">
                <a href="img/busana-gamis.webp"><img class="card-img-top" src="img/busana-gamis.webp" width="700px" height="150px" alt=""></a>
                <div class="card-body">
                    <h4 class="card-title">
                        <a href="img/busana-gamis.webp">Gamis</a>
                    </h4>
                    <h5>Rp.200.000</h5>
                    <p class="card-text">Penjelasan bahan baju dan yang lain nya.</p>
					<button class="btn btn-success bi bi-cart4" style="color: "> BUY</button>
                </div>
                <div class="card-footer">
                    <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9733;</small>
                </div>
            </div>
        </div>
        
        <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100" style="box-shadow: 7px 7px 10px skyblue">
                <a href="img/baju7.jpg"><img class="card-img-top" src="img/baju7.jpg" width="700px" height="150px" alt=""></a>
                <div class="card-body">
                    <h4 class="card-title">
                        <a href="img/baju7.jpg">kaos</a>
                    </h4>
                    <h5>Rp.180.000</h5>
                    <p class="card-text">Penjelasan bahan baju dan yang lain nya.</p>
					<button class="btn btn-success bi bi-cart4" style="color: "> BUY</button>
                </div>
                <div class="card-footer">
                    <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9733;</small>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100" style="box-shadow: 7px 7px 10px skyblue">
                <a href="img/kemeja2.webp"><img class="card-img-top" src="img/kemeja2.webp" width="700px" height="150px" alt=""></a>
                <div class="card-body">
                    <h4 class="card-title">
                        <a href="img/kemeja2.webp">Kemeja</a>
                    </h4>
                    <h5>Rp.145.000</h5>
                    <p class="card-text">Penjelasan bahan baju dan yang lain nya.</p>
					<button class="btn btn-success bi bi-cart4" style="color: "> BUY</button>
                </div>
                <div class="card-footer">
                    <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9733;</small>
                </div>
            </div>
        </div>
        
        <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100" style="box-shadow: 7px 7px 10px skyblue">
                <a href="img/jumpsuit.webp"><img class="card-img-top" src="img/jumpsuit.webp" width="700px" height="150px" alt=""></a>
                <div class="card-body">
                    <h4 class="card-title">
                        <a href="img/jumpsuit.webp">Jumpsuit</a>
                    </h4>
                    <h5>Rp.200.000</h5>
                    <p class="card-text">Penjelasan bahan baju dan yang lain nya.</p>
					<button class="btn btn-success bi bi-cart4" style="color: "> BUY</button>
                </div>
                <div class="card-footer">
                    <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9733;</small>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100" style="box-shadow: 7px 7px 10px skyblue">
                <a href="img/kulot.jpg"><img class="card-img-top" src="img/kulot.jpg" width="700px" height="150px" alt=""></a>
                <div class="card-body">
                    <h4 class="card-title">
                        <a href="img/kulot.jpg">Kulot</a>
                    </h4>
                    <h5>Rp.195.000</h5>
                    <p class="card-text">Penjelasan bahan baju dan yang lain nya.</p>
					<button class="btn btn-success bi bi-cart4" style="color: "> BUY</button>
                </div>
                <div class="card-footer">
                    <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9733;</small>
                </div>
            </div>
        </div>

        <!-- Footer -->
         <footer class="py-4">
            <div class="container-fluid fixed-bottom">
                <div class="card text-center border-0 bg-primary">
                    <i class="text-center text-white"> (C)CopyRight 2022-2023 - Adinda Collection
                        <a href="https://www.instagram.com/adinda.collection_02/" target="_blank"><img src="img/ig.png" width="40px" height="40px" align="right"></a>
                        <a href="https://www.facebook.com" target="_blank"><img src="img/f.png" width="40px" height="40px" align="right"></a>
                        <a href="whatsapp://send?text=Hello&phone=+6285277722283" target="_blank"><img src="img/wa.png" width="40px" height="40px" align="right"></a>
                    </i>
                </div>
                <!-- End Footer -->
            </div>
        </div>