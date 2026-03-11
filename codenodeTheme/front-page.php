
<?php get_header(); ?>

<main>
    <div class="bienvenida">
        <?php
        while (have_posts()) : the_post();
            the_content();
        endwhile;
        ?>
    </div>
</main>

<?php get_footer(); ?>