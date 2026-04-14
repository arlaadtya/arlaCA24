<div class="container-fluid">

<h2 class="h3 mb-4 text_gray-800">Data Anggota</h2>

<a href="<?= site_url('index.php/form/tambah'); ?>" class="btn btn-primary mb-3">Tambah</a>

<div class="card shadow mb-4">
    <div class="card-body">
        <div class="table-responsive">

<table class="table table-bordered" width="100%" cellspacing="0" id="dataTable">
    <thead>
    <tr>
        <th>No</th>
        <th>Nomor Anggota</th>
        <th>Nama</th>
        <th>Telepon</th>
        <th>Email</th>
        <th>Status</th>
        <th>Aksi</th>
    </tr>
</thead>

<tbody>
    <?php $no=1; foreach($form as $f): ?>
    <tr>
        <td><?= $no++; ?></td>
        <td><?= $f->no_anggota; ?></td>
        <td><?= $f->nama; ?></td>
        <td><?= $f->telepon; ?></td>
        <td><?= $f->email; ?></td>
        <td><?= $f->status; ?></td>
        <td>
            <a href="<?= site_url('index.php/form/edit/'.$a->id); ?>" class="btn btn-warning btn-sm">Edit</a>
            <a href="<?= site_url('index.php/form/hapus/'.$a->id); ?>"
               onclick="return confirm('Yakin?')" class="btn btn-danger btn-sm">Hapus</a>
        </td>
    </tr>
    <?php endforeach; ?>
</tbody>

</table>

        </div>
    </div>
</div>

</div>
