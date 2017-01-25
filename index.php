

<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header(); ?>

<section id="hp">
  <div class="orbit" role="region" aria-label="Favorite Space Pictures" data-orbit data-options="animInFromLeft:fade-in; animInFromRight:fade-in; animOutToLeft:fade-out; animOutToRight:fade-out;">
    <ul class="orbit-container">
      <!--button class="orbit-previous"><span class="show-for-sr">Previous Slide</span>&#9664;&#xFE0E;</button>
      <button class="orbit-next"><span class="show-for-sr">Next Slide</span>&#9654;&#xFE0E;</button-->
      <li class="is-active orbit-slide blurImg">
        <img class="orbit-image" data-interchange="[<?php echo get_bloginfo('template_url'); ?>/images/gp30/slider01.jpg, small], [<?php echo get_bloginfo('template_url'); ?>/images/gp30/slider01.jpg, medium], [<?php echo get_bloginfo('template_url'); ?>/images/gp30/slider01.jpg, large], [<?php echo get_bloginfo('template_url'); ?>/images/gp30/slider01.jpg, xlarge]">
      </li>
      <li class="is-active orbit-slide blurImg">
        <img class="orbit-image" data-interchange="[<?php echo get_bloginfo('template_url'); ?>/images/gp30/slider02.jpg, small], [<?php echo get_bloginfo('template_url'); ?>/images/gp30/slider02.jpg, medium], [<?php echo get_bloginfo('template_url'); ?>/images/gp30/slider02.jpg, large], [<?php echo get_bloginfo('template_url'); ?>/images/gp30/slider02.jpg, xlarge]">
      </li>
      <li class="is-active orbit-slide blurImg">
        <img class="orbit-image" data-interchange="[<?php echo get_bloginfo('template_url'); ?>/images/gp30/slider03.jpg, small], [<?php echo get_bloginfo('template_url'); ?>/images/gp30/slider03.jpg, medium], [<?php echo get_bloginfo('template_url'); ?>/images/gp30/slider03.jpg, large], [<?php echo get_bloginfo('template_url'); ?>/images/gp30/slider03.jpg, xlarge]">
      </li>
    </ul>
  </div>
  <div class="overlay">
      <img data-interchange="[<?php echo get_bloginfo('template_url'); ?>/images/gp30/logo-slider.png, small], [<?php echo get_bloginfo('template_url'); ?>/images/gp30/logo-slider.png, medium], [<?php echo get_bloginfo('template_url'); ?>/images/gp30/logo-slider.png, large], [<?php echo get_bloginfo('template_url'); ?>/images/gp30/logo-slider.png, xlarge]">
  </div>
</section>

<section id="premio">
  <div class="premio-content">
      <div class="columns space">
        <h1>xxx edizione al servizio</h1>
        <h1> della comunicazione di marca</h1>
        <div class="testo">
          <p>Palcoscenico dell’eccellenza Italiana nel campo della comunicazine,</p>
          <p>della cultura e delle istituzioni. Son ben trenta le edizioni del GrandPrix Advertising Strategies,</p>
          <p>il più importante premio in Italia relativo alla marca e alla sua comunicazione.</p>
          <p>Quando il pensiero strategico si fonde con quello creativo il risultato è straordinario e Milano</p>
          <p>ha tutti i numeri per presentare il meglio della pubblicità ...  </p>
        </div>
      </div>
  </div>
</section>

<section id="gallery">

    <div class="small-12 large-6 columns" role="main" >
        <img src="<?php echo get_bloginfo('template_url'); ?>/images/gp30/foto-1.jpg">
    </div>
    <div class="small-12 large-6 columns" role="main" >
        <img src="<?php echo get_bloginfo('template_url'); ?>/images/gp30/foto-1.jpg">
    </div>
    <div class="small-12 large-6 columns" role="main" >
        <img src="<?php echo get_bloginfo('template_url'); ?>/images/gp30/foto-1.jpg">
    </div>
    <div class="small-12 large-6 columns" role="main" >
        <img src="<?php echo get_bloginfo('template_url'); ?>/images/gp30/foto-1.jpg">
    </div>

