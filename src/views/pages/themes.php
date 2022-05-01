<?= $render('header'); ?>
<?= $render('navThemes'); ?>

<section id="themes" class="themes" style="margin-top: 104px;">
    <div class="container">
        <h2 class="text-uppercase text-center text-secondary" data-aos="fade-down" data-aos-duration="800" data-aos-delay="300">Temas</h2>
        <hr data-aos="fade-right" data-aos-duration="800" data-aos-delay="300" class="star-dark mb-5">
        <p style="font-family: Roboto, sans-serif;text-align: center;">São apenas Layouts para sites, feitos em HTML, CSS e JS. Estes não possuem painel administrativo para editar o conteúdo. Porém nós desenvolvemos painel administrativo e realizamos alterações para alguns destes temas, fazemos orçamento sem compromisso.<br /></p>
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


            <div class="col-md-6 col-lg-4" data-aos="fade-down-right" data-aos-duration="1000" data-aos-delay="600">
                <div class="position-relative" style="margin-bottom: 30px;background: var(--bs-pink);">
                    <div class="position-absolute fade" style="width: 100%;height: 100%;">
                        <div class="d-flex flex-column justify-content-center justify-content-xxl-center" style="height: 100%;">
                            <p class="text-white" style="font-family: Roboto, sans-serif;text-align: center;font-size: 15px;font-weight: bold;">EM PREVE<br /></p>
                            <p class="text-white flex-row" style="font-size: 18px;font-family: Roboto, sans-serif;text-align: center;"><strong>SENDO DESENVOLVIDO</strong><br /></p>
                        </div>
                    </div><img src="<?= $base; ?>/assets/img/portfolio/Desenvolvimento.png?h=706eb9ba40419dc8f3726554c447ce7d" style="width: 100%;">
                </div>
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
                <p class="lead mb-0" data-bss-hover-animate="swing"><a href="<?= $base; ?>#portfolio" style="font-size: 16px;">Portifólio</a></p>
                <p class="lead mb-0" data-bss-hover-animate="swing"><a href="<?= $base; ?>#about" style="font-size: 16px;">Sobre</a></p>
                <p class="lead mb-0" data-bss-hover-animate="swing"><a href="#themes" style="font-size: 16px;">Temas</a></p>
                <p class="lead mb-0" data-bss-hover-animate="swing"><a href="<?= $base; ?>#contact" style="font-size: 16px;">Contato</a></p>
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