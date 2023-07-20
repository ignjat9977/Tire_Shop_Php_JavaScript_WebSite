<?php
    $headerImage = "assets/img/car-cover-2.jpg";
    $coverText = "About author!";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php 
        include("assets/includes/head.php");
    ?>
</head>
<body>

    <!-- Start header -->
    <?php
        include("assets/includes/header.php");
    ?>
    <!-- End -->

    <!-- Start Login -->
    <?php
        include("assets/includes/login.php");
    ?>
    <!-- End -->

    <!-- Start Register -->
    <?php
        include("assets/includes/register.php");
    ?>
    <!-- End -->

    <!-- Start cover -->
    <?php
        include("assets/includes/cover.php");
    ?>
    <!-- End -->
    <?php include("assets/includes/modal.php"); ?>
    <main>
    <div class="container py-5">
            <div class="row">
                <div class="col-12 col-md-6">
                    <img src="assets/img/picture-author.jpg" alt="Author picture" class="img-fluid">
                </div>
                <div class="col-12 col-md-6">
                    <h3 class="text-capitalize mb-5">About author</h3>
                    <p>First name: Ignjat</p>
                    <p>Last name: Koički</p>
                    <p>Index: 220/21</p>
                    <p>Biography: I was born on January 26, 1997 in Novi Sad. Elementary school and
                        and high school I finished in Belgrade. I'm attending ICT college now.   
                    </p>
                    <ul id="ik-about-ul">
                        <li><a href="https://www.linkedin.com/in/ignjat-koicki-687378221/">
                            <i class="fab fa-linkedin"></i> Linkedin profil</a></li>
                        <li><i class="fas fa-phone"></i> +381601110387</li>
                        <li><i class="fas fa-map-marker-alt"></i> Nede Spasojević 4/9, 
                            Beograd, Srbija</li>
                    </ul>
                </div>
            </div>
        </div>
    </main>
    <!-- Start Footer -->
    <?php
        include("assets/includes/footer.php");
    ?>
    <!-- End -->

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" 
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF"
     crossorigin="anonymous"></script>
     <!-- End -->
     <!-- Jquery -->
     <script src="https://code.jquery.com/jquery-3.6.0.js" 
    integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
     crossorigin="anonymous"></script>
     <!-- End -->
     <!-- my JS -->
     <script type="text/javascript" src="assets/js/main.js"></script>
     <!-- End -->
</body>
</html>