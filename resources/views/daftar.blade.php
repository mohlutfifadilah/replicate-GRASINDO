<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>Grasindo - Daftar</title>

    <!-- Custom fonts for this template-->
    <link href="{{ asset('sbadmin2/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css" />
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet" />

    <!-- Custom styles for this template-->
    <link href="{{ asset('sbadmin2/css/sb-admin-2.min.css') }}" rel="stylesheet" />
</head>

<body class="" style="background-color: #FF8D21;">
    @include('sweetalert::alert')
    <div class="container">
        <!-- Outer Row -->
        <div class="row justify-content-center">
            <div class="col-xl-12 col-lg-12 col-md-9 mt-5 pt-5">
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-4">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-12 d-none d-lg-block bg-login-image">
                                <div class="d-flex justify-content-start">
                                    <img src="{{ asset('storage/assets/image/logo.png') }}" alt="" class="img-fluid" width="50" height="50">
                                    <h4 class="mt-3 ml-2">Daftar Akun Pendaki</h4>
                                </div>
                                <hr>
                                <form action="{{ route('register') }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-row">
                                        <div class="form-group col-md-12">
                                            <label for="kewarganegaraan">Kewarganegaraan</label>
                                            <select class="form-control" id="kewarganegaraan" name="kewarganegaraan">
                                                <option value="" selected readonly>Pilih Kewarganegaraan</option>
                                                @foreach ($kw as $k)
                                                <option value="{{ $k->jenis_kewarganegaraan }}">{{ $k->jenis_kewarganegaraan }}</option>
                                                @endforeach
                                            </select>
                                            @if (session('kewarganegaraan'))
                                            <p class="help-text" id="kewarganegaraan" style="color: red;">{{ session('kewarganegaraan') }}</p>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="identitas">Jenis Identitas</label>
                                            <select class="form-control" id="identitas" name="identitas">
                                                <option value="" selected readonly>Pilih Identitas</option>
                                                @foreach ($identitas as $i)
                                                <option value="{{ $i->jenis_identitas }}">{{ $i->jenis_identitas }}</option>
                                                @endforeach
                                            </select>
                                            @if (session('identitas'))
                                            <p class="help-text" id="identitas" style="color: red;">{{ session('identitas') }}</p>
                                            @endif
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="fotoidentitas">Upload File Identitas</label>
                                            <input type="file" class="form-control-file" id="fotoidentitas" name="fotoidentitas">
                                            @if (session('fotoidentitas'))
                                            <p class="help-text" id="fotoidentitas" style="color: red;">{{ session('fotoidentitas') }}</p>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="nama_lengkap">Nama Lengkap</label>
                                            <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap">
                                            @if (session('nama_lengkap'))
                                            <p class="help-text" id="nama_lengkap" style="color: red;">{{ session('nama_lengkap') }}</p>
                                            @endif
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="no_identitas">Nomor Identitas</label>
                                            <input type="text" class="form-control" id="no_identitas" name="no_identitas">
                                            @if (session('no_identitas'))
                                            <p class="help-text" id="no_identitas" style="color: red;">{{ session('no_identitas') }}</p>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="email">Email</label>
                                            <input type="text" class="form-control" id="email" name="email">
                                            @if (session('email'))
                                            <p class="help-text" id="email" style="color: red;">{{ session('email') }}</p>
                                            @endif
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="no_telepon">Nomor Telepon</label>
                                            <input type="text" class="form-control" id="no_telepon" name="no_telepon">
                                            @if (session('no_telepon'))
                                            <p class="help-text" id="no_telepon" style="color: red;">{{ session('no_telepon') }}</p>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="alamat">Alamat</label>
                                            <textarea class="form-control" id="alamat" rows="3" name="alamat"></textarea>
                                            @if (session('alamat'))
                                            <p class="help-text" id="alamat" style="color: red;">{{ session('alamat') }}</p>
                                            @endif
                                        </div>
                                        <div class="form-group col-md-6">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <label for="usia">Usia</label>
                                                    <input type="text" class="form-control" id="usia" name="usia">
                                                    @if (session('usia'))
                                                    <p class="help-text" id="usia" style="color: red;">{{ session('usia') }}</p>
                                                    @endif
                                                </div>
                                                <div class="col-md-4">
                                                    <label for="tinggi_badan">Tinggi Badan</label>
                                                    <input type="text" class="form-control" id="tinggi_badan" name="tinggi_badan">
                                                    @if (session('tinggi_badan'))
                                                    <p class="help-text" id="tinggi_badan" style="color: red;">{{ session('tinggi_badan') }}</p>
                                                    @endif
                                                </div>
                                                <div class="col-md-4">
                                                    <label for="berat_badan">Berat Badan</label>
                                                    <input type="text" class="form-control" id="berat_badan" name="berat_badan">
                                                    @if (session('berat_badan'))
                                                    <p class="help-text" id="berat_badan" style="color: red;">{{ session('berat_badan') }}</p>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="username">Username</label>
                                            <input type="text" class="form-control" id="username" name="username">
                                            @if (session('username'))
                                            <p class="help-text" id="username" style="color: red;">{{ session('username') }}</p>
                                            @endif
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="password">Password</label>
                                            <input type="password" class="form-control" id="password" name="password">
                                            @if (session('password'))
                                            <p class="help-text" id="password" style="color: red;">{{ session('password') }}</p>
                                            @endif
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="d-flex justify-content-end">
                                        <a href="/login" class="btn btn-md btn-secondary mr-4">Kembali</a>
                                        <button type="submit" class="btn btn-md text-white" style="background-color: #FF8D21;">Daftar</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('sbadmin2/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('sbadmin2/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ asset('sbadmin2/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('sbadmin2/js/sb-admin-2.min.js') }}"></script>
</body>

</html>
