<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>
  <?php wp_head(); ?>
  <script defer async src='https://cdn.trustindex.io/loader.js?3a9d4524097391571536ba54c88'></script>
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
            <a href="<?= get_site_url() ?>/#actualites">Actualités</a>
          </li>
        </ul>
      </nav>
      <button class="nav-btn" id="menu-btn">
        <img src="<?= esc_url(get_parent_theme_file_uri() . '/icons/menu.svg'); ?>" alt="" />
      </button>
      <a class="phonenumber" href="tel:+33759777372"><img src="<?= esc_url(get_parent_theme_file_uri() . '/icons/phone-white.svg'); ?>" alt="phone" /> 07 59 77 73 72</a>
    </div>
  </header>

  <aside id="menu" class="menu">
    <button class="menu-btn" id="menu-close-btn">
      <img src="<?= esc_url(get_parent_theme_file_uri() . '/icons/close.svg'); ?>" alt="" />
    </button>
    <nav class="nav">
      <ul class="nav-list">
        <li class="nav-list__item">
          <a href="#about">A mon propos</a>
        </li>
        <li class="nav-list__item">
          <a href="#support">Accompagnements</a>
        </li>
        <li class="nav-list__item">
          <a href="#pricing">Tarifs</a>
        </li>
        <li class="nav-list__item">
          <a href="#reviews">Avis</a>
        </li>
      </ul>
    </nav>
  </aside>