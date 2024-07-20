@extends('layouts.admin')

@section('content')
    <div class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-200px">
            <!-- Export Datatable start -->
            <div class="card-box mb-30">
                <div class="row">
                    <div class="col-md-10">
                        <div class="pd-20">
                            <h4 class="text-blue h4">Data Banner</h4>
                        </div>
                    </div>
                    <div class="col-md-2 my-4">
                        @if (@empty($banner))
                            <!-- Button to Open the Modal -->
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addBannerModal">
                                Add Banner
                            </button>
                        @endif

                        <!-- The Modal -->
                        <div class="modal fade" id="addBannerModal">
                            <div class="modal-dialog">
                                <div class="modal-content">

                                    <!-- Modal Header -->
                                    <div class="modal-header">
                                        <h4 class="modal-title">Add Banner</h4>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>

                                    <!-- Modal Body -->
                                    <form action="{{ route('banners.store') }}" method="post"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="modal-body">
                                            <div class="form-group">
                                                <div class="mb-3">
                                                    <label for="judul">Judul Banner</label>
                                                    <input type="text" class="form-control" name="judul"
                                                        id="judul">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="gambar">Gambar</label>
                                                    <input type="file" class="form-control" name="gambar"
                                                        id="gambar">
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Modal Footer -->
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-danger"
                                                data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-success">Submit</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card-box mb-30">
                    <table class="data-table table nowrap">
                        <thead>
                            <tr>
                                <th class="table-plus datatable-nosort">Gambar</th>
                                <th>Judul Banner</th>
                                <th class="datatable-nosort">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if ($banner)
                                <tr>
                                    <td class="table-plus">
                                        <img src="{{ asset('images/' . $banner->gambar) }}" width="100" height="100"
                                            style="object-fit: cover;" alt="{{ $banner->gambar }}">
                                    </td>
                                    <td>{{ $banner->judul }}</td>
                                    <td>
                                        <div class="dropdown">
                                            <a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle"
                                                href="#" role="button" data-toggle="dropdown">
                                                <i class="dw dw-more"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                                                <a class="dropdown-item" href="#" data-toggle="modal"
                                                    data-target="#editModal{{ $banner->id }}"><i class="dw dw-edit2"></i>
                                                    Edit</a>
                                                <a class="dropdown-item" href="#" data-toggle="modal"
                                                    data-target="#deleteModal{{ $banner->id }}"><i
                                                        class="dw dw-delete-3"></i> Delete</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>

                                <!-- Delete Modal -->
                                <div class="modal fade" id="deleteModal{{ $banner->id }}" tabindex="-1" role="dialog"
                                    aria-labelledby="deleteModalLabel{{ $banner->id }}" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="deleteModalLabel{{ $banner->id }}">Konfirmasi
                                                    Hapus</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                Apakah Anda yakin ingin menghapus data banner {{ $banner->judul }}?
                                            </div>
                                            <div class="modal-footer">
                                                <div class="row">
                                                    <div class="col">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-dismiss="modal">Batal</button>
                                                    </div>
                                                    <div class="col">
                                                        <a class="dropdown-item" href="#"
                                                            onclick="event.preventDefault(); document.getElementById('deleteForm{{ $banner->id }}').submit();"><i
                                                                class="dw dw-delete-3"></i> Delete</a>
                                                    </div>
                                                </div>
                                                <form id="deleteForm{{ $banner->id }}"
                                                    action="{{ route('banner.destroy', $banner->id) }}" method="POST"
                                                    style="display: none;">
                                                    @csrf
                                                    @method('DELETE')
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Edit Modal -->
                                <div class="modal fade" id="editModal{{ $banner->id }}" tabindex="-1" role="dialog"
                                    aria-labelledby="editModalLabel{{ $banner->id }}" aria-hidden="true">
                                    <div class="modal-dialog modal-xl" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="editModalLabel{{ $banner->id }}">Edit
                                                    Banner</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <form action="{{ route('banners.update', $banner->id) }}" method="POST"
                                                enctype="multipart/form-data">
                                                @csrf
                                                @method('PUT')
                                                <div class="modal-body">
                                                    <div class="card">
                                                        <div class="card-body">
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="mb-3">
                                                                        <label for="judul">Judul Banner</label>
                                                                        <input type="text" class="form-control"
                                                                            id="judul" name="judul"
                                                                            value="{{ $banner->judul }}" required>
                                                                    </div>
                                                                    <div class="mb-3">
                                                                        <label for="gambar">Upload Gambar</label>
                                                                        <input type="file" class="form-control"
                                                                            id="gambar" name="gambar">
                                                                        <input type="hidden" name="gambar_lama"
                                                                            value="{{ $banner->gambar }}"><br>
                                                                        <img src="{{ asset('images/' . $banner->gambar) }}"
                                                                            class="img-fluid" style="width: 300px;">
                                                                    </div>
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
                            @else
                                <tr>
                                    <td colspan="3">Tidak ada banner untuk ditampilkan.</td>
                                </tr>
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="footer-wrap pd-20 mb-20 card-box">
            Pangestu Transport
        </div>
    </div>
@endsection
