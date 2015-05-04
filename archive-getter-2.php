<?php

    /*
        Template Name: Archives Getter 2
    */

    $year 	= htmlspecialchars(trim($_POST['evatest_y']));
    $month 	= htmlspecialchars(trim($_POST['evatest_m']));
    $cat 		= htmlspecialchars(trim($_POST['evatest_c']));


		if ( get_query_var('paged') ) {
		    $paged = get_query_var('paged');
						}
		elseif ( get_query_var('page') ) {
		    $paged = get_query_var('page');

		} else {
		    $paged = 1;
		}
		//query_posts( array('post_type' => 'consultas',  'posts_per_page' => 4, 'paged' => $paged));

    $querystring = "year=$year&monthnum=$month&cat=$cat&post_type=consultas&posts_per_page=3&paged=$paged";
    //$querystring = "cat=$cat&post_type=consultas&posts_per_page=3&paged=$paged";

    query_posts($querystring);

?>

<?php if ($cat == '-1') { ?>

	<p>Por favor, selecciona una categoria.</p>

<?php } else { ?>

	<table id="archives-table">

	    <?php
	        if (have_posts()) : while (have_posts()) : the_post();
	    ?>
        <tr>
        	<td class="consulta">

						<div class="date-box">
							<span class="post-date">
								<?php echo get_the_date('M'); ?>
								<span class='dia'><?php echo get_the_date('j');?></span>
							</span>
						</div>

						<div class="category">
	        		<?php //categoria
	        			the_title();
	        		?>
        		</div>

        		<div class="user">

        			<p><strong><?php echo get_post_meta($post->ID, 'nombre', true); ?></strong> pregunto:</p>

							<?php // pregunta
								the_content();
							?>
        		</div>

        		<div class="doctor">

        			<p><strong>Evatest</strong> responde:</p>

	        		<?php // respuesta
	        			the_excerpt();
	        		?>

        		</div>

        	</td>
        </tr>
	    <?php
	        endwhile; else:

	        	echo "<tr><td>No hay consultas</td></tr>";

	        endif;
	    ?>
	</table>

	<div class="navigation">
		<div class="next-posts"><?php next_posts_link('&laquo; Older Entries') ?></div>
		<div class="prev-posts"><?php previous_posts_link('Newer Entries &raquo;') ?></div>
	</div>

<?php } ?>