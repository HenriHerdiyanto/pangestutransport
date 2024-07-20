@extends('layouts.admin')

@section('content')
    <div class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-200px">

            <!-- Add Contact Modal -->
            <div class="modal fade" id="addContactModal" tabindex="-1" role="dialog" aria-labelledby="addContactModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="addContactModalLabel">Add Contact</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form id="addContactForm" action="{{ route('contacts.store') }}" method="POST">
                            @csrf
                            <div class="modal-body">
                                <div class="form-group">
                                    <label for="add_wa">Nomor WA</label>
                                    <input type="text" class="form-control" id="add_wa" name="wa"
                                        placeholder="Masukkan Nomor WA" required>
                                </div>
                                <div class="form-group">
                                    <label for="add_email">Email</label>
                                    <input type="email" class="form-control" id="add_email" name="email"
                                        placeholder="Masukkan Email">
                                </div>
                                <div class="form-group">
                                    <label for="add_alamat">Alamat</label>
                                    <input type="text" class="form-control" id="add_alamat" name="alamat"
                                        placeholder="Masukkan Alamat">
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Add Contact</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Edit Contact Modal -->
            @foreach ($contacts as $item)
                <div class="modal fade" id="editContactModal{{ $item->id }}" tabindex="-1" role="dialog"
                    aria-labelledby="editContactModal{{ $item->id }}Label" aria-hidden="true">
                    <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="editContactModal{{ $item->id }}Label">Edit Contact</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form id="editContactForm{{ $item->id }}" action="{{ route('contacts.update', $item->id) }}"
                                method="POST">
                                @csrf
                                @method('PUT')
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label for="edit_wa">Nomor WA</label>
                                        <input type="text" class="form-control" id="edit_wa" name="wa"
                                            placeholder="Masukkan Nomor WA" value="{{ $item->wa }}" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="edit_email">Email</label>
                                        <input type="email" class="form-control" id="edit_email" name="email"
                                            placeholder="Masukkan Email" value="{{ $item->email }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="edit_alamat">Alamat</label>
                                        <input type="text" class="form-control" id="edit_alamat" name="alamat"
                                            placeholder="Masukkan Alamat" value="{{ $item->alamat }}">
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Save changes</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach

            <!-- Content Section -->
            <div class="card-box mb-30">
                <div class="row">
                    <div class="col-md-10">
                        <div class="pd-20">
                            <h4 class="text-blue h4">Data Contact</h4>
                        </div>
                    </div>
                    <div class="col-md-2 my-4">
                        <button type="button" class="btn btn-primary" data-toggle="modal"
                            data-target="#addContactModal">Add Contact</button>
                    </div>
                </div>

                <!-- Table Section -->
                <div class="card-box mb-30">
                    <table class="data-table table nowrap">
                        <thead>
                            <tr>
                                <th class="table-plus datatable-nosort">No</th>
                                <th>Nomor WA</th>
                                <th>Email</th>
                                <th>Alamat</th>
                                <th class="datatable-nosort">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($contacts as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->wa }}</td>
                                    <td>{{ $item->email }}</td>
                                    <td>{{ $item->alamat }}</td>
                                    <td>
                                        <!-- Edit Button -->
                                        <button class="btn btn-warning" data-toggle="modal"
                                            data-target="#editContactModal{{ $item->id }}">Edit</button>
                                        <!-- Delete Button -->
                                        <button class="btn btn-danger"
                                            onclick="confirmDelete({{ $item->id }})">Delete</button>
                                        <!-- Delete Form -->
                                        <form id="deleteForm{{ $item->id }}"
                                            action="{{ route('contact.destroy', $item->id) }}" method="POST"
                                            style="display: none;">
                                            @csrf
                                            @method('DELETE')
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Footer Section -->
            <div class="footer-wrap pd-20 mb-20 card-box">
                Pangestu Transport
            </div>
        </div>

        <!-- JavaScript Section -->
        <script>
            function confirmDelete(id) {
                if (confirm('Are you sure you want to delete this contact?')) {
                    document.getElementById('deleteForm' + id).submit();
                }
            }
        </script>
    </div>
@endsection
