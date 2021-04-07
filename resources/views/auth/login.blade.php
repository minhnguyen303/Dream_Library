<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Đăng nhập</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="{{ asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">
</head>
<body class="hold-transition login-page">
<div class="login-box">
    <div class="login-logo">
        <strong><b>Dream Library</b></strong>
    </div>
    <!-- /.login-logo -->
    <div class="card">
        <div class="card-body login-card-body">
            <p class="login-box-msg">Đăng nhập vào hệ thống</p>

            <form action="{{ route('login') }}" method="post">
                @csrf
                <div class="mb-3">
                    <div class="input-group @error('email') is-invalid @enderror">
                        <input type="email" name="email" value="{{ old('email') }}" class="form-control @error('email') is-invalid @enderror" placeholder="Email">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <div class="invalid-feedback">
                        @error('email')
                        {{ $message }}
                        @enderror
                    </div>
                </div>
                <div class="mb-3">
                    <div class="input-group @error('password') is-invalid @enderror ">
                        <input type="password" name="password" class="form-control @error('password') is-invalid @enderror " placeholder="Mật khẩu">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="invalid-feedback">
                        @error('password')
                        {{ \Illuminate\Support\Facades\Session::get('password') }}
                        {{ $message }}
                        @enderror
                    </div>
                </div>

                <div class="row">
                    <div class="col-7">
                        <div class="icheck-primary">
                            <input type="checkbox" id="remember" name="remember">
                            <label for="remember">
                                Nhớ đăng nhập
                            </label>
                        </div>
                    </div>
                    <!-- /.col -->
                    <div class="col-5">
                        <button type="submit" class="btn btn-primary btn-block">Đăng nhập</button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>

            <div class="social-auth-links text-center mb-3">
                <a href="#" class="btn btn-block btn-outline-danger">
                    <i class="fas fa-user-lock mr-2"></i>
                    Quên mật khẩu
                </a>
            </div>
            <!-- /.social-auth-links -->

        </div>
        <!-- /.login-card-body -->
    </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('dist/js/adminlte.min.js') }}"></script>

<script>

    $(".form-control").on("input", function () {
        $(this).removeClass( 'is-invalid' );
        $(this).parent().removeClass( 'is-invalid' );
    });

</script>

</body>
</html>
