<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4"></h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="<?php echo site_url('Barang') ?>">Barang</a></li>
            <li class="breadcrumb-item active"><?php echo $title ?></li>
        </ol>
        <div class="card mb-4">
            <div class="card-body">
                <form action="<?php echo base_url('Barang/save') ?>" method="post">
                    <div class="mb-3">
                        <label>Barkode <code>*</code></label>
                        <input class="form-control" name="barcode" type="text" placeholder="Barcode">
                    </div>
                    <div class="mb-3">
                        <label>Nama Barang <code>*</code></label>
                        <input class="form-control" name="name" type="text" placeholder="Nama Barang">
                    </div>
                    <div class="mb-3">
                        <label>Harga Beli <code>*</code></label>
                        <input class="form-control" name="harga_beli" type="text" placeholder="Harga Beli">
                    </div>
                    <div class="mb-3">
                        <label>Harga Jual <code>*</code></label>
                        <input class="form-control" name="harga_jual" type="text" placeholder="Harga Jual">
                    </div>
                    <div class="mb-3">
                        <label>Katagori <code>*</code></label>
                        <select name="Katagori" class="form-control" required>
                            <option value="">- Pilih -</option>
                            <?php foreach ($Katagori as $k): ?>
                                <option value="<?php echo $k['id'] ?>"><?php echo $k['name'] ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label>Satuan <code>*</code></label>
                        <select name="satuan" class="form-control" required>
                            <option value="">- Pilih -</option>
                            <?php foreach ($satuan as $k): ?>
                                <option value="<?php echo $k['id'] ?>"><?php echo $k['name'] ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label>Supplier <code>*</code></label>
                        <select name="Supplier" class="form-control" required>
                            <option value="">- Pilih -</option>
                            <?php foreach ($Supplier as $k): ?>
                                <option value="<?php echo $k['id'] ?>"><?php echo $k['name'] ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
            </div>
            <div class="mb-3">
                <label>Stok <code>*</code></label>
                <input class="form-control" name="stok_barang" type="text" placeholder="Stok">
            </div>
            <button class="btn btn-primary" type="submit"><i class="fas fa-plus"></i> Save</button>
            </form>
        </div>
    </div>
    <div style="height: 100 vh"></div>
</main>