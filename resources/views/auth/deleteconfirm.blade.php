<!-- resources/views/account/delete-confirmation.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="container">
        <h3>Confirm Your Password to Delete Your Account</h3>

        <form method="POST" action="{{ route('delete-account') }}">
            @csrf
            <div class="form-group">
                <label for="current_password">Current Password</label>
                <input type="password" name="current_password" id="current_password" class="form-control" required>
                @error('current_password')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <button type="submit" class="btn btn-danger">Delete Account</button>
        </form>
    </div>
@endsection
