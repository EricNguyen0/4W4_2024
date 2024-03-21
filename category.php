<link href="https://fonts.googleapis.com/css2?family=Prompt:wght@600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Protest+Riot&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Spicy+Rice&display=swap" rel="stylesheet">
<?php get_header();?>
    
      <div id="accueil" class="global clr-agencement-primaire">
      <section>
        <h2>Destination de voyages</h2>
      <h3>Catégories : <?php the_category() ?></h3>
        <div class="cours">
        <?php
     
        if(have_posts()):
          while(have_posts()): the_post();
          $titre = get_the_title();

          ?>
          <div class="carte">

            <h3><?php the_title(); ?></h3>

            <p><?php echo wp_trim_words(get_the_content(),10); ?></p>

            <?php the_category() ?>
            <a href="<?php the_permalink(); ?>">Suite</a>

        </div>
        <?php endwhile; ?>
        <?php endif; ?>
      </div>
      <a href="" class="button-link">Accueil</a>
      </section>
    </div>
       
      <div id="galerie" class="global">
        <section>
          <h2>Galerie (h2)</h2>
          <a href="" class="button-link">Galerie</a>
        </section>
      </div>
      <?php get_footer() ?>
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


 