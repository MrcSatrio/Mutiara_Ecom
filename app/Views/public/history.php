<?= $this->extend('template-public/index'); ?>

<?php $this->section('container'); ?>
<div class="container">
  <div class="row">
    <div class="col-xxl-8 col-12">
      <!-- Start of foreach loop to display transactions -->
      <?php foreach ($transaksi as $tr): ?>
        <!-- card -->
        <div class="card mb-3">
          <!-- card body-->
          <div class="card-body">
            <div class="mb-6">
              <div class="d-flex align-items-center justify-content-between">
                <h4 class="mb-0">Order #<?= base64_encode($tr['id_transaksi']) ?></h4>
                <span class="ms-2">Terimakasih Sudah berbelanja</span>
              </div>

              <!-- Display the address only once for this transaction -->
              <?php $addressDisplayed = false; ?>
              <?php foreach ($alamat as $addr): ?>
                <?php if ($addr['id_transaksi'] == $tr['id_transaksi'] && !$addressDisplayed): ?>
                  <span class="ms-2">Nomor Resi: <?= $addr['resi'] ?></span>
                  <br>
                  <span class="ms-2">Alamat Penerima: </span>
                  <div>
                    <?= $addr['alamat'] ?><br>
                    <?= $addr['kota'] ?><br>
                    <?= $addr['kode_pos'] ?><br>
                  </div>
                  <?php $addressDisplayed = true; ?>
                <?php endif; ?>
              <?php endforeach; ?>

            </div>

            <!-- Start of foreach loop to display items in the transaction -->
            <?php foreach ($tr['items'] as $item): ?>
              <div class="border-bottom mb-3 pb-3 d-lg-flex align-items-center justify-content-between">
                <div class="col-lg-8 col-12">
                  <div class="d-md-flex">
                    <div>
                      <!-- img -->
                      <img src="<?= base_url('uploads/' . $item['gambar_produk']); ?>" alt=""
                           class="img-4by3-xl rounded" style="width: 96px; height: 96px;">
                    </div>
                    <div class="ms-md-4 mt-2 mt-lg-0">
                      <!-- heading -->
                      <h5 class="mb-1">
                        <?= $item['nama_produk'] ?>
                      </h5>
                      <!-- text -->
                      <span>Notes: <?= $item['catatan'] ?></span>
                      <!-- text -->
                      <div class="mt-3">
                        <h4>Rp.<?= number_format($item['total'], 0, ',', '.') ?></h4>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            <?php endforeach; ?>
            <!-- End of foreach loop to display items -->

            <div class="text-end mt-4">
            <div class="text-left">
                        <?php if (empty($tr['bukti_pembayaran'])) : ?>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#uploadModal">Unggah Bukti Pembayaran</button>
                        <?php endif; ?>
                    </div>
              <h5 class="mb-0">Total Pembayaran: Rp.<?= number_format($tr['items'][0]['total_harga'], 0, ',', '.') ?></h5>
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
    <div class="row justify-content-center">
        <div class="col-md-6">
                <div class="card-header bg-primary text-white">
                    <h2 class="text-center">FORM PEMESANAN</h2>
                </div>
                <div class="card-header">
                    <div class="mb-4">
                        <center>
                            <label for="saldo" class="form-label">TERIMAKASIH SUDAH BERBELANJA</label> <br>
                        </center>
                        <h1 class="text-center">
                            <p class="booking-code"><?php echo base64_encode($tr['id_transaksi']); ?></p>
                        </h1>
                    </div>
                    <div class="mb-4">
                        <center>
                            <label for="denda" class="form-label">Total Pembayaran:</label> <br>
                        </center>
                        <h1 class="text-center">
                            <p class="nominal">Rp.<?= number_format($tr['items'][0]['total_harga'], 0, ',', '.') ?></p>
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
                </div>

        </div>
    </div>
                    <div class="form-group">
                        <label for="buktiPembayaran">Pilih File Bukti Pembayaran:</label>
                        <input type="file" class="form-control" id="buktiPembayaran" accept=".pdf, .jpg, .png" name="bukti_pembayaran" required>
                        <input type="hidden" name="id_transaksi" value="<?php echo base64_encode($tr['id_transaksi']); ?>">
                    </div>
                    <button type="submit" class="btn btn-success" onclick="uploadBukti()">Unggah</button>
                </form>
            </div>
        </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
      <?php endforeach; ?>
      <!-- End of card -->
      <!-- End of foreach loop to display transactions -->
    </div>
  </div>
</div>


<?= $this->endSection(); ?>
