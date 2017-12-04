<!doctype html>
<html class="no-js" lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="p:domain_verify" content="0d77347d9d014a308f73e06948a2700b"/>
  <link rel="canonical" href="http://marinabcoding.com/" />

  <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />
  <title><?php  wp_title(''); ?></title>
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <?php include_once("analyticstracking.php") ?>
	
  <header class="row no-max pad main">
    <h1><a class='current' href="<?php  echo esc_url( home_url() ); ?>"><img src="http://marinabcoding.com/wp-content/uploads/2017/07/logo.png" alt=""></a></h1>
    <p><a class='current' href="<?php  echo esc_url( home_url() ); ?>"><?php bloginfo('description'); ?></a></p>

    <a href="" class="nav-toggle"><span></span><p>Menu</p></a>
    <nav>

      <?php
      $defaults = array(
        'container' => false,
        'theme_location' => 'primary-menu',
        'menu_class' => 'no-bullet'
        );

      wp_nav_menu( $defaults );
      ?>
    </nav>
  </header>

  <section>
     <div class="mobile-hero row no-max pad">
            <p>Welcome to my page! My name is Marina. I am a front-end developer who has a passion for solving problems, constantly perfecting my craft, challenging myself, and innovating work that is beautiful and inspiring. Thanks for stopping by! ✌️❤️</p>
      </div>
  </section>

  <section id="hero">
    <div class="container clearfix">

      <div id="workspace">
        <div class="clock">
          <div class="top"></div>
          <div class="right"></div>
          <div class="bottom"></div>
          <div class="left"></div>
          <div class="center"></div>
          <div class="hour"></div>
          <div class="minute"></div>
          <div class="second"></div>
        </div>
        <div id="shelf">
          <ul>
            <li class="books">
              <span></span>
              <span><i></i></span>
              <span></span>
              <span></span>
              <span></span>
              <span></span>
              <span></span>
              <span></span>
              <span></span>
              <span></span>
              <span></span>
              <span></span>
            </li>
          </ul>
          <div></div>
        </div><!-- Shelf -->
        <div class="wrap">
          <div class="head">
            <div class="face"></div>
            <div class="bangs left"></div>
            <div class="bangs right"></div>
            <div class="eye left"></div>
            <div class="eye right"></div>
            <div class="lash left"></div>
            <div class="lash right"></div>
            <div class="blush left"></div>
            <div class="blush right"></div>
            <div class="mouth"></div>
            <div class="hair"></div>
            <div class="ends left"></div>
            <div class="ends right"></div>
          </div>
          <div class="body">
            <div class="neck"></div>
            <div class="ushirt"></div>
            <div class="skirt"></div>
            <div class="collar left"></div>
            <div class="collar right"></div>
            <div class="shirt left"></div>
            <div class="shirt right"></div>
            <div class="arm left"></div>
            <div class="arm right"></div>
            <div class="sleeve left"></div>
            <div class="sleeve right"></div>
            <div class="cuff left"></div>
            <div class="cuff right"></div>
            <div class="leg left"></div>
            <div class="leg right"></div>
            <div class="bootleg left"></div>
            <div class="bootleg right"></div>
            <div class="boot left"></div>
            <div class="boot right"></div>
            <div class="laces left"></div>
            <div class="laces right"></div>
          </div>
          <div class="bubble">
            <p>Welcome to my page! My name is Marina. I am a front-end developer who has a passion for solving problems, constantly perfecting my craft, challenging myself, and innovating work that is beautiful and inspiring. Thanks for stopping by! ✌️❤️</p>
          </div>
        </div>


        <div class="desk">
          <div class="table">
            <div class="right-tb">
              <span></span>
              <span></span>
            </div><!-- right tb-->
            <span class="mouse"></span>
            <span class="cup"><i></i></span>
            <span class="router">
              <ul>
                <li>
                  <i></i>
                </li>
                <li></li>
              </ul>
            </span>
            <div class="imac">
              <span class="note">Yep!</span>
            </div>
            <span class="bk-screen">
              <i></i>
            </span>
            <span class="iphone"></span>
          </div><!-- desk -->
          <div class="trash">
          </div> <!-- Trash -->
        </div> <!-- desk -->
      </div><!-- workspace -->
    </div>
  </section>