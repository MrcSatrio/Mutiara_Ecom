<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Team">
    <title>MutiaraCraftBekasi</title>

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
				<div class="border-top copyright">
					<div class="row pt-4">
						<div class="col-lg-6">
							<p class="mb-2 text-center text-lg-start">Copyright &copy;<script>document.write(new Date().getFullYear());</script>. All Rights Reserved.</a></p>
                        </div>
						<div class="col-lg-6 text-center text-lg-end">
                        <ul class="list-unstyled custom-social">
							<li><a href="https://www.facebook.com/mutiaraecoprint"><span class="fa fa-brands fa-facebook-f"></span></a></li>
							<li><a href="https://api.whatsapp.com/send/?phone=%2B6287874478742&text&type=phone_number&app_absent=0"><span class="fa fa-brands fa-whatsapp"></span></a></li>
							<li><a href="https://www.instagram.com/mutiaracraftbekasi?utm_source=ig_web_button_share_sheet&igsh=OGQ5ZDc2ODk2ZA=="><span class="fa fa-brands fa-instagram"></span></a></li>
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
                <a class="btn btn-primary" href="<?php echo base_url(); ?>/logout">Logout</a>
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