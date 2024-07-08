<?php require PATH_ROOT . 'Resources/Views/Store/Shared/header.php'; ?>

<section class="mega-banner">
    <div class="box-container">
        <div class="box__carousel owl-carousel owl-theme">
            <div class="carousel-img">
                <img src="<?= URL_BASE . 'Public/Img/Store/Banner/Mega_banners/banner_one.jpg' ?>" alt="">
            </div>
            <div class="carousel-img">
                <img src="<?= URL_BASE . 'Public/Img/Store/Banner/Mega_banners/banner_two.jpg' ?>" alt="">
            </div>
            <div class="carousel-img">
                <img src="<?= URL_BASE . 'Public/Img/Store/Banner/Mega_banners/banner_three.jpg' ?>" alt="">
            </div>
        </div>
        <div class="box__medium-banners">
            <div class="box-img">
                <img src="<?= URL_BASE . 'Public/Img/Store/Banner/Medium_banner_header/medium_one.webp' ?>" alt="">
            </div>
            <div class="box-img">
                <img src="<?= URL_BASE . 'Public/Img/Store/Banner/Medium_banner_header/medium_two.webp' ?>" alt="">
            </div>
        </div>
    </div>
</section>

<section class="categories">
    <div class="box-container">
        <h6 class="header">Categorías</h6>
        <div class="carousel-category owl-carousel owl-theme ">
          
            <?php foreach ($data['categories'] as $key => $category) : ?>

                <div class="item__category">
                    <a href="#">
                        <img src="<?=$category['img_path']?>" alt="">
                        <h6> <?= $category['name_category'] ?></h6>
                    </a>
                </div>

            <?php endforeach; ?>


        </div>
    </div>
</section>

