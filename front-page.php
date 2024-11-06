<?php get_header(); ?>

<section class="hero" style="background-image: url('<?php echo get_theme_file_uri('assets/images/library.jpg'); ?>');">
    <div class="hero-content">
        <h1>ULTIMA MILLA@root:~$ run test</h1>
        <p>Transformamos tu negocio con tecnología que puedes pagar.</p>
        <a href="#contacto" class="btn-contacto">Contáctanos</a>
    </div>
</section>

<section class="servicios">
    <h2>Nuestros Servicios</h2>
    <div class="servicios-grid">
        <div class="servicio-card">
            <div class="servicio-icon">🛡️</div>
            <h3>Ciberseguridad</h3>
            <p>Protegemos tu negocio contra amenazas cibernéticas con soluciones avanzadas de seguridad.</p>
            <a href="<?php echo get_permalink(get_page_by_path('servicios')); ?>" class="btn-detalles">Ver Detalles</a>
        </div>
        
        <div class="servicio-card">
            <div class="servicio-icon">☁️</div>
            <h3>Cloud Computing</h3>
            <p>Optimiza tus operaciones con nuestras soluciones de nube escalables y flexibles.</p>
            <a href="<?php echo get_permalink(get_page_by_path('servicios')); ?>" class="btn-detalles">Ver Detalles</a>
        </div>
        
        <div class="servicio-card">
            <div class="servicio-icon">📊</div>
            <h3>Análisis de Datos</h3>
            <p>Obtén insights valiosos de tus datos con nuestras soluciones de análisis avanzado.</p>
            <a href="<?php echo get_permalink(get_page_by_path('servicios')); ?>" class="btn-detalles">Ver Detalles</a>
        </div>
    </div>
</section>

<section class="casos-exito">
    <h2>Casos de Éxito</h2>
    <div class="casos-grid">
        <div class="caso-card">
            <h3 class="caso-titulo">FinanzasTech</h3>
            <p class="caso-descripcion">Implementamos un sistema de seguridad avanzado para el Banco XYZ, reduciendo los incidentes de ciberseguridad en un 95%.</p>
            <p class="caso-resultado">Reducción de incidentes de ciberseguridad en un 95% y aumento de la confianza de los clientes.</p>
            <a href="<?php echo get_permalink(get_page_by_path('casos-de-exito')); ?>" class="btn-detalles">Ver Detalles</a>
        </div>
        
        <div class="caso-card">
            <h3 class="caso-titulo">EcommerceTech</h3>
            <p class="caso-descripcion">Nuestra solución de cloud computing permitió a la tienda online ABC escalar sus operaciones durante el Black Friday.</p>
            <p class="caso-resultado">Manejo de un aumento del 500% en el tráfico sin tiempo de inactividad.</p>
            <a href="<?php echo get_permalink(get_page_by_path('casos-de-exito')); ?>" class="btn-detalles">Ver Detalles</a>
        </div>
        
        <div class="caso-card">
            <h3 class="caso-titulo">LogisticaTech</h3>
            <p class="caso-descripcion">El análisis de datos implementado para la empresa de logística DEF optimizó las rutas de entrega.</p>
            <p class="caso-resultado">Aumento de la eficiencia en un 30%.</p>
            <a href="<?php echo get_permalink(get_page_by_path('casos-de-exito')); ?>" class="btn-detalles">Ver Detalles</a>
        </div>
    </div>
</section>

<?php get_footer(); ?>