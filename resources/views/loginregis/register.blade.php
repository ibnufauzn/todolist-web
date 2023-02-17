@extends('loginregis.template')
@section('title', 'register')
@section('card')
    <div class="card">
        <div class="card-header bg-dark text-center text-light">
            <h4>REGISTER</h4>
        </div>
        <form action="{{ route('registerAction') }}" method="post">
            @csrf
            <div class="card-body">
                <label class="mb-2" for="name">Nama Lengkap</label>
                <input class="form-control mb-3" type="text" id="name" name="name" required>

                <label class="mb-2" for="email">Email</label>
                <input class="form-control mb-3" type="email" id="email" name="email" required>

                <label class="mb-2" for="password">Password</label>
                <input class="form-control mb-2" type="password" id="password" name="password" required>

                <h6 class="pt-2 fw-normal text-end">Sudah punya akun? <a href="/login">Login</a></h6>
            </div>

            <div class="card-footer p-0">
                <button class="btn btn-dark form-control rounded-0" type="submit">Register</button>
            </div>
        </form>

    </div>
@endsection
