<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4"></h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="<?php echo site_url('Barang') ?>">Barang</a></li>
            <li class="breadcrumb-item active"><?php echo $title ?></li>
        </ol>
        <div class="card mb-4">
            <div class="card-header">
                <a href="<?php echo site_url('Barang/add') ?>"><i class="fas fa-plus"></i>Add New</a>
            </div>
            <?php if ($this->session->flashdata('success')): ?>
                <div class="alert alert-success" role="alert">
                    <?php echo $this->session->flashdata('success'); ?>
                </div>
            <?php endif; ?>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Barkode</th>
                                <th>Name</th>
                                <th>Satuan</th>
                                <th>Kategori</th>
                                <th>Stok</th>
                                <th>Harga beli</th>
                                <th>Harga jual</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            foreach ($Barang as $Barang) {
                                echo "<tr>
                                <td>$no</td>
                                <td>$Barang->barcode</td>
                                <td>$Barang->name</td>
                                <td>$Barang->satuan</td>
                                <td>$Barang->katagori</td>
                                <td>$Barang->stok_barang</td>
                                <td>$Barang->harga_beli</td>
                                <td>$Barang->harga_jual</td>
                                <td>
                                <div>
                                <a href=" . base_url('Barang/getedit/' . $Barang->id) . " class='btn btn-sm btn-info'><i class='fas fa-edit'></i> Edit</a>
                                <a href=".base_url('Barang/delete/' . $Barang->id)." class='btn btn-sm btn-danger' onclick='return confirm(\"Ingin menghapus data ini?\");'><i class='fas fa-trash'></i>Hapus</a>
                                </div>
                                </td>
                                </tr>";
                                $no++;
                            } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</main>