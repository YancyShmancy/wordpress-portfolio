<? get_header(); ?>

<section id="portfolio" class="active">
	<?
	// WP_Query arguments
	$args = array (
		'post_type'              => array( 'dtd_project' ),
		'post_status'            => array( 'Publish' ),
		'nopaging'               => true,
		'orderby'                => 'date',
	);

	// The Query
	$portfolioQuery = new WP_Query( $args );

	// The Loop
	if ( $portfolioQuery->have_posts() ) {
		while ( $portfolioQuery->have_posts() ) {
			$portfolioQuery->the_post();
			?>
			<a class="project" href="<? the_permalink() ?>">
		<?=wp_get_attachment_image(get_field("dtd_project_image")["id"], "small", false, array("class" => "project_image")); ?>
				<div class="project--text">
					<h1><? the_title(); ?></h1>
				</div>
			</a>
			<?
		}
	} else {
		// no posts found
	}

	// Restore original Post Data
	wp_reset_postdata(); ?>
</section>

<section id="skills">
	
	<div class="content">
		<h1 class="section-title">Look What I Can Do</h1>
		<p class="summary">I have many magical awesome developer skills. I've listed a few of them below.</p>
		<?
		// WP_Query arguments
		$args = array (
			'post_type'              => array( 'dtd_skills' ),
			'post_status'            => array( 'Publish' ),
			'nopaging'               => true,
			'order'					 => 'ASC'
		);

		// The Query
		$skillsQuery = new WP_Query( $args );

		// The Loop
		if ( $skillsQuery->have_posts() ) {
			while ( $skillsQuery->have_posts() ) {
				$skillsQuery->the_post();
				?>
				<div class="skill-single">
					<div class="img-container">
						<?=wp_get_attachment_image(get_field("dtd_skill_icon")["id"], "full", false, array()); ?>
					</div>
					
					<h2><? the_title(); ?></h2>
				</div>
				<?
			}
		} else {
			// no posts found
		}

		// Restore original Post Data
		wp_reset_postdata();
		?>
	</div>
</section>


<section id="aboutMe">
	<div class="content">
		<? // WP_Query arguments
		$args = array (
			'pagename'               => 'about-me',
			'nopaging'               => true,
		);

		// The Query
		$aboutQuery = new WP_Query( $args );

		// The Loop
		if ( $aboutQuery->have_posts() ) {
			while ( $aboutQuery->have_posts() ) {
				$aboutQuery->the_post();
				// do something
				
				?>
				<h1 class="section-title"><? the_title(); ?></h1>
				<? the_content();
			}
		} else {
			// no posts found
		}
		

		// Restore original Post Data
		wp_reset_postdata(); ?>
		
		<h2>I know some cool people</h2>
		<p class="testimonial-summary">Check out what they had to say about me.</p>
		<ul class="testimonials">
		<?
		// WP_Query arguments
		$args = array (
			'post_type'              => array( 'dtd_testimonial' ),
			'post_status'            => array( 'Publish' ),
			'nopaging'               => true,
			'orderby'                => 'rand',
		);

		// The Query
		$query = new WP_Query( $args );

		// The Loop
		if ( $query->have_posts() ) {
			while ( $query->have_posts() ) {
				$query->the_post();
				// do something
				?>

				<li>
					<p><? the_field("dtd_testimonial_quote"); ?>"</p>
					<h4><? the_field("dtd_testimonial_author"); ?></h4>
					<h5><? the_field("dtd_testimonial_job"); ?></h5>
				</li>

				<?
			}
		} else {
			// no posts found
		}

		// Restore original Post Data
		wp_reset_postdata();
		?>
		</ul>
	</div>
	
</section>

<section id="contact">
	<div class="content">
		<? // WP_Query arguments
		$args = array (
			'pagename'               => 'contact-me',
			'nopaging'               => true,
		);

		// The Query
		$contactQuery = new WP_Query( $args );

		// The Loop
		if ( $contactQuery->have_posts() ) {
			while ( $contactQuery->have_posts() ) {
				$contactQuery->the_post();
				// do something
				
				?>
				<h1 class="section-title"><? the_title(); ?></h1>
				<? the_content();
			}
		} else {
			// no posts found
		}

		// Restore original Post Data
		wp_reset_postdata(); ?>
	</div>
</section>

<? get_footer(); ?>