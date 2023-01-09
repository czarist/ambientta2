<?php get_header();
/*
 Template Name: Home
*/
$image = get_the_post_thumbnail_url(get_the_ID(), 'full');

?>
<div id="content">
	<section id="banners" class="banner-top fx fx-center position-relative" style="background-image: url('<?= $image ?>')">
		<div class="filter-1"></div>
		<div class="container text-white">
			<div class="row justify-content-center">
				<div class="col-xl-8 col-12">
					<?= the_content() ?>
				</div>
			</div>
		</div>
		<div id="theDown" class="d-flex align-items-center justify-content-center">
			<a href="#VIDEO">
				<img id="down" src="<?php echo get_template_directory_uri(); ?>/library/images/down.svg" alt="down">
			</a>
		</div>
	</section>
	<div id="inner-content" class="cf">
		<main id="main" class="" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<article class="pt-5" id="post-<?php the_ID(); ?>" role="article" itemscope itemtype="http://schema.org/BlogPosting">
						<section class="entry-content" itemprop="articleBody">

							<section id="VIDEO" class="section position-relative">
								<div class="container">
									<div class="row justify-content-start align-items-center mt-5">
										<div data-aos="fade-down" data-aos-offset="300" data-aos-easing="ease-in-sine" class="col-12 mt-5 mb-5">
											<?= get_field('texto_video', 5) ?>
										</div>
										<div data-aos="fade-down" data-aos-offset="300" data-aos-easing="ease-in-sine" class="col-12 mt-5 mb-5">
											<?= get_field('iframe_video', 5) ?>
										</div>
										<div data-aos="fade-down" data-aos-offset="300" data-aos-easing="ease-in-sine" class="col-12 mt-5 mb-5 text-center">
											<?php $link_canal = get_field('link_canal', 5); ?>
											<a class="dark-link" href="<?= $link_canal['url'] ?>"><?= $link_canal['title'] ?></a>
										</div>

									</div>
								</div>
							</section>

							<section id="PORTFOLIO" class="pt-5 pb-5" style="background-color: #F2F2F2;">
								<div class="container">
									<div class="row">
										<div class="col-12">
											<?= get_field('texto_portfolio', 5) ?>
										</div>
									</div>
								</div>
							</section>

							<section id="OQUEFAZEMOS" data-aos-anchor-placement="top-bottom">
								<div class="container pt-5 pb-5" data-aos-anchor-placement="top-bottom">
									<div class="row">
										<div class="col-12">
											<?= get_field('texto_o_que_fazemos', 5) ?>
										</div>
									</div>
								</div>
								<div class="position-relative fundo-metodologia" style="background-image: url('<?= get_field('imagem_o_que_fazemos', 5) ?>');" data-aos-anchor-placement="top-bottom">
									<div class="filter"></div>
									<div class="row">
										<div class="col-12 text-center text-white">
											<?= get_field('texto_o_que_fazemos_2', 5) ?>
										</div>
									</div>
								</div>
							</section>

							<section class="text-white" id="DEPOIMENTOS" style="background-color: #DA6A5E;">
								<div class="container">
									<div class="row">
										<div data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-offset="300" data-aos-easing="ease-in-sine" class="col-12 pb-5 pt-5">
											<?= get_field('texto_depoimentos', 5) ?>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-12">
										<div class="container position-relative">
											<div class="swiper2 position-relative mt-4">
												<div class="swiper-wrapper mb-5">

													<?php
													if (have_rows('depoimentos', 5)) :
														while (have_rows('depoimentos', 5)) : the_row();
															$nome_cliente = get_sub_field('nome_cliente', 5);
															$depoimento_cliente = get_sub_field('depoimento_cliente', 5);
															if (!isset($i)) {
																$i = 1000;
															}
													?>
															<div class="swiper-slide">
																<div data-aos="flip-left" data-aos-duration="<?= $i ?>" class="box-swiper p-5">
																	<div class="row">

																		<div class="col-12 text-center">
																			<p class="h4">"<?= $depoimento_cliente ?>"</p>
																		</div>
																		<div class="col-12 text-center">
																			<p><b>Cliente:</b> <?= $nome_cliente ?></p>
																		</div>

																	</div>
																</div>
															</div>
													<?php
															$i = $i + 500;
														endwhile;
													endif; ?>
												</div>
												<div id="s2a" class="swiper-pagination"></div>

											</div>

										</div>
									</div>
								</div>
							</section>

							<section id="METODOLOGIA" data-aos-anchor-placement="top-bottom">
								<div class="container pt-5 pb-5" data-aos-anchor-placement="top-bottom">
									<div class="row">
										<div class="col-12">
											<?= get_field('texto_metodologia', 5) ?>
										</div>
									</div>
								</div>
								<div class="position-relative fundo-metodologia" style="background-image: url('<?= get_field('imagem_metodologia', 5) ?>');" data-aos-anchor-placement="top-bottom">
									<div class="filter"></div>
									<div class="row">
										<div class="col-12 text-center text-white">
											<?= get_field('texto_metodologia_2', 5) ?>
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