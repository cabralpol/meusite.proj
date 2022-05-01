<?= $render('header'); ?>
<?= $render('navHome'); ?>

<header class="text-center text-white masthead" id="heading-top" style="background: url(&quot;<?= $base; ?>/assets/img/fundo_mar.jpg?h=397a2e199080bf044d41f63192fe66a4&quot;) right / auto, var(--bs-blue);">
    <div class="container"><img class="img-fluid d-block mx-auto jello animated" src="<?= $base; ?>/assets/img/logo.png?h=a7bd628c6492a96b3a36f5f72a755bdd" style="width: 229px;margin-bottom: 14px;">
        <h1 class="swing animated" style="font-size: 51px;color: var(--bs-blue);">Tubarão Rosa</h1>
        <hr class="star-light">
        <h2 class="font-weight-light mb-0" style="color: var(--bs-pink);">Sites Prontos - Desenvolvimento Web - Designer Web</h2>
    </div>
</header>
<section id="portfolio" class="portfolio">
    <div class="container">
        <h2 class="text-uppercase text-center text-secondary" data-aos="fade-down" data-aos-duration="800" data-aos-delay="300">Portfólio</h2>
        <hr data-aos="fade-right" data-aos-duration="800" data-aos-delay="300" class="star-dark mb-5">
        <div class="row">

            <!-- START PORTFOLIOS -->
            <?php if ($portfolio) : ?>
                <?php foreach ($portfolio as $value) : ?>
                    <!-- PORTFOLIO <?= ($value['id'] > 9) ? '' : '0'; ?><?= $value['id']; ?> -->
                    <div class="col-md-6 col-lg-4" data-aos="fade-down-right" data-aos-duration="1000" data-aos-delay="700">
                        <div class="position-relative" style="margin-bottom: 30px;background: var(--bs-pink);">
                            <div class="position-absolute fade" style="width: 100%;height: 100%;">
                                <div class="d-flex flex-column justify-content-center justify-content-xxl-center" style="height: 100%;">
                                    <p class="text-white" style="font-family: Roboto, sans-serif;text-align: center;font-size: 15px;font-weight: bold;">PROJETO <?= ($value['id'] > 9) ? '' : '0'; ?><?= $value['id']; ?><br /></p>
                                    <p class="text-white flex-row" style="font-size: 18px;font-family: Roboto, sans-serif;text-align: center;"><strong><?= (ucwords($value['project_name'])); ?></strong><br /></p>
                                    <div class="d-flex justify-content-evenly">
                                        <!-- Link do modal -->
                                        <a data-bss-hover-animate="tada" data-bs-toggle="modal" style="color: var(--bs-yellow);" data-bs-target="#portfolio-modal-<?= ($value['id'] > 9) ? '' : '0'; ?><?= $value['id']; ?>"><i class="fa fa-search-plus fa-3x"></i></a>
                                        <!-- Link do site portfólio -->
                                        <a data-bss-hover-animate="tada" href="<?= $base; ?>/portfolios/<?= $value['project_url']; ?>" style="color: var(--bs-yellow);" target="_blank"><i class="fa fa-link fa-3x"></i></a>
                                    </div>
                                </div>
                                <!-- Imagem do portfólio -->
                            </div><img src="<?= $base; ?>/assets/img/portfolio/<?= $value['img_url']; ?>?h=791d76d90c80adf42b922c41dcf33f74" style="width: 100%;" loading="lazy">
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php else : ?>
                <div>Nenhuma Portfólio cadastrado.</div>
            <?php endif; ?>
            <!-- END PORTFOLIOS -->

        </div>
    </div>
