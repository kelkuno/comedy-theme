<?php get_header(); ?>

<?php
while(have_posts()) {
    the_post(); echo the_title ?>
    <!-- html -->
     

<?php } ?>

<?php get_footer(); ?>