@extends('layouts.admin')

@section('content')
    <form action="{{ route('mobil-store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="modal-body">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="nama_mobil">Nama Mobil</label>
                                <input type="text" class="form-control" id="nama_mobil" name="nama_mobil"
                                    placeholder="Masukan nama mobil" required>
                            </div>
                            <div class="mb-3">
                                <label for="harga">Harga Mulai</label>
                                <input type="text" class="form-control" id="harga" name="harga"
                                    placeholder="Masukan harga">
                            </div>
                            <div class="mb-3">
                                <label for="jenis_kendaraan">Jenis Kendaraan</label>
                                <input type="text" class="form-control" id="jenis_kendaraan" name="jenis_kendaraan"
                                    placeholder="Contoh: City Cars">
                            </div>
                            <div class="mb-3">
                                <label for="banyak_kursi">Banyak Kursi</label>
                                <input type="text" class="form-control" id="banyak_kursi" name="banyak_kursi">
                            </div>
                            <div class="mb-3">
                                <label for="jenis_mobil">Jenis Mobil</label>
                                <select name="jenis_mobil" id="jenis_mobil" class="form-control">
                                    <option>--- PILIH ---</option>
                                    <option value="autometic">autometic</option>
                                    <option value="manual">manual</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="gambar">Upload Gambar Mobil</label>
                                <input type="file" class="form-control" id="gambar" name="gambar">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="lp1">Harga Lepas Kunci / 6 jam</label>
                                <input placeholder="kosongkan jika tidak dipakai" type="text" name="lp1"
                                    class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="lp2">Harga Lepas Kunci / 12 jam</label>
                                <input placeholder="kosongkan jika tidak dipakai" type="text" name="lp2"
                                    class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="lp3">Harga Lepas Kunci / 1 Hari</label>
                                <input placeholder="kosongkan jika tidak dipakai" type="text" name="lp3"
                                    class="form-control">
                            </div>
                            <hr>
                            <div class="mb-3">
                                <label for="ms1">Harga Mobil + Sopir / 6 jam</label>
                                <input placeholder="kosongkan jika tidak dipakai" type="text" name="ms1"
                                    class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="ms2">Harga Mobil + Sopir / 12 jam</label>
                                <input placeholder="kosongkan jika tidak dipakai" type="text" name="ms2"
                                    class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="ms3">Harga Mobil + Sopir / 1 Hari</label>
                                <input placeholder="kosongkan jika tidak dipakai" type="text" name="ms3"
                                    class="form-control">
                            </div>
                            <hr>
                            <div class="mb-3">
                                <label for="msb1">Harga Mobil + Sopir + BBM / 6 jam</label>
                                <input placeholder="kosongkan jika tidak dipakai" type="text" name="msb1"
                                    class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="msb2">Harga Mobil + Sopir + BBM / 12 jam</label>
                                <input placeholder="kosongkan jika tidak dipakai" type="text" name="msb2"
                                    class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="msb3">Harga Mobil + Sopir + BBM / 1 Hari</label>
                                <input placeholder="kosongkan jika tidak dipakai" type="text" name="msb3"
                                    class="form-control">
                            </div>
                            <hr>
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
