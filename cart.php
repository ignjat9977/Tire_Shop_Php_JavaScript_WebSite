<?php
    $headerImage = "assets/img/cover-wheel1.jpg";
    $coverText = "Cart";
    include("assets/models/functions.php");
    if(isset($_GET["x"])):
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
    <!-- Start main -->
    <div id="ik-modal">
        
</div>
    <main>
        <div class="container py-5">
            <div class="row">
                <div class="col-12">
                    <?php if(!empty($_SESSION["cart"])):?>
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Picture</th>
                            <th scope="col">Quantity</th>
                            <th scope="col">Price</th>
                            <th scope="col">Total</th>
                            <th scope="col">Remove</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $total = 0; foreach($_SESSION["cart"] as $key => $value):

                            $x=[]; 

                            array_push($x, $value["Id"]);
                            ?>
                                
                            <tr>
                            <th><?=$value["Name"]?></th>
                            <td><img src="<?=$value["Img"];?>" width="100" height="100" alt="<?=$value["Name"];?>"/></td>
                            <td><input type="number" min="0" max="10" onchange='subTotal()' id="ik-quantity" value="<?=$value["Quantity"]?>"/></td>
                            <td><?=$value["Price"]?><input type="hidden" value="<?=$value["Price"]?>" id="ik-price"/></td>
                            <td><p class="ik-total-item"><?=$value["Price"]?></p></td>
                            <td>
                                <form action="manageCart.php" method="POST">
                                    <button name="removeBtnCart" class="btn btn-danger btn-sm">Remove</button> 
                                    <input type="hidden" name="remItem" value="<?=$value["Name"]?>"/>
                                </form>
                            </td>
                            </tr>
                            <?php $total = $total + $value["Price"]; endforeach;
                                 ?>
                        </tbody>
                    </table>
                    <div class="col-12 d-flex justify-content-end">
                        <h4> Total: $ <span id="ik-tot"><?= $total?></span> </h4>
                        <form action="insertCart.php" method="POST">
                            <button class="ml-2 btn btn-primary rounded-0" name="buyBtnCart" id="buyBtnCart">Buy</button>
                        </form>
                    </div>
                </div>
                <?php else:?>
                    <h2>Your cart is empty!</h2>
                <?php endif;?>
            </div>
        </div>
    </main>
    <!-- End main -->


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
     <script type="text/javascript" src="assets/js/main.js" defer>
     </script>
     <!-- End -->
     
</body>
</html>
<?php else: header("Location: 404.php"); endif;?>
