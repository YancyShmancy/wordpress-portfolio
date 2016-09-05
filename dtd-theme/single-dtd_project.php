<? get_header(); ?>
<? if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	
	<div class="project single">
		<h1><? the_title(); ?></h1>
		<h2><? the_field("dtd_project_subtitle") ?></h2>
		<div class="project--content">
			<? the_content(); ?>
		</div>
		<div class="project--meta">
			<h3>Credits</h3>
			<? the_field("dtd_project_credits"); ?>
		</div>
		<div class="project--link">
			<a href="<? the_field("dtd_project_link") ?>" target="_blank">Visit Site</a>
		</div>
		<?=wp_get_attachment_image(get_field("dtd_project_image")["id"], "full", false, array("class" => "project_image")); ?>
	</div>
	
<? endwhile; endif; ?>
<? get_footer(); ?>
