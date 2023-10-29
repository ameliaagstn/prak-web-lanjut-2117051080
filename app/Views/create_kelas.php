<?= $this->extend('layouts/app')?>
<?= $this->section('content')?>
    <div class="row alignment-items-center" 
        style="position:absolute; 
        background-color:white;
        width:60%;
        left:50%;
        top:45%;
        transform:translate(-50%, -45%);
        border-radius:15px;
        padding:25px;
        padding-bottom: 35px;
        color: white;
        background-color: #fdfeff47;
        -webkit-backdrop-filter: blur(15px);
        backdrop-filter: blur(25px);"
    >      
        <?php $nama_kelas = session()->getFlashdata('nama_kelas');  ?>
        <form action="<?= base_url('kelas/store') ?>" method="post" enctype="multipart/form-data">
            <h3 style="text-align:center;">Masukkan Kelas</h3>
            
            <div class="mb-3 row d-flex justify-content-center">
                <label for="nama_kelas" class="form-label">Nama Kelas</label>
                    <input name="nama_kelas" type="text"  class="form-control <?= (empty(validation_show_error('nama_kelas'))) ? '' : 'is-invalid' ?>"  value="<?= old('nama_kelas') ?>" id="nama_kelas" placeholder="Ex : A">
                    <div class='invalid-feedback'>
                        <?= validation_show_error('nama_kelas'); ?>
                    </div>
            </div>

            <div class="mb-3 row d-flex justify-content-center">
                <label for="daya_tampungg" class="form-label">Daya Tampung Kelas</label>
                    <input name="daya_tampungg" type="text"  class="form-control <?= (empty(validation_show_error('daya_tampungg'))) ? '' : 'is-invalid' ?>"  value="<?= old('daya_tampungg') ?>" id="daya_tampungg" placeholder="Ex : 20">
                    <div class='invalid-feedback'>
                        <?= validation_show_error('daya_tampungg'); ?>
                    </div>
            </div>

            <div style='margin-top:50px'></div>
            <div class="text-center">
                <button type="submit" class="btn btn-primary w-25 p-2">Tambah Kelas</button>
            </div>

        </form>
    </div>
<?= $this->endSection()?>
