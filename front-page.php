<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Club Voyage</title>
    <link href="https://fonts.googleapis.com/css2?family=Prompt:wght@600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Protest+Riot&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Spicy+Rice&display=swap" rel="stylesheet">
    
</head>
<body>
    <?php get_header(); ?>
    <div id="entete" class="global clr-agencement-primaire">
        <section class="hero">
            <h1><?php echo get_bloginfo('name') ?></h1>
            <h2><?php echo get_bloginfo('description') ?></h2>
            <h3> Évasion Sophistiquée</h3>
            <button id="scrollToEvenement">Événements</button>
        </section>
        <?php get_template_part('gabarit/vague'); ?>
    </div>

    <div id="accueil" class="global">
        <section>

            <h3>Destinations de voyage populaires</h3>
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

    <div id="evenement" class="global diagonal">
        <section>
            <h2>Événement</h2>
            <h3>Spécialité Culinaire</h3>
            
            <a href="" class="button-link">Événement</a>
        </section>
    </div>

    <div id="galerie" class="global">
        <section>
            <h2>Galerie</h2>
            <h3>Images</h3>
            <a href="" class="button-link">Galerie</a>
        </section>
    </div>

    <?php get_footer(); ?>

    <script>
        document.getElementById('scrollToEvenement').addEventListener('click', function() {
            document.getElementById('evenement').scrollIntoView({ behavior: 'smooth' });
        });
    </script>
</body>
</html>
