   <!-- Begin Page Content -->
   <div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Data Guru</h1>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
   <a href="<?= path('guru/form_guru')?>" class="btn btn-success"> <i class="fa fa-plus"></i></i> Tambah Data</a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Nama</th>
                        <th>NIP</th>
                        <th>Mata Pelajaran</th>
                        <th>Dibuat pada</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                    <th>No.</th>
                    <th>Nama</th>
                        <th>NIP</th>
                        <th>Mata Pelajaran</th>
                        <th>Dibuat pada</th>
                        <th>Action</th>

                    </tr>
                </tfoot>
                <tbody>
                    <?php
                    $no =1;
                     foreach($guru as $g):?>
                    <tr>
                        <td><?= $no++?></td>
                        <td><?= $g->nama?></td>
                        <td><?= $g->nip?></td>
                        <td><?= $g->mapel?></td>
                        <td><?= $g->dibuat_pada?></td>
                        <td class="d-flex justify-between">
                            <a href="<?= path('guru/form_guru/'.$g->id_guru)?>" class="btn btn-primary">
                                <i class="fa fa-edit"></i></a>
                            <a href="<?= path('guru/delete_data/'.$g->id_guru)?>" onclick="return confirm('Anda yakin ingin menghapus data dengan nama <?=$g->nama?> dan NIP <?=$g->nip?>')"  class="btn btn-danger"><i class="fa fa-trash"></i></a>
                        </td>
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