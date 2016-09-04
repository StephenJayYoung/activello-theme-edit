<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package activello
 */
?>

<?php the_post_thumbnail( 'activello-featured', array( 'class' => 'single-featured' )); ?>

<?php
	$my_id = 2;
	$post_id_206 = get_post($my_id);
	$content = $post_id_206->post_content;
	$content = apply_filters('the_content',$content);
	$content = str_replace(']]>', ']]', $content);
	echo $content;
?>

<?php
	$my_id = 79;
	$post_id_206 = get_post($my_id);
	$content = $post_id_206->post_content;
	$content = apply_filters('the_content',$content);
	$content = str_replace(']]>', ']]', $content);
	echo $content;
?>

<?php
	$my_id = 89;
	$post_id_206 = get_post($my_id);
	$content = $post_id_206->post_content;
	$content = apply_filters('the_content',$content);
	$content = str_replace(']]>', ']]', $content);
	echo $content;
?>