</section><!-- Start: Article List -->
<section class="article-list" style="background: var(--bs-info);">
    <div class="container">
        <!-- Start: Intro -->
        <div class="intro">
            <h2 class="text-uppercase text-center text-secondary" data-aos="fade-down" data-aos-duration="800" data-aos-delay="300" style="padding-top: 0;margin-bottom: 8px;">pagamentos</h2>
            <hr data-aos="fade-right" data-aos-duration="800" data-aos-delay="300" class="star-dark mb-5">
            <p style="font-family: Roboto, sans-serif;text-align: center;font-size: 25px;">Desconto de até 20% Entre em contato</p>
        </div><!-- End: Intro -->
        <!-- Start: Articles -->
        <div class="row articles" id="pagamento">
            <div class="col-sm-12 col-md-4 item">
                <div class="row">
                    <div class="col" style="background: var(--bs-white);margin-right: 12px;margin-left: 12px;"><img class="img-fluid" src="<?= $base; ?>/assets/img/payment/pagamento-bradesco).png?h=2bdaf263c36674fe9853af0b0bb02090" loading="lazy">
                        <h3 class="name" style="margin: 0px;">Bradesco</h3>
                        <hr style="height: 3px;background: var(--bs-pink);margin-top: 5px;">
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-4 item">
                <div class="row">
                    <div class="col" style="background: var(--bs-white);margin-right: 12px;margin-left: 12px;"><img class="img-fluid" src="<?= $base; ?>/assets/img/payment/pagamento-mercado-pago.png?h=a93d60fc120ec9d11f171dd7efef422c" loading="lazy">
                        <h3 class="name" style="margin: 0px;">Pague Seguro</h3>
                        <hr style="height: 3px;background: var(--bs-pink);margin-top: 5px;">
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-4 item">
                <div class="row">
                    <div class="col" style="background: var(--bs-white);margin-right: 12px;margin-left: 12px;"><img class="img-fluid" src="<?= $base; ?>/assets/img/payment/pagamento-pix.png?h=d2ce8e5b5a2173a45310b6438dd17aaf" loading="lazy">
                        <h3 class="name" style="margin: 0px;">Pix</h3>
                        <hr style="height: 3px;background: var(--bs-pink);margin-top: 5px;">
                    </div>
                </div>
            </div>
        </div><!-- End: Articles -->
    </div>
</section><!-- End: Article List -->
<section class="text-white mb-0" id="about" style="background: var(--bs-pink);">
    <div class="container">
        <h2 class="text-uppercase text-center text-white" data-aos="fade-down" data-aos-duration="800" data-aos-delay="300">SOBRE</h2>
        <hr data-aos="fade-right" data-aos-duration="800" data-aos-delay="300" class="star-light mb-5">
        <div class="row">
            <div class="col-lg-4 ms-auto">
                <p class="lead" style="text-align: justify;">A TR&nbsp; Web é especializada em soluções para a internet que abrange desenvolvimentos de sites, web designer e desenvolvimento de softwares web. Somos comprometidos com nossos parceiros e prezamos pela edificação de relacionamentos duradouros, marcados pelo respeito e confiança recíprocos, com nossos crientes.</p>
            </div>
            <div class="col-lg-4 me-auto">
                <p class="lead" style="text-align: justify;">Construímos os projetos com as tecnologias mais atuais para garantir um maior desempenho e segurança e facilidade de navegação. Os projetos são totalmente testados e os arquivos de origem são completos, incluindo HTML, CSS e JavaScript, PHP, bem como folhas de estilo LESS opcionais para fácil personalização de layouts.</p>
            </div>
        </div>
    </div>
