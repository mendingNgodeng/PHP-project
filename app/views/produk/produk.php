   <!-- Begin Page Content -->
   <div class="container-fluid">

<!-- Page Heading -->

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
<h1 class="h3 mb-2 text-gray-800">Data Produk</h1>

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
                     
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                    <th>No.</th>
                        <th>Kode Produk</th>
                        <th>Nama Produk</th>
                        <th>Stok</th>
                        <th>Harga</th>
                      
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
                       
                    </tr>
                    <?php endforeach?>
                </tbody>
            </table>
        </div>
    </div>
</div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->