</section>


<section id="giuria">
  <section id="lista-giuria">
    <div class="testo">
      <h3>la giuria</h3>
      <p>Un riconoscimento particolare va ai membri del comitato di selezione</p>
      <p>per lo scrupolo e l’attenzione posti nell’individuare i vincitori di categoria</p>
    </div>

    <!-- Thumb Giudici -->
    <div class="griglia-giuria zoom">
      <img class="thumbnail size" src="<?php echo get_bloginfo('template_url'); ?>/images/gp30/giudice1.jpg">
      <div class="scheda-giuria">
          <p>pippo</p>
          <p>pluto</p>
      </div>
    </div>

    <div class="griglia-giuria zoom">
      <img class="thumbnail size" src="<?php echo get_bloginfo('template_url'); ?>/images/gp30/giudice1.jpg">
      <div class="scheda-giuria">
          <p>pippo</p>
          <p>pluto</p>
      </div>
    </div>

    <div class="griglia-giuria zoom">
      <img class="thumbnail size" src="<?php echo get_bloginfo('template_url'); ?>/images/gp30/giudice1.jpg">
      <div class="scheda-giuria">
          <p>pippo</p>
          <p>pluto</p>
      </div>
    </div>

    <div class="griglia-giuria zoom">
      <img class="thumbnail size" src="<?php echo get_bloginfo('template_url'); ?>/images/gp30/giudice1.jpg">
      <div class="scheda-giuria">
          <p>pippo</p>
          <p>pluto</p>
      </div>
    </div>

    <div class="griglia-giuria zoom">
      <img class="thumbnail size" src="<?php echo get_bloginfo('template_url'); ?>/images/gp30/giudice1.jpg">
      <div class="scheda-giuria">
          <p>pippo</p>
          <p>pluto</p>
      </div>
    </div>

    <div class="griglia-giuria zoom">
      <img class="thumbnail size" src="<?php echo get_bloginfo('template_url'); ?>/images/gp30/giudice1.jpg">
      <div class="scheda-giuria">
          <p>pippo</p>
          <p>pluto</p>
      </div>
    </div>

    <div class="griglia-giuria zoom">
      <img class="thumbnail size" src="<?php echo get_bloginfo('template_url'); ?>/images/gp30/giudice1.jpg">
      <div class="scheda-giuria">
          <p>pippo</p>
          <p>pluto</p>
      </div>
    </div>

    <div class="griglia-giuria zoom">
      <img class="thumbnail size" src="<?php echo get_bloginfo('template_url'); ?>/images/gp30/giudice1.jpg">
      <div class="scheda-giuria">
          <p>pippo</p>
          <p>pluto</p>
      </div>
    </div>

    <div class="griglia-giuria zoom">
      <img class="thumbnail size" src="<?php echo get_bloginfo('template_url'); ?>/images/gp30/giudice1.jpg">
      <div class="scheda-giuria">
          <p>pippo</p>
          <p>pluto</p>
      </div>
    </div>

    <div class="griglia-giuria zoom">
      <img class="thumbnail size" src="<?php echo get_bloginfo('template_url'); ?>/images/gp30/giudice1.jpg">
      <div class="scheda-giuria">
          <p>pippo</p>
          <p>pluto</p>
      </div>
    </div>

    <div class="griglia-giuria zoom">
      <img class="thumbnail size" src="<?php echo get_bloginfo('template_url'); ?>/images/gp30/giudice1.jpg">
      <div class="scheda-giuria">
          <p>pippo</p>
          <p>pluto</p>
      </div>
    </div>

    <div class="griglia-giuria zoom">
      <img class="thumbnail size" src="<?php echo get_bloginfo('template_url'); ?>/images/gp30/giudice1.jpg">
      <div class="scheda-giuria">
          <p>pippo</p>
          <p>pluto</p>
      </div>
    </div>

  </section>
