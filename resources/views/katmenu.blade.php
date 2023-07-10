<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        @include('header');
</head>

<div class="container">
@include('sidebar')
<div class="col-lg-9 mt-2">
    <div class="card">
        <div class="card-header">
            Halaman Kategori Barang
        </div>
        
        <div class="card-body">
            <div class="row">
                <div class="col d-flex justify-content-end">
                    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#ModalTambahUser">
                        Tambah Kategori Barang
                    </button>
                </div>
            </div>
            <?php  ?>

            <!-- Modal Tambah Kategori Barang Baru-->
            <div class="modal fade" id="ModalTambahUser" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-xl modal-fullscreen-md-down">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Kategori Barang</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form class="needs-validation" novalidate action="proses/proses_input_katmenu.php" method="post">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-floating mb-3">
                                            <select class="form-select" name="jenismenu" id="">
                                                <option value="1">Baju</option>
                                                <option value="2">Celana</option>
                                            </select>
                                            <label for="floatingInput">Jenis Barang</label>
                                            <div class="invalid-feedback">
                                                Masukkan Jenis Barang
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" id="floatingInput" placeholder="Kategori Menu" name="katmenu" required>
                                            <label for="floatingInput">Kategori Barang</label>
                                            <div class="invalid-feedback">
                                                Masukkan Kategori Barang
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary" name="input_katmenu_validate" value="12345">Save changes</button>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
            <!-- Akhir Modal Tambah Kategori Barang Baru-->
            <?php
            
            ?>
                <!-- Modal Edit-->
                <div class="modal fade" id="ModalEdit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-xl modal-fullscreen-md-down">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Data Kategori Barang</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form class="needs-validation" novalidate action="proses/proses_edit_katmenu.php" method="post">
                                    <input type="hidden" value="" name="id">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-floating mb-3">
                                                <select name="jenismenu" class="form-select" aria-label="default select example" id="" required>
                                                    
                                                </select>
                                                <label for="floatingInput">Jenis Barang</label>
                                                <div class="invalid-feedback">
                                                    Masukkan Jenis Barang
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-floating mb-3">
                                                <input type="text" class="form-control" id="floatingInput" placeholder="Kategori Menu" name="katmenu" required value="">
                                                <label for="floatingInput">Kategori Barang</label>
                                                <div class="invalid-feedback">
                                                    Masukkan Kategori Barang
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary" name="input_katmenu_validate" value="12345">Save changes</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Akhir Modal Edit-->

                <!-- Modal Delete-->
                <div class="modal fade" id="ModalDelete" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-md modal-fullscreen-md-down">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Delete Data Kategori Barang</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form class="needs-validation" novalidate action="proses/proses_delete_katmenu.php" method="post">
                                    <input type="hidden" value="" name="id">
                                    <div class="col-lg-12">
                                        Apakah Anda Ingin Menghapus Kategori <b></b>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-danger" name="hapus_kategori_validate" value="12345" >Hapus</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Akhir Modal Delete-->

                <!-- Tabel Daftar Kategori Menu -->
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">No </th>
                                <th scope="col">Jenis Barang</th>
                                <th scope="col">Kategori Barang</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($katbarang as $item)
                        
                                <tr>
                                    <th scope="row">{{$item->id_kat_menu}}</th>
                                    <td>{{$item->jenis_menu}}</td>
                                    <td>{{$item->kategori_menu}}</td>
                                    <td class="d-flex">
                                        <button class="btn btn-warning btn-sm me-1" data-bs-toggle="modal" data-bs-target="#ModalEdit"><i class="bi bi-pencil-square"></i></button>
                                        <button class="btn btn-danger btn-sm me-1" data-bs-toggle="modal" data-bs-target="#ModalDelete"><i class="bi bi-trash3"></i></button>
                                    </td>
                                </tr>
                            
                            @endforeach
                            
                        </tbody>
                    </table>
                </div>
                <!-- Akhir Tabel Daftar Kategori Menu -->

            <?php
            
            ?>
        </div>
    </div><!-- Footer -->
    <footer class="py-4">
       <div class="container-fluid fixed-bottom">
           <div class="card text-center border-0 bg-primary">
               <i class="text-center text-white"> (C)CopyRight 2022-2023 - Adinda Collection
                   <a href="https://www.instagram.com/adinda.collection_02/" target="_blank"><img src="img/ig.png" width="40px" height="40px" align="right"></a>
                   <a href="https://www.facebook.com" target="_blank"><img src="img/f.png" width="40px" height="40px" align="right"></a>
                   <a href="whatsapp://send?text=Hello&phone=+6285277722283" target="_blank"><img src="img/wa.png" width="40px" height="40px" align="right"></a>
               </i>
           </div>
           <!-- End Footer -->
</div>
</div>