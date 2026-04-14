<div class="container-fluid">
<h2 class="h3 mb-4 text-gray-800">Edit form</h2>

<div class="card shadow">
    <div class="card-body">
<form method="post" action="<?= site_url('index.php/form/update/'.$form->id); ?>">
    <div class="form-group">
        <tabel>Nomor anggota</tabel><br>
        <input type="text" name="nomor" class="form-control" value="<?=$form->no_anggota; ?>" required>
    </div>

    <div class="form-group">
        <tabel>Nama</tabel><br>
        <input type="text" name="nama" class="form-control" value="<?=$form->nama; ?>" required>
    </div>

    <div class="form-group">
        <tabel>Alamat</tabel><br>
        <textarea name="alamat" class="form-control"><?=$form->alamat; ?></textarea>
    </div>

    <div class="form-group">
        <tabel>Telepon</tabel><br>
        <input type="text" name="telepon" class="form-control" value="<?=$form->telepon; ?>">
    </div>

    <div class="form-group">
        <tabel>Email</tabel><br>
        <input type="email" name="email" class="form-control" value="<?=$form->email; ?>">
    </div>

    <div class="form-group">
        <tabel>Tanggal daftar</tabel><br>
        <input type="date" name="tanggal" class="form-control" value="<?=$form->tanggal_daftar; ?>">
    </div>

    <div class="form-group">
        <tabel>Status</tabel><br>
        <select name="status" class="form-control">
            <option value="Aktif" <?=$form->status=='Aktif'?'selected':''; ?>>Aktif</option>
            <option value="Nonaktif" <?=$form->status=='Nonaktif'?'selected':''; ?>>Nonaktif</option>
        </select>
    </div>

<button type="submit" class="btn btn-primary">update</button>
<a href="<?= site_url('index.php/form');?>" class="btn btn-secondary">kembali</a>

</form>
</div>
</div>
</div>