<?php


?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/qrcode/1.5.1/qrcode.js" integrity="sha512-hAz8pxm1kva4chZWPXQhGehvvlIj1Loka653sQXoYHNj4sgSukoR3ZKyHEOT7kFGVW17wUqD9CbKeviIJ2XFKQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/qrcode/1.5.1/qrcode.tosjis.js" integrity="sha512-DVvoARLb6F58VazZQp5uRZaUU5RLPsT8rbap9rlbbiHalylbtOAyaCSt/uuAk1mpnKbkucO6CQrWdjQKnMkJiQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="Generateur.js"></script>
    <title>Générer Code QR</title>
</head>

<body>

<header>
    <!--Nav-Bar-->
    <nav class="navbar navbar-expand-sm bg-light " id="nav-index">
        <div class="container-fluid">
            <a class="navbar-brand" href="">
                <img src="../icone/online-library.png" alt="logo" width="50px">E-Library
            </a>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="">
                        <img src="../icone/maison.png" style="width:50px" alt="home" class="rounded-pill"> Home
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <img src="../icone/open-book.png" style="width:50px" alt="products"> Browse
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <img src="../icone/store_icon-icons.com_56116.png" style="width:50px" alt="store"> Store
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <img src="../icone/ecouteurs.png" style="width:50px" alt="contact"> Contact Us
                    </a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                        <img src="../icone/round-account-button-with-user-inside_icon-icons.com_72596.png" style="width:50px" alt="account" class="rounded-pill"> Account
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Sign Up</a></li>
                        <li><a class="dropdown-item" href="#">LogIn</a></li>
                        <li><a class="dropdown-item" href="#">LogOut</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <img src="../icone/panier.png" style="width:50px" alt="cart"> Cart
                    </a>
                </li>
            </ul>
            <form class="d-flex">
                <label for="trouve"></label>
                <input class="form-control me-2" type="search" placeholder="Search" name="trouve" id="trouve">
                <button class="btn btn-primary" type="button">Search</button>
            </form>
        </div>
    </nav>
</header>

<section class="container-fluid">



    <article>
        <h1 class="text-center text-uppercase text-bg-primary text-white text-sm-center">Ajouter Livre</h1>
        <!--FORMULAIRE-->

        <?php if (isset($errors)) { ?>
            <div class='alert alert-danger alert-dismissible'>
                <button type='button' class='btn-close' data-bs-dismiss='alert'></button>
                <strong>Erreur!</strong><?php echo $errors; ?>
            </div>
        <?php } ?>

        <?php if (isset($success)) { ?>
            <div class='alert alert-success alert-dismissible'>
                <button type='button' class='btn-close' data-bs-dismiss='alert'></button>
                <strong>Succès!</strong><?php echo $success; ?>
            </div>
        <?php } ?>

        <div class="container-sm p-sm-5 mt-auto border bg-dark text-white ">
            <form action="" method="post" id="generate-form">

                <div class="row">
                    <div class="col">
                        <label for="url" class="form-label"></label>
                        <input type="url" class="form-control" id="url" placeholder="Lien" name="url">
                    </div>

                    <div class="col">
                        <label for="size" class="form-label"></label>
                        <select class="form-select" name="size" id="size">
                            <option value="100">100x100</option>
                            <option value="200">200x200</option>
                            <option value="300" selected>300x300</option>
                            <option value="400">400x400</option>
                            <option value="500">500x500</option>
                            <option value="600">600x600</option>
                            <option value="700">700x700</option>
                        </select>
                    </div>

                </div>

                <br>
                <div class="d-grid">
                    <button type="submit" class="btn btn-primary btn-block">Générer</button>
                </div>
            </form>
        </div>
    </article>
</section>

<!--<footer class="container-fluid text-center bg-black text-white">
<p>Online Store Copyright</p>
</footer>-->

</body>

</html>