<?php
get_header();
?>

<section class="error-page">
  <h2 class="error-page__title">404</h2>
  <p class="error-page__paragraph">Il semblerait que la page que vous recherchiez n'existe pas.</p>
  <a role="button" class="btn" href="<?= get_site_url() ?>">
    <span>
      Retourner à l'accueil
    </span>
  </a>
</section>

<?php
get_footer();
?>