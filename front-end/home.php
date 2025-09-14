<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home</title>
    <link rel="stylesheet" href="../src/bootswatch/bootstrap.min.css" />
    <link rel="stylesheet" href="./css/home.css" />
    <link rel="stylesheet" href="./components/css/footer.css">
    <link rel="stylesheet" href="./components/css/navbar.css">
    <link rel="stylesheet" href="./components/css/pagination.css">
    <link rel="stylesheet" href="./components/css/modal.css">
    <link rel="stylesheet" href="./components/css/carousel.css">

    <style>

        .card-img-top {
            height: 380px;
            object-fit: cover;
        }
        
    </style>
</head>
<body>
    <?php include './components/navbar.php'; ?>

    <!-- carousel -->
    <?php include './components/carousel.php'; ?>

    <!-- menu items -->
    <div class="container mb-5" id="menu">
        <h2 class="mt-5 mb-5">Our Menu</h2>
        <div class="row justify-content-center">
            <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                <div class="card card-hover" data-bs-toggle="modal" data-bs-target="#movieModal1">
                    <img src="../src/items/caffemocha.jpg" class="card-img-top" alt="Espresso" />
                    <div class="card-body">
                        <h5 class="card-title">Espresso</h5>
                        <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsa, libero.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                <div class="card card-hover" data-bs-toggle="modal" data-bs-target="#movieModal2">
                    <img src="../src/items/coffee.jpg" class="card-img-top" alt="Croissant" />
                    <div class="card-body">
                        <h5 class="card-title">Coffe Mocha</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit, eveniet.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                <div class="card card-hover" data-bs-toggle="modal" data-bs-target="#movieModal3">
                    <img src="../src/items/cupped.jpg" class="card-img-top" alt="Club Sandwich" />
                    <div class="card-body">
                        <h5 class="card-title">Cupped</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium dicta similique perspiciatis molestias, commodi at?</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                <div class="card card-hover" data-bs-toggle="modal" data-bs-target="#movieModal4">
                    <img src="../src/items/bananabread.jpg" class="card-img-top" alt="Green Tea" />
                    <div class="card-body">
                        <h5 class="card-title">Special Sandwichich</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                <div class="card card-hover" data-bs-toggle="modal" data-bs-target="#movieModal5">
                    <img src="../src/items/specialbread.jpg" class="card-img-top" alt="Chocolate Cake" />
                    <div class="card-body">
                        <h5 class="card-title">Chocolate Cake</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum?.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                <div class="card card-hover" data-bs-toggle="modal" data-bs-target="#movieModal6">
                    <img src="../src/items/buns.jpg" class="card-img-top" alt="Latte" />
                    <div class="card-body">
                        <h5 class="card-title">Buns</h5>
                        <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Deserunt, est quas?</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- About Us -->
    <div id="about" class="container mb-5">
        <h2 class="mt-5 mb-5">About Us</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat perferendis accusantium voluptatibus quibusdam porro perspiciatis at ut itaque fuga praesentium.</p>
    </div>

    <!-- Contact -->
    <div id="contact" class="container mb-5">
        <h2 class="mt-5 mb-5">Contact Us</h2>
        <p>Visit us at: Palawan</p>
        <p>Call us: (123) 456-7890</p>
        <p>Email: info@cafe.com</p>
    </div>

    <!-- Modals -->
    <?php include './components/modal.php'; ?>

    <!-- Import -->
    <?php include './components/footer.php'; ?>
    <?php include './bootstrap/scripts.php'; ?>
</body>
</html>
