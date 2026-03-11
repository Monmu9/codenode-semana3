
<?php get_header(); ?>

<main>
    <div class="contacto-container">
        <?php
        while (have_posts()) : the_post();
            the_content();
        endwhile;
        ?>
    </div>
</main>

<?php get_footer(); ?>