</section>


<section id=gp>
  <h3>grand prix 2016</h3>
      <div class="winner">
         <img data-interchange="[<?php echo get_bloginfo('template_url'); ?>/images/gp30/winner-small.jpg, small], [<?php echo get_bloginfo('template_url'); ?>/images/gp30/winner-medium.jpg, medium], [<?php echo get_bloginfo('template_url'); ?>/images/gp30/winner-large.jpg, large], [<?php echo get_bloginfo('template_url'); ?>/images/gp30/winner-xl.jpg, xlarge]">
      </div>
</section>


<section id="winner-list">
  <h3>winner list</h3>
<div id="video">
  <!-- Thumb Video -->
  <div class="thumb-video">
    <div class="caption">
          <h3>One smile is enough to change our world</h3>
          <ul>
            <li>Client:<span>pippo<span></li>
            <li>Agency: <span>pippo<span></li>
            <li>Cdp:<span>pippo<span></li>
          </ul>
      </div>
      <img class="thumbnail size" src="<?php echo get_bloginfo('template_url'); ?>/images/gp30/thumb-video.jpg">
  </div>
  <div class="thumb-video">
    <div class="caption">
          <h3>One smile is enough to change our world</h3>
          <ul>
            <li>Client:<span>pippo<span></li>
            <li>Agency: <span>pippo<span></li>
            <li>Cdp:<span>pippo<span></li>
          </ul>
      </div>
      <img class="thumbnail size" src="<?php echo get_bloginfo('template_url'); ?>/images/gp30/thumb-video.jpg">
  </div>
  <div class="thumb-video">
    <div class="caption">
          <h3>One smile is enough to change our world</h3>
          <ul>
            <li>Client:<span>pippo<span></li>
            <li>Agency: <span>pippo<span></li>
            <li>Cdp:<span>pippo<span></li>
          </ul>
      </div>
      <img class="thumbnail size" src="<?php echo get_bloginfo('template_url'); ?>/images/gp30/thumb-video.jpg">
  </div>
  <div class="thumb-video">
    <div class="caption">
          <h3>One smile is enough to change our world</h3>
          <ul>
            <li>Client:<span>pippo<span></li>
            <li>Agency: <span>pippo<span></li>
            <li>Cdp:<span>pippo<span></li>
          </ul>
      </div>
      <img class="thumbnail size" src="<?php echo get_bloginfo('template_url'); ?>/images/gp30/thumb-video.jpg">
  </div>
  <div class="thumb-video">
    <div class="caption">
          <h3>One smile is enough to change our world</h3>
          <ul>
            <li>Client:<span>pippo<span></li>
            <li>Agency: <span>pippo<span></li>
            <li>Cdp:<span>pippo<span></li>
          </ul>
      </div>
      <img class="thumbnail size" src="<?php echo get_bloginfo('template_url'); ?>/images/gp30/thumb-video.jpg">
  </div>
  <div class="thumb-video">
    <div class="caption">
          <h3>One smile is enough to change our world</h3>
          <ul>
            <li>Client:<span>pippo<span></li>
            <li>Agency: <span>pippo<span></li>
            <li>Cdp:<span>pippo<span></li>
          </ul>
      </div>
      <img class="thumbnail size" src="<?php echo get_bloginfo('template_url'); ?>/images/gp30/thumb-video.jpg">
  </div>
  <div class="thumb-video">
    <div class="caption">
          <h3>One smile is enough to change our world</h3>
          <ul>
            <li>Client:<span>pippo<span></li>
            <li>Agency: <span>pippo<span></li>
            <li>Cdp:<span>pippo<span></li>
          </ul>
      </div>
      <img class="thumbnail size" src="<?php echo get_bloginfo('template_url'); ?>/images/gp30/thumb-video.jpg">
  </div>
  <div class="thumb-video">
    <div class="caption">
          <h3>One smile is enough to change our world</h3>
          <ul>
            <li>Client:<span>pippo<span></li>
            <li>Agency: <span>pippo<span></li>
            <li>Cdp:<span>pippo<span></li>
          </ul>
      </div>
      <img class="thumbnail size" src="<?php echo get_bloginfo('template_url'); ?>/images/gp30/thumb-video.jpg">
  </div>
  <div class="thumb-video">
    <div class="caption">
          <h3>One smile is enough to change our world</h3>
          <ul>
            <li>Client:<span>pippo<span></li>
            <li>Agency: <span>pippo<span></li>
            <li>Cdp:<span>pippo<span></li>
          </ul>
      </div>
      <img class="thumbnail size" src="<?php echo get_bloginfo('template_url'); ?>/images/gp30/thumb-video.jpg">
  </div>
  <div class="thumb-video">
    <div class="caption">
          <h3>One smile is enough to change our world</h3>
          <ul>
            <li>Client:<span>pippo<span></li>
            <li>Agency: <span>pippo<span></li>
            <li>Cdp:<span>pippo<span></li>
          </ul>
      </div>
      <img class="thumbnail size" src="<?php echo get_bloginfo('template_url'); ?>/images/gp30/thumb-video.jpg">
  </div>
  <div class="thumb-video">
    <div class="caption">
          <h3>One smile is enough to change our world</h3>
          <ul>
            <li>Client:<span>pippo<span></li>
            <li>Agency: <span>pippo<span></li>
            <li>Cdp:<span>pippo<span></li>
          </ul>
      </div>
      <img class="thumbnail size" src="<?php echo get_bloginfo('template_url'); ?>/images/gp30/thumb-video.jpg">
  </div>

  <div class="thumb-video">
    <div class="caption">
          <h3>One smile is enough to change our world</h3>
          <ul>
            <li>Client:<span>pippo<span></li>
            <li>Agency: <span>pippo<span></li>
            <li>Cdp:<span>pippo<span></li>
          </ul>
      </div>
      <img class="thumbnail size" src="<?php echo get_bloginfo('template_url'); ?>/images/gp30/thumb-video.jpg">
  </div>
