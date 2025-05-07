

<div class="container" >
<div id="container-load">


        <div class="card o-hidden border-0 shadow-lg my-5">
        
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row d-flex justify-content-center">
                  
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4"><?= $tambah ?></h1>
                            </div>
                            <form class="user" method="post" action="<?= $url ?>" id="<?= $idForm?>">
                                <input type="hidden" name="kode_produk" value="<?= $d->kode_produk ? $d->kode_produk : ''?>" >
                                
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user" name="nama_produk" id="exampleFirstName" value="<?= $d->nama_produk ? $d->nama_produk : ''?>"
                                            placeholder="Nama Produk...">
                                    </div>
                                    
                                    <div class="col-sm-6">
                                        <input type="number" class="form-control form-control-user" name="stok" id="exampleLastName" value="<?= $d->stok ? $d->stok : ''?>"
                                            placeholder="Stok produk">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="number" class="form-control form-control-user"name="harga_barang" id="exampleInputEmail" value="<?= $d->harga_barang ? $d->harga_barang : ''?>"
                                        placeholder="Harga..">
                                </div>
                              
                             
                                
                                <hr>
                                <button type="submit" class="btn btn-primary"><i class="fa fa-paper-plane"></i> Simpan</button>
                                <a href="<?= path('produk')?>" class="btn btn-secondary"> <i class="fa fa-arrow-left"></i> kembali</a>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
