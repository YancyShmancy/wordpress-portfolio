<? get_header('entry'); ?>

<?=wp_get_attachment_image(get_field("dtd_giant_header_image")["id"], "full", false, array("class" => "giant_header")); ?>
<? if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	
	<div class="entry single">
		<div class="entry--content">
			<? the_content(); ?>
		</div>
		<div class="entry--meta">
			BY
			<? the_author(); ?>
		</div>
		<div class="entry--tags">
			<? the_tags( 'Tagged with ', ', '); ?>
		</div>
		<? if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif; ?>
	</div>
	
<? endwhile; endif; ?>

<? get_footer(); ?>