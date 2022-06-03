@extends('layouts.app')

@section('content')
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content ">
            <main>
                <div class="container">
                    <div class="row justify-content-center ">
                        <div class="col-lg-5">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header">
                                    <h3 class="text-center font-weight-light my-4">Register</h3>
                                </div>
                                <div class="card-body">
                                    @if (Session::has('success'))
                                        <div class="alert alert-success"><em>{!! session('success') !!}</em>
                                            <button type="button" class="close" data-dismiss="alert"
                                                aria-label="Close"><span aria-hidden="true">&times</span></button>
                                        </div>
                                    @endif
                                    @if (Session::has('errors'))
                                        <div class="alert alert-danger"><em>{!! $errors->first() !!}</em>
                                            <button type="button" class="close" data-dismiss="alert"
                                                aria-label="Close"><span aria-hidden="true">&times</span></button>
                                        </div>
                                    @endif
                                    <form action="{{ route('be.register.post') }}" method="POST">
                                        @csrf
                                        <div class="form-group row mb-3">
                                            <div class="col">
                                                <label for="name">Name</label>
                                                <input type="name" name="name" class="form-control">
                                            </div>
                                            <div class="col">
                                                <label for="email">Email</label>
                                                <input type="email" name="email" class="form-control">
                                            </div>
                                        </div>

                                        <div class="form-group row mb-3">
                                            <div class="col">
                                                <label for="password">Password</label>
                                                <input type="password" name="password" class="form-control">
                                            </div>
                                            <div class="col">
                                                <label for="password">Password Confirm</label>
                                                <input type="password" name="password_con" class="form-control">
                                            </div>

                                        </div>
                                        <div class="form-group row mb-3">
                                            <div class="col">
                                                <label for="phone">Phone</label>
                                                <input type="phone" name="phone" class="form-control">
                                            </div>
                                            <div class="col">
                                                <label for="address">Address</label>
                                                <input type="address" name="address" class="form-control">
                                            </div>
                                        </div>



                                        <div class="form-check mb-3">
                                            <input class="form-check-input" name="remember" id="inputRememberPassword"
                                                type="checkbox" value="1" />
                                            <label class="form-check-label" for="inputRememberPassword">Remember
                                                Password</label>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                            <button type="submit" class="btn btn-primary">
                                                Submit
                                            </button>
                                        </div>
                                    </form>
                                </div>

                            </div>
                            <a class="nav-link" style="margin-left:35%" href="{{ route('be.login') }}">Please
                                Login!!!</a>
                        </div>
                    </div>
                </div>
            </main>
        </div>

        {{-- </div> --}}

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
        </script>
        <script src="js/scripts.js"></script>

        </main>
    @endsection
