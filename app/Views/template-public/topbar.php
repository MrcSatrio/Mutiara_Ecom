<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="author" content="Untree.co">
  <link rel="shortcut icon" href="favicon.png">

  <meta name="description" content="" />
  <meta name="keywords" content="bootstrap, bootstrap4" />


	</head>

<nav class="custom-navbar navbar navbar navbar-expand-md navbar-dark bg-dark" arial-label="Furni navigation bar">

<div class="container">
    <a class="navbar-brand" href="index.html">Mutiara Hand&Craft<span>.</span></a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsFurni" aria-controls="navbarsFurni" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsFurni">
        <ul class="custom-navbar-nav navbar-nav ms-auto mb-2 mb-md-0">
            <li class="nav-item active">
                <a class="nav-link" href="<?= base_url('/') ?>">Home</a>
            </li>
            <li><a class="nav-link" href="<?= base_url('/shop') ?>">Shop</a></li>
            <li><a class="nav-link" href="about.html">About us</a></li>
            <li><a class="nav-link" href="contact.html">Contact us</a></li>
        </ul>

        <ul class="custom-navbar-cta navbar-nav mb-2 mb-md-0 ms-5">
        <?php if (session()->has('id_akun')): ?>
        <li><a class="nav-link" href="<?= base_url('/cart') ?>"><img src="<?= base_url('assets/img/cart.svg'); ?>"></a></li>

        <li class="nav-item dropdown">
    <a class="nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <img src="<?= base_url('assets/img/user.svg'); ?>" alt="User Icon">
    </a>
    <ul class="dropdown-menu dropdown-menu-end text-small shadow">
        <li><a class="dropdown-item"><?= session()->get('nama'); ?></a></li>
        <li><a class="dropdown-item" id="profile">Ganti Password</a></li>
        <form id="formprofile" action="<?= base_url('/auth/profile'); ?>" method="post">
            <input type="hidden" name="id_akun" value="<?= base64_encode(session()->get('id_akun')); ?>">
        </form>
        <li><a class="dropdown-item" id="history">Riwayat Transaksi</a></li>
        <form id="postForm" action="<?= base_url('transaction/history'); ?>" method="post">
            <input type="hidden" name="id_akun" value="<?= base64_encode(session()->get('id_akun')); ?>">
        </form>
        <li><hr class="dropdown-divider"></li>
        <li><a class="dropdown-item" id="logoutButton">Sign out</a></li>
    </ul>
</li>
        <?php else: ?>
        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal2">Login</button>
        <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#exampleModal">Register</button>
        <?php endif; ?>
        </ul>
    </div>
</div>
    
</nav>
<!-- Modal -->
<!-- Modal untuk registrasi -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="registerModalLabel">Register</h5>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('auth/register') ?>" method="post">
                    <div class="form-group">
                        <label for="name">Full Name</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <div class="input-group">
                            <input type="password" class="form-control" id="password" name="password" required>
                            <div class="input-group-append">
                                <span class="input-group-text">
                                    <i class="fa fa-eye" id="togglePassword"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Register</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal untuk login -->
<div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModal2Label" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="loginModalLabel">Login</h5>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('auth/login') ?>" method="post">
                    <div class="form-group">
                        <label for="loginEmail">Email</label>
                        <input type="email" class="form-control" id="loginEmail" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="loginPassword">Password</label>
                        <div class="input-group">
                            <input type="password" class="form-control" id="loginPassword" name="password" required>
                            <div class="input-group-append">
                                <span class="input-group-text">
                                    <i class="fa fa-eye" id="toggleLoginPassword"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Login</button>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    // Event listener untuk tombol logout
    document.getElementById('logoutButton').addEventListener('click', function(event) {
        event.preventDefault(); // Mencegah aksi default link
        
        // Tampilkan SweetAlert konfirmasi
        Swal.fire({
            title: 'Logout',
            text: 'Anda yakin ingin logout?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#3085d6',
            confirmButtonText: 'Logout',
            cancelButtonText: 'Batal'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = "<?= base_url('auth/logout'); ?>";
            }
        });
    });
</script>

<script>
    document.getElementById('profile').addEventListener('click', function(event) {
        event.preventDefault();
        const postForm = document.getElementById('formprofile');
        postForm.submit();
    });
</script>

<script>
    document.getElementById('history').addEventListener('click', function(event) {
        event.preventDefault();
        const postForm = document.getElementById('postForm');
        postForm.submit();
    });
</script>


<script>
    const togglePassword = document.getElementById('togglePassword');
    const passwordInput = document.getElementById('password');

    togglePassword.addEventListener('click', function () {
        const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
        passwordInput.setAttribute('type', type);
    });
</script>
<script>
    const toggleLoginPassword = document.getElementById('toggleLoginPassword');
const loginPasswordInput = document.getElementById('loginPassword');
toggleLoginPassword.addEventListener('click', function () {
    const type = loginPasswordInput.getAttribute('type') === 'password' ? 'text' : 'password';
    loginPasswordInput.setAttribute('type', type);
});
</script>
<style>
    .cart-container {
    position: fixed;
    bottom: 20px;
    right: 20px;
    z-index: 1000;
  }

  .cart-icon {
    cursor: pointer;
    background-color: #ff0000;
    color: #fff;
    border-radius: 50%;
    padding: 10px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
  }

  .fa-shopping-cart {
    font-size: 24px;
  }

  .item-count {
    color: blue;
    font-size: 14px;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
  }
</style>