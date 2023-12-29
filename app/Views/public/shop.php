<?= $this->extend('template-public/index'); ?>
<?php $this->section('container'); ?>


		<!-- Start Hero Section -->

		<!-- End Hero Section -->

		

		<div class="untree_co-section product-section before-footer-section">
		    <div class="container">
		      	<div class="row">
                  <?php
               foreach ($produk as $pk): 
                  $id_produk = base64_encode($pk['id_produk']);
                  ?>
		      		<!-- Start Column 1 -->
					<div class="col-12 col-md-4 col-lg-3 mb-5">
						<a class="product-item" href="<?= base_url('/detail/' . $id_produk) ?>">
							<img src="<?= base_url('uploads/' . $pk['gambar_produk']); ?>" class="img-fluid product-thumbnail">
							<h3 class="product-title"><?= $pk['nama_produk'] ?></h3>
							<strong class="product-price">Rp<?= number_format($pk['harga'], 0, ',', '.') ?></strong>

							<span class="icon-cross">
								<img src="<?= base_url('assets/img/cross.svg'); ?>" class="img-fluid">
							</span>
						</a>
					</div> 
                    <?php endforeach; ?>
					<!-- End Column 1 -->
						

		      	</div>
		    </div>
		</div>

	</body>

</html>
<?php $this->endSection(); ?>