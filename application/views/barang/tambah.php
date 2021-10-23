<div class="container">
    <div class="row mt-3">
        <div class="col-md-6"> 
            <div class="card">
                <div class="card-header">Form tambah data barang</div>
                <div class="card-body">  
                <form action="" method="post"> 
                    <div class="form-group">
                        <label for="id_barang">Kode barang</label>
                        <input type="text" class="form-control mt-2" name="id_barang" id="id_barang">
                    </div>
                    <div class="form-group mt-3">
                        <label for="nama_barang">Nama barang  </label>
                        <input type="text" class="form-control mt-2" name="nama_barang" id="nama_barang">
                    </div>
                    <div class="form-group mt-3">
                        <label for="harga">Harga</label>
                        <input type="text" class="form-control mt-2" name="harga" id="harga">
                    </div>
                    <div class="form-group mt-3">
                        <label for="stock">Stock</label>
                        <input type="text" class="form-control mt-2" name="stock" id="stock">
                    </div> 
                    </div>
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <button type="submit"  name="tambah" class="btn btn-primary me-md-5 mb-4" > Tambah data</button></div>
                </form>          
            </div>
            <?php if ( validation_errors() ) : ?>
                    <br>
                    <div class="alert alert-danger" role="alert"> <?=validation_errors(); ?></br></div>
            <?php endif; ?>
        </div>
    </div>
</div>