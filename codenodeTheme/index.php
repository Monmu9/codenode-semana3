
<?php get_header(); ?>

<main>
    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>

            <article>
                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

                <?php if (has_post_thumbnail()) : ?>
                    <?php the_post_thumbnail('medium'); ?>
                <?php endif; ?>

                <p><?php the_excerpt(); ?></p>

                <?php
                $precio      = get_field('precio_por_noche');
                $capacidad   = get_field('capacidad');
                $tamano     = get_field('tamano');
                $cama        = get_field('tipo_de_cama');
                $descripcion = get_field('descripcion');
                $disponible  = get_field('disponible');
                ?>

                <?php if ($precio) : ?>
                <div class="acf-datos">
                    <p><span>💰 Precio por noche:</span> <?php echo $precio; ?>€</p>
                    <p><span>👥 Capacidad:</span> <?php echo $capacidad; ?> personas</p>
                    <p><span>📐 Tamaño:</span> <?php echo $tamano; ?> m²</p>
                    <p><span>🛏️ Tipo de cama:</span> <?php echo $cama; ?></p>
                    <p><span>📋 Descripción:</span> <?php echo $descripcion; ?></p>
                    <p><span>✅ Disponible:</span> <?php echo $disponible ? 'Sí' : 'No'; ?></p>
                </div>
                <?php endif; ?>

            </article>

        <?php endwhile; ?>

    <?php else : ?>
        <p>No hay entradas publicadas todavía.</p>
    <?php endif; ?>
</main>

<?php get_footer(); ?>