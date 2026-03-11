
<?php get_header(); ?>

<main>
    <div class="habitaciones-container">
        <h2>Nuestras Habitaciones</h2>
        <div class="habitaciones-grid">
            <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
                    <div class="habitacion-card">
                        <?php if (has_post_thumbnail()) : ?>
                            <div class="habitacion-img">
                                <?php the_post_thumbnail('medium'); ?>
                            </div>
                        <?php endif; ?>
                        <div class="habitacion-info">
                            <h3><?php the_title(); ?></h3>
                            <?php
                            $precio    = get_field('precio_por_noche');
                            $capacidad = get_field('capacidad');
                            $cama      = get_field('tipo_de_cama');
                            $disponible = get_field('disponible');
                            ?>
                            <?php if ($precio) : ?>
                                <p class="habitacion-precio">Desde <?php echo $precio; ?>€ / noche</p>
                            <?php endif; ?>
                            <?php if ($capacidad) : ?>
                                <p>👥 <?php echo $capacidad; ?> personas</p>
                            <?php endif; ?>
                            <?php if ($cama) : ?>
                                <p>🛏️ <?php echo $cama; ?></p>
                            <?php endif; ?>
                            <?php if ($disponible !== null) : ?>
                                <p class="<?php echo $disponible ? 'disponible' : 'no-disponible'; ?>">
                                    <?php echo $disponible ? '✅ Disponible' : '❌ No disponible'; ?>
                                </p>
                            <?php endif; ?>
                            <a href="<?php the_permalink(); ?>" class="habitacion-btn">Ver habitación</a>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
</main>

<?php get_footer(); ?>