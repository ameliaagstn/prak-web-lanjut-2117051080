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
    <h1 class="text-center" style="color: #717274;"> Edit Kelas</h1>
            <?php $nama_kelas = session()->getFlashdata('nama_kelas'); ?>
            <form action="<?= base_url('/kelas/store' . $kelas['id']) ?>" method="post" enctype="multipart/form-data">
            <input type="hidden" name="_method" value="PUT">
            <?= csrf_field() ?>
             
                <div class="mb-3">
                    <label for="nama_kelas" class="form-label">Nama Kelas</label>
                    <input name="nama_kelas" type="text"  class="form-control <?= (empty(validation_show_error('nama_kelas'))) ? '' : 'is-invalid' ?>"  value="<?= $kelas['nama_kelas'] ?>" id="nama_kelas" placeholder="Ex : A">
                    <div class='invalid-feedback'>
                        <?= validation_show_error('nama_kelas'); ?>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="daya_tampungg" class="form-label">Daya Tampung Kelas</label>
                    <input name="daya_tampunggg" type="text"  class="form-control <?= (empty(validation_show_error('daya_tampungg'))) ? '' : 'is-invalid' ?>"  value="<?= $kelas['daya_tampungg'] ?>" id="daya_tampungg" placeholder="Ex : 20">
                    <div class='invalid-feedback'>
                        <?= validation_show_error('daya_tampungg'); ?>
                    </div>
                </div>
                
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <button type="submit" class="btn btn-primary">Update Kelas</button>
                </div>
            </form>
    </div>
<?= $this->endSection()?>
