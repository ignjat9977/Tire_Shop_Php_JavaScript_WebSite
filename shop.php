<?php
    $headerImage = "assets/img/cover-wheel1.jpg";
    $coverText = "Choose your dream tires!";
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
    <!-- Start main -->
    <div id="ik-modal">
        
    </div>
    
    <main>
        <div class="container py-4">
            <div class="row">
                <div class="col-12 text-center">
                    <h2>SHOP</h2>
                </div>
            </div>
        </div>
        <div class="container py-5">
            <div class="row">
                <div class="col-md-3 col-12">
                    <div class="row">
                        <div class="col-12 col-sm-6 col-md-12 mt-2">
                            <h3>Brand type</h3>
                            <li class="list-group-item" id="ik-brands-list">
                            <select name="ddlBrands" id="ddlBrands" class="form-control">
                                <option value="0">Choose Brand</option>
                                <?php $data = selectAll("brands");
                                foreach($data as $d):?>
                                    <option value="<?= $d->brand_id?>"><?=$d->brand_name?></option>
                                <?php endforeach;?>
                            </select>
                            </li>
                        </div>  
                        <div class="col-12 col-sm-6 col-md-12 mt-2">
                            <h3>Sort type</h3>
                                <li class="list-group-item">
                                <select name="ddlSort" id="ddlSort" class="form-control">
                                    <option value="0">Choose sort type</option>
                                    <?php $data = selectAll("sort");
                                    foreach($data as $d):?>
                                        <option value="<?= $d->value?>"><?=$d->name?></option>
                                    <?php endforeach;?>
                                </select>
                                </li>
                        </div> 
                        <div class="col-12 col-sm-6 col-md-12 mt-2">
                            <ul class="list-group" id="ik-category-list">
                                <li class="list-group-item-dark list-group-item rounded-0">Category</li>
                                <?php $data = selectAll("categories");
                                foreach($data as $d):?>
                                <li class="list-group-item rounded-0">
                                    <input type="checkbox" name="category" value="<?=$d->category_id?>" class="categories" /><?=$d->category_name?></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>  
                        </ul>
                        <div class="col-12 col-sm-6 col-md-12 mt-2">
                            <ul class="list-group" id="ik-size-list">
                                <li class="list-group-item-dark list-group-item rounded-0">Sizes</li>
                                <?php $data = selectAll("sizes");
                                foreach($data as $d):?>
                                <li class="list-group-item rounded-0">
                                    <input type="checkbox" name="size" value="<?=$d->size_id?>" class="sizes" /><?=$d->size_name?>''</li>
                                <?php endforeach; ?>    
                            </ul>
                            
                        </div>
                        <div class="col-12 d-flex justify-content-end">
                            <input type="button" value="Apply filter" class="btn btn-primary" name="filterBtn" id="btn-filter">
                        </div>
                        
                    </div>
                </div>
                <div class="col-md-9 col-12">
                    
                    <?php 

                    ?>
                    <div class="row ik-products-div">
                       
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <nav aria-label="Page navigation example">
                            <?php
                                $num = numberProd();
                                $numpages = ceil($num->num/6);
                            ?>

                                <ul class="pagination" id="ik-pagin">
                                    <?php for($i=0; $i<$numpages; $i++):?>
                                    <li class="page-item"><a class="page-link ik-page" data-limit ="<?=$i?>" href="#"><?=($i+1)?></a></li>
                                    <?php endfor; ?>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
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