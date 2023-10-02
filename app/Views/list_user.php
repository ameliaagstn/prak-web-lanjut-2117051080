<?= $this->extend('layouts/app')?>
<?= $this->section('content')?>

<table border="2" class="table table-bordered">
    <thead>
        <tr class="table-primary">
            <th>ID</th>
            <th>Nama</th>
            <th>NPM</th>
            <th>Kelas</th>
            <th>Aksi</th>
        </tr>
    </thead>

    <tbody>
        <?php
        foreach ($users as $user){
        ?>
            <tr class="table-warning">
                <td><?= $user ['id'] ?></td>
                <td><?= $user ['nama'] ?></td>
                <td><?= $user ['npm'] ?></td>
                <td><?= $user ['nama_kelas'] ?></td>
                <td>
                    <button type="button" class="btn btn-secondary">Edit</button>
                    <button type="button" class="btn btn-danger">Delete</button>
                </td>
            </tr>
        <?php
        }
        ?>
    </tbody>
</table>

<?= $this->endSection()?>