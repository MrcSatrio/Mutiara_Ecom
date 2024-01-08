<?= $this->extend('template-public/index'); ?>
<?php $this->section('container'); ?>
<style>
    .carousel-item {
        height: 300px; /* Set your desired height here */
    }
    body {
  font-family: Arial, sans-serif;
  margin: 0;
  padding: 0;
}

.menu {
  display: flex;
  background-color: #3b5d50;
  justify-content: center;
  padding: 10px;
}

.menu-item {
  text-decoration: none;
  color: white;
  margin-right: 30px;
  display: flex;
  align-items: center;
}

.menu-item i {
  font-size: 24px; /* Sesuaikan ukuran ikon sesuai kebutuhan */
  margin-right: 5px;
}

.menu-item span {
  font-size: 16px;
}
</style>

<br>

<div class="container">
    <!-- Start Hero Section -->
    <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <?php for ($i = 0; $i < 3; $i++): ?>
                <?php if (isset($iklan[$i]['gambar_iklan'])): ?>
                    <div class="carousel-item <?= $i === 0 ? 'active' : '' ?>">
                        <img src="<?= base_url('uploads/iklan/' . $iklan[$i]['gambar_iklan']) ?>" class="d-block w-100" alt="...">
                    </div>
                <?php endif; ?>
            <?php endfor; ?>
        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>

        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>
<br>

		<!-- End Hero Section -->
        <div class="container">
        <div class="menu">
        <a href="<?= base_url('/shop')?>" class="menu-item">
    <i class="fas fa-border-all"></i>
    <span>All</span>
  </a>
  <a href="<?= base_url('search/tas')?>" class="menu-item">
    <i class="fas fa-shopping-bag"></i>
    <span>Bag</span>
  </a>
  <a href="<?= base_url('search/pakaian')?>" class="menu-item">
    <i class="fas fa-tshirt"></i>
    <span>Clothes</span>
  </a>
  <a href="<?= base_url('search/sepatu')?>" class="menu-item">
    <i class="fas fa-shoe-prints"></i>
    <span>Shoes</span>
  </a>
  <a href="<?= base_url('search/dompet')?>" class="menu-item">
    <i class="fas fa-bars"></i>
    <span>Other</span>
  </a>
  <!-- Tambahkan lebih banyak menu-item sesuai dengan kebutuhan Anda -->
</div>
        </div>
		

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