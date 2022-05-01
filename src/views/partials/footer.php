<!-- COPYRIGHT -->
<div class="text-center text-white copyright py-4">
    <div class="container"><small>Copyright ©&nbsp;Tubarão Rosa 2022</small></div>
</div>
<!-- PURE WHATSAPP BUTTON -->
<div class="d-none div-whatsapp position-fixed rounded" data-bss-hover-animate="rubberBand">
    <a href="https://web.whatsapp.com/send?phone=552137670094" target="_blank">
        <i class="fa fa-whatsapp" style="font-size: 45px;width: auto;height: auto;padding: 8px;background: rgba(25,135,84,0.61);color: var(--bs-white);border-top-left-radius: 4px;border-top-right-radius: 4px;border-bottom-right-radius: 4px;border-bottom-left-radius: 4px;"></i>
    </a>
</div>
<!-- WHATSAPP SERVICE WITH BUTTON -->
<div id="whatsapp-widget">
    <button class="ws--button-fab">
        <div class="ws--icon">
            <img src="<?= $base; ?>/assets/img/whatsappWidger/icon-watsapp-chat.svg?h=f212680524d8016ddcb3fd24999d1085" alt="icon-chat" width="31px">
        </div>
    </button>
    <div class="ws--float-ballon">
        <button class="ws-float-ballon--button-close">
            <img src="<?= $base; ?>/assets/img/whatsappWidger/icon-watsapp-balloon-close.svg?h=42f95afed70a19d51dda8e66a460e089" height="14px" alt="Logotipo do TR Web">
        </button>
        <span class="ws--float-ballon--title">Conversar pelo WhatsApp</span>
        <div class="ws--float-ballon--content">
            <p class="ws--float-ballon--text ws--float-ballon--text--strong">Olá! Vamos iniciar uma conversa pelo WhatsApp?</p>
            <p class="ws--float-ballon--text ws--float-ballon--text--small">Escolha o atendente para iniciar a conversa.</p>
            <div class="ws--float-ballon--user"><img src="<?= $base; ?>/assets/img/whatsappWidger/icon-watsapp-avatar.svg?h=b1234dfd07f333863b28c451f6830820" alt="avatar" class="ws--float-ballon--user---thumb">
                <div class="ws--float-ballon--user--content">
                    <span class="ws--float-ballon--user--content---name">Daniel Martins (Suporte)</span>
                    <span class="ws--float-ballon--user--content---phone">+55 (21) 3767-0094</span>
                    <a href="https://api.whatsapp.com/send?phone=552137670094&amp;text=Olá! Gostaria de mais informações a respeito do seu negócio." target="_blank" class="ws--float-ballon--user--content---button">Iniciar conversa</a>
                </div>
            </div>
        </div>
        <div class="ws--float-ballon--ass">
            <a href="<?= $base; ?>" target="_blank">
                <img src="<?= $base; ?>/assets/img/whatsappWidger/icon-whatsapp-logo.svg?h=c99f6454966647b76f66c70e05a18262" height="14px" alt="Logotipo do TR Web">
            </a>
        </div>
    </div>
</div>
<!-- RETURN TO TOP BUTTON -->
<div data-bss-hover-animate="rubberBand" class="scroll-to-top position-fixed rounded">
    <a class="text-center d-block rounded text-white" href="#page-top">
        <i class="fa fa-chevron-up"></i>
    </a>
</div>
<!-- SCRIPT -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- <script src="<?= $base; ?>/assets/js/smart-forms.min.js?h=37efe7e508357f382d0a5b2b73cd47ee"></script> -->
<script src="<?= $base; ?>/assets/js/bs-init.js?h=1ff0a0bc7fcdd630c8e66c639cd2fc11"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
<script src="<?= $base; ?>/assets/js/freelancer.js?h=3feb602c24e264789bbbabe49aeb2cb8"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
<script src="https://www.google.com/recaptcha/api.js?hl=pt-BR"></script>
<script src="<?= $base; ?>/assets/js/script.js?h=ad8590a3026bda87269578658f727619"></script>
<script src="<?= $base; ?>/assets/js/scriptWhatsapp.js?h=546a7568e292851211ef7d8831e4792d"></script>
</body>

</html>