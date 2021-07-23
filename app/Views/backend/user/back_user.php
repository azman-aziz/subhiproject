<a href="/backend/tambah" class="btn btn-primary">Tambah Data </a>


<?php
if(session()->getFlashdata('pesan')): ?>

  <?php if(session()->getFlashdata('pesan') == 'Berhasil'): ?>
  <div class="alert alert-success" role="alert">
    Data <?= session()->getFlashdata('pesan'); ?> di tambah
  </div>
    <?php endif; ?>

  <?php if(session()->getFlashdata('pesan') == 'Gagal'): ?>
  <div class="alert alert-danger" role="alert">
    Data <?= session()->getFlashdata('pesan'); ?> di tambah
  </div>
    <?php endif; ?>

<?php endif; ?>



<div class="container">
  <div class="row">
    


<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nama</th>
     
      <th scope="col">Email</th>
     
      <th scope="col">Gambar</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
    <?php $i= 1; ?>
    <?php foreach ($user as $data ) : ?>
   
    <tr>
      <th scope="row"><?=  $i++ ?></th>
      <td><?= esc($data['nama_lengkap']) ?></td>
      <td><?= esc($data['email']) ?></td>
      
      <td><?= esc($data['gambar']) ?></td>
     <td>
    <a href="<?=base_url()?>/backend/detail/<?=  $data['users_id'] ?> " class="btn btn-success">detail</a> 
     <button type="button" class="btn btn-primary">ubah</button>
     <button type="button" class="btn btn-danger">hapus</button>

     
</td>
    </tr>
<?php endforeach; ?>
  </tbody>
</table>
</div>
</div>