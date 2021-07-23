<div class="container">
    <div class="row">
        <div class="col-md-6">
            <h2>Tambah Data User</h2>
            <form method="POST" action="<?=base_url()?>/backend/simpan" >
            <?= csrf_field()?>
            <div class="mb-3">
                <label for="nama" class="form-label">Nama Lengkap</label>
                <input type="text" name="nama" class="form-control" id="nama" autofocus>       
            </div>
            <div class="mb-3">
                <label for="lahir" class="form-label">Tanggal Lahir</label>
                <input type="date" name="lahir" class="form-control" id="lahir" >       
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email Aktif</label>
                <input type="email" name="email" class="form-control" id="email" >       
            </div>
            <div class="mb-3">
                <label for="telpon" class="form-label">Nomer Telpon</label>
                <input type="number" name="telpon" class="form-control" id="telpon" >       
            </div>
            <div class="mb-3">
                <label for="foto" class="form-label">Foto Profil</label>
                <input type="text" name="foto" class="form-control" id="foto" >       
            </div>
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" name="username" class="form-control" id="username" >       
            </div>
            <div class="mb-3">
                <label for="pasword" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" id="pasword" >       
            </div>
            <select class="form-select" name="level" aria-label="Default select example" > 
                <option selected>Pilih Level</option>
                <option value="admin">admin</option>
                <option value="user">user</option>
                <option value="founder">founder</option>
            </select>
            
            <button type="submit" class="btn btn-primary mt-4">Tambah Data</button>
            </form>
        </div>
    </div>
</div>