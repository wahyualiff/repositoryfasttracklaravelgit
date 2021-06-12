@extends('tampilan-login')
@section('isi_halaman')

<br><br><br><br>
<body>
    <main style="opacity: .95;">  
        <div class="section section-header">
            <div class="parallax filter filter-color-black">
                <div class="container" style="opacity: .95;">
                        <form class="form-signin" method="POST" action="#" enctype="multipart/form-data" style="border: none;">
                            <h3 class="login-text"><center><b>Silahkan Registrasi.</b></center></h3>
                            <input class="form-control my-3" type="text" name="nama" placeholder="Nama Lengkap" required/>
                            <input class="form-control" type="text" name="email" placeholder="Email" required/>
                            <input class="form-control" type="text" name="username" placeholder="Username" required/>
                            <input class="form-control" type="password" name="password" placeholder="Password" required/>
                            <input class="form-control" type="password" name="konfirmasi_password" placeholder="Konfirmasi Password" required/>
                            <button class="btn btn-primary" type="submit" style="padding: 14px 20px; margin-top: 20px;">Daftar</button>
                        </form>
                    </div>
                </div>
            </div>
    </main> 
</body>
@endsection