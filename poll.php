<?php
    $headerImage = "assets/img/car-cover-2.jpg";
    $coverText = "Poll";
    include("assets/models/functions.php");
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
                <?php 
                $x = selectAll("poll_questions");
                foreach($x as $y):?>
                <div class="col-12 col-md-6">
                    <input type="hidden" name="<?=$y->name?>" value="<?=$y->id?>"/>
                    <h3><?=$y->name?></h3>
                    <?php 
                    global $conn;
                    $sql = "Select * from poll_choices where question_id = $y->id";
                    $z = $conn->query($sql)->fetchAll();
                     foreach($z as $c):?>
                     <form action="insertPoll.php" method="post">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="<?=$y->id?>" id="<?=$c->name?>" value="<?=$c->choice_id?>"/>
                            <label class="form-check-label" for="exampleRadios1">
                                <?=$c->name?>
                            </label>
                        </div>
                     

                     <?php endforeach;?>
                </div>
                <?php endforeach; ?>
                     
                        <div class="col-12 d-flex justify-content-end">
                            <input type="submit" value="Submit Poll" name="pollBtn" class="btn btn-primary">
                        </div>
                        </form>
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