<section class="products">
    <div class="box-container">
        <h6 class="header">Top Productos</h6>
        <div class="divider"></div>
        <div class="slider-products owl-carousel owl-theme">

            <div class="box">
                <div class="card card-styles">
                    <a href="./">
                        <div class="box-img">
                            <img class="img-fluid" src="https://hfprod.farmaciasanpablo.com.mx/sys-master-azureproductimages/h68/hb1/31821163266078/Fsp275Wx275H_Fsp800Wx800H_9630162_1hgunuu5c.jpg" alt />
                        </div>
                    </a>
                    <a href="./">
                        <div class="card-body">
                            <span>Trelegy 100mcg/62.5mcg/25mcg Polvo para Inhalación, 30
                                Dosis.</span>
                        </div>
                    </a>
                    <div class="card-footer">
                        <div class="price">
                            <span>$1799.99</span>
                            <h5>$1499.99</h5>
                        </div>
                        <div class="box-btn">
                            <a href="#">
                                <button class="btn_theme_one">
                                    <i class="fa-solid fa-cart-plus"></i> Agregar
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="box">
                <div class="card card-styles">
                    <a href="./">
                        <div class="box-img">
                            <img class="img-fluid" src="https://hfprod.farmaciasanpablo.com.mx/sys-master-azureproductimages/h68/hb1/31821163266078/Fsp275Wx275H_Fsp800Wx800H_9630162_1hgunuu5c.jpg" alt />
                        </div>
                    </a>
                    <a href="./">
                        <div class="card-body">
                            <span>Trelegy 100mcg/62.5mcg/25mcg Polvo para Inhalación, 30
                                Dosis.</span>
                        </div>
                    </a>
                    <div class="card-footer">
                        <div class="price">
                            <h5>$1499.99</h5>
                        </div>
                        <div class="box-btn">
                            <a href="#">
                                <button class="btn_theme_one">
                                    <i class="fa-solid fa-cart-plus"></i> Agregar
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="box">
                <div class="card card-styles">
                    <a href="./">
                        <div class="box-img">
                            <img class="img-fluid" src="https://hfprod.farmaciasanpablo.com.mx/sys-master-azureproductimages/h68/hb1/31821163266078/Fsp275Wx275H_Fsp800Wx800H_9630162_1hgunuu5c.jpg" alt />
                        </div>
                    </a>
                    <a href="./">
                        <div class="card-body">
                            <span>Trelegy 100mcg/62.5mcg/25mcg Polvo para Inhalación, 30
                                Dosis.</span>
                        </div>
                    </a>
                    <div class="card-footer">
                        <div class="price">
                            <h5>$1499.99</h5>
                        </div>
                        <div class="box-btn">
                            <a href="#">
                                <button class="btn_theme_one">
                                    <i class="fa-solid fa-cart-plus"></i> Agregar
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="box">
                <div class="card card-styles">
                    <a href="./">
                        <div class="box-img">
                            <img class="img-fluid" src="https://hfprod.farmaciasanpablo.com.mx/sys-master-azureproductimages/h68/hb1/31821163266078/Fsp275Wx275H_Fsp800Wx800H_9630162_1hgunuu5c.jpg" alt />
                        </div>
                    </a>
                    <a href="./">
                        <div class="card-body">
                            <span>Trelegy 100mcg/62.5mcg/25mcg Polvo para Inhalación, 30
                                Dosis.</span>
                        </div>
                    </a>
                    <div class="card-footer">
                        <div class="price">
                            <h5>$1499.99</h5>
                        </div>
                        <div class="box-btn">
                            <a href="#">
                                <button class="btn_theme_one">
                                    <i class="fa-solid fa-cart-plus"></i> Agregar
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="box">
                <div class="card card-styles">
                    <a href="./">
                        <div class="box-img">
                            <img class="img-fluid" src="https://hfprod.farmaciasanpablo.com.mx/sys-master-azureproductimages/h68/hb1/31821163266078/Fsp275Wx275H_Fsp800Wx800H_9630162_1hgunuu5c.jpg" alt />
                        </div>
                    </a>
                    <a href="./">
                        <div class="card-body">
                            <span>Trelegy 100mcg/62.5mcg/25mcg Polvo para Inhalación, 30
                                Dosis.</span>
                        </div>
                    </a>
                    <div class="card-footer">
                        <div class="price">
                            <h5>$1499.99</h5>
                        </div>
                        <div class="box-btn">
                            <a href="#">
                                <button class="btn_theme_one">
                                    <i class="fa-solid fa-cart-plus"></i> Agregar
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<section class="panels-promos">
    <div class="box-container">
        <h6 class="header">Promociones</h6>
        <div class="divider"></div>
        <div class="box-items">
            <div class="box">
                <img src="<?= URL_BASE . 'Public/Img/Store/Banner/Square_banner/promo_1.jpg' ?>" alt />
            </div>
            <div class="box">
                <img src="<?= URL_BASE . 'Public/Img/Store/Banner/Square_banner/promo_2.jpg' ?>" alt />
            </div>
            <div class="box">
                <img src="<?= URL_BASE . 'Public/Img/Store/Banner/Square_banner/promo_3.jpg' ?>" alt />
            </div>
            <div class="box">
                <img src="<?= URL_BASE . 'Public/Img/Store/Banner/Square_banner/promo_4.jpg' ?>" alt />
            </div>
        </div>
    </div>
</section>

<section class="novedades">
    <div class="box-container">
        <h6 class="header">Novedades</h6>
        <div class="divider"></div>
        <div class="box-items">
            <div class="box">
                <a href="">
                    <div class="box-img" style="background-image: url('<?= URL_BASE . 'Public/Img/Store/Novedades/tratamiento_capilar.jpg' ?>');"></div>
                    <h6>Tratamiento Capilares</h6>
                </a>
            </div>

            <div class="box">
                <a href="">
                    <div class="box-img" style="background-image: url('<?= URL_BASE . 'Public/Img/Store/Novedades/home_0.webp' ?>');"></div>
                    <h6>Skincare</h6>
                </a>
            </div>

            <div class="box">
                <a href="">
                    <div class="box-img" style="background-image: url('<?= URL_BASE . 'Public/Img/Store/Novedades/landng_0.webp' ?>');"></div>
                    <h6>Bebés</h6>
                </a>
            </div>


            <div class="box">
                <a href="">
                    <div class="box-img" style="background-image: url('<?= URL_BASE . 'Public/Img/Store/Novedades/landing_1.webp' ?>');"></div>
                    <h6>Salud</h6>
                </a>
            </div>
        </div>
    </div>
