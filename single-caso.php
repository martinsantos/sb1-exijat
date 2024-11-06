<?php get_header(); ?>

<div class="caso-detalle">
    <a href="<?php echo get_permalink(get_page_by_path('casos-de-exito')); ?>" class="volver-link">← Volver a Casos de Éxito</a>
    
    <div class="caso-header">
        <div class="caso-icon">📊</div>
        <h1><?php the_title(); ?></h1>
        <div class="caso-meta"><?php echo get_post_meta(get_the_ID(), 'cliente', true); ?></div>
    </div>
    
    <div class="caso-content">
        <?php the_content(); ?>
        
        <div class="caso-stats">
            <div class="stat-item">
                <div class="stat-value"><?php echo get_post_meta(get_the_ID(), 'reduccion_incidentes', true); ?></div>
                <div class="stat-label">Reducción de incidentes</div>
            </div>
            <div class="stat-item">
                <div class="stat-value"><?php echo get_post_meta(get_the_ID(), 'satisfaccion_cliente', true); ?></div>
                <div class="stat-label">Aumento en la satisfacción del cliente</div>
            </div>
            <div class="stat-item">
                <div class="stat-value"><?php echo get_post_meta(get_the_ID(), 'tiempo_respuesta', true); ?></div>
                <div class="stat-label">Tiempo de respuesta a amenazas</div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>