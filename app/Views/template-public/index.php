<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Team">
    <title>ECOMMERCE KU</title>

    <!-- Bootstrap CSS -->



    
    

    <!-- Font Awesome Icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">

    <!-- DataTables CSS -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.dataTables.min.css">


    <!-- Custom CSS -->
    <link href="<?= base_url() ?>/assets/css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom Font -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- SweetAlert2 JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    
    <!-- Bootstrap JS -->


    <!-- Clipboard.js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/2.0.8/clipboard.min.js"></script>

    <!-- DataTables JS -->
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
    
    <script src="<?= base_url('assets/js/bootstrap.bundle.min.js'); ?>"></script>
		<script src="<?= base_url('assets/js/tiny-slider.js'); ?>"></script>
		<script src="<?= base_url('assets/js/custom.js'); ?>"></script>

    <link href="<?= base_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet">
		<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
		<link href="<?= base_url('assets/css/tiny-slider.css'); ?>" rel="stylesheet">
		<link href="<?= base_url('assets/css/style.css'); ?>" rel="stylesheet">

</head>

<body id="page-top">
<body id="page-top">

<!-- Page Wrapper -->
<div id="wrapper">

    <!-- Sidebar -->
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

        
        <?= $this->include('template-public/topbar'); ?>

            <!-- Begin Page Content -->
                <?= $this->renderSection('container'); ?>
            <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->

        <!-- Footer -->
        <footer class="footer-section">
			<div class="container relative">

				<div class="row">
					<div class="col-lg-8">
						<div class="subscription-form">
							<h3 class="d-flex align-items-center"><span class="me-1"><img src="<?= base_url('assets/img/envelope-outline.svg'); ?>" alt="Image" class="img-fluid"></span><span>Subscribe to Newsletter</span></h3>

							<form action="#" class="row g-3">
								<div class="col-auto">
									<input type="text" class="form-control" placeholder="Enter your name">
								</div>
								<div class="col-auto">
									<input type="email" class="form-control" placeholder="Enter your email">
								</div>
								<div class="col-auto">
									<button class="btn btn-primary">
										<span class="fa fa-paper-plane"></span>
									</button>
								</div>
							</form>

						</div>
					</div>
				</div>

				<div class="row g-5 mb-5">
					<div class="col-lg-4">
						<div class="mb-4 footer-logo-wrap"><a href="#" class="footer-logo">Mutiara Hand&Craft<span>.</span></a></div>
						<p class="mb-4">Donec facilisis quam ut purus rutrum lobortis. Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam vulputate velit imperdiet dolor tempor tristique. Pellentesque habitant</p>

						<ul class="list-unstyled custom-social">
							<li><a href="#"><span class="fa fa-brands fa-facebook-f"></span></a></li>
							<li><a href="#"><span class="fa fa-brands fa-twitter"></span></a></li>
							<li><a href="#"><span class="fa fa-brands fa-instagram"></span></a></li>
							<li><a href="#"><span class="fa fa-brands fa-linkedin"></span></a></li>
						</ul>
					</div>

					<div class="col-lg-8">
						<div class="row links-wrap">
							<div class="col-6 col-sm-6 col-md-3">
								<ul class="list-unstyled">
									<li><a href="#">About us</a></li>
									<li><a href="#">Services</a></li>
									<li><a href="#">Blog</a></li>
									<li><a href="#">Contact us</a></li>
								</ul>
							</div>

							<div class="col-6 col-sm-6 col-md-3">
								<ul class="list-unstyled">
									<li><a href="#">Support</a></li>
									<li><a href="#">Knowledge base</a></li>
									<li><a href="#">Live chat</a></li>
								</ul>
							</div>

							<div class="col-6 col-sm-6 col-md-3">
								<ul class="list-unstyled">
									<li><a href="#">Jobs</a></li>
									<li><a href="#">Our team</a></li>
									<li><a href="#">Leadership</a></li>
									<li><a href="#">Privacy Policy</a></li>
								</ul>
							</div>


						</div>
					</div>

				</div>

				<div class="border-top copyright">
					<div class="row pt-4">
						<div class="col-lg-6">
							<p class="mb-2 text-center text-lg-start">Copyright &copy;<script>document.write(new Date().getFullYear());</script>. All Rights Reserved.</a>
            </p>
						</div>

						<div class="col-lg-6 text-center text-lg-end">
							<ul class="list-unstyled d-inline-flex ms-auto">
								<li class="me-4"><a href="#">Terms &amp; Conditions</a></li>
								<li><a href="#">Privacy Policy</a></li>
							</ul>
						</div>

					</div>
				</div>

			</div>
		</footer>
        <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" <a href="<?php echo base_url(); ?>/logout">Logout</a>
            </div>
        </div>
    </div>
</div>
</body>

<style>
    /* Custom styles */
    body {
        background-color: #f8f9fa;
    }

    .topbar {
        background-color: #fff;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    .logo {
        font-weight: bold;
        color: #343a40;
    }

    .logo svg {
        fill: #17a2b8;
        width: 40px;
        height: 32px;
        margin-right: 8px;
    }

    .nav-link {
        color: #343a40;
    }

    .nav-link:hover {
        color: #17a2b8;
    }

    .card {
        border: none;
        transition: transform 0.2s;
    }

    .card:hover {
        transform: translateY(-5px);
    }

    .smaller-text {
        font-size: 12px;
    }

    .title {
        margin-bottom: 5px;
    }

    .upload-form {
        background-color: #fff;
        padding: 20px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }

    .upload-form label {
        display: block;
        margin-bottom: 10px;
        font-weight: bold;
    }

    .upload-form input[type="file"] {
        margin-bottom: 20px;
    }

    .upload-form input[type="submit"] {
        padding: 10px 15px;
        background-color: #333;
        color: #fff;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }

    select {
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
        width: 100%;
    }

    option {
        background-color: #f5f5f5;
        color: #333;
}
  /* Mengatur lebar dan tinggi carousel */
  #myCarousel {
    width: auto; /* Ubah sesuai dengan lebar yang Anda inginkan */
    height: 100%; /* Ubah sesuai dengan tinggi yang Anda inginkan */
}

/* Mengatur ukuran gambar dalam carousel */
.carousel-inner img {
    width: 100%; /* Gambar akan mengisi seluruh lebar carousel */
    height: 400px; /* Gambar akan mengisi seluruh tinggi carousel */
    object-fit: cover; /* Untuk memastikan gambar selalu mengisi carousel */
}

</style>


  </head>
  <?php
$flashsuccess = session()->getFlashdata('success');
$flasherror = session()->getFlashdata('error');
?>

<?php if (!empty($flashsuccess) || !empty($flasherror)): ?>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        <?php if (!empty($flashsuccess)): ?>
        Swal.fire({
            icon: 'success',
            title: 'Success',
            html: '<?= esc($flashsuccess) ?>',
            confirmButtonText: 'OK'
        });
        <?php endif; ?>

        <?php if (!empty($flasherror)): ?>
        Swal.fire({
            icon: 'error',
            title: 'Error',
            html: '<?php if (is_array($flasherror)): ?><ul><?php foreach ($flasherror as $error): ?><li><?= esc($error) ?></li><?php endforeach; ?></ul><?php else: ?><?= esc($flasherror) ?><?php endif; ?>',
            confirmButtonText: 'OK'
        });
        <?php endif; ?>
    });
</script>
<?php endif; ?>
</html>