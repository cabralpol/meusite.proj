<!-- MENSAGE MODAL-->
<div class="modal fade" role="dialog" tabindex="-1" id="messageModal">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <header style="padding: 16px;background: var(--bs-gray-200);border-top-left-radius: 20px;border-top-right-radius: 20px;">
                <h1 style="text-align: center;"><i class="fa fa-envelope-o" style="font-size: 67.88px;color: var(--bs-blue);"></i></h1>
            </header>
            <div class="modal-body" id="modalMessageBody">
                <!-- Mensagem aqui -->
            </div>
            <!-- Recaptcha -->
            <div class="modal-body" id="modalRecaptchaBody" style="margin:auto; display:none;">
                <div class="g-recaptcha" data-callback="recaptchaCallback" data-sitekey="6Lcp8p0eAAAAALOj2rAn6AdTS_Xcdau_sW90wP8m"></div>
            </div>
            <div class="modal-footer" style="border-bottom-right-radius: 20px;border-bottom-left-radius: 20px;"><button class="btn btn-secondary" type="button" data-bs-dismiss="modal" style="padding-right: 55px;padding-left: 55px;font-family: Roboto, sans-serif;margin-left: auto;margin-right: auto;">Fechar</button></div>
        </div>
    </div>
</div>

<!-- START PORTFOLIO MODAL -->
<?php if ($portfolio) : ?>
    <?php foreach ($portfolio as $value) : ?>
        <!-- MODAL <?= ($value['id'] > 9) ? '' : '0'; ?><?= $value['id']; ?> -->
        <div class="modal fade text-center" role="dialog" tabindex="-1" id="portfolio-modal-<?= ($value['id'] > 9) ? '' : '0'; ?><?= $value['id']; ?>">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="container text-center">
                            <div class="row">
                                <div class="col-lg-8 mx-auto">
                                    <!-- Project Name -->
                                    <h2 class="text-uppercase text-secondary mb-0">Projeto <?= (ucwords($value['project_name'])); ?></h2>
                                    <hr class="star-dark mb-5"><img class="img-fluid mb-5" src="<?= $base; ?>/assets/img/portfolio/<?= $value['img_url']; ?>?h=4b5723e2b00006ef3a25df097c7187dd">
                                    <!-- Project Description -->
                                    <p class="mb-5"><?= $value['description']; ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer pb-5">
                        <!-- Project Link -->
                        <a href="<?= $base; ?>/portfolios/<?= $value['project_url']; ?>" target="_blank" class="btn btn-primary btn-lg mx-auto rounded-pill portfolio-modal-dismiss" role="button"><i class="fa fa-link"></i>&nbsp;Ir para demo</a>
                        <a class="btn btn-primary btn-lg mx-auto rounded-pill portfolio-modal-dismiss" role="button" data-bs-dismiss="modal"><i class="fa fa-close"></i>&nbsp;Sair do projeto</a>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
<?php else : ?>
    <div>Nenhuma Portfólio cadastrado.</div>
<?php endif; ?>
<!-- END PORTFOLIO MODAL -->