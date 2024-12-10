<?php
get_header();
?>

<section class="hero">
  <div class="hero-container container">
    <div class="column">
      <h1 class="hero__title">MVHypnose.reiki</h1>
      <p class="hero__description">Bienvenue ! Je suis Maxime Vannier, praticien spécialisé en hypnose holistique, Reiki et D.T.M.A à Condé-en-Normandie. Dans un cadre apaisant et confidentiel, je vous accompagne en fonction de vos besoins, et à votre rythme. Je vous aide à retrouver confiance en vous et à atteindre vos objectifs en vous guidant pour activer vos ressources personnelles.</p>
      <a class="btn" href="#about">
        <span>En savoir plus</span>
      </a>
    </div>
    <div class="picture">
      <img src="<?= esc_url(get_parent_theme_file_uri() . '/images/hero.jpg'); ?>" alt="" />
    </div>
  </div>
</section>
<img class="wave" src="<?= esc_url(get_parent_theme_file_uri() . '/images/wave_1.svg'); ?>" alt="" />

<section id="a-propos" class="about">
  <div class="about-container container">
    <div class="column">
      <h2 class="about__title">A propos de moi</h2>
      <p class="about__description">
        Je suis <strong class="strong">Maxime VANNIER</strong>, professionnel de l'accompagnement dans le domaine médico-social depuis plus de 23 ans. Passionné par le bien-être et l'épanouissement personnel, j'ai enrichi mon parcours en me formant à diverses pratiques complémentaires.
        Je me suis spécialisé dans l'<strong class="strong">hypnose holistique</strong> et je me suis formé également à la <strong class="strong">D.T.M.A</strong>. (Désensibilisation des Traumatismes par les Mouvements Alternatifs), des approches qui permettent d'explorer et de soulager certaines blessures et traumatismes.
        En 2017, j'ai également intégré le <strong class="strong">Reiki</strong> dans ma pratique personnelle, une méthode énergétique douce et puissante qui favorise l'harmonisation et la revitalisation du corps et de l'esprit.
        Mon objectif est de vous accompagner sur le chemin du mieux-être, en vous offrant des outils et des techniques adaptés à vos besoins et vos souhaits. Chaque accompagnement est personnalisé . Que vous cherchiez à surmonter des blocages émotionnels, à soulager des douleurs physiques ou simplement à retrouver un état de sérénité et d'équilibre, je suis là pour vous aider.
      </p>
    </div>
    <img class="picture" src="<?= esc_url(get_parent_theme_file_uri() . '/images/profile.jpg'); ?>" alt="" />
  </div>
</section>

<section id="accompagnements" class="support">
  <div class="support-container container">
    <h2 class="support__title">Mes accompagnements</h2>
    <ul class="support-list">
      <?php
      $args = array(
        'post_type' => 'accompagnements',
      );

      $supports_query = new WP_Query($args);
      ?>
      <?php if ($supports_query->have_posts()) : while ($supports_query->have_posts()) : $supports_query->the_post(); ?>
          <li class="support-list__item">
            <article class="article">
              <div class="column">
                <h3 class="article__title"><?php the_title() ?></h3>
                <p class="article__description">
                  <?= get_the_excerpt() ?>
                </p>
                <a class="btn" href="<?php the_permalink() ?>">
                  <span>En savoir plus</span>
                </a>
              </div>
              <?php the_post_thumbnail('original', array('class' => 'picture')) ?>
            </article>
          </li>
      <?php
        endwhile;
      endif;
      ?>
      <?php wp_reset_postdata(); ?>
    </ul>
  </div>
</section>
<img class="wave-reverse" src="<?= esc_url(get_parent_theme_file_uri() . '/images/wave_1.svg'); ?>" alt="" />

<section id="tarifs" class="pricing">
  <div class="pricing-container container">
    <h2 class="pricing__title">Mes tarifs</h2>
    <p class="pricing__description">Du lundi au samedi matin<br /> 9h-19h, uniquement sur rendez-vous</p>
    <ul class="pricing-list">
      <li class="pricing-list__item">
        <span class="price">60€/<small>séance</small></span>
        <h3 class="title">Hypnose holistique</h3>
        <p class="description">
          Une séance d'une durée d'environ 1h à 1h30<br />
          Tarif réduit pour les étudiants et les demandeurs d'emploi : 50€
        </p>
      </li>
      <li class="pricing-list__item">
        <span class="price">60€/<small>séance</small></span>
        <h3 class="title">Reiki</h3>
        <p class="description">
          Une séance d'une durée d'environ 1h à 1h30<br />
          Tarif réduit pour les étudiants et les demandeurs d'emploi : 50€<br />
          Pour les demandes spécifiques de reiki, veuillez me contacter
        </p>
      </li>
    </ul>
    <p class="pricing-infos">Possibilité de déplacement à domicile et/ou travail à distance,<br />pour davantage de précisions, merci de me contacter</p>
  </div>
</section>
<section class="contact">
  <div class="contact-container container">
    <h3 class="contact__title">Besoin de me contacter ?</h3>
    <p class="contact__description">Pour la moindre question ou précision, n'hésitez pas à me contacter.</p>
    <ul class="contact-list">
      <li class="contact-list__item">
        <img src="<?= esc_url(get_parent_theme_file_uri() . '/icons/phone.svg'); ?>" alt="phone" />
        <a href="tel:+33759777372">+33759777372</a>
      </li>
      <li class="contact-list__item">
        <img class="icon" src="<?= esc_url(get_parent_theme_file_uri() . '/icons/mail.svg'); ?>" alt="phone" />
        <a href="mailto:mvhypnose.reiki@gmail.com">mvhypnose.reiki@gmail.com</a>
      </li>
    </ul>
  </div>
</section>
<section id="actualites" class="news">
  <div class="news-container container">
    <div class="column">
      <h2 class="news__title">Actualités</h2>
      <ul class="news-list">
        <?php
        setlocale(LC_TIME, 'fr_FR');
        date_default_timezone_set('Europe/Paris');

        $args = array(
          'post_type' => 'actualites',
          'post_count' => 3
        );

        $news_query = new WP_Query($args);

        if ($news_query->have_posts()) : while ($news_query->have_posts()) : $news_query->the_post();
            $date = DateTime::createFromFormat('d/m/Y', get_field('date'));

            $monthFormatter = new IntlDateFormatter('fr_FR', IntlDateFormatter::NONE, IntlDateFormatter::NONE, 'Europe/Paris', IntlDateFormatter::GREGORIAN, 'MMMM');
            $dayFormatter = new IntlDateFormatter('fr_FR', IntlDateFormatter::NONE, IntlDateFormatter::NONE, 'Europe/Paris', IntlDateFormatter::GREGORIAN, 'dd');
        ?>
            <li class="news-list__item">
              <div class="date">
                <span class="day"><?= $dayFormatter->format($date); ?></span>
                <span class="month"><?= $monthFormatter->format($date); ?></span>
              </div>
              <div class="info">
                <h4 class="title"><?php the_title(); ?></h4>
                <p class="description"><?php the_excerpt(); ?></p>
              </div>
            </li>
        <?php
          endwhile;
        endif;
        ?>
      </ul>
    </div>
    <img class="illustration" src="<?= esc_url(get_parent_theme_file_uri() . '/images/news.jpg'); ?>" alt="" />
  </div>
</section>

<?php
get_footer();
?>