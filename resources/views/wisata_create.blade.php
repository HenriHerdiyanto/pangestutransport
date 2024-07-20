@extends('layouts.admin')

@section('content')
    <style>
        label {
            color: white;
        }
    </style>
    <form action="{{ route('wisata-store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="modal-body">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="mb-3">
                                <label for="nama_paket" class="text-dark">Nama Paket</label>
                                <input type="text" class="form-control" id="nama_paket" name="nama_paket"
                                    placeholder="Masukan nama Paket Wisata" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card bg-primary">
                                <div class="card-body">
                                    <div class="mb-3">
                                        <label for="destinasi1">Destinasi Pertama</label>
                                        <input type="text" class="form-control" id="destinasi1" name="destinasi1"
                                            placeholder="Masukan Nama Destinasi">
                                    </div>
                                    <div class="mb-3">
                                        <label for="destinasi2">Destinasi Kedua</label>
                                        <input type="text" class="form-control" id="destinasi2" name="destinasi2"
                                            placeholder="Masukan Nama Destinasi">
                                    </div>
                                    <div class="mb-3">
                                        <label for="destinasi3">Destinasi Ketiga</label>
                                        <input type="text" class="form-control" id="destinasi3" name="destinasi3"
                                            placeholder="Masukan Nama Destinasi">
                                    </div>
                                    <div class="mb-3">
                                        <label for="destinasi4">Destinasi Ke Empat</label>
                                        <input type="text" class="form-control" id="destinasi4" name="destinasi4"
                                            placeholder="Masukan Nama Destinasi">
                                    </div>
                                    <div class="mb-3">
                                        <label for="destinasi5">Destinasi Ke Lima</label>
                                        <input type="text" class="form-control" id="destinasi5" name="destinasi5"
                                            placeholder="Masukan Nama Destinasi">
                                    </div>
                                    <div class="mb-3">
                                        <label for="gambar">Upload Gambar Mobil</label>
                                        <input type="file" class="form-control" id="gambar" name="gambar">
                                    </div>
                                </div>
                            </div>
                            <div class="card bg-info my-4">
                                <div class="card-body">
                                    <div class="mb-3">
                                        <label for="mobil1">Nama Mobil Pertama</label>
                                        <input type="text" name="mobil1" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label for="harga1">Harga Mobil Pertama</label>
                                        <input type="text" name="harga1" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label for="kapasitas1">Kapasitas Orang Mobil Pertama</label>
                                        <input type="text" name="kapasitas1" class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card bg-warning my-4">
                                <div class="card-body">
                                    <div class="mb-3">
                                        <label for="mobil2">Nama Mobil Kedua</label>
                                        <input type="text" name="mobil2" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label for="harga2">Harga Mobil Kedua</label>
                                        <input type="text" name="harga2" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label for="kapasitas2">Kapasitas Orang Mobil Kedua</label>
                                        <input type="text" name="kapasitas2" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="card bg-dark my-4">
                                <div class="card-body">
                                    <div class="mb-3">
                                        <label for="mobil3">Nama Mobil Ketiga</label>
                                        <input type="text" name="mobil3" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label for="harga3">Harga Mobil Ketiga</label>
                                        <input type="text" name="harga3" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label for="kapasitas3">Kapasitas Orang Mobil Ketiga</label>
                                        <input type="text" name="kapasitas3" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="card bg-success my-4">
                                <div class="card-body">
                                    <div class="mb-3">
                                        <label for="mobil4">Nama Mobil Ke Empat</label>
                                        <input type="text" name="mobil4" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label for="harga4">Harga Mobil Ke Empat</label>
                                        <input type="text" name="harga4" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label for="kapasitas4">Kapasitas Orang Mobil Ke Empat</label>
                                        <input type="text" name="kapasitas4" class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Upload</button>
        </div>
    </form>
@endsection
