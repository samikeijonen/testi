<html>
<head>
<?php wp_head(); ?>
</head>

<body>
<?php
/* Zekkaus onko dataa olemassa. */
if ( have_posts() ) :
	/* Aloitetaan Looppi */
	while ( have_posts() ) : the_post(); ?>

	<article>
		<?php
			// Otsikko.
			the_title( '<h1>', '</h1>' );

			// Sisältö.
			the_content();
		?>
	</article>

	<?php endwhile;

endif; // Tarkastus päättyy.
?>
</body>
<?php wp_footer(); ?>
</html>
