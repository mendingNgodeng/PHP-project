
<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
    <div class="card-header d-flex justify-content-between">
        <h1 class="h3 mb-2 text-gray-800">Data Produk</h1>
        <div class="">

            <a href="<?= path('produk/form_produk')?>" class="btn btn-success"> <i class="fa fa-plus"></i></i>Tambah Data</a>
        </div>

            </div>

    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Kode Produk</th>
                        <th>Nama Produk</th>
                        <th>Stok</th>
                        <th>Harga</th>
                        <th>Action</th>
                     
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                    <th>No.</th>
                        <th>Kode Produk</th>
                        <th>Nama Produk</th>
                        <th>Stok</th>
                        <th>Harga</th>
                        <th>Action</th>
                      
                    </tr>
                </tfoot>
                <tbody>
                    <?php
                    $no =1;
                     foreach($guru as $g):?>
                    <tr>
                        <td><?= $no++?></td>
                        <td><?= $g->kode_produk?></td>
                        <td><?= $g->nama_produk?></td>
                        <td><?= $g->stok?></td>
                        <td><?= $g->harga_barang?></td>
                        <td class="d-flex justify-between">
                            <a href="<?= path('produk/form_produk/'.$g->kode_produk)?>" class="btn btn-primary">
                                <i class="fa fa-edit"></i></a>
                            <a href="<?= path('produk/delete_data/'.$g->kode_produk)?>" onclick="return confirm('Anda yakin ingin menghapus data produk <?=$g->nama_produk?> dan dengan kode <?=$g->kode_produk?>')"  class="btn btn-danger btn-delete"><i class="fa fa-trash"></i></a>
                        </td>
                    </tr>
                    <?php endforeach?>
                </tbody>
            </table>
        </div>
    </div>
</div>

</div>