   <?php require_once "header.php"?>
    <div class="breadcrumb-option spad set-bg" data-setbg="<?=$settings[0]["about_image"] ?>">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Haqqımızda</h2>
                        <div class="breadcrumb__links">
                            <a href="index.php">Ana Səhifə</a>
                            <span>Haqqimizda</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <section class="about spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="about__pic">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="about__pic__item about__pic__item--large set-bg"
                                    data-setbg="img/about/about-1.jpg"></div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="about__pic__item set-bg" data-setbg="https://media.istockphoto.com/vectors/abstract-pink-background-brochure-or-poster-template-valentines-day-vector-id1292892211?k=20&m=1292892211&s=612x612&w=0&h=U3dOm52yF0RRtnMZ20y32ojZuNgeRXM4u2Mf3LydXuU="></div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="about__pic__item set-bg" data-setbg="https://media.istockphoto.com/photos/beautiful-shiny-background-with-booble-bokeh-festive-christmas-picture-id1177976833?k=20&m=1177976833&s=612x612&w=0&h=WUAoawSYlxPCvd7fkyCpffvGqFEJ7UBFrfe79MMn6To="></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about__text">
                        <div class="section-title">
                    
                            <h2>Mənim haqqimda</h2>
                        </div>
                        <div class="about__text__desc">
                            <p> <?=$settings[0]["about_description"] ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>




    <?php require_once "footer.php"?>