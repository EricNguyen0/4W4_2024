<link href="https://fonts.googleapis.com/css2?family=Prompt:wght@600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Protest+Riot&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Spicy+Rice&display=swap" rel="stylesheet">
<?php get_header();?>
    
      <div id="accueil" class="global">
      <section>
      <h3>Destination de voyage</h3>
        <div class="cours">
        <?php
        /*
          if(have_posts()){
            while(have_posts()){
              the_post();
              the_title('<h4>','</h4>');
              echo wp_trim_words(get_the_content(),30);
            }
          }
        */
        if(have_posts()):
          $titre = get_the_title();?>
          <div class="carte">

            <h3><?php the_title(); ?></h3>
            <p><?php the_content(); ?></p>
            
        </div>
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
      
      <?php
            get_template_part('gabarit/vague');
          ?>
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


 