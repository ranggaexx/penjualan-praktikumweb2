<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4"></h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="<?php echo site_url('Barang') ?>">Barang</a></li>
            <li class="breadcrumb-item active"><?php echo $title ?></li>
        </ol>
        <div class="card mb-4">
            <div class="card-body">
                <form action="<?php echo base_url('Barang/edit') ?>" method="post">
                    <div class="mb-3">
                        <label>Barkode <code>*</code></label>
                        <input class="form-control" type="hidden" name="id" value="<?= $Barang->id; ?>" required>
                        <input class="form-control" name="barcode" value="<?= $Barang->barcode; ?>" type="text" placeholder="Barcode">
                    </div>
                    <div class="mb-3">
                        <label>Nama Barang <code>*</code></label>
                        <input class="form-control" name="name" value="<?= $Barang->name; ?>" type="text" placeholder="Nama Barang">
                    </div>
                    <div class="mb-3">
                        <label>Harga Beli <code>*</code></label>
                        <input class="form-control" name="harga_beli" value="<?= $Barang->harga_beli; ?>" type="text" placeholder="Harga Beli">
                    </div>
                    <div class="mb-3">
                        <label>Harga Jual <code>*</code></label>
                        <input class="form-control" name="harga_jual" value="<?= $Barang->harga_jual; ?>" type="text" placeholder="Harga Jual">
                    </div>
                    <div class="mb-3">
                        <label>Stok <code>*</code></label>
                        <input class="form-control" name="stok_barang" value="<?= $Barang->stok_barang; ?>" type="text" placeholder="Stok" disabled>
                        <input type="hidden" name="stok_barang" value="<?= $Barang->stok_barang; ?>">
                    </div>
                    <div class="mb-3">
                        <label>Kategori <code>*</code></label>
                        <select name="Katagori" class="form-control" required>
                            <?php foreach ($Katagori as $Katagori): ?>
                                <?php if ($Barang->id_katagori == $Katagori['id']): ?>
                                    <option value="<?php echo $Katagori['id'] ?>" selected><?php echo $Katagori['name'] ?></option>
                                <?php else: ?>
                                    <option value="<?php echo $Katagori['id'] ?>"><?php echo $Katagori['name'] ?></option>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label>Satuan <code>*</code></label>
                        <select name="satuan" class="form-control" required>
                            <?php foreach ($satuan as $satuan): ?>
                                <?php if ($Barang->id_satuan == $satuan['id']): ?>
                                    <option value="<?php echo $satuan['id'] ?>" selected><?php echo $satuan['name'] ?></option>
                                <?php else: ?>
                                    <option value="<?php echo $satuan['id'] ?>"><?php echo $satuan['name'] ?></option>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label>Supplier <code>*</code></label>
                        <select name="supplier" class="form-control" required>
                            <?php foreach ($supplier as $supplier): ?>
                                <?php if ($Barang->id_supplier == $supplier['id']): ?>
                                    <option value="<?php echo $supplier['id'] ?>" selected><?php echo $supplier['name'] ?></option>
                                <?php else: ?>
                                    <option value="<?php echo $supplier['id'] ?>"><?php echo $supplier['name'] ?></option>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </select>
                    </div>
            </div>
            <button class="btn btn-warning" type="submit"><i class="fas fa-plus"></i> Update</button>
            </form>
        </div>
    </div>
    <div style="height: 100 vh"></div>
</main>