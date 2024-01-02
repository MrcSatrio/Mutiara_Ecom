<form action="<?= base_url('admin/iklan/create') ?>" method="post" enctype="multipart/form-data" class="needs-validation">

    <h5 class="card-title"><strong>Informasi Iklan</strong></h5>

    <div class="form-group row">
    <label for="nama_iklan" class="col-sm-2 col-form-label">Jenis Iklan</label>
    <div class="col-sm-10">
        <select class="form-control" id="nama_iklan" name="nama_iklan" required>
            <option value="popup">Popup</option>
            <option value="banner">Banner</option>
        </select>
    </div>
</div>

    <div class="form-group row">
        <label for="gambar_iklan" class="col-sm-2 col-form-label">gambar_iklan</label>
        <div class="col-sm-10">
            <input type="file" class="form-control" id="gambar_iklan" name="gambar_iklan" required>
        </div>
    </div>

    <div class="form-group row">
        <label for="deskripsi_iklan" class="col-sm-2 col-form-label">deskripsi iklan Produk</label>
        <div class="col-sm-10">
            <div class="input-group mb-0">  
                <input type="text" class="form-control" name="deskripsi_iklan" required> 
            </div>
        </div>
    </div>
    
    <!-- Tombol Simpan di pojok kanan bawah -->
    <button class="btn btn-primary" type="submit" id="save">Simpan</button>
</form>
