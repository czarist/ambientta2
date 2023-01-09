<section id="CONTATO" class="justify-content-center d-flex align-items-center pb-5" style="background-image: linear-gradient(#DA6A5E, #DA6A5E);">
	<div class="container">
		<div class="row">
			<div data-aos="fade-up" data-aos-anchor-placement="top-bottom" class="col-12 p-xl-0 p-5">
				<div class="row">
					<div class="col-12 pt-5 pl-5 pr-5 justify-content-center flex-column d-flex text-white align-items-center ">
						<?= get_field('texto_saiba_mais', 5) ?>
					</div>
					<div class="col-12 pt-5">
						<form action="" id="email-mensagem" method="POST" class="row pr-5">
							<div class="col-12 mt-5">
								<div class="row">
									<div class="col-12">
										<input required type="text" name="nome" id="nome" placeholder="Nome">
									</div>
									<div class="col-xl-6 col-12">
										<input required type="tel" name="telefone" id="telefone" placeholder="Telefone">
									</div>
									<div class="col-xl-6 col-12">
										<input required type="email" name="email" id="email" placeholder="E-mail">
									</div>
									<div class="col-12">
										<textarea name="mensagem" id="mensagem" cols="30" rows="30" placeholder="Mensagem"></textarea>
									</div>
								</div>

							</div>
							<div class="col-12 col-xl-6">
								<div class="row text-white">
									<div class="col-12">
										<p>Prefiro receber informações por</p>
									</div>
									<div class="col-xl-3 col-12">
										<input required type="checkbox" id="permito" name="permito">
										<label for="permito"> E-mail</label>
									</div>
									<div class="col-xl-3 col-12">
										<input required type="checkbox" id="permito" name="permito">
										<label for="permito"> WhatsApp</label>
									</div>
									<div class="col-xl-3 col-12">
										<input required type="checkbox" id="permito" name="permito">
										<label for="permito"> Telefone.</label>
									</div>
								</div>
							</div>
							<div class="col-12 col-xl-6 d-flex justify-content-end align-items-center">
								<input class="dark-link" type="submit" value="ENVIAR">
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
</section>

<section id="mapa-site">
	<?= get_field('iframe_mapa', 5) ?>
	<div class="container">
		<div class="row pt-4 pb-4">
			<div class="col-12 mb-4">
				<h3>
					<i class="fa fa-map-marker"></i>
					MAPA DO SITE
				</h3>
			</div>
			<div class="col-xl-2 col-6">
				<a href="<?= home_url() ?>/quem-somos" class="text-dark">
					<h6>QUEM SOMOS</h6>
				</a>
			</div>
			<div class="col-xl-2 col-6">
				<a href="<?= $post->ID == 5 ? '#PORTFOLIO' : home_url() . '/#PORTFOLIO' ?>" class="text-dark">
					<h6>PORTFÓLIO</h6>
				</a>
			</div>
			<div class="col-xl-2 col-6">
				<a href="<?= $post->ID == 5 ? '#OQUEFAZEMOS' : home_url() . '/#OQUEFAZEMOS' ?>" class="text-dark">
					<h6>O QUE FAZEMOS</h6>
				</a>
			</div>
			<div class="col-xl-2 col-6">
				<a href="<?= $post->ID == 5 ? '#DEPOIMENTOS' : home_url() . '/#DEPOIMENTOS' ?>" class="text-dark">
					<h6>DEPOIMENTOS</h6>
				</a>
			</div>
			<div class="col-xl-2 col-6">
				<a href="<?= $post->ID == 5 ? '#METODOLOGIA' : home_url() . '/#METODOLOGIA' ?>" class="text-dark">
					<h6>METODOLOGIA</h6>
				</a>
			</div>
			<div class="col-xl-2 col-6">
				<a href="#CONTATO" class="text-dark">
					<h6>FALE COM A GENTE</h6>
				</a>
			</div>
		</div>
	</div>
</section>

<footer id="" class="footer pt-5 pb-5" role="contentinfo" itemscope itemtype="http://schema.org/WPFooter">

	<div id="inner-footer" class="container mt-4 mb-4">
		<div class="row">
			<div class="col-12 col-xl-4 d-flex align-items-center justify-content-center flex-column">
				<p class="d-flex">
					<span class="text-white text-center">
						© <?php echo date("Y"); ?>. Ambientta - Todos os direitos reservados.
						<a href="https://c5w.com.br/" target="_blank">
							<img src="<?php echo get_template_directory_uri(); ?>/library/images/c5w.png" style="position: relative;top: -2px;" height="15" width="15">
						</a>
					</span>
				</p>
			</div>
			<div class="col-12 col-xl-4 d-flex align-items-center justify-content-center text-left">
				<p class="text-white text-center"><?= get_field('infos_footer', 5); ?></p>
			</div>

			<div class="col-12 col-xl-4 d-flex align-items-center justify-content-xl-end justify-content-center">
				<div class="icons d-flex align-items-center justify-content-center">
					<div class="row">
						<div class="col-12">
							<p class="text-white text-center m-0">WhatsApp Ambientta</p>
						</div>
						<div class="col-12">
							<p class="text-white text-center">
								<a class="text-white text-center" target="_blank" href="https://api.whatsapp.com/send?phone=<?= get_field('whatsapp', 5); ?>&text=Gostaria%20de%20marcar%20uma%20consulta!">
									<i class="bi bi-whatsapp text-dark mr-2"></i><?= get_field('whatsapp_mascara', 5); ?>
								</a>
							</p>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>
</footer>
</div>
</body>

</html>
<?php wp_footer(); ?>