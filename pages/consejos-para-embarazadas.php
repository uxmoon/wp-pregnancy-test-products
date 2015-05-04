<?php
/*
Template Name: Consejos para embarazadas
*/
?>
<?php get_header(); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<div class="post" id="post-<?php the_ID(); ?>">

			<div class="header-photo consejos-para-embarazadas">
				<h1><?php the_title(); ?></h1>
			</div>

			<div class="entry">


<?php if ( is_page(22) ) { ?>

				<ul class="l-stacked accordion top">
					<li class="item"><a href="<?php echo esc_url( home_url() ); ?>/consejos-para-embarazadas/etapas-del-embarazo/#item-01">Etapas del embarazo</a></li>
					<li class="item"><a href="<?php echo esc_url( home_url() ); ?>/consejos-para-embarazadas/controles-medicos/#item-02">Controles médicos</a></li>
					<li class="item"><a href="<?php echo esc_url( home_url() ); ?>/consejos-para-embarazadas/peso-y-dietas/#item-03">Peso y dietas</a></li>
					<li class="item"><a href="<?php echo esc_url( home_url() ); ?>/consejos-para-embarazadas/constipacion-y-hemorroides/#item-04">Constipación y hemorroides</a></li>
					<li class="item"><a href="<?php echo esc_url( home_url() ); ?>/consejos-para-embarazadas/ejercicios-para-embarazadas/#item-05">Ejercicios para embarazadas</a></li>
				</ul>

				<ul class="l-inline clearfix modules">
					<li><?php get_template_part( 'modules/content', 'ejercicios-para-embarazadas' ); ?></li>
					<li><?php get_template_part( 'modules/content', 'nombres-de-bebes' ); ?></li>
				</ul>


<?php } elseif ( is_page(24) ) { ?>

				<ul class="l-stacked accordion top">
					<li class="item is-active" id="item-01"><span class="title"><?php the_title(); ?></span>
						<div class="content">
							<?php the_content(); ?>
						</div>
					</li>
					<li class="item"><a href="<?php echo esc_url( home_url() ); ?>/consejos-para-embarazadas/controles-medicos/#item-02">Controles médicos</a></li>
					<li class="item"><a href="<?php echo esc_url( home_url() ); ?>/consejos-para-embarazadas/peso-y-dietas/#item-03">Peso y dietas</a></li>
					<li class="item"><a href="<?php echo esc_url( home_url() ); ?>/consejos-para-embarazadas/constipacion-y-hemorroides/#item-04">Constipación y hemorroides</a></li>
					<li class="item"><a href="<?php echo esc_url( home_url() ); ?>/consejos-para-embarazadas/ejercicios-para-embarazadas/#item-05">Ejercicios para embarazadas</a></li>
				</ul>

				<ul class="l-inline clearfix modules">
					<li><?php get_template_part( 'modules/content', 'ejercicios-para-embarazadas' ); ?></li>
					<li><?php get_template_part( 'modules/content', 'nombres-de-bebes' ); ?></li>
				</ul>



<?php } elseif ( is_page(25) ) { ?>
				<ul class="l-stacked accordion top">
					<li class="item"><a href="<?php echo esc_url( home_url() ); ?>/consejos-para-embarazadas/etapas-del-embarazo/#item-01">Etapas del embarazo</a></li>
					<li class="item is-active" id="item-02"><span class="title"><?php the_title(); ?></span>
						<div class="content">
							<?php the_content(); ?>
						</div>
					</li>
					<li class="item"><a href="<?php echo esc_url( home_url() ); ?>/consejos-para-embarazadas/peso-y-dietas/#item-03">Peso y dietas</a></li>
					<li class="item"><a href="<?php echo esc_url( home_url() ); ?>/consejos-para-embarazadas/constipacion-y-hemorroides/#item-04">Constipación y hemorroides</a></li>
					<li class="item"><a href="<?php echo esc_url( home_url() ); ?>/consejos-para-embarazadas/ejercicios-para-embarazadas/#item-05">Ejercicios para embarazadas</a></li>
				</ul>

				<ul class="l-inline clearfix modules">
					<li><?php get_template_part( 'modules/content', 'ejercicios-para-embarazadas' ); ?></li>
					<li><?php get_template_part( 'modules/content', 'nombres-de-bebes' ); ?></li>
				</ul>


<?php } elseif ( is_page(27) ) { ?>
				<ul class="l-stacked accordion top">
					<li class="item"><a href="<?php echo esc_url( home_url() ); ?>/consejos-para-embarazadas/etapas-del-embarazo/#item-01">Etapas del embarazo</a></li>
					<li class="item"><a href="<?php echo esc_url( home_url() ); ?>/consejos-para-embarazadas/controles-medicos/#item-02">Controles médicos</a></li>
					<li class="item is-active" id="item-03"><span class="title"><?php the_title(); ?></span>
						<div class="content">
							<?php the_content(); ?>
						</div>
					</li>
					<li class="item"><a href="<?php echo esc_url( home_url() ); ?>/consejos-para-embarazadas/constipacion-y-hemorroides/#item-04">Constipación y hemorroides</a></li>
					<li class="item"><a href="<?php echo esc_url( home_url() ); ?>/consejos-para-embarazadas/ejercicios-para-embarazadas/#item-05">Ejercicios para embarazadas</a></li>
				</ul>

				<ul class="l-inline clearfix modules">
					<li><?php get_template_part( 'modules/content', 'calculadora-de-ovulacion' ); ?></li>
					<li><?php get_template_part( 'modules/content', 'evaplan-easy' ); ?></li>
				</ul>


<?php } elseif ( is_page(29) ) { ?>
				<ul class="l-stacked accordion top">
					<li class="item"><a href="<?php echo esc_url( home_url() ); ?>/consejos-para-embarazadas/etapas-del-embarazo/#item-01">Etapas del embarazo</a></li>
					<li class="item"><a href="<?php echo esc_url( home_url() ); ?>/consejos-para-embarazadas/controles-medicos/#item-02">Controles médicos</a></li>
					<li class="item"><a href="<?php echo esc_url( home_url() ); ?>/consejos-para-embarazadas/peso-y-dietas/#item-03">Peso y dietas</a></li>
					<li class="item is-active" id="item-04"><span class="title"><?php the_title(); ?></span>
						<div class="content">
							<?php the_content(); ?>
						</div>
					</li>
					<li class="item"><a href="<?php echo esc_url( home_url() ); ?>/consejos-para-embarazadas/ejercicios-para-embarazadas/#item-05">Ejercicios para embarazadas</a></li>
				</ul>

				<ul class="l-inline clearfix modules">
					<li><?php get_template_part( 'modules/content', 'ejercicios-para-embarazadas' ); ?></li>
					<li><?php get_template_part( 'modules/content', 'nombres-de-bebes' ); ?></li>
				</ul>


<?php } elseif ( is_page(30) ) { ?>
				<ul class="l-stacked accordion top">
					<li class="item"><a href="<?php echo esc_url( home_url() ); ?>/consejos-para-embarazadas/etapas-del-embarazo/#item-01">Etapas del embarazo</a></li>
					<li class="item"><a href="<?php echo esc_url( home_url() ); ?>/consejos-para-embarazadas/controles-medicos/#item-02">Controles médicos</a></li>
					<li class="item"><a href="<?php echo esc_url( home_url() ); ?>/consejos-para-embarazadas/peso-y-dietas/#item-03">Peso y dietas</a></li>
					<li class="item"><a href="<?php echo esc_url( home_url() ); ?>/consejos-para-embarazadas/constipacion-y-hemorroides/#item-04">Constipación y hemorroides</a></li>
					<li class="item is-active" id="item-05"><span class="title"><?php the_title(); ?></span>
						<div class="content">
							<?php the_content(); ?>
						</div>
					</li>
				</ul>

				<ul class="l-inline clearfix modules">
					<li><?php get_template_part( 'modules/content', 'etapas-del-embarazo' ); ?></li>
					<li><?php get_template_part( 'modules/content', 'controles-medicos' ); ?></li>
				</ul>
<?php } ?>
			</div>

		</div>

		<?php endwhile; endif; ?>

<?php get_footer(); ?>