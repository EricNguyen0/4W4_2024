<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Theme GR1</title>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/normalize.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/style.css">

    <link href="https://fonts.googleapis.com/css2?family=Prompt:wght@600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Protest+Riot&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Spicy+Rice&display=swap" rel="stylesheet">

   
</head>
<body>
    <div id="entete" class="global">
        <header class="entete__header">
          <h1>Thème du groupe #1 (h1)</h1>
          <h2>4W4 - Conception d'interface <span> et développement web </span></h2>
          <h3>TIM - Collège de Maisonneuve</h3>
          <button>Test</button>
        </header>
        <div class="vague">
          <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
              <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" style = "fill: var(--couleur-arriere-accueil)"></path>
          </svg>
      </div>
      </div>
      <div id="accueil" class="global">
      <section>
        <div class="cours">
        <h2>Accueil</h2>
        <h3>Liste de cours(h3)</h3>
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
          while(have_posts()): the_post();?>
          <div class="carte">
            <h3><?php the_title(); ?></h3>
            <p><?php echo wp_trim_words(get_the_content(),25); ?></p>
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
        <div class="vague2">
          <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
              <path d="M985.66,92.83C906.67,72,823.78,31,743.84,14.19c-82.26-17.34-168.06-16.33-250.45.39-57.84,11.73-114,31.07-172,41.86A600.21,600.21,0,0,1,0,27.35V120H1200V95.8C1132.19,118.92,1055.71,111.31,985.66,92.83Z" style = "fill: var(--couleur-arriere-accueil)"></path>
          </svg>
      </div>
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


 