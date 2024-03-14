    <link href="https://fonts.googleapis.com/css2?family=Prompt:wght@600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Protest+Riot&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Spicy+Rice&display=swap" rel="stylesheet">
<?php get_header();?>
    <div id="entete" class="global">
      <section class="hero">
        <h1><?php echo get_bloginfo('name') ?></h1>
        <h2><?php echo get_bloginfo('description') ?></h2>
        <h3>TIM - Collège de Maisonneuve</h3>
        <button>Événements</button>
      </section>
      <?php
            get_template_part('gabarit/vague');
          ?>
      </div>
      <div id="accueil" class="global">
      <section>
      <h2>Accueil</h2>
      <h3>Destinations de voyage</h3>
        <div class="cours">
        <?php
     
        if(have_posts()):
          while(have_posts()): the_post();
          $titre = get_the_title();

          ?>
          <div class="carte">

            <h3><?php the_title(); ?></h3>

            <p><?php echo wp_trim_words(get_the_content(),10); ?></p>
            <a href="<?php the_permalink(); ?>">Suivant</a>

        </div>
        <?php endwhile; ?>
        <?php endif; ?>
      </div>
      <a href="" class="button-link">Accueil</a>
      </section>
    </div>
       
      <div id="evenement" class="global diagonal">
        <section>
          <h2>Événement (h2)</h2>
          <h3>Horaire (h3)</h3>
          <h4>Thème du jour (h4)</h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed suscipit ligula vel quam fringilla, ac sagittis felis lacinia.</p>

          <a href="" class="button-link">Événement</a>
        </section>
      </div>
      <div id="galerie" class="global">
        <section>
          <h2>Galerie (h2)</h2>
          <h3>Images (h3)</h3>
          <a href="" class="button-link">Galerie</a>
        </section>
      </div>
      <div id="footer" class="global">
      <?php
            get_template_part('gabarit/vague');
          ?>
        <footer>
          <h2>Footer (h2)</h2>
          <h5>Réseaux (h5)</h5>
          
          <p>Voici le footer</p>
          <blockquote cite="">
          Lorem ipsum, dolor sit amet consectetur adipisicing elit. Soluta a deleniti optio voluptates vitae, cum quas omnis, ea doloremque similique quod fuga illum voluptas? Pariatur quam optio a voluptas ut?</blockquote>
          <a href="" class="button-link">Footer</a>       
          <a href="" > Page Suivante</a>

        </footer>
      </div>
</body>
</html>






<!-- 
References:

La fonction HSL
https://blog.logrocket.com/using-hsl-colors-css/

Création d'une palette de couleurs avec hsl()
https://blog.logrocket.com/building-color-palette-css/

Création d'une palette avec le cercle chromatique
https://color.adobe.com/fr/create/color-wheel

 -->


 