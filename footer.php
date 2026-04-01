<footer>
    <div class="footer wrapper">
        <div class="footer__menu">
            <div class="footer__menu-left">
                <?php
                    $custom_logo = wp_get_attachment_image_src(get_theme_mod('custom_logo'), 'full');
                    if ($custom_logo) {
                        echo '<img src="' . esc_url($custom_logo[0]) . '" alt="' . esc_attr(get_bloginfo('name')) . '">';
                    } else { ?>
                        <?php echo bloginfo('name') ?>
                <?php } ?>
                <p>
                    ScacchiStrategie.com è la tua bussola nel mondo dei casinò online con licenza ADM. Ti offriamo analisi approfondite, recensioni trasparenti e notizie sempre aggiornate sul gioco legale in Italia. Il nostro team di specialisti e appassionati lavora ogni giorno per aiutarti a scegliere in modo consapevole e sicuro.
                    Ricorda: gioca sempre in modo responsabile (18+, Gioca-Responsabile.it).
                </p>
                <span>Informazioni di contatto:</span>
                <a href="mailto:contact@scacchistrategie.com">contact@scacchistrategie.com</a>
            </div>
            <?php 
                if (has_nav_menu('footer')) { ?>
                    <?php 
                        wp_nav_menu( array(
                            'menu_class'=>'menu',
                            'theme_location'=>'footer'
                        ));
                    ?>
            <?php } ?>
        </div>
        <div class="footer__logos">
            <img class="eighteen" src="<?php echo get_template_directory_uri() ?>/img/eighteen.svg" alt="18+">
            <a href="https://www.adm.gov.it/portale/home/" target="_blank">
                <img class="adm" src="<?php echo get_template_directory_uri() ?>/img/adm-icon.svg" alt="ADM">
            </a>
            <a href="https://gioca-responsabile.it/" target="_blank">
                <img class="gioco" src="<?php echo get_template_directory_uri() ?>/img/gioco-logo.svg" alt="Gioco responsabile">
            </a>
        </div>
        <div class="footer__copyright">
            <span>© <?php echo date('Y');?> scacchistrategie.com</span>
        </div>
		<div class="scroll-top">
			<div class="scroll-top-bg"> 
				<img src="<?php echo get_template_directory_uri() ?>/img/up-icon.svg" alt="Til toppen">
			</div>
		</div>
    </div>
</footer>
<div id="cookie-block">
    <div class="cookie__block-img"></div>
    <div class="cookie__block-text">
        <span>Sul nostro sito vengono impiegati cookie per offrire un servizio migliore.</span>
        <p>Continuando a navigare, accetti l’uso dei cookie come descritto nella nostra <a href="/cookie-policy/">Politica sui Cookie</a>.</p>
    </div>
    <div class="cookie__block-buttons">
        <button class="btn cookie__block-accept">
            <span>Accetta</span>
        </button>
        <a href="/cookie-policy/" class="cookie__block-reject">
            Politica sui Cookie
        </a>
    </div>
</div>

<?php wp_footer(); ?>

<script src="<?php echo get_template_directory_uri() ?>/js/main.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/js/cookie.js"></script>

</body>
</html>
