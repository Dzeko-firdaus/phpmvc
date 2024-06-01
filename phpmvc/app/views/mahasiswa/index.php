<div class="container mt-3">

    <div class="row">
        <div class="col-6">
            <?php Flasher::flash(); ?>
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-lg-6">
            <button type="button" class="btn btn-primary tombolTambahData" data-bs-toggle="modal" data-bs-target="#formModal">Tambah Data Mahasiswa</button>
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-lg-6">
            <form action="<?= BASEURL; ?>/mahasiswa/cari" method="post">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Cari nama mahasiswa" name="keyword" id="keyword" aria-describedby="button-addon2" autocomplete="off">
                    <button class="btn btn-outline-primary" type="submit" id="tombolCari" >Cari</button>
                </div>
            </form>
        </div>
    </div>

    <div class="row">
        <div class="col-6">

            <h3>Daftar Mahasiswa</h3>
                <ul class="list-group">
                    <?php foreach( $data['mhs'] as $mhs) : ?>
                        <li class="list-group-item ">

                            <!-- HAPUS -->
                            <?= $mhs['nama']; ?>
                            <a href="<?= BASEURL; ?>/mahasiswa/hapus/<?= $mhs['id'];?>"  class="badge text-bg-danger float-end ms-1" onclick="return confirm('Anda ingin menghapus?')">hapus</a>

                            <!-- EDIT -->
                            <a href="<?= BASEURL; ?>/mahasiswa/ubah/<?= $mhs['id'];?>" class="badge text-bg-warning float-end ms-2 tampilModalUbah" data-bs-toggle="modal" data-bs-target="#formModal" data-id="<?=$mhs['id']?>" >Edit</a>
                            
                            <!-- DETAIL -->
                            <a href="<?= BASEURL; ?>/mahasiswa/detail/<?= $mhs['id'];?>" class="badge text-bg-primary float-end ms-2">detail</a>
                        </li>
                    <?php endforeach; ?>                    
                </ul>

        </div>
    </div>
 
</div>

<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="=1" role="dialog" aria-labelledby="judulModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title fs-5" id="judulModal">Tambah Data Mahasiswa</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <form action="<?= BASEURL; ?>/mahasiswa/tambah" method="post">
                <input type="hidden" name="id" id="id">  
                <div class="mb-3">
                    <label for="nama" class="form-label">nama</label>
                    <input type="text" class="form-control" id="nama" name="nama" placeholder="nama">
                </div>

                <form action="<?= BASEURL; ?>/mahasiswa/tambah" method="post">
                <div class="mb-3">
                    <label for="nrp" class="form-label">nrp</label>
                    <input type="number" class="form-control" id="nrp" name="nrp" placeholder="nrp">
                </div>

                <form action="<?= BASEURL; ?>/mahasiswa/tambah" method="post">
                <div class="mb-3">
                    <label for="email" class="form-label">email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="email">
                </div> 

                <div class="mb-3">
                    <label for="jurusan">jurusan</label>
                    <select name="jurusan" id="jurusan" class="form-control">
                        <option value="Teknik Informatika">Teknik Informatika</option>
                        <option value="Teknik Mesin">Teknik Mesin</option>
                        <option value="Teknik Sipil">Teknik Sipil</option>
                        <option value="Teknik Listrik">Teknik Listrik</option>
                    </select>
                </div>
 
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Tambah Data</button>
                </form>
            </div>
        </div>
    </div>
</div>