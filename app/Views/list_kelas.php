<?= $this->extend('layouts/app')?>
<?= $this->section('content')?>

<br><a href="<?php echo base_url('kelas/create'); ?>">
<button type="button" class="btn btn-primary">Tambah Kelas</button>
</a><br><br>

<table border="2" class="table table-bordered">
    <thead>
        <tr>
            <th class="col justify-content-center text-center" >ID</th>
            <th class="col justify-content-center text-center" >Nama Kelas</th>
            <th class="col justify-content-center text-center" >Daya Tampung Kelas</th>
            <th class="col justify-content-center text-center" style="width: 220px;">Aksi</th>
        </tr>
    </thead>

    <tbody>
        <?php
        foreach ($kelas as $key){
        ?>
            <tr>
                <td class="col justify-content-center text-center"><?= $key['id'] ?></td>
                <td class="col justify-content-center text-center"><?= $key['nama_kelas'] ?></td>
                <td class="col justify-content-center text-center"><?= $key['daya_tampungg'] ?></td>
                <td class="col justify-content-center text-center">
                    <a href="<?= base_url('kelas/' . $key['id'] . '/edit') ?>" class="btn btn-warning">Edit</a>
                    <form action="<?= base_url('kelas/' . $key['id']) ?>" method="post" style="display:inline-block">
                        <input type="hidden" name="_method" value="DELETE">
                        <?= csrf_field() ?>
                        <button type="submit" class="btn btn-danger">Hapus</button>
                    </form>
                </td>
            </tr>
        <?php
        }
        ?>
    </tbody>
</table>

<?= $this->endSection()?>