</div>
</section>

<section id="interviste">
  <div class="testo">
    <h3>interviste</h3>
    <p>Un riconoscimento particolare va ai membri del comitato di selezione</p>
    <p>per lo scrupolo e l’attenzione posti nell’individuare i vincitori di categoria</p>
  </div>
<div class="carosel">
  <div class="responsive slider">
    <div>
      <img src="http://placehold.it/350x300?text=1">
    </div>
    <div>
      <img src="http://placehold.it/350x300?text=2">
    </div>
    <div>
      <img src="http://placehold.it/350x300?text=3">
    </div>
    <div>
      <img src="http://placehold.it/350x300?text=4">
    </div>
    <div>
      <img src="http://placehold.it/350x300?text=5">
    </div>
    <div>
      <img src="http://placehold.it/350x300?text=6">
    </div>
  </div>
</div>
</section>



<section id="sponsor">
  <div id="lista-loghi">
    <div class="testo">
      <h3>partner & sponsor</h3>
    </div>

    <!-- Thumb Giudici -->
    <div class="griglia-loghi"><img class="thumbnail size" src="<?php echo get_bloginfo('template_url'); ?>/images/gp30/loghi/campari.png"></div>
    <div class="griglia-loghi">  <img class="thumbnail size" src="<?php echo get_bloginfo('template_url'); ?>/images/gp30/loghi/connectClimate.png"></div>
    <div class="griglia-loghi"><img class="thumbnail size" src="<?php echo get_bloginfo('template_url'); ?>/images/gp30/loghi/Newyork.png"></div>
    <div class="griglia-loghi">  <img class="thumbnail size" src="<?php echo get_bloginfo('template_url'); ?>/images/gp30/loghi/zero.png"></div>
  </div>
</section>

<script src=<?php echo get_bloginfo('template_url'); ?>/assets/javascript/custom/slick.js></script>

<?php get_footer();