</section>

<section class="brands">
    <h1 class="heading">Marcas</h1>
    <div class="box-container">
        <div class="marcas owl-carousel owl-theme">
            <div class="box">
                <img src="<?= URL_BASE . 'Public/Img/Store/Icons/Brands/logos_1.jpg' ?>" alt />
            </div>
            <div class="box">
                <img src="<?= URL_BASE . 'Public/Img/Store/Icons/Brands/logos_2.jpg' ?>" alt />
            </div>
            <div class="box">
                <img src="<?= URL_BASE . 'Public/Img/Store/Icons/Brands/logos_3.jpg' ?>" alt />
            </div>
            <div class="box">
                <img src="<?= URL_BASE . 'Public/Img/Store/Icons/Brands/logos_4.jpg' ?>" alt />
            </div>

            <div class="box">
                <img src="<?= URL_BASE . 'Public/Img/Store/Icons/Brands/logos_5.jpg' ?>" alt />
            </div>

            <div class="box">
                <img src="<?= URL_BASE . 'Public/Img/Store/Icons/Brands/logos_6.jpg' ?>" alt />
            </div>

            <div class="box">
                <img src="<?= URL_BASE . 'Public/Img/Store/Icons/Brands/logos_7.jpg' ?>" alt />
            </div>

            <div class="box">
                <img src="<?= URL_BASE . 'Public/Img/Store/Icons/Brands/logos_8.jpg' ?>" alt />
            </div>

            <div class="box">
                <img src="<?= URL_BASE . 'Public/Img/Store/Icons/Brands/logos_9.jpg' ?>" alt />
            </div>

            <div class="box">
                <img src="<?= URL_BASE . 'Public/Img/Store/Icons/Brands/logos_10.jpg' ?>" alt />
            </div>

            <div class="box">
                <img src="<?= URL_BASE . 'Public/Img/Store/Icons/Brands/logos_11.jpg' ?>" alt />
            </div>

            <div class="box">
                <img src="<?= URL_BASE . 'Public/Img/Store/Icons/Brands/logos_12.jpg' ?>" alt />
            </div>

            <div class="box">
                <img src="<?= URL_BASE . 'Public/Img/Store/Icons/Brands/logos_13.jpg' ?>" alt />
            </div>

            <div class="box">
                <img src="<?= URL_BASE . 'Public/Img/Store/Icons/Brands/logos_14.jpg' ?>" alt />
            </div>

            <div class="box">
                <img src="<?= URL_BASE . 'Public/Img/Store/Icons/Brands/logos_15.jpg' ?>" alt />
            </div>

            <div class="box">
                <img src="<?= URL_BASE . 'Public/Img/Store/Icons/Brands/logos_16.jpg' ?>" alt />
            </div>

            <div class="box">
                <img src="<?= URL_BASE . 'Public/Img/Store/Icons/Brands/logos_17.jpg' ?>" alt />
            </div>

            <div class="box">
                <img src="<?= URL_BASE . 'Public/Img/Store/Icons/Brands/logos_18.jpg' ?>" alt />
            </div>

            <div class="box">
                <img src="<?= URL_BASE . 'Public/Img/Store/Icons/Brands/logos_19.jpg' ?>" alt />
            </div>

            <div class="box">
                <img src="<?= URL_BASE . 'Public/Img/Store/Icons/Brands/logos_20.jpg' ?>" alt />
            </div>

            <div class="box">
                <img src="<?= URL_BASE . 'Public/Img/Store/Icons/Brands/logos_21.jpg' ?>" alt />
            </div>



        </div>
    </div>
</section>

<section class="loader-banner">
    <div class="box-container">
        <img src="<?= URL_BASE . 'Public/Img/Store/Banner/Loader_banners/banner-one.webp' ?>" alt />
    </div>
</section>



<?php require PATH_ROOT . 'Resources/Views/Store/Shared/footer.php'; ?>