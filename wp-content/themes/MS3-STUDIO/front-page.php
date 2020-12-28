<?php get_header();?>
    <article>
        <section id="sec1-firstview">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/photo_01.png" alt="" class="d-block w-100">
                    <div class="carousel-caption d-none d-block">
                        <h1 class="display2">あなたの<span class="accent_color">アレ？</span>が常識を変える</h1>
                        <h3>問題発掘ツール</h3>
                        <a href="http://sunabaco.local/home/">
                            <button type="botton" class="btn btn-primary btn-lg" onclick="location.href='./page-home.php'">はじめる</button>

                        </a>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/photo_01.png" alt="" class="d-block w-100">
                    <div class="carousel-caption d-none d-block">
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/photo_01.png" alt="" class="d-block w-100">
                    <div class="carousel-caption d-none d-block">
                        <h3>企業の方はこちら</h3>
                        <button type="botton" class="btn btn-primary btn-lg">アカウント登録</button>
                        <button type="botton" class="btn btn-primary btn-lg">ログイン</button>

                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
            </div>
        </section>
    </article>
    



<?php get_footer();?>