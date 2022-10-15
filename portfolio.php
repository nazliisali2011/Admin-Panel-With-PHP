<?php require_once "header.php"?>


<div class="breadcrumb-option spad set-bg"
    data-setbg="https://media.istockphoto.com/vectors/abstract-simply-background-with-natural-line-arts-vector-id1314054062?k=20&m=1314054062&s=612x612&w=0&h=OblBrWITnQpqpTFW9yiIjVTG2ZYGbACVwKMs5On7Iz0=">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="breadcrumb__text">
                    <h2>Haqqımızda</h2>
                    <div class="breadcrumb__links">
                        <a href="index.php">Ana Səhifə</a>
                        <span>Haqqımızda</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<section class="portfolio spad">
    <div class="container">
        <div class="row">
            <?php for($i=0;$i<count($portfolio);$i++){?>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="portfolio__item">
                    <img src="<?=$portfolio[$i]["sekil"] ?>" height="200px">
                    <h4><?=$portfolio[$i]["ad"] ?></h4>

                    <p><?=$portfolio[$i]["link"] ?></p>
                    <a href="#">Əraflı <span class="arrow_right"></span></a>
                </div>
            </div>
            <?php }?>
        </div>
    </div>
</section>

<?php require_once "footer.php"?>