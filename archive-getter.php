<?php

    /*
        Template Name: Archives Getter
    */

    $year = htmlspecialchars(trim($_POST['digwp_y']));
    $month = htmlspecialchars(trim($_POST['digwp_m']));
    $cat = htmlspecialchars(trim($_POST['digwp_c']));

    $querystring = "year=$year&monthnum=$month&cat=$cat&posts_per_page=-1";

    query_posts($querystring);

?>

<?php if (($year == '') && ($month == '') && ($cat == '-1')) { ?>

	<table id="archives-table"><tr><td style='text-align: center; font-size: 15px; padding: 5px;'>Selecciona una de las categor&iacute;as de arriba.</td></tr></table>

<?php } else { ?>

	<table id="archives-table">
			<?php query_posts( array( 'post_type' => 'consultas', 'showposts' => 5 ) ); ?>
	    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	            <tr>
	            	<td>
				<div class="date-box">
					<span class="post-date">
						<?php echo get_the_date('M'); ?>
						<span class='dia'><?php echo get_the_date('j');?></span>
					</span>
				</div>
	            	</td>
	            </tr>
	            <tr>
	            	<td>
				<p class="user"><strong><?php echo get_post_meta($post->ID, 'nombre', true); ?> pregunto:</strong></p>
				<?php the_content(); ?></td>
	            </tr>
	            <tr>
	            	<td><?php the_excerpt(); ?></td>
	            </tr>
	    <?php
	        endwhile; else:

	        	echo "<tr><td style='text-align: center; font-size: 15px; padding: 5px;'>No hay consultas activas, selecciona otra categor&iacute;a</td></tr>";

	        endif;
	    ?>
	</table>

<?php } ?>