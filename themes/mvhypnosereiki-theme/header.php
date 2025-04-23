<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>
  <!-- <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet"> -->
  <?php wp_head(); ?>
  <script defer async src='https://cdn.trustindex.io/loader.js?3a9d4524097391571536ba54c88'></script>
  <!-- <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script> -->
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
  <header class="header">
    <div class="header-container container">
      <h1 class="title">
        <a href="<?= get_site_url() ?>">mvhypnose.reiki</a>
      </h1>
      <nav class="nav">
        <ul class="nav-list">
          <li class="nav-list__item">
            <a href="<?= get_site_url() ?>/#a-propos">A mon propos</a>
          </li>
          <li class="nav-list__item">
            <a href="<?= get_site_url() ?>/#accompagnements">Accompagnements</a>
          </li>
          <li class="nav-list__item">
            <a href="<?= get_site_url() ?>/#tarifs">Tarifs</a>
          </li>
          <li class="nav-list__item">
            <a href="<?= get_site_url() ?>/#avis">Avis</a>
          </li>
        </ul>
      </nav>
      <button class="nav-btn" id="menu-btn" aria-label="Ouvrir le menu">
        <img src="<?= esc_url(get_parent_theme_file_uri() . '/icons/menu.svg'); ?>" alt="Icône de menu" />
      </button>
      <a class="phonenumber" href="tel:+33759777372"><img src="<?= esc_url(get_parent_theme_file_uri() . '/icons/phone-white.svg'); ?>" alt="phone" /> 07 59 77 73 72</a>
    </div>
  </header>

  <aside id="menu" class="menu">
    <button class="menu-btn" id="menu-close-btn" aria-label="Fermer le menu">
      <img src="<?= esc_url(get_parent_theme_file_uri() . '/icons/close.svg'); ?>" alt="Icône de fermeture du menu" />
    </button>
    <nav class="nav">
      <ul class="nav-list">
        <li class="nav-list__item">
          <a href="#a-propos">A mon propos</a>
        </li>
        <li class="nav-list__item">
          <a href="#accompagnements">Accompagnements</a>
        </li>
        <li class="nav-list__item">
          <a href="#tarifs">Tarifs</a>
        </li>
        <li class="nav-list__item">
          <a href="#avis">Avis</a>
        </li>
      </ul>
    </nav>
  </aside>