<?= $this->extend('template-public/index'); ?>

<?php $this->section('container'); ?>
<script type="text/javascript">
function showPopup() {
  var popup = document.getElementById("popup");
  popup.style.display = "block";
}

function hidePopup() {
  var popup = document.getElementById("popup");
  popup.style.display = "none";
}
</script>

<style>
.popup {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(0, 0, 0, 0.7);
  z-index: 9999;
  display: flex;
  align-items: center;
  justify-content: center;
}

.popup-content {
  width: 70vw; /* Lebar relatif ke viewport width (vw) */
  max-width: 90%; /* Lebar maksimum */
  max-height: 80vh; /* Tinggi maksimum */
  background-color: #fff;
  overflow: auto; /* Menambahkan overflow jika kontennya besar */
  position: relative;
}

.popup-image {
  width: 100%; /* Menggunakan lebar 100% sesuai dengan ukuran parent */
  height: auto; /* Tinggi otomatis agar aspek rasio tetap terjaga */
  display: block;
  margin: 0; /* Hilangkan margin */
  padding: 0; /* Hilangkan padding */
}

.close-button {
  position: absolute;
  top: 10px;
  right: 10px;
  color: #fff;
  font-size: 20px;
  font-weight: bold;
  cursor: pointer;
  background: rgba(0, 0, 0, 0); /* Nilai alfa 0 membuat background transparan */
}

</style>





<div id="popup" class="popup">
  <div class="popup-content">
  <?php
if (!empty($iklan) && isset($iklan[0]['gambar_iklan'])) {
    echo '<img src="' . base_url('uploads/iklan/' . $iklan[0]['gambar_iklan']) . '" class="popup-image" style="max-width: 100%; max-height: 100%;">';
} else {
    echo 'Array $iklan kosong atau kunci "gambar_iklan" tidak ditemukan dalam array.';
}
?>
    <button onclick="hidePopup()" class="close-button">
      <i class="fa-x"></i>
    </button>
  </div>
