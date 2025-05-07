

<div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row d-flex justify-content-center">
                  
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4"><?= $tambah ?></h1>
                            </div>
                            <form class="user" method="post" action="<?= $url ?>">
                                <input type="hidden" name="id_guru" value="<?= $d->id_guru ? $d->id_guru : ''?>" >
                                
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user" name="nama" id="exampleFirstName" value="<?= $d->nama ? $d->nama : ''?>"
                                            placeholder="Masukan Nama Guru">
                                    </div>
                                    
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control form-control-user" name="nip" id="exampleLastName" value="<?= $d->nip ? $d->nip : ''?>"
                                            placeholder="NIP">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user"name="mapel" id="exampleInputEmail" value="<?= $d->mapel ? $d->mapel : ''?>"
                                        placeholder="Mata Pelajaran">
                                </div>
                              
                             
                                
                                <hr>
                                <button type="submit" class="btn btn-primary"><i class="fa fa-paper-plane"></i> Simpan</button>
                                <a href="<?= path('guru')?>" class="btn btn-secondary"> <i class="fa fa-arrow-left"></i> kembali</a>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
