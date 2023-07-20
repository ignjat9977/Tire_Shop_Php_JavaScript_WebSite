<?php
    $headerImage = "assets/img/car-cover-1.jpg";
    $coverText = "Contact us!";
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
    <main>
        
        <div class="container py-5">
            <div class="row">
                <div class="col-12">
                    <form action="">
                        <div class="form-row">
                            <div class="col-12 mb-4">
                                <h2><span class="ik-color-blue">Fill</span> out <span class="ik-color-blue">the</span> form <span class="ik-color-blue">and</span> stay <span class="ik-color-blue">in</span> touch <span class="ik-color-blue">with</span> us</h2>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-12 col-sm-6">
                                <label for="">First Name:</label>
                                <div class="d-flex align-items-center">
                                    <input type="text" name="tbName" id="tbName" placeholder="Example(John)" class="form-control rounded-0"/>
                                </div>
                            </div>
                            <div class="form-group col-12 col-sm-6">
                                <label for="">Last Name:</label>
                                <div class="d-flex align-items-center">
                                    <input type="text" name="tbLast" id="tbLast" placeholder="Example(James)"class="form-control rounded-0"/>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-12 form-group">
                                <label for="">Email:</label>
                                <div class="d-flex align-items-center">
                                    <input type="email" name="tbMail" id="tbMail" placeholder="example@gmail.com" class="form-control rounded-0"/>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-12 form-group">
                                <label for="">Message:</label>
                                <div class="d-flex align-items-center">
                                    <textarea name="tbMessage" id="tbMessage" rows="10" placeholder="Ask question/Write comment(Min length 6 characters)" class="form-control rounded-0"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-12 form-group d-flex justify-content-end">
                                <input type="button" value="Contact Us" id="btnCus" class="btn btn-primary">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
    <!-- End -->
    

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