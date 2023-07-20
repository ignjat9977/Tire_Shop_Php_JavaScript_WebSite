<?php
    $headerImage = "assets/img/car-cover-2.jpg";
    $coverText = "AdminPanel";
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

    <?php if(isset($_SESSION["user"])&&$_SESSION["role"]=="admin"):?>
    <main>
        <div class="container">
            <div class="row">
                <div class="col-12 py-4 text-center">
                    <h2>Users</h2>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <table class="table table-dark">
                        <thead>
                            <tr>
                                <th>First</th>
                                <th>Last</th>
                                <th>Username</th>
                                <th>Role</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $result = selectAllUsers();
                                foreach($result as $r):?>
                                <tr>
                                    <td><?=$r->first_name; ?></td>
                                    <td><?=$r->last_name; ?></td>
                                    <td><?=$r->username; ?></td>
                                    <td><?=$r->role_name; ?></td>
                                </tr>
                                <?php endforeach;?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div id="ik-edit-modal" class="py-3 px-3">
            <div class="d-flex justify-content-between">
            <h3>Edit</h3>
            <a href="#" class="ik-edit-modal-close ik-color-red"><i class="far fa-times-circle"></i></a>
            </div>
            <input type="text" name="ik-catt-edit" id="ik-catt-edit" class="form-control"/>
            <a href="#" class="btn btn-primary float-right mt-3" id="ik-btn-edit-cat">Edit</a>
        </div>
        <div id="ik-edit-prod-modal">
        <div class="col-12 mb-4">
            <div class="ik-login-header d-flex justify-content-between">
                <h2 class="ik-color-blue">Product</h2>
                <a href="#" class="ik-edit-modal-btn-close"><i class="far fa-times-circle"></i></a>
            </div>
        </div>
        <form>
            <div class="form-group col-12">
                <label for="">Product Name </label>
                <div class="d-flex align-items-center">
                    <input type="text" name="tbProdName" id="tbProdName" placeholder="" class="form-control rounded-0"/>
                </div>
            </div>
            <div class="form-group col-12">
                <label for="">Product image description</label>
                <div class="d-flex align-items-center">
                    <input type="text" name="tbImgAlt" id="tbImgAlt" placeholder="" class="form-control rounded-0"/>
                </div>
            </div>
            <div class="form-group col-12">
                <label for="">Product Description</label>
                <textarea name="prodDes" id="prodDes" class="form-control" cols="30" rows="10"></textarea>
            </div>
            <div class="form-group col-12">
                <label for="">Product Price New: </label>
                <input type="text" name="prodPN" id="prodPN" class="form-control"/>
            </div>
            <div class="form-group col-12">
                <label for="">Product Price Old: </label>
                <input type="text" name="prodPO" id="prodPO" class="form-control"/>
            </div>
            
            <div class="form-group col-12">
                <input type="button" value="OK" name="btnEditProd" id="btnEditProd" class="btn btn-primary">
            </div>
        </form>
        </div>
        <div class="container py-5">
            <div class="row">
                <div class="col-md-3 col-12">
                    <div class="row">
                          
                        <div class="col-12 col-md-12 mt-2 ik-border">
                            <h3>Choose Brand</h3>
                            <select name="panBrand" id="panBrand" class="form-control mb-3">
                                <option value="0">Choose Brand</option>
                                <?php $data = selectAll("brands");
                                foreach($data as $d):?>
                                    <option value="<?= $d->brand_id?>"><?=$d->brand_name?></option>
                                <?php endforeach;?>
                            </select>
                            <div class="col-12 d-flex justify-content-end mb-2">
                                <a href="#" class="btn btn-primary ik-edit-brand-btn rounded-0 mr-2 mb-1">Edit</a>
                                <a href="#" class="btn btn-danger ik-delete-brand-btn rounded-0 mb-1">Delete</a>
                            </div>
                            <input type="text" name="addBrand" id="addBrand" placeholder="Type here brand name" class="form-control mb-2">
                            <a href="#" class="btn btn-primary ik-add-brand-btn float-right mr-3 rounded-0 mb-2">Add</a>
                        </div> 
                        <div class="col-12 col-md-12 mt-2 ik-border">
                            <h3>Choose Category</h3>
                            <select name="panCat" id="panCat" class="form-control mb-3">
                                <option value="0">Choose Category</option>
                                <?php $data = selectAll("categories");
                                foreach($data as $d):?>
                                    <option value="<?= $d->category_id?>"><?=$d->category_name?></option>
                                <?php endforeach;?>
                            </select>
                            <div class="col-12 d-flex justify-content-end">
                                <a href="#" class="btn btn-primary ik-edit-cat-btn rounded-0 mr-2 mb-1">Edit</a>
                                <a href="#" class="btn btn-danger ik-delete-cat-btn rounded-0 mb-1">Delete</a>
                            </div>
                            <input type="text" name="addCat" id="addCat" placeholder="Type here category name" class="form-control mb-2">
                            <a href="#" class="btn btn-primary ik-add-cat-btn float-right mr-3 rounded-0 mb-2">Add</a>
                        </div>
                        <div class="col-12 col-md-12 mt-2 ik-border">
                            <h3>Choose Size</h3>
                            <select name="panSize" id="panSize" class="form-control mb-3">
                                <option value="0">Choose Size</option>
                                <?php $data = selectAll("sizes");
                                foreach($data as $d):?>
                                    <option value="<?= $d->size_id?>"><?=$d->size_name?></option>
                                <?php endforeach;?>
                            </select>
                            <div class="col-12 d-flex justify-content-end">
                                <a href="#" class="btn btn-primary ik-edit-size-btn rounded-0 mr-2 mb-1">Edit</a>
                                <a href="#" class="btn btn-danger ik-delete-size-btn rounded-0 mb-1">Delete</a>
                            </div>
                            <input type="text" name="addSize" id="addSize" placeholder="Type here size name" class="form-control mb-2">
                            <a href="#" class="btn btn-primary ik-add-size-btn float-right mr-3 rounded-0 mb-2">Add</a>
                        </div>
                        
                    </div>
                </div>
                <div class="col-md-9 col-12">
                        <div class="col-12 col-md-12 mt-2 mb-4">
                            <a href="#" class="btn btn-primary ik-addprod-btn form-control rounded-0">Add new Product</a>
                        </div>
                    <div class="row ik-products-div">
                    <?php $limit = isset($_GET["limit"]) ? $_GET["limit"] : "0";?>
                        <?php $result = selectAllProducts($limit); 
                            foreach($result as $r):?>
                            <div class="col-md-4 col-sm-6 col-12 ik-item-div mb-3">
                                <div class="ik-item shadow">
                                    <img src="<?= $r->prod_image_href; ?>" alt="<?= $r->prod_img_alt; ?>" class="img-fluid ik-img"/>
                                    <div class="ik-item-body px-4">
                                        <p><?= $r->prod_name; ?></p>
                                    </div>
                                    <div class="ik-item-body px-4 d-flex justify-content-between">
                                        <p>$<?= $r->prod_price_new; ?></p>
                                        <s>$<?= $r->prod_price_old; ?></s>
                                    </div>
                                    <div class="ik-item-footer px-2 py-2">
                                        <a href="#" class="btn btn-primary ik-edit-btn rounded-0 mb-1" onclick="editItem(<?=$r->prod_id;?>)">Edit</a>
                                        <a href="#" class="btn btn-danger ik-delete-btn rounded-0 mb-1" onclick="deleteItem(<?=$r->prod_id?>)">Delete</a>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach;?>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <nav aria-label="Page navigation example">
                            <?php
                                $num = numberProd();
                                $numpages = ceil($num->num/6);
                            ?>

                                <ul class="pagination">
                                    <?php for($i=0; $i<$numpages; $i++):?>
                                    <li class="page-item"><a class="page-link" href="panelAdd.php?limit=<?=$i?>"><?=($i+1)?></a></li>
                                    <?php endfor; ?>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <?php else: echo("<h1>You dont have access to this page!</h1>");endif;?>
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