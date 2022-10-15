<?php require_once "header.php"?>

    <div class="breadcrumb-option spad set-bg" data-setbg="https://media.istockphoto.com/vectors/law-enforcement-police-abstract-background-vector-id1334947575?k=20&m=1334947575&s=612x612&w=0&h=eaERibb8b24MtASUCGpmFwBE3wiEHMmJsMR2U2faixQ=">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Blog</h2>
                        <div class="breadcrumb__links">
                            <a href="index.php">Ana Səhifə</a>
                            <span>Blog</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <section class="blog spad">
        <div class="container">
            <div class="row">
                <?php for($i=0;$i<count($blog);$i++){?>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="blog__item" >
                        <img src="<?=$blog[$i]["sekil"] ?>" height="200px">
                        <h4><?=$blog[$i]["ad"] ?></h4>
                      
                        <p><?=$blog[$i]["metn"] ?></p>
                        <a href="#">Əraflı <span class="arrow_right"></span></a>
                    </div>
                </div>
                <?php }?>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="pagination__option blog__pagi">
                        <a href="#" class="arrow__pagination left__arrow"><span class="arrow_left"></span> Prev</a>
                        <a href="#" class="number__pagination">1</a>
                        <a href="#" class="number__pagination">2</a>
                        <a href="#" class="arrow__pagination right__arrow">Next <span class="arrow_right"></span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php require_once "footer.php"?>

   