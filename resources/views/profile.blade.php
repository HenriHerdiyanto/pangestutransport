@extends('layouts.admin')

@section('content')
    <div class="pd-ltr-20">
        <div class="card-box pd-20 height-100-p mb-30">
            <h2 class="h4 pd-20">Edit Profile</h2>

            <div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
                <form action="{{ route('profile.update') }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{ $user->name }}"
                            required>
                    </div>

                    <div class="form-group">
                        <label for="email">Email address</label>
                        <input type="email" class="form-control" id="email" name="email" value="{{ $user->email }}"
                            required>
                    </div>

                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" name="password"
                            placeholder="Leave blank to keep current password">
                    </div>

                    <div class="form-group">
                        <label for="password_confirmation">Confirm Password</label>
                        <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
                    </div>

                    <button type="submit" class="btn btn-primary">Update Profile</button>
                </form>
            </div>
        </div>

        <div class="footer-wrap pd-20 mb-20 card-box">
            Pangestu Transport
        </div>
    </div>
@endsection
