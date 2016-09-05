<? get_header(); ?>
<? if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<a class="project" href="<? the_permalink() ?>">
		<?=wp_get_attachment_image(get_field("dtd_project_image")["id"], "full", false, array("class" => "project_image")); ?>
		<div class="project--text">
			<h1><? the_title(); ?></h1>
		</div>
	</a>
<? endwhile; endif; ?>
<? get_footer(); ?>