  <?php require_once "header.php"?>
    <div class="breadcrumb-option spad set-bg" data-setbg="https://media.istockphoto.com/vectors/abstract-scene-background-cylinder-podium-on-pink-background-product-vector-id1299083633?k=20&m=1299083633&s=612x612&w=0&h=0o4QnKXHWKQXbllE5bEEeLqOsvuOQzVLGbq6PB3x9CY=">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Əlaqə</h2>
                        <div class="breadcrumb__links">
                            <a href="index.php">Ana Səhifə</a>
                            <span>Əlaqə</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <section class="contact-widget spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-md-6 col-md-3">
                    <div class="contact__widget__item">
                        <div class="contact__widget__item__icon">
                            <i class="fa fa-map-marker"></i>
                        </div>
                        <div class="contact__widget__item__text">
                            <h4>Address</h4>
                            <p><?=$settings[0]["location"] ?></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-md-6 col-md-3">
                    <div class="contact__widget__item">
                        <div class="contact__widget__item__icon">
                            <i class="fa fa-phone"></i>
                        </div>
                        <div class="contact__widget__item__text">
                            <h4>Nömrə</h4>
                            <p><?=$settings[0]["phone"] ?></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-md-6 col-md-3">
                    <div class="contact__widget__item">
                        <div class="contact__widget__item__icon">
                            <i class="fa fa-map-marker"></i>
                        </div>
                        <div class="contact__widget__item__text">
                            <h4>Email</h4>
                            <p><a href="/cdn-cgi/l/email-protection" class="__cf_email__"
                                    data-cfemail="42113732322d303602252f232b2e6c212d2f"><?=$settings[0]["email"] ?></a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="contact spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="contact__map">
                    <iframe 
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3101.816607953902!2d49.949052126289445!3d40.40924498841751!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x403063aa952f3271%3A0x10675ebb4b40dc62!2zMjIwIFNheWzEsSBNyZlrdMmZYi1MaXNleQ!5e0!3m2!1str!2s!4v1643475075535!5m2!1str!2s" width="100" height="450" style="border:0;" allowfullscreen="" loading="lazy">
                   </iframe>
</div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="contact__form">
                        <h3>Get in touch</h3>
                        <form action="#">
                            <input type="text" placeholder="Name">
                            <input type="text" placeholder="Email">
                            <input type="text" placeholder="Website">
                            <textarea placeholder="Message"></textarea>
                            <button type="submit" class="site-btn">Send Message</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php require_once "footer.php"?>