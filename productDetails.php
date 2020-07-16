<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="asset/css/style.css" type="text/css">

    <title>Future Basket</title>
    <style>
        .checked {
            color: blue;
        }

        .container {

            margin-top: 10%;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg">
        <a class="navbar-brand" href="index.php">Future Basket</a>
        <form class="form-inline my-2 my-lg-0 searchBarContainer">
            <input class="searchBar" type="search" placeholder="Search" aria-label="Search">
            <button class="btn searchBtn" type="submit"><img src="asset/img/search.svg" alt="Q" class="searchLogo"></button>
        </form>
        <a><button class="btn btn-outline-secondary"><i class="fa fa-shopping-cart" style="font-size:24px"></i></button></a>
        <div class="signContainer">
            <a href="login.php"><button class="btn btn-outline-dark" type="button">Login</button></a>
            <a href="register.php"><button class="btn btn-outline-dark ml-3" type="button">Register</button></a>
        </div>
    </nav>
    <div class="container">
        <div class="row">
            <div class="col-6">
                <img src="asset/img/items/item2.jpg" class="w-100 buyProduct" style="height: 50vh;">
            </div>
            <div class="col-6 ">
                <h6 class="text-muted">BRAND NAME</h6>
                <h2 class="text-dark">The Catcher in the Rye</h2>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
                <span class="text-dark ">4 Reviews</span>

                <p class="mt-3 text-wrap " style="line-height: 25px;">
                    Fam locavore kickstarter distillery.
                    Mixtape chillwave tumeric sriracha
                    taximy chia microdosing tilde DIY.
                    XOXO fam indxgo juiceramps cornhole
                    raw denim forage brooklyn. Everyday
                    carry +1 seitan poutine tumeric.
                    Gastropub blue bottle austin listicle
                    pour-over, neutra jean shorts
                    keytar banjo tattooed umami cardigan.</p>
                <hr class="mb-4">
                <b>Rs</b><span style="font-size: 30px;">&nbsp;2,500</span>
                <span class="float-right">
                    <button class="btn btn-outline-dark float:right">Add to Cart</button>
                    <button class="btn btn-outline-dark">Buy Now</button>
                </span>
            </div>
        </div>
    </div>
    <section class="pt-5 pb-5">

        <div class="container">
            <div class="row">
                <div class="col-4">
                    <h3 class="mb-3">Similar Products</h3>
                    <hr class="pb-5">
                </div>

                <div class="col-8 text-right">
                    <a class="btn btn-primary mb-3 mr-1" href="#carouselExampleIndicators2" role="button" data-slide="prev">
                        <i class="fa fa-arrow-left"></i>
                    </a>
                    <a class="btn btn-primary mb-3 " href="#carouselExampleIndicators2" role="button" data-slide="next">
                        <i class="fa fa-arrow-right"></i>
                    </a>
                </div>
                <div class="col-12">
                    <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">

                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="row">
                                    <div class="col-md-4 mb-3">
                                        <div class="card">
                                            <img class="itemimgCard" src="asset/img/items/item7.jpg">
                                            <div class="card-body">
                                                <h4 class="card-title">Special title treatment</h4>
                                                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>

                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <div class="card">
                                            <img class="itemimgCard" src="asset/img/items/item6.jpg">
                                            <div class="card-body">
                                                <h4 class="card-title">Special title treatment</h4>
                                                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <div class="card">
                                            <img class="itemimgCard" src="asset/img/items/item5.jpg">
                                            <div class="card-body">
                                                <h4 class="card-title">Special title treatment</h4>
                                                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>

                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row">

                                    <div class="col-md-4 mb-3">
                                        <div class="card">
                                            <img class="itemimgCard" src="asset/img/items/item4.jpg">
                                            <div class="card-body">
                                                <h4 class="card-title">Special title treatment</h4>
                                                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>

                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <div class="card">
                                            <img class="itemimgCard" src="asset/img/items/item3.jpg">
                                            <div class="card-body">
                                                <h4 class="card-title">Special title treatment</h4>
                                                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <div class="card">
                                            <img class="itemimgCard" src="asset/img/items/item2.jpg">
                                            <div class="card-body">
                                                <h4 class="card-title">Special title treatment</h4>
                                                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>

                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row">
                                    <div class="col-md-4 mb-3">
                                        <div class="card">
                                            <img class="itemimgCard" src="asset/img/items/item1.jpg">
                                            <div class="card-body">
                                                <h4 class="card-title">Special title treatment</h4>
                                                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <div class="card">
                                            <img class="itemimgCard" src="asset/img/items/item9.jpg">
                                            <div class="card-body">
                                                <h4 class="card-title">Special title treatment</h4>
                                                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <div class="card">
                                            <img class="itemimgCard" src="asset/img/items/item8.jpg">
                                            <div class="card-body">
                                                <h4 class="card-title">Special title treatment</h4>
                                                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Footer -->
    <hr>
    <footer class="page-footer font-small blue pt-4">

        <!-- Footer Links -->
        <div class="container-fluid text-center text-md-left">

            <!-- Grid row -->
            <div class="row">

                <!-- Grid column -->
                <div class="col-md-6 mt-md-0 mt-3">

                    <!-- Content -->
                    <h5 class="text-uppercase">Future Basket</h5>

                </div>
                <!-- Grid column -->

                <hr class="clearfix w-100 d-md-none pb-3">

                <!-- Grid column -->
                <div class="col-md-3 mb-md-0 mb-3">

                    <!-- Links -->
                    <h5 class="text-uppercase">Links</h5>

                    <ul class="list-unstyled">
                        <li>
                            <a href="#!">Link 1</a>
                        </li>
                        <li>
                            <a href="#!">Link 2</a>
                        </li>
                        <li>
                            <a href="#!">Link 3</a>
                        </li>
                        <li>
                            <a href="#!">Link 4</a>
                        </li>
                    </ul>

                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-3 mb-md-0 mb-3">

                    <!-- Links -->
                    <h5 class="text-uppercase">Links</h5>

                    <ul class="list-unstyled">
                        <li>
                            <a href="#!">Link 1</a>
                        </li>
                        <li>
                            <a href="#!">Link 2</a>
                        </li>
                        <li>
                            <a href="#!">Link 3</a>
                        </li>
                        <li>
                            <a href="#!">Link 4</a>
                        </li>
                    </ul>

                </div>
                <!-- Grid column -->

            </div>
            <!-- Grid row -->

        </div>
        <!-- Footer Links -->

        <!-- Copyright -->
        <div class="copyright">
            <h6 style="font-size: 25px;">Future Basket Copyright @2020</h6>
        </div>
        <!-- Copyright -->

    </footer>
    <!-- Footer -->

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>

</html>