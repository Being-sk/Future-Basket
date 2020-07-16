<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="asset/css/style.css" type="text/css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Future</title>
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
    <div class="container mt-5">
        <div class="card mb-3" style="max-width: 540px;">
            <div class="row no-gutters">
                <div class="col-md-4">
                    <img src="asset/img/items/item2.jpg" class="card-img" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">Laptop</h5>
                        <p class="card-text"><small class="text-muted">Price: 1,00,000</small></p>
                        <a class="btn btn-outline-success">Place Order</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

</body>

</html>