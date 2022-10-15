<footer class="footer">
        <div class="container">
            <div class="footer__top">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="footer__top__logo">
                            <a href="#"><img src="<?=$settings[0]["logo"] ?>" width="300px"  alt=""></a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="footer__top__social">
                            <a href="<?=$settings[0]["facebook"] ?>"><i class="fab fa-facebook"></i></a>
                            <a href="<?=$settings[0]["instagram"] ?>"><i class="fab fa-instagram"></i></a>
                            <a href="<?=$settings[0]["github"] ?>"><i class="fab fa-github"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer__option">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="footer__option__item">
                            <h5>Haqqimizda</h5>
                            <p><?=$settings[0]["about_title"]?> ></p>
                            <a href="#" class="read__more">Read more <span class="arrow_right"></span></a>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-3">
                        <div class="footer__option__item">
                            <h5>Linklər</h5>
                            <ul>
                                <li><a href="index.php">Ana Səhifə</a></li>
                                <li><a href="about.php">Haqqinda</a></li>
                                <li><a href="contact.php">Əlaqə</a></li>
                                <li><a href="portfolio.php">Portfolio</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-3">
                        <div class="footer__option__item">
                            <h5>Blog</h5>
                            <ul>
                                <li><a href="#">Feature</a></li>
                                <li><a href="#">Latest</a></li>
                                <li><a href="#">Browse Archive</a></li>
                                <li><a href="#">Video for web</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="footer__option__item">
                            <h5>Bize yazin</h5>
                            <p>Videoprah ixtisaslaşan, mükafat qazanmış, tam xidmət göstərən istehsal şirkətidir.</p>
                            <form action="#">
                                <input type="text" placeholder="Email">
                                <button type="submit"><i class="fa fa-send"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer__copyright">
                <div class="row">
                    <div class="col-lg-12 text-center">

                    © <?= date("Y")==2021 ? "2021" : "2021-".date("Y") ?> CodeMaster

                    </div>
                </div>
            </div>
        </div>
    </footer>


    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js jquery.magnific-popup.min.js.pagespeed.jc.rL6BF4KLoS.js"></script>
    <script>
    eval(mod_pagespeed_67R1_RtUEk);
    </script>
    <script>
    eval(mod_pagespeed_DaJ2Quk3BA);
    </script>
    <script src="js/mixitup.min.js"></script>
    <script src="js/masonry.pkgd.min.js jquery.slicknav.js owl.carousel.min.js.pagespeed.jc.UfzFlKHzh9.js"></script>
    <script>
    eval(mod_pagespeed_B_3wBdv2yQ);
    </script>
    <script>
    eval(mod_pagespeed_6wSHCz6bnD);
    </script>
    <script>
    eval(mod_pagespeed_0dcokU$L5_);
    </script>
    <script src="js/main.js"></script>

    <script async="" src="../../gtag/js.js?id=UA-23581568-13"></script>
    <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-23581568-13');
    </script>
    <script defer="" src="../../beacon.min.js/v652eace1692a40cfa3763df669d7439c1639079717194"
        integrity="sha512-Gi7xpJR8tSkrpF7aordPZQlW2DLtzUlZcumS8dMQjwDHEnw9I7ZLyiOj/6tZStRBGtGgN6ceN6cMH8z7etPGlw=="
        data-cf-beacon='{"rayId":"6d53653378988ec6","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2021.12.0","si":100}'
        crossorigin="anonymous"></script>
</body>

</html>