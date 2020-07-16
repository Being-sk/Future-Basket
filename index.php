<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FutureBasket</title>
    <link rel="stylesheet" href="asset/css/style.css" type="text/css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-expand-lg">
        <a class="navbar-brand" href="#">Future Basket</a>
        <form class="form-inline my-2 my-lg-0 searchBarContainer" action="allProducts.php">
            <input class="searchBar" type="search" placeholder="Search" aria-label="Search">
            <button class="btn searchBtn" type="submit"><img src="asset/img/search.svg" alt="Q" class="searchLogo"></button>
        </form>
        <a href="buyNow.php"><button class="btn btn-outline-secondary"><i class="fa fa-shopping-cart" style="font-size:24px"></i></button></a>
        <div class="signContainer">
            <a href="login.php"><button class="btn btn-outline-dark" type="button">Login</button></a>
            <a href="register.php"><button class="btn btn-outline-dark ml-3" type="button">Register</button></a>
        </div>
    </nav>
    <section class="mt-3 ml-2">
        <div class="dropdown">
            <button class="btn btn-outline-dark dropdown-toggle ml-5" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Catergory
            </button>
            <a href="trackOrder.php"><button class="btn btn-outline-dark ml-3">Track</button></a>
            <span class="float-right mr-5">
                <a href="contactUs.php" class="text-dark">Contact Us</a>
            </span>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="#">Electronics</a>
                <a class="dropdown-item" href="#">Dress</a>
                <a class="dropdown-item" href="#">Something else here</a>
            </div>
        </div>


    </section>
    <hr>
    <section class="p-4 mb-4">
        <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
            <div class=" carousel-inner">
                <div class="carousel-item active">
                    <img class="itemimg" src="asset/img/items/bg1.jpg" class="d-block w-100 p-5" alt="...">
                </div>
                <div class="carousel-item">
                    <img class="itemimg" src="asset/img/items/item1.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img class="itemimg" src="asset/img/items/item9.jpg" class="d-block w-100" alt="...">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </section>
    <section>
        <div class="jumbotron jumbotron-fluid">
            <div class="container text-center">
                <h1>Enjoy Shopping</h1>
                <h5>Best Items With Cheap Prices</h5>
            </div>
        </div>
    </section>
    <section class="pb-3 px-5">
        <div class="col-4">
            <h3 class="mb-3" style="margin-left: 185px;">Trending Deals</h3>
            <hr class="mb-5" style="margin-left: 185px;">
        </div>
        <div class="container">
            <div class="row">
                <div class="col mb-4">
                    <a href="productDetails.php?id" class="text-decoration-none text-dark">
                        <div class="card">
                            <img class="itemimgCard card-img-top" src="asset/img/items/item4.jpg" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
                                <span><b>Price:</b>10</span>
                                <a href="#" class="btn btn-primary ml-5">Add</a>
                            </div>
                        </div>
                    </a>
                </div>


                <div class="col mb-4">
                    <a href="productDetails.php?id" class="text-decoration-none text-dark">
                        <div class="card">
                            <img class="itemimgCard card-img-top" src="asset/img/items/item6.jpg" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
                                <span><b>Price:</b>100</span>
                                <a href="#" class="btn btn-primary ml-5">Add</a>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col mb-4">
                    <a href="productDetails.php?id" class="text-decoration-none text-dark">
                        <div class="card">
                            <img class="itemimgCard card-img-top" src="asset/img/items/item8.jpg" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
                                <span><b>Price:</b>10,000</span>
                                <a href="#" class="btn btn-primary ml-5">Add</a>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col mb-4">
                    <a href="productDetails.php?id" class="text-decoration-none text-dark">
                        <div class="card">
                            <img class="itemimgCard card-img-top" src="asset/img/items/item9.jpg" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
                                <span><b>Price:</b>1,00,000</span>
                                <a href="#" class="btn btn-primary ml-5">Add</a>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section class="pt-5 pb-5">

        <div class="container">
            <div class="row">
                <div class="col-4">
                    <h3 class="mb-3">Best Selling Deals</h3>
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