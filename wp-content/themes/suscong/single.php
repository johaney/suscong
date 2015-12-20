<?php  get_header(); ?>

<?php if (have_posts()) : 

the_excerpt();

endif;
?>
<?php  get_footer(); ?>
