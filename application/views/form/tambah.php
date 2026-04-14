<div class="container-fluid">
    <h2 class="h3 mb-4 text-gray-800">Tambah Anggota</h2>

    <div class="card shadow">
        <div class="card-body">
            <form method="post" action="<?= site_url('form/simpan'); ?>">

                <div class="form-group">
                    <label>No</label>
                    <input type="number" name="no" class="form-control" required>
                </div>

                <div class="form-group">
                    <label>Nomor Anggota</label>
                    <input type="text" name="nomor_anggota" class="form-control" required>
                </div>

                <div class="form-group">
                    <label>Nama</label>
                    <input type="text" name="nama" class="form-control" required>
                </div>

                <div class="form-group">
                    <label>Telepon</label>
                    <input type="text" name="telepon" class="form-control" required>
                </div>

                <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="email" class="form-control" required>
                </div>

                <div class="form-group">
                    <label>Status</label>
                    <select name="status" class="form-control" required>
                        <option value="">-- Pilih Status --</option>
                        <option value="Aktif">Aktif</option>
                        <option value="Tidak Aktif">Tidak Aktif</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="<?= site_url('kategori'); ?>" class="btn btn-secondary">Kembali</a>

            </form>
        </div>
    </div>
</div>