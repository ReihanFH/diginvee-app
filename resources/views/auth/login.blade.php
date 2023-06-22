@extends('layouts.auth')

@section('main')
    <div class=" login">

        <section class="section min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">


                        <div class="card login-card mb-3">

                            <div class="card-body">
                                <div class="d-flex justify-content-center py-0">
                                    <a href="/" class="d-flex align-items-center w-auto">
                                        <img src="assets/img/logo-diginvee-color.png" alt="" style="height: 24px">
                                    </a>
                                </div><!-- End Logo -->

                                <div class="pt-4 pb-2">
                                    <p class="text-center small">Enter your username & password to login</p>
                                </div>

                                <form class="row g-3" method="post" action="/login-attempt" novalidate>
                                    @csrf

                                    <div class="col-12">
                                        <label for="yourUsername" class="form-label">Username</label>
                                        <input type="text" name="username" class="form-control" id="yourUsername"
                                            required>
                                        @error('username')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="col-12">
                                        <label for="password" class="form-label">Password</label>
                                        <input type="password" name="password" class="form-control" id="password" required>
                                        @error('password')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="col-12">
                                        <button class="btn btn-primary w-100" type="submit">Login</button>
                                    </div>

                                </form>

                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </section>

    </div>
@endsection
