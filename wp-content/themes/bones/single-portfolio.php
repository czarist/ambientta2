<?php get_header();
/*
 Template Name: Portfolio
*/
$image = get_the_post_thumbnail_url(get_the_ID(), 'full');
$terms = wp_get_object_terms($post->ID, 'categoria');

?>


<div id="content">
	<section id="banners" class="banner-top fx fx-center position-relative" style="background-image: url('<?= $image ?>')">
		<div class="filter-1"></div>
		<div class="container text-white">
			<div class="row justify-content-center">
				<div class="col-12 text-center text-white">
					<h1 class="">
						<?= the_title() ?>
					</h1>
					<h6>
						PUBLICADO EM: <?php foreach ($terms as $term) {
											echo $term->name . ', ';
										} ?>
					</h6>
				</div>
			</div>
		</div>
		<div id="theDown" class="d-flex align-items-center justify-content-center">
			<a href="#GALERIA">
				<img id="down" src="<?php echo get_template_directory_uri(); ?>/library/images/down.svg" alt="down">
			</a>
		</div>
	</section>
	<div id="inner-content" class="cf">
		<main id="main" class="" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

					<article class="pt-5" id="post-<?php the_ID(); ?>" role="article" itemscope itemtype="http://schema.org/BlogPosting">

						<section id="GALERIA" class="entry-content container" itemprop="articleBody">

							<div class="row mt-5">
								<div class="col-12 text-center ">
									<div class="row pb-5">
										<?php
										if (have_rows('galerias', $post->ID)) :
											while (have_rows('galerias', $post->ID)) : the_row();
												$sub_value = get_sub_field('imagem_portfolio', $post->ID);
										?>
												<div class="col-12 col-xl-3 p-1">
													<a data-fancybox="gallery" href="<?= $sub_value ?>">
														<div class="box-portfolio" style="background-image: url('<?= $sub_value ?>') ;"></div>
														<!-- <img class="rounded" src="<?= $sub_value ?>" /> -->
													</a>
												</div>
										<?php
											endwhile;
										endif;
										?>
									</div>
								</div>
							</div>

						</section>

					</article>
			<?php endwhile;
			endif; ?>
		</main>
	</div>
</div>

<?php get_footer(); ?>