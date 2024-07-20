@extends('layouts.admin')

@section('content')
    <div class="pd-ltr-20">
        <div class="card-box pd-20 height-100-p mb-30">
            <div class="row align-items-center">
                <div class="col-md-4">
                    <img src="{{ asset('admin/vendors/images/item-img.png') }}">
                </div>
                <div class="col-md-8">
                    <h4 class="font-20 weight-500 mb-10 text-capitalize">
                        Welcome back <div class="weight-600 font-30 text-blue">Admin Pangestu Transport</div>
                    </h4>
                    <p class="font-18 max-width-600">Semoga hari mu menyenangkan.</p>
                </div>
            </div>
        </div>

        <div class="card-box mb-30">
            <div class="row">
                <div class="col-md-10">
                    <div class="pd-20">
                        <h4 class="text-blue h4">Promo Pangestu Transport</h4>
                    </div>
                </div>
                <div class="col-md-2 my-4">
                    {{-- @if ($promos->isEmpty()) --}}
                    <!-- Button to Open the Modal -->
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addPromoModal">
                        Add Promo
                    </button>
                    {{-- @endif --}}

                    <!-- The Modal -->
                    <div class="modal fade" id="addPromoModal">
                        <div class="modal-dialog">
                            <div class="modal-content">

                                <!-- Modal Header -->
                                <div class="modal-header">
                                    <h4 class="modal-title">Add Promo</h4>
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>

                                <!-- Modal Body -->
                                <form action="{{ route('promo.store') }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <div class="mb-3">
                                                <label for="nama_promo">Nama Promo</label>
                                                <input type="text" class="form-control" name="nama_promo"
                                                    id="nama_promo">
                                            </div>
                                            <div class="mb-3">
                                                <label for="persen">Berapa % Promo</label>
                                                <input type="text" class="form-control" name="persen" id="persen">
                                            </div>
                                            <div class="mb-3">
                                                <label for="batas_promo">Lama Promo Sampai</label>
                                                <input type="date" class="form-control" name="batas_promo"
                                                    id="batas_promo">
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Modal Footer -->
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-success">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <table class="data-table table nowrap">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Promo</th>
                        <th>Persen</th>
                        <th>Batas Promo</th>
                        <th class="datatable-nosort">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($promos as $item)
                        <tr>
                            <td>1.</td>
                            <td>{{ $item->nama_promo }}</td>
                            <td>{{ $item->persen }}</td>
                            <td>{{ $item->batas_promo }}</td>
                            <td>
                                <div class="dropdown">
                                    <a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle"
                                        href="#" role="button" data-toggle="dropdown">
                                        <i class="dw dw-more"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                                        <a class="dropdown-item" href="#" data-toggle="modal"
                                            data-target="#editModal{{ $item->id }}"><i class="dw dw-edit2"></i>
                                            Edit</a>
                                        <a class="dropdown-item" href="#" data-toggle="modal"
                                            data-target="#deleteModal{{ $item->id }}"><i class="dw dw-delete-3"></i>
                                            Delete</a>
                                    </div>
                                </div>
                            </td>
                            <!-- Delete Modal -->
                            <div class="modal fade" id="deleteModal{{ $item->id }}" tabindex="-1" role="dialog"
                                aria-labelledby="deleteModalLabel{{ $item->id }}" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="deleteModalLabel{{ $item->id }}">Konfirmasi
                                                Hapus</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            Apakah Anda yakin ingin menghapus data item {{ $item->nama_promo }}?
                                        </div>
                                        <div class="modal-footer">
                                            <div class="row">
                                                <div class="col">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-dismiss="modal">Batal</button>
                                                </div>
                                                <div class="col">
                                                    <a class="dropdown-item" href="#"
                                                        onclick="event.preventDefault(); document.getElementById('deleteForm{{ $item->id }}').submit();"><i
                                                            class="dw dw-delete-3"></i> Delete</a>
                                                </div>
                                            </div>
                                            <form id="deleteForm{{ $item->id }}"
                                                action="{{ route('promo.destroy', $item->id) }}" method="POST"
                                                style="display: none;">
                                                @csrf
                                                @method('DELETE')
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Edit Modal -->
                            <div class="modal fade" id="editModal{{ $item->id }}" tabindex="-1" role="dialog"
                                aria-labelledby="editModalLabel{{ $item->id }}" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="editModalLabel{{ $item->id }}">Edit
                                                item</h5>
                                            <button type="button" class="close" data-dismiss="modal"
                                                aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <form action="{{ route('promo.update', $item->id) }}" method="POST"
                                            enctype="multipart/form-data">
                                            @csrf
                                            @method('PUT')
                                            <div class="modal-body">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <div class="mb-3">
                                                            <label for="nama_promo">Nama Promo</label>
                                                            <input type="text" class="form-control" id="nama_promo"
                                                                name="nama_promo" value="{{ $item->nama_promo }}">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="persen">Ganti Persen Promo</label>
                                                            <input type="text" class="form-control" id="persen"
                                                                name="persen" value="{{ $item->persen }}">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="batas_promo">Lama Promo Sampai</label>
                                                            <input type="date" class="form-control" name="batas_promo"
                                                                id="batas_promo" value="{{ $item->batas_promo }}">
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
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="footer-wrap pd-20 mb-20 card-box">
            Pangestu Transport
        </div>
    </div>
@endsection
