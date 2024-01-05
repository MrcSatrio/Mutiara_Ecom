<?= $this->extend('template-public/index'); ?>

<?php $this->section('container'); ?>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header bg-primary text-white">
                    <h2 class="text-center">FORM PEMESANAN</h2>
                </div>
                <div class="card-header">
                    <div class="mb-4">
                        <center>
                            <label for="saldo" class="form-label">TERIMAKASIH SUDAH BERBELANJA</label> <br>
                        </center>
                        <h1 class="text-center">
                            <p class="booking-code"><?php echo $transaksi['nama'] ?> </p>
                        </h1>
                    </div>
                    <div class="mb-4">
                        <center>
                            <label for="denda" class="form-label">Total Pembayaran:</label> <br>
                        </center>
                        <h1 class="text-center">
                            <p class="nominal">Rp.<?php echo number_format($transaksi['total_harga'], 2, ',', '.'); ?></p>
                        </h1>
                    </div>
                    <div class="mb-4 text-center">
                        <label for="rekening" class="form-label">No Rekening:</label>
                        <br>
                        <p style="font-size: 20px;"><?php echo $rekening['bank_rekening'] ?> </p>
                        <p style="font-size: 20px;"><?php echo $rekening['no_rekening'] ?> </p>
                        <p style="font-size: 20px;"><?php echo $rekening['nama_rekening'] ?></p>
                    </div>
                    <div class="card-header text-white bg-warning mb-4">
                        <p class="text-center">Harap Melakukan Transfer Sesuai Total Pembayaran</p>
                    </div>
                    <div class="text-center">
                        <?php if (empty($transaksi['bukti_pembayaran'])) : ?>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#uploadModal">Unggah Bukti Pembayaran</button>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal" id="uploadModal">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Header Modal -->
            <div class="modal-header">
                <h4 class="modal-title">Unggah Bukti Pembayaran</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Body Modal -->
            <div class="modal-body">
            <form action="<?= base_url('/transaction/bukti') ?>" enctype="multipart/form-data" method="post" id="uploadForm">
                    <div class="form-group">
                        <label for="buktiPembayaran">Pilih File Bukti Pembayaran:</label>
                        <input type="file" class="form-control" id="buktiPembayaran" accept=".pdf, .jpg, .png" name="bukti_pembayaran" required>
                        <input type="hidden" name="id_transaksi" value="<?php echo base64_encode($transaksi['id_transaksi']); ?>">
                    </div>
                    <button type="submit" class="btn btn-success" onclick="uploadBukti()">Unggah</button>
                </form>
            </div>

        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<?php $this->endSection(); ?>
