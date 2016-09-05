<? get_header(); ?>
	
<div id="primary" class="content-area">
	 
	<? if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<article class="entry">
			<a href="<? the_permalink(); ?>">
				<h1 class="entry--header">
					<? the_title(); ?>
				</h1>
			</a>
			<div class="entry--content">
				<? the_excerpt(); ?>
			</div>
			<div class="entry--meta">
				<span class="red"><? the_date(); ?></span>
				BY
				<? the_author(); ?>
			</div>
			
			
		</article>
	<? endwhile; endif; ?>
</div>

<? get_footer(); ?>
