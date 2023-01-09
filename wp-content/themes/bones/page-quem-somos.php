<?php get_header();
/*
 Template Name: Quem Somos
*/
$image = get_the_post_thumbnail_url(get_the_ID(), 'full');

?>
<div id="content">
	<section id="banners" class="banner-top fx fx-center position-relative" style="background-image: url('<?= $image ?>')">
		<div class="filter-1"></div>
		<div class="container text-white">
			<div class="row justify-content-center">
				<div class="col-12">
					<?= the_content() ?>
				</div>
			</div>
		</div>
		<div id="theDown" class="d-flex align-items-center justify-content-center">
			<a href="#BLOCO1">
				<img id="down" src="<?php echo get_template_directory_uri(); ?>/library/images/down.svg" alt="down">
			</a>
		</div>
	</section>
	<div id="inner-content" class="cf">
		<main id="main" class="" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

					<article class="pt-5" id="post-<?php the_ID(); ?>" role="article" itemscope itemtype="http://schema.org/BlogPosting">

						<section class="entry-content" itemprop="articleBody">

							<section id="BLOCO1" class="section position-relative blocos-quem-somos">
								<div class="container">
									<div class="row justify-content-center align-items-center mt-5">
										<div class="col-12">
											<?= get_field('bloco_1', 227) ?>
										</div>
									</div>
								</div>
							</section>

							<section id="BLOCO2" class="section position-relative blocos-quem-somos" style="background-color: #F2F2F2;">
								<div class="container">
									<div class="row justify-content-center align-items-center mt-5">
										<div class="col-12">
											<?= get_field('bloco_2', 227) ?>
										</div>
									</div>
								</div>
							</section>

							<section id="BLOCO3" class="section position-relative blocos-quem-somos">
								<div class="container">
									<div class="row justify-content-center align-items-center mt-5">
										<div class="col-12">
											<?= get_field('bloco_3', 227) ?>
										</div>
									</div>
								</div>
							</section>

							<section id="BLOCO4" class="section position-relative blocos-quem-somos" style="background-image: url('<?= get_field('imagem_bloco_4', 227) ?>');">
								<div class="filter"></div>
								<div class="container">
									<div class="row justify-content-center align-items-center mt-5 text-white">
										<div class="col-12">
											<?= get_field('bloco_4', 227) ?>
										</div>
									</div>
								</div>
							</section>

						</section>

					</article>
			<?php endwhile;
			endif; ?>
		</main>
	</div>
</div>

<?php get_footer(); ?>