</section>
<section id="contact">
    <div class="container">
        <h2 class="text-uppercase text-center text-secondary mb-0" data-aos="fade-down" data-aos-duration="800" data-aos-delay="300">contato</h2>
        <hr data-aos="fade-right" data-aos-duration="800" data-aos-delay="300" class="star-dark mb-5">
        <p style="font-family: Roboto, sans-serif;text-align: center;font-size: 34px;">Deixe seu contato aqui e retornaremos</p>
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <form id="contactForm" onsubmit="return validate();" name="formName" novalidate="novalidate" method="post">
                    <div class="control-group">
                        <div class="mb-0 form-floating controls pb-2"><input class="form-control" type="text" name="name" id="name" placeholder="Name" maxlength="50" minlength="5"><label class="form-label">Nome</label><small class="form-text text-danger help-block"></small></div>
                    </div>
                    <div class="control-group">
                        <div class="mb-0 form-floating controls pb-2"><input class="form-control" type="email" name="email" id="email" placeholder="Email Address" maxlength="50" minlength="5"><label class="form-label">E-mail</label><small class="form-text text-danger help-block"></small></div>
                    </div>
                    <div class="control-group">
                        <div class="mb-0 form-floating controls pb-2"><input class="form-control" type="tel" name="phone" id="phone" placeholder="Phone Number"><label class="form-label">Telefone</label><small class="form-text text-danger help-block"></small></div>
                    </div>
                    <div class="control-group">
                        <div class="mb-5 form-floating controls pb-2"><textarea class="form-control" name="message" id="message" placeholder="Message" style="height: 150px;" maxlength="500" minlength="10"></textarea><label class="form-label">Mensagem</label><small class="form-text text-danger help-block"></small></div>
                    </div>
                    <div id="success"></div>
                    <div><button class="btn btn-primary btn-xl" data-bss-hover-animate="pulse" id="sendMessageButton" type="submit">Enviar</button></div>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- RODAPÉ -->
<footer class="text-center footer" style="font-family: Roboto, sans-serif;">
    <div class="container">
        <div class="row">
            <div class="col-md-4 mb-5 mb-lg-0">
                <h4 class="text-uppercase mb-4">CONTATO</h4>
                <p class="tada animated infinite">&nbsp;&nbsp;<a href="https://web.whatsapp.com/send?phone=552137670094" target="_blank"><i class="fa fa-whatsapp"></i>&nbsp; Whatsapp</a></p>
                <p><i class="fa fa-phone"></i>&nbsp; (21) 96475-5044<br /></p>
                <p><i class="fa fa-envelope-o"></i>&nbsp; contato@tubaraorosa.com</p>
            </div>
            <div class="col-md-4 mb-5 mb-lg-0">
                <h4 class="text-uppercase">Mídias sociais</h4>
                <ul class="list-inline">
                    <li class="list-inline-item"><a class="btn btn-outline-light text-center btn-social rounded-circle" role="button" data-bss-hover-animate="rubberBand" href="#"><i class="fa fa-facebook fa-fw"></i></a></li>
                    <li class="list-inline-item" data-bss-hover-animate="rubberBand"><a class="btn btn-outline-light text-center btn-social rounded-circle" role="button" href="#"><i class="fa fa-google-plus fa-fw"></i></a></li>
                    <li class="list-inline-item" data-bss-hover-animate="rubberBand"><a class="btn btn-outline-light text-center btn-social rounded-circle" role="button" href="#"><i class="fa fa-twitter fa-fw"></i></a></li>
                    <li class="list-inline-item" data-bss-hover-animate="rubberBand"><a class="btn btn-outline-light text-center btn-social rounded-circle" role="button" href="#"><i class="fa fa-dribbble fa-fw"></i></a></li>
                </ul>
            </div>
            <div class="col-md-4">
                <h4 class="text-uppercase mb-4">links rápidos</h4>
                <p class="lead mb-0" data-bss-hover-animate="swing"><a href="#portfolio" style="font-size: 16px;">Portifólio</a></p>
                <p class="lead mb-0" data-bss-hover-animate="swing"><a href="#about" style="font-size: 16px;">Sobre</a></p>
                <p class="lead mb-0" data-bss-hover-animate="swing"><a href="themes#themes" style="font-size: 16px;">Temas</a></p>
                <p class="lead mb-0" data-bss-hover-animate="swing"><a href="#contact" style="font-size: 16px;">Contato</a></p>
            </div>
        </div>
    </div>
</footer>

<?= $render(
    'modal',
    [
        'portfolio' => $portfolio
    ]
); ?>
<?= $render('footer'); ?>