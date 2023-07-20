<?php
    session_start();
    require_once("assets/models/functions.php");
?>
<header>
        <div id="header-first" class="ik-bg-black">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-4 d-flex align-items-center justify-content-end">
                        <input type="search" name="header-search" id="header-search" placeholder="Search...." class="form-control rounded-0"/>
                        <a href="#" class="ik-search-btn"><i class="fas fa-search"></i></a>
                    </div>
                    <div class="col-3 col-md-2 d-flex align-items-center">
                        <ul class="d-flex align-items-center justify-content-center">
                            <li><a href="facebook.com"><i class="fab fa-facebook"></i></a></li>
                            <li><a href="twitter.com"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="instagram.com"><i class="fab fa-instagram"></i></a></li>
                        </ul>
                    </div>
                    <div class="col-9 col-md-6 ik-lr-div d-flex ik-color-white align-items-center justify-content-end">
                        <?php if(isset($_SESSION["role"]) && $_SESSION["role"] == "admin"):?>
                            <a href="panelAdd.php" class="ik-color-white">Admin Panel</a>/
                        <?php endif;?>
                        <?php if(!isset($_SESSION["user"])):?>
                            <a href="#" id="ik-login-btn" class="ik-color-white">Login</a>/
                        <?php endif;?>
                        <?php if(isset($_SESSION["user"]) && ($_SESSION["role"]=="admin"||$_SESSION["role"]=="user")):?>
                            <a href="logOut.php" class="ik-color-white">Log Out</a>/
                        <?php endif;?>
                        <?php 
                            if(isset($_SESSION["userId"])){
                                $x = $_SESSION["userId"];
                            }else{
                                $x=1;
                            }
                            global $conn;
                            $sql="SELECT COUNT(*) as `num` FROM user_poll Where user_id =$x";
                    
                            $select = $conn->query($sql)->fetch();
                            $y = $select->num;
                        if($y==0):?>
                            <a href="poll.php" class="ik-color-white">Poll</a>/
                        <?php endif;?>
                        <a href="#" id="ik-register-btn" class="ik-color-white"> Register</a>
                    </div>
                </div>
            </div>
        </div>
        <div id="header-second" class="py-2">
            <div class="container">
                <div class="row">
                    <div class="col-8 order-2 order-md-1 col-md-3 d-flex align-items-center justify-content-center justify-content-md-start">
                        <img src="assets/img/TireLogo.jpg" alt="TireLogo" class="img-fluid"/>
                        <h1 class="ik-color-red">TireStore</h1>
                    </div>
                    <div class="col-2 order-1 ik-ham-div">
                        <a href="#" class="ik-ham-btn"><i class="fas fa-bars"></i></a>
                    </div>
                    <div class="col-12 order-4 order-md-2 col-md-7 mt-4" id="ik-nav">
                        <ul class="d-flex flex-column flex-md-row">
                            <?php $data = selectAll("navigation");
                                foreach($data as $r):?>
                                    <li><a href="<?= $r->href ?>"><?= $r->name ?></a></li>
                            <?php endforeach;?>
                        </ul>
                    </div>
                    <div class="col-2 col-md-1 order-3 d-flex justify-content-end align-items-center">
                        <?php $count=0;
                        if(isset($_SESSION["cart"])){
                            $count = count($_SESSION["cart"]);
                        }
                        
                        if(isset($_SESSION["role"]) && ($_SESSION["role"]=="admin"||$_SESSION["role"]=="user")):?>
                            <a href="cart.php?x=y" class="ik-cart-btn"><i class="fas fa-shopping-cart"></i></a>
                            <p class="ik-color-red>"><?=$count?></p>
                        <?php endif;?>
                        
                    </div>
                </div>
            </div>
        </div>
</header>