</div>


	<body>

		<!-- Start Header/Navigation -->

		<!-- End Header/Navigation -->

		<!-- Start Hero Section -->
			<div class="hero">
				<div class="container">
					<div class="row justify-content-between">
						<div class="col-lg-5">
							<div class="intro-excerpt">
								<h1>About Us </h1>
								<p class="mb-4">Mutiara Craft is a handcraft home industry business, established on March 30th, 2018. All products and works created by Mutiara Craft are handmade and incorporate recycled materials.</p>
								<p><a href="<?= base_url('/shop') ?>" class="btn btn-secondary me-2">Shop Now</a></p>
							</div>
						</div>
						<div class="col-lg-7">
							<div class="hero-img-wrap">
							<img src="<?= base_url('assets/img/vintage.png'); ?>" class="img-fluid" rotate="right">
							</div>
						</div>
					</div>
				</div>
			</div>
		<!-- End Hero Section -->

		<!-- Start Product Section -->
		<div class="product-section">
			<div class="container">
				<div class="row">

					<!-- Start Column 1 -->
					<div class="col-md-12 col-lg-3 mb-5 mb-lg-0">
						<h2 class="mb-4 section-title">Our product</h2>
						<p class="mb-4">Home Product & Fashion</p>
						<p><a href="<?= base_url('/shop') ?>" class="btn">Explore</a></p>
					</div> 
					<?php
						$limitedProduk = array_slice($produk, 0, 3);
						foreach ($limitedProduk as $pk):
							$id_produk = base64_encode($pk['id_produk']);
						?>
					<div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0">
						<a class="product-item" href="cart.html">
							<img src="<?= base_url('uploads/' . $pk['gambar_produk']); ?>" class="img-fluid product-thumbnail">
							<h3 class="product-title"><?= $pk['nama_produk'] ?></h3>
							<strong class="product-price">Rp<?= number_format($pk['harga'], 0, ',', '.') ?></strong>

							<span class="icon-cross">
								<img src="<?= base_url('assets/img/cross.svg'); ?>" class="img-fluid">
							</span>
						</a>
					</div> 
					<?php endforeach; ?>
				</div>
			</div>
		</div>
		<!-- End Product Section -->


		<!-- Start Why Choose Us Section -->
		<div class="why-choose-section">
			<div class="container">
				<div class="row justify-content-between">
					<div class="col-lg-6">
						<h2 class="section-title">Why Choose Us</h2>
						<p>Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam vulputate velit imperdiet dolor tempor tristique.</p>

						<div class="row my-5">
							<div class="col-6 col-md-6">
								<div class="feature">
									<div class="icon">
										<img src="<?= base_url('assets/img/truck.svg'); ?>" alt="Image" class="imf-fluid">
									</div>
									<h3>Fast &amp; Free Shipping</h3>
									<p>Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam vulputate.</p>
								</div>
							</div>

							<div class="col-6 col-md-6">
								<div class="feature">
									<div class="icon">
										<img src="<?= base_url('assets/img/bag.svg'); ?>" alt="Image" class="imf-fluid">
									</div>
									<h3>Easy to Shop</h3>
									<p>Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam vulputate.</p>
								</div>
							</div>

							<div class="col-6 col-md-6">
								<div class="feature">
									<div class="icon">
										<img src="<?= base_url('assets/img/support.svg'); ?>" alt="Image" class="imf-fluid">
									</div>
									<h3>24/7 Support</h3>
									<p>Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam vulputate.</p>
								</div>
							</div>

							<div class="col-6 col-md-6">
								<div class="feature">
									<div class="icon">
										<img src="<?= base_url('assets/img/return.svg'); ?>" alt="Image" class="imf-fluid">
									</div>
									<h3>Hassle Free Returns</h3>
									<p>Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam vulputate.</p>
								</div>
							</div>

						</div>
					</div>

					<div class="col-lg-5">
						<div class="img-wrap">
							<img src="<?= base_url('assets/img/why-choose-us-img.jpg'); ?>" alt="Image" class="img-fluid">
						</div>
					</div>

				</div>
			</div>
		</div>
		<!-- End Why Choose Us Section -->

		<!-- Start We Help Section -->
		
		<!-- End We Help Section -->

		<!-- Start Popular Product -->

		<!-- End Popular Product -->

		<!-- Start Testimonial Slider -->
		<div class="testimonial-section">
			<div class="container">
				<div class="row">
					<div class="col-lg-7 mx-auto text-center">
						<h2 class="section-title">Testimonials</h2>
					</div>
				</div>

				<div class="row justify-content-center">
					<div class="col-lg-12">
						<div class="testimonial-slider-wrap text-center">

							<div id="testimonial-nav">
								<span class="prev" data-controls="prev"><span class="fa fa-chevron-left"></span></span>
								<span class="next" data-controls="next"><span class="fa fa-chevron-right"></span></span>
							</div>

							<div class="testimonial-slider">
								
								<div class="item">
									<div class="row justify-content-center">
										<div class="col-lg-8 mx-auto">

											<div class="testimonial-block text-center">
												<blockquote class="mb-5">
													<p>&ldquo;Donec facilisis quam ut purus rutrum lobortis. Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam vulputate velit imperdiet dolor tempor tristique. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Integer convallis volutpat dui quis scelerisque.&rdquo;</p>
												</blockquote>

												<div class="author-info">
													<div class="author-pic">
														<img src="<?= base_url('assets/img/person-1.png'); ?>" alt="Maria Jones" class="img-fluid">
													</div>
													<h3 class="font-weight-bold">Maria Jones</h3>
													<span class="position d-block mb-3">CEO, Co-Founder, XYZ Inc.</span>
												</div>
											</div>

										</div>
									</div>
								</div> 
								<!-- END item -->

								<div class="item">
									<div class="row justify-content-center">
										<div class="col-lg-8 mx-auto">

											<div class="testimonial-block text-center">
												<blockquote class="mb-5">
													<p>&ldquo;Donec facilisis quam ut purus rutrum lobortis. Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam vulputate velit imperdiet dolor tempor tristique. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Integer convallis volutpat dui quis scelerisque.&rdquo;</p>
												</blockquote>

												<div class="author-info">
													<div class="author-pic">
														<img src="<?= base_url('assets/img/person-1.png'); ?>" alt="Maria Jones" class="img-fluid">
													</div>
													<h3 class="font-weight-bold">Maria Jones</h3>
													<span class="position d-block mb-3">CEO, Co-Founder, XYZ Inc.</span>
												</div>
											</div>

										</div>
									</div>
								</div> 
								<!-- END item -->

								<div class="item">
									<div class="row justify-content-center">
										<div class="col-lg-8 mx-auto">

											<div class="testimonial-block text-center">
												<blockquote class="mb-5">
													<p>&ldquo;Donec facilisis quam ut purus rutrum lobortis. Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam vulputate velit imperdiet dolor tempor tristique. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Integer convallis volutpat dui quis scelerisque.&rdquo;</p>
												</blockquote>

												<div class="author-info">
													<div class="author-pic">
														<img src="<?= base_url('assets/img/person-1.png'); ?>" alt="Maria Jones" class="img-fluid">
													</div>
													<h3 class="font-weight-bold">Maria Jones</h3>
													<span class="position d-block mb-3">CEO, Co-Founder, XYZ Inc.</span>
												</div>
											</div>

										</div>
									</div>
								</div> 
								<!-- END item -->

							</div>

						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Testimonial Slider -->

		<!-- Start Blog Section -->
		
		<!-- End Blog Section -->	

		<!-- Start Footer Section -->

		<!-- End Footer Section -->	



	</body>
</html>


<?php $this->endSection(); ?>
