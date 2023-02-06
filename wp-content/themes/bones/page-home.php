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
										<div class="col-12 mt-5 d-flex justify-content-around flex-column flex-xl-row">
											<h6 class="select_category activated" onclick="change_category('PROJETOS', this)">PROJETOS</h6>

											<?php
											$categorias = get_terms(array(
												'taxonomy' => 'categoria',
												'hide_empty' => false,
											));

											foreach ($categorias as $categoria) {
											?>
												<h6 class="select_category" onclick="change_category('<?= $categoria->name; ?>', this)"><?= $categoria->name; ?></h6>
											<?php
											}
											?>
										</div>
									</div>
									<div id="blocos_portfolio" class="row mt-5">
										<?php
										$args = [
											'post_type' => 'portfolio',
											'order'     => 'ASC',
											'posts_per_page' => -1
										];

										$query = new WP_Query($args);
										while ($query->have_posts()) :

											$query->the_post();
											$image = wp_get_attachment_url(get_post_thumbnail_id($post->ID));
											$terms = wp_get_object_terms($post->ID, 'categoria');


										?>
											<div class="col-12 col-xl-3 p-1 categoryClass PROJETOS">
												<div class="box-portfolio" onclick="window.open('<?= get_the_permalink() ?>')" style="background-image: url('<?= $image ?>');">
													<div class="intern-content">
														<p><?= the_title() ?></p>
													</div>
												</div>
											</div>

											<?php
										endwhile;
										while ($query->have_posts()) :

											$query->the_post();
											if (have_rows('galerias', $post->ID)) :
												while (have_rows('galerias', $post->ID)) : the_row();
													$imagem_portfolio = get_sub_field('imagem_portfolio', $post->ID);
													$tag_imagem = get_sub_field('tag_imagem', $post->ID);

											?>

													<div class="col-12 col-xl-3 p-1 categoryClass <?= $tag_imagem ?>">
														<div class="box-portfolio" onclick="window.open('<?= get_the_permalink() ?>')" style="background-image: url('<?= $imagem_portfolio ?>');">
															<div class="intern-content">
																<p><?= the_title() ?></p>
															</div>
														</div>
													</div>

										<?php
												endwhile;
											endif;
										endwhile;
										?>
										<div id="fakeLoadMore" class="col-12 d-flex mt-2 mb-2 justify-content-center align-items-center">

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
<script type="text/javascript">
	const select_category = document.getElementsByClassName('select_category');
	const categoryClass = document.getElementsByClassName('categoryClass');
	const fakeLoadMore = document.getElementById('fakeLoadMore');
	const loadmore = document.getElementById('loadmore');

	if (categoryClass.length > 12) {
		fakeLoadMore.innerHTML = `<div id="loadmore" onclick="loadmorePress()"><span>Ver Mais</span></div>`;
	}

	for (let a = 12; categoryClass.length > a; a++) {
		categoryClass[a].classList.add('d-none');
	}

	function loadmorePress() {
		for (let a = 0; categoryClass.length > a; a++) {
			categoryClass[a].classList.remove('d-none');
		}
		fakeLoadMore.innerHTML = "";
	}

	function change_category(category, element) {

		for (let a = 0; categoryClass.length > a; a++) {
			if (!categoryClass[a].classList.contains(category)) {
				categoryClass[a].classList.add('d-none');
				categoryClass[a].classList.remove('d-block');
			} else {
				categoryClass[a].classList.remove('d-none');
				categoryClass[a].classList.add('d-block');
			}
		}

		for (let i = 0; select_category.length > i; i++) {
			select_category[i].classList.remove('activated');
		}

		var target = document.getElementById("blocos_portfolio");
		var targetOffset = target.offsetTop;

		window.scroll({
			top: targetOffset - 100,
			left: 0,
			behavior: 'smooth'
		});

		fakeLoadMore.innerHTML = "";
		element.classList.add('activated');
	}
</script>

<?php get_footer(); ?>