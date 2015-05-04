<?php
/*
Template Name: Padres
*/
?>
<?php get_header(); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<div class="post" id="post-<?php the_ID(); ?>">

			<div class="header-photo decidir-ser-padres">
				<h1><?php the_title(); ?></h1>
			</div>

			<div class="entry">

				<div class="intro">
					<p>Cuando estés intentando quedar embarazada, vas a querer que esto suceda cuanto antes. Aunque no ocurra tan pronto como te gustaría, no tenés que preocuparte. De hecho, la mayoría de las parejas sanas concebirán dentro del primer año después de comenzar a intentarlo.</p>
					<p>Existen unos pocos días en el mes en los que es posible concebir, por lo tanto quedar embarazada puede depender tan solo del momento oportuno. Evaplan puede ayudarte a identificar los días más fértiles de tu ciclo, esos días donde mantener relaciones sexuales puede dar como resultado un embarazo.</p>
					<p>Para mayor información ingresa en el siguiente enlace: <br />
					<a href="<?php echo esc_url( home_url() ); ?>/linea-evatest/evaplan/" title="Evatest">Evaplan: test de ovulación para conocer tu período de mayor fertilidad.</a></p>
				</div>
<?php if ( is_page(32) ) { ?>
				<ul class="l-stacked accordion">
					<li class="item"><a href="<?php echo esc_url( home_url() ); ?>/decidir-ser-padres/fertilidad/#item-01">Fertilidad</a></li>
					<li class="item"><a href="<?php echo esc_url( home_url() ); ?>/decidir-ser-padres/preparar-el-cuerpo/#item-02">Preparar el cuerpo</a></li>
					<li class="item"><a href="<?php echo esc_url( home_url() ); ?>/decidir-ser-padres/maximizar-las-posibilidades/#item-03">Maximizar las posibilidades</a></li>
				</ul>
				<ul class="l-inline clearfix modules">
					<li><?php get_template_part( 'modules/content', 'calculadora-de-ovulacion' ); ?></li>
					<li><?php get_template_part( 'modules/content', 'evaplan-easy' ); ?></li>
				</ul>
<?php } elseif ( is_page(34) ) { ?>
				<ul class="l-stacked accordion">
					<li class="item is-active" id="item-01"><span class="title"><?php the_title(); ?></span>
						<div class="content">
							<?php the_content(); ?>
						</div>
					</li>
					<li class="item"><a href="<?php echo esc_url( home_url() ); ?>/decidir-ser-padres/preparar-el-cuerpo/#item-02">Preparar el cuerpo</a></li>
					<li class="item"><a href="<?php echo esc_url( home_url() ); ?>/decidir-ser-padres/maximizar-las-posibilidades/#item-03">Maximizar las posibilidades</a></li>
				</ul>
				<ul class="l-inline clearfix modules">
					<li><?php get_template_part( 'modules/content', 'calculadora-de-ovulacion' ); ?></li>
					<li><?php get_template_part( 'modules/content', 'evaplan-easy' ); ?></li>
				</ul>
<?php } elseif ( is_page(36) ) { ?>
				<ul class="l-stacked accordion">
					<li class="item"><a href="<?php echo esc_url( home_url() ); ?>/decidir-ser-padres/fertilidad/#item-01">Fertilidad</a></li>
					<li class="item is-active" id="item-02"><span class="title"><?php the_title(); ?></span>
						<div class="content">
							<?php the_content(); ?>
						</div>
					</li>
					<li class="item" id="item-03"><a href="<?php echo esc_url( home_url() ); ?>/decidir-ser-padres/maximizar-las-posibilidades/#item-03">Maximizar las posibilidades</a></li>
				</ul>
				<ul class="l-inline clearfix modules">
					<li><?php get_template_part( 'modules/content', 'calculadora-de-ovulacion' ); ?></li>
					<li><?php get_template_part( 'modules/content', 'evaplan-easy' ); ?></li>
				</ul>
<?php } elseif ( is_page(38) ) { ?>
				<ul class="l-stacked accordion">
					<li class="item"><a href="<?php echo esc_url( home_url() ); ?>/decidir-ser-padres/fertilidad/#item-01">Fertilidad</a></li>
					<li class="item"><a href="<?php echo esc_url( home_url() ); ?>/decidir-ser-padres/preparar-el-cuerpo/#item-02">Preparar el cuerpo</a></li>
					<li class="item is-active" id="item-03"><span class="title"><?php the_title(); ?></span>
						<div class="content">
							<?php the_content(); ?>
						</div>
					</li>
				</ul>
				<ul class="l-inline clearfix modules">
					<li><?php get_template_part( 'modules/content', 'calculadora-de-ovulacion' ); ?></li>
					<li><?php get_template_part( 'modules/content', 'evaplan-easy' ); ?></li>
				</ul>
<?php } ?>
			</div>

		</div>

		<?php endwhile; endif; ?>

<?php get_footer(); ?>