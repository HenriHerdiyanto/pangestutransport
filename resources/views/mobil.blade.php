@extends('layouts.admin')

@section('content')
    <div class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-200px">
            <div class="col-md-4 col-sm-12 mb-30">
                <div class="modal fade bs-example-modal-xl" id="bd-example-modal-lg" tabindex="-1" role="dialog"
                    aria-labelledby="myLargeModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-xl modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title" id="myLargeModalLabel">Post A Jobs</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            </div>
                            <form action="{{ route('mobil-store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="modal-body">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="nama_mobil">Nama Mobil</label>
                                                        <input type="text" class="form-control" id="nama_mobil"
                                                            name="nama_mobil" placeholder="Masukan nama mobil" required>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="harga">Harga Mulai</label>
                                                        <input type="text" class="form-control" id="harga"
                                                            name="harga" placeholder="Masukan harga">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="jenis_kendaraan">Jenis Kendaraan</label>
                                                        <input type="text" class="form-control" id="jenis_kendaraan"
                                                            name="jenis_kendaraan" placeholder="Contoh: City Cars">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="banyak_kursi">Banyak Kursi</label>
                                                        <input type="text" class="form-control" id="banyak_kursi"
                                                            name="banyak_kursi">
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
                                                        <input type="file" class="form-control" id="gambar"
                                                            name="gambar">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="lp1">Harga Lepas Kunci / 6 jam</label>
                                                        <input type="text" name="lp1" class="form-control">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="lp2">Harga Lepas Kunci / 12 jam</label>
                                                        <input type="text" name="lp2" class="form-control">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="lp3">Harga Lepas Kunci / 1 Hari</label>
                                                        <input type="text" name="lp3" class="form-control">
                                                    </div>
                                                    <hr>
                                                    <div class="mb-3">
                                                        <label for="ms1">Harga Mobil + Sopir / 6 jam</label>
                                                        <input type="text" name="ms1" class="form-control">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="ms2">Harga Mobil + Sopir / 12 jam</label>
                                                        <input type="text" name="ms2" class="form-control">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="ms3">Harga Mobil + Sopir / 1 Hari</label>
                                                        <input type="text" name="ms3" class="form-control">
                                                    </div>
                                                    <hr>
                                                    <div class="mb-3">
                                                        <label for="msb1">Harga Mobil + Sopir + BBM / 6 jam</label>
                                                        <input type="text" name="msb1" class="form-control">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="msb2">Harga Mobil + Sopir + BBM / 12 jam</label>
                                                        <input type="text" name="msb2" class="form-control">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="msb3">Harga Mobil + Sopir + BBM / 1 Hari</label>
                                                        <input type="text" name="msb3" class="form-control">
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
                        </div>
                    </div>
                </div>
            </div>
            <!-- Export Datatable start -->
            <div class="card-box mb-30">
                <div class="row">
                    <div class="col-md-10">
                        <div class="pd-20">
                            <h4 class="text-blue h4">Data Mobil</h4>
                        </div>
                    </div>
                    <div class="col-md-2 my-4">
                        <a href="{{ route('mobil-create') }}" class="btn btn-primary">Add Mobil</a>
                    </div>
                </div>

                <div class="card-box mb-30">
                    <table class="data-table table nowrap">
                        <thead>
                            <tr>
                                <th class="table-plus datatable-nosort">Gambar</th>
                                <th>Nama Mobil</th>
                                <th>Harga Mulai</th>
                                <th>Jenis Kendaraan</th>
                                <th>Banyak Kursi</th>
                                <th>Jenis Mobil</th>
                                <th class="datatable-nosort">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($mobil as $data)
                                <tr>
                                    <td class="table-plus">
                                        <img src="{{ asset('images/' . $data->gambar) }}" width="70" height="70"
                                            alt="gambar">
                                    </td>
                                    <td>{{ $data->nama_mobil }}</td>
                                    <td>Rp. {{ number_format($data->harga) }}</td>
                                    <td>{{ $data->jenis_kendaraan }}</td>
                                    <td>{{ $data->banyak_kursi }}</td>
                                    <td>{{ $data->jenis_mobil }}</td>
                                    <td>
                                        <div class="dropdown">
                                            <a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle"
                                                href="#" role="button" data-toggle="dropdown">
                                                <i class="dw dw-more"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                                                {{-- <a class="dropdown-item" href="#"><i class="dw dw-eye"></i>
                                                    View</a> --}}
                                                <a class="dropdown-item" href="#" data-toggle="modal"
                                                    data-target="#editModal{{ $data->id }}"><i
                                                        class="dw dw-edit2"></i> Edit</a>
                                                <a class="dropdown-item" href="#" data-toggle="modal"
                                                    data-target="#deleteModal{{ $data->id }}"><i
                                                        class="dw dw-delete-3"></i> Delete</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>

                                <!-- Delete Modal -->
                                <div class="modal fade" id="deleteModal{{ $data->id }}" tabindex="-1"
                                    role="dialog" aria-labelledby="deleteModalLabel{{ $data->id }}"
                                    aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="deleteModalLabel{{ $data->id }}">
                                                    Konfirmasi Hapus</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                Apakah Anda yakin ingin menghapus data mobil {{ $data->nama_mobil }}?
                                            </div>
                                            <div class="modal-footer">
                                                <div class="row">
                                                    <div class="col">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-dismiss="modal">Batal</button>
                                                    </div>
                                                    <div class="col">
                                                        <a class="dropdown-item" href="#"
                                                            onclick="confirmDelete({{ $data->id }})"><i
                                                                class="dw dw-delete-3"></i> Delete</a>
                                                    </div>
                                                </div>
                                                <form id="deleteForm{{ $data->id }}"
                                                    action="{{ route('mobil-destroy', $data->id) }}" method="POST"
                                                    style="display: none;">
                                                    @csrf
                                                    @method('DELETE')
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Edit Modal -->
                                <div class="modal fade" id="editModal{{ $data->id }}" tabindex="-1" role="dialog"
                                    aria-labelledby="editModalLabel{{ $data->id }}" aria-hidden="true">
                                    <div class="modal-dialog modal-xl" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="editModalLabel{{ $data->id }}">Edit Mobil
                                                </h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <form action="{{ route('mobil-update', $data->id) }}" method="POST"
                                                enctype="multipart/form-data">
                                                @csrf
                                                @method('PUT')
                                                <div class="modal-body">
                                                    <div class="card">
                                                        <div class="card-body">
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="mb-3">
                                                                        <label for="nama_mobil">Nama Mobil</label>
                                                                        <input type="text" class="form-control"
                                                                            id="nama_mobil" name="nama_mobil"
                                                                            value="{{ $data->nama_mobil }}" required>
                                                                    </div>
                                                                    <div class="mb-3">
                                                                        <label for="harga">Harga Mulai</label>
                                                                        <input type="text" class="form-control"
                                                                            id="harga" name="harga"
                                                                            value="{{ $data->harga }}">
                                                                    </div>
                                                                    <div class="mb-3">
                                                                        <label for="jenis_kendaraan">Jenis
                                                                            Kendaraan</label>
                                                                        <input type="text" class="form-control"
                                                                            id="jenis_kendaraan" name="jenis_kendaraan"
                                                                            value="{{ $data->jenis_kendaraan }}">
                                                                    </div>
                                                                    <div class="mb-3">
                                                                        <label for="banyak_kursi">Banyak Kursi</label>
                                                                        <input type="text" class="form-control"
                                                                            id="banyak_kursi" name="banyak_kursi"
                                                                            value="{{ $data->banyak_kursi }}">
                                                                    </div>
                                                                    <div class="mb-3">
                                                                        <label for="jenis_mobil">Jenis Mobil</label>
                                                                        <select name="jenis_mobil" id="jenis_mobil"
                                                                            class="form-control">
                                                                            <option value="autometic"
                                                                                {{ $data->jenis_mobil == 'autometic' ? 'selected' : '' }}>
                                                                                autometic</option>
                                                                            <option value="manual"
                                                                                {{ $data->jenis_mobil == 'manual' ? 'selected' : '' }}>
                                                                                manual</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="mb-3">
                                                                        <label for="gambar">Upload Gambar Mobil</label>
                                                                        <input type="file" class="form-control"
                                                                            id="gambar" name="gambar">
                                                                        <input type="hidden" name="gambar_lama"
                                                                            value="{{ $data->gambar }}"><br>
                                                                        <img src="{{ asset('images/' . $data->gambar) }}"
                                                                            class="img-fluid" style="width: 300px;">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="mb-3">
                                                                        <label for="lp1">Harga Lepas Kunci / 6
                                                                            jam</label>
                                                                        <input type="text" name="lp1"
                                                                            class="form-control"
                                                                            value="{{ $data->lp1 }}">
                                                                    </div>
                                                                    <div class="mb-3">
                                                                        <label for="lp2">Harga Lepas Kunci / 12
                                                                            jam</label>
                                                                        <input type="text" name="lp2"
                                                                            class="form-control"
                                                                            value="{{ $data->lp2 }}">
                                                                    </div>
                                                                    <div class="mb-3">
                                                                        <label for="lp3">Harga Lepas Kunci / 1
                                                                            Hari</label>
                                                                        <input type="text" name="lp3"
                                                                            class="form-control"
                                                                            value="{{ $data->lp3 }}">
                                                                    </div>
                                                                    <hr>
                                                                    <div class="mb-3">
                                                                        <label for="ms1">Harga Mobil + Sopir / 6
                                                                            jam</label>
                                                                        <input type="text" name="ms1"
                                                                            class="form-control"
                                                                            value="{{ $data->ms1 }}">
                                                                    </div>
                                                                    <div class="mb-3">
                                                                        <label for="ms2">Harga Mobil + Sopir / 12
                                                                            jam</label>
                                                                        <input type="text" name="ms2"
                                                                            class="form-control"
                                                                            value="{{ $data->ms2 }}">
                                                                    </div>
                                                                    <div class="mb-3">
                                                                        <label for="ms3">Harga Mobil + Sopir / 1
                                                                            Hari</label>
                                                                        <input type="text" name="ms3"
                                                                            class="form-control"
                                                                            value="{{ $data->ms3 }}">
                                                                    </div>
                                                                    <hr>
                                                                    <div class="mb-3">
                                                                        <label for="msb1">Harga Mobil + Sopir + BBM / 6
                                                                            jam</label>
                                                                        <input type="text" name="msb1"
                                                                            class="form-control"
                                                                            value="{{ $data->msb1 }}">
                                                                    </div>
                                                                    <div class="mb-3">
                                                                        <label for="msb2">Harga Mobil + Sopir + BBM /
                                                                            12 jam</label>
                                                                        <input type="text" name="msb2"
                                                                            class="form-control"
                                                                            value="{{ $data->msb2 }}">
                                                                    </div>
                                                                    <div class="mb-3">
                                                                        <label for="msb3">Harga Mobil + Sopir + BBM / 1
                                                                            Hari</label>
                                                                        <input type="text" name="msb3"
                                                                            class="form-control"
                                                                            value="{{ $data->msb3 }}">
                                                                    </div>
                                                                    <hr>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary">Update</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="footer-wrap pd-20 mb-20 card-box">
            Pangestu Transport
        </div>
    </div>
    <script>
        function confirmDelete(id) {
            let form = document.getElementById('deleteForm' + id);
            if (confirm('Apakah Anda yakin ingin menghapus data ini?')) {
                form.submit();
            }
        }
    </script>
@endsection
