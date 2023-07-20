<?php
    require_once("assets/models/functions.php");
?>
    <footer>
        <div class="footer-first ik-bg-grey ik-color-white py-5">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6 d-flex align-items-start mb-3">
                        <img src="assets/img/footer-logo.png" alt="TireLogo" class="img-fluid"/>
                        <h1 class="ik-color-white mt-2 ml-2">TireStore</h1>
                    </div>
                    <div class="col-6 col-md-3">
                        <h3>Links</h3>
                        <ul>
                        <?php $data = selectAll("navigation");
                                foreach($data as $r):?>
                                    <li><a href="<?= $r->href ?>"><?= $r->name ?></a></li>
                            <?php endforeach;?>
                        </ul>
                    </div>
                    <div class="col-6 col-md-3">
                        <h3>Find Us</h3>
                        <ul>
                            <li><a href="sitemap.html">SiteMap</a></li>
                            <li><a href="documentacion.pdf">Documentacion</a></li>
                            <li><a href="author.php">Author</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-second ik-bg-black py-3">
            <div class="container">
                <div class="row">
                    <div class="col-12 ik-color-white">
                        Ignjat Koicki 2022
                    </div>
                </div>
            </div>
        </div>
    </footer>