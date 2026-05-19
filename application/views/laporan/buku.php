<div class="container-fluid">
    <h3>Laporan Data Buku</h3>
    <form method="get">
        <input type="kategori" name="kategori" value="<?= $kategori; ?>">
        <button type="submit" class="btn btn-primary btn-sm">Filter</button>
        <a href="<?= site_url('laporan/buku'); ?>" class="btn btn_secondary btn-sm">Reset</a>
    </form>

    <br>
<a href="<?= site_url('buku/cetak_buku?kategori='.$kategori); ?>"
    target="_blank" class="btn btn-success btn-sm">Cetak PDF</a>

    <table class="table table-bordered mt-3">
        <thead>
            <tr>
                <th>No</th>
                <th>Kode</th>
                <th>Judul</th>
                <th>Kategori</th>
                <th>Stok</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            $no = 1; 
            foreach($data as $b): 
            ?>
            <tr>
                <td><?= $no++; ?></td>
                <td><?= $b->kode_buku; ?></td>
                <td><?= $b->judul_buku; ?></td>
                <td><?= $b->kategori; ?></td>
                <td><?= $b->stok; ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>