<?php get_header(); ?>

<!-- <?php
function greet($name, $color) {
    echo "<p>Hi my name is $name and my favorite color is $color</p>";
}
greet('kelsey', 'green');
greet('seth', 'pink');
bloginfo('name');
?> -->

<?php
while(have_posts()){
    the_post();?>
    <h2><?php the_title(); ?></h2>

<?php }
?>

<?php get_footer(); ?>