@extends('tampilan-login')
@section('isi_halaman')
<br><br><br><br>
<body>
    <main style="opacity: .95;">
        <div class="login-box" style="opacity: .95;">
            <div class="login-logo">
                <h1><center><b>Silahkan Login</b></center></h1>
            </div>
            <div class="login-box-body">
                <p class="login-box-msg" align="center">Masukan username dan password Anda</p>
                <div class="form-group my-3 has-feedback">
                    <input type="text" name="username" class="form-control" placeholder="Username">
                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                </div>
                <div class="form-group my-3 has-feedback">
                    <input type="password" name="password" class="form-control" placeholder="Password">
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                </div>
                <div class="row">
                    <div class="col-xs-8">
                        <div class="checkbox icheck">
                            <label>
                                <input type="checkbox"> Remember Me
                            </label>
                        </div>
                    </div>
                    <div class="col-xs-4">
                        <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
                    </div>
                </div>
            </div>
        </div>
    </main> 
</body>

@endsection