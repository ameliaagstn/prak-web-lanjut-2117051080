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
        <form action="<?= base_url('user/store') ?>" method="post" enctype="multipart/form-data">
            <h3 style="text-align:center;">Masukkan Data</h3>
            
            <div class="mb-3 row d-flex justify-content-center">
                <label for="foto" class="col-sm-10 col-form-label text-white fs-4">Foto</label>
                
                <div class="col-sm-10">
                    <input name="foto" type="file" id="foto" class="form-control" >
                </div>
            </div>


            <div class="mb-3 row d-flex justify-content-center">
                <label for="nama" class="col-sm-10 col-form-label">Nama</label>
                
                <div class="col-sm-10">
                    <input name="nama" type="text" id="nama" 
                    class="form-control <?= (empty(validation_show_error('nama'))) ? '':'is-invalid' ?>"  
                    value="<?= old('nama') ?>" >
                    <div class="invalid-feedback">
                        <?= validation_show_error('nama') ?>
                    </div>
                </div>
            </div>

            <div class="mb-3 row d-flex justify-content-center">
                <label for="npm" class="col-sm-10 col-form-label">NPM</label>
                <div class="col-sm-10">
                    <input name="npm" type="text" id="npm"
                    class="form-control <?= (empty(validation_show_error('npm'))) ? '':'is-invalid' ?>"  
                     value="<?= old('nama') ?>" >
                    <div class="invalid-feedback">
                        <?= validation_show_error('nama') ?>
                    </div>
                </div>
            </div>
            
            <div class="mb-3 row d-flex justify-content-center">
                <label for="kelas" class="col-sm-10 col-form-label">Kelas</label>
                <div class="col-sm-10">
                   
                <!-- <input name="kelas" type="text" class="form-control" id="kelas" rows=5 required> -->
                    <select name="kelas" id="kelas"  aria-label="Default select example"
                    class="form-control <?= (empty(validation_show_error('kelas'))) ? '':'is-invalid' ?>">
                        <option selected hidden value="<?= old('kelas') ?>">
                            <?= ($nama_kelas=='')?'Pilih Kelas': $nama_kelas?>
                        </option>

                        <?php
                            foreach ($kelas as $item){
                        ?>  
                            <option value="<?= $item['id'] ?>">
                                <?= $item['nama_kelas'] ?>
                            </option>
                        <?php 
                            }
                        ?>
                    </select>
                    <div class="invalid-feedback">
                        <?= validation_show_error('kelas') ?>
                    </div>
                </div>
            </div>

            <div style='margin-top:50px'></div>
            <div class="text-center">
                <button type="submit" class="btn btn-primary w-25 p-2">Submit</button>
            </div>

        </form>
    </div>
<?= $this->endSection()?>