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
            <b><h5>Halaman Baju dan Celana</h5></b>
        </div>
        
        <div class="card-body">
            <div class="row">
                <div class="col d-flex justify-content-end">
                    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#ModalTambahUser">
                        Tambah Barang
                    </button>
                </div>
            </div>
            <?php  ?>

            <!-- Modal Tambah Barang Baru-->
            <div class="modal fade" id="ModalTambahUser" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-xl modal-fullscreen-md-down">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Barang Baju dan Celana</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form class="needs-validation" novalidate action="proses/proses_input_menu.php" method="post" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="input-group mb-3">
                                            <input type="file" class="form-control py-3" id="uploadFoto" placeholder="your name" name="foto" required>
                                            <label class="input-group-text" for="uploadFoto">Upload Foto Barang</label>
                                            <div class="invalid-feedback">
                                                Masukkan File Foto Barang
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" id="floatingInput" placeholder="Nama Menu" name="nama_menu" required>
                                            <label for="floatingInput">Nama Barang</label>
                                            <div class="invalid-feedback">
                                                Masukkan Nama Barang.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" id="floatingInput" placeholder="Keterangan" name="keterangan">
                                            <label for="floatingpassword">Keterangan</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="form-floating mb-3">
                                            <select class="form-select" aria-label="Default select example" name="kat_menu" required>
                                            <option selected hidden value="">Pilih Kategori Barang</option>
                                            
                                            </select>
                                            <label for="floatingInput">Kategori Baju Dan Celana</label>
                                            <div class="invalid-feedback">
                                                Pilih Kategori Baju atau Celana.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-floating mb-3">
                                            <input type="number" class="form-control" id="floatingInput" placeholder="Harga" name="harga" required>
                                            <label for="floatingInput">Harga</label>
                                            <div class="invalid-feedback">
                                                Masukkan Harga Barang
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-floating mb-3">
                                            <input type="number" class="form-control" id="floatingInput" placeholder="Stok" name="stok" required>
                                            <label for="floatingInput">Stok</label>
                                            <div class="invalid-feedback">
                                                Masukkan Stok
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary" name="input_menu_validate" value="12345">Save changes</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Akhir Modal Tambah Menu Baru-->
            
                <!-- Modal View-->
                <div class="modal fade" id="ModalView" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-xl modal-fullscreen-md-down">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Barang Baju dan Celana</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form class="needs-validation" novalidate action="proses/proses_input_menu.php" method="post" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-floating mb-3">
                                            <input disabled type="text" class="form-control" id="floatingInput" value="">
                                            <label for="floatingInput">Nama Barang</label>
                                            <div class="invalid-feedback">
                                                Masukkan Nama Barang.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-floating mb-3">
                                            <input disabled type="text" class="form-control" id="floatingInput" value="">
                                            <label for="floatingpassword">Keterangan</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="form-floating mb-3">
                                            <select disabled class="form-select" aria-label="Default select example">
                                            <option selected hidden value="">Pilih Kategori Barang<option> 
                                            </select>
                                            <label for="floatingInput">Kategori Baju atau Celana</label>
                                            <div class="invalid-feedback">
                                                Pilih Kategori Makanan atau Minuman.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-floating mb-3">
                                            <input disabled type="number" class="form-control" id="floatingInput" value="">
                                            <label for="floatingInput">Harga</label>
                                            <div class="invalid-feedback">
                                                Masukkan Harga Barang
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-floating mb-3">
                                            <input disabled type="number" class="form-control" id="floatingInput" value="">
                                            <label for="floatingInput">Stok</label>
                                            <div class="invalid-feedback">
                                                Masukkan Stok
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
                <!-- Akhir Modal View-->

                <!-- Modal Edit-->
                <div class="modal fade" id="ModalEdit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-xl modal-fullscreen-md-down">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Barang Baju dan Celana</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form class="needs-validation" novalidate action="proses/proses_edit_menu.php" method="post" enctype="multipart/form-data">
                                <input type="hidden" value="" name="id">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="input-group mb-3">
                                            <input type="file" class="form-control py-3" id="uploadFoto" placeholder="your name" name="foto" required >
                                            <label class="input-group-text" for="uploadFoto">Upload Foto Barang</label>
                                            <div class="invalid-feedback">
                                                Masukkan File Foto Barang
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" id="floatingInput" placeholder="Nama Menu" name="nama_menu" required value="">
                                            <label for="floatingInput">Nama Barang</label>
                                            <div class="invalid-feedback">
                                                Masukkan Nama Barang.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" id="floatingInput" placeholder="Keterangan" name="keterangan" value="">
                                            <label for="floatingpassword">Keterangan</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="form-floating mb-3">
                                        <select  class="form-select" aria-label="Default select example" name="kat_menu">
                                            <option selected hidden value="">Pilih Kategori Barang<option>
                                              
                                            </select>
                                            <label for="floatingInput">Kategori Baju atau Celana</label>
                                            <div class="invalid-feedback">
                                                Pilih Kategori Makanan atau Minuman.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-floating mb-3">
                                            <input type="number" class="form-control" id="floatingInput" placeholder="Harga" name="harga" required value="">
                                            <label for="floatingInput">Harga</label>
                                            <div class="invalid-feedback">
                                                Masukkan Harga Barang
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-floating mb-3">
                                            <input type="number" class="form-control" id="floatingInput" placeholder="Stok" name="stok" required value="">
                                            <label for="floatingInput">Stok</label>
                                            <div class="invalid-feedback">
                                                Masukkan Stok
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary" name="input_menu_validate" value="12345">Save changes</button>
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
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Delete Daftar Barang</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form class="needs-validation" novalidate action="proses/proses_delete_menu.php" method="post">
                                    <input type="hidden" value="" name="id">
                                    <input type="hidden" value="" name="foto">
                                    <div class="col-lg-12">
                                        <b>Apakah anda ingin menghapus Barang</b>  <b><i></i></b>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-danger" name="input_user_validate" value="12345">Hapus</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Akhir Modal Delete-->

                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr class="text-nowrap">
                                <th scope="col">No </th>
                                <th scope="col">Foto Barang </th>
                                <th scope="col">Nama Barang/merk</th>
                                <th scope="col">Keterangan</th>
                                <th scope="col">Jenis</th>
                                <th scope="col">Kategori</th>
                                <th scope="col">Harga</th>
                                <th scope="col">Stok</th>
                                <th scope="col">Aksi</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($daftar as $item)
                                <tr>
                                    <th scope="row">{{$item->id}}</th>
                                    <td>
                                    <div style="width: 90px">
                                    <img src="img/{{$item->foto}}"x class="img-thumbnail" alt="...">
                                    </div>    
                                    </td>
                                    <td>{{$item->nama_menu}}</td>
                                    <td>{{$item->keterangan}}</td>
                                    <td>{{$item->Kategori}}</td>
                                    <td>{{$item->harga}}</td>
                                    <td>{{$item->stok}}</td>
                                    <td></td>
                                    <td>
                                        <div class="d-flex">
                                            <button class="btn btn-info btn-sm me-1" data-bs-toggle="modal" data-bs-target="#ModalView"><i class="bi bi-eye"></i></button>
                                            
                                            <button class="btn btn-warning btn-sm me-1" data-bs-toggle="modal" data-bs-target="#ModalEdit"><i class="bi bi-pencil-square"></i></button>
                                            <button class="btn btn-danger btn-sm me-1" data-bs-toggle="modal" data-bs-target="#ModalDelete"><i class="bi bi-trash3"></i></button>
                                        </div>
                                        
                                    </td>
                                </tr>
                                @endforeach
                        </tbody>
                    </table>
                </div>
                

<!-- Footer -->
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
</div>