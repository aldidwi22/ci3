
<div class="container">
<link rel="stylesheet" href="<?= base_url();?>assets/css/style.css" class="rell">
  <?php if ($this->session->flashdata('flshtambah')): ?>
  <div class="row mt-3">
    <div class="col-md-6">
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        Data barang <strong>berhasil</strong> 
        <?=$this->session->flashdata('flshtambah');  ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      </div>
    </div>
  <?php endif; ?>
<body>
  <h3 class="mt-4">Daftar barang</h3>
    <table class="table1 mt-3" cellpadding="15">
  <thead>
    <tr>
      <th scope="col">Kode barang</th>
      <th scope="col">Nama barang</th>
      <th scope="col">Harga </th>
      <th scope="col">Stock</th>
      <th style="width: 4cm" scope="col">Opsi</th>
    </tr>
  </thead>
  <tbody>
    <tr>
        <?php foreach ($barang as $brg):?>
      <td><?= $brg['id_barang']; ?></td>
      <td><?= $brg['nama_barang']; ?></td>
      <td><?= $brg['harga']; ?></td>
      <td><?= $brg['stock']; ?></td>
      <td>
      <a href="<?= base_url(); ?>barang<?= $brg['id_barang'];?>"
        class="badge bg-primary";a>detail</a>
        <a href="<?= base_url(); ?>barang/hapus/<?= $brg['id_barang'];?>"
        class="badge bg-danger " onclick="return confirm ('Yakin.....?');">hapus</a>
        
           </td>
      </tr>
      <?php endforeach ?>
  </tbody>
</table>
<div class="row-mt-3">
    <div class="colmd -6">
    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <a href="<?= base_url();?>barang/tambah " class="btn btn-primary mt-3">tambah data barang</a>
        </div>
    </div>
  </div>
</body> 
</div>

