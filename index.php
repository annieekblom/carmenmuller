<?php
// Silence is golden.
get_header();

?>
<?php

 echo "Hello";
<<<<<<< HEAD
 echo "here is a change";
=======
 echo "Here is a change";
>>>>>>> a58904fb54de97d327019795dd99213ff72d407a

if ( have_posts() ) :
	while ( have_posts() ) : the_post(); ?>

         <h2><?php the_title() ?></h2>
		<?php the_content() ?>
	<?php endwhile;
 
else :
	echo '<p>There are no posts!</p>';
 
endif;
 
	?>
?>

<?php get_footer(); ?>