<form action="<?= base_url('admin/bank/update/' . $rekening['id_rekening']) ?>" method="post"  enctype="multipart/form-data" class="needs-validation">
     <!-- Display error message if available -->
     <?php if (session()->getFlashdata('error')): ?>
        <div class="alert alert-danger">
            <?= session()->getFlashdata('error') ?>
        </div>
    <?php endif; ?>
    <h5 class="card-title"><strong>Informasi Rekening</strong></h5>


<div class="form-group row">
        <label for="bank_rekening" class="col-sm-2 col-form-label">Bank Rekening</label>
        <div class="col-sm-10">
            <div class="input-group mb-0">  
                <input type="text" class="form-control" name="bank_rekening" value="<?= $rekening['bank_rekening']; ?>" required> 
            </div>
        </div>
    </div>

    <div class="form-group row">
        <label for="nama_rekening" class="col-sm-2 col-form-label">Nama Rekening</label>
        <div class="col-sm-10">
            <div class="input-group mb-0">  
                <input type="text" class="form-control" name="nama_rekening" value="<?= $rekening['nama_rekening']; ?>" required> 
            </div>
        </div>
    </div>

    <div class="form-group row">
        <label for="no_rekening" class="col-sm-2 col-form-label">No Rekening</label>
        <div class="col-sm-10">
            <div class="input-group mb-0">  
                <input type="text" class="form-control" name="no_rekening" value="<?= $rekening['no_rekening']; ?>" required> 
            </div>
        </div>
    </div>

    <input type="hidden" value="<?= $rekening['id_rekening']; ?>" name="id_rekening">
    <button class="btn btn-primary" type="submit">Simpan Rekening</button>
</form>

