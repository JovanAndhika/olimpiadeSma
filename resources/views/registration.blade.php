@extends('layout.mainlayout')


@section('head')
    <style>
        body{
            color: white;
            min-height: 100vh;
        }

        .form-text{
            color: white
        }
    </style>
@endsection

@section('content')
<div class="container container-registration">

    <div class="title d-flex justify-content-center">Registration</div>

    <div class="form-content">

        <form method="POST" action="{{ route('storeRegistration') }}" enctype="multipart/form-data" id="registrationForm">
            @csrf
            <div class="row">
                <div class="mb-3 col-md-6">
                    <label for="asalSekolah" class="form-label">Asal Sekolah</label>
                    <input type="text" class="form-control @error('asalSekolah') is-invalid @enderror" id="asalSekolah" name="asalSekolah" placeholder="" value="{{ old('asalSekolah') }}" required>
                    @error('asalSekolah')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <!-- Tambahkan pengecekan error untuk field lainnya dengan pola yang serupa -->
            </div>


            <div class="row">
                <div class="mb-3 col-md-6">
                    <label for="usernameKelompok" class="form-label">Username Kelompok</label>
                    <input type="text" class="form-control @error('usernameKelompok') is-invalid @enderror" id="usernameKelompok" name="usernameKelompok" placeholder="" value="{{ old('usernameKelompok') }}" required>
                    @error('usernameKelompok')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="row">
                <div class="mb-3 col-md-6">
                    <label for="inputPassword5" class="form-label">Password</label>
                    <input type="password" id="inputPassword5" class="form-control @error('passPeserta') is-invalid @enderror" name="passPeserta" aria-describedby="passwordHelpBlock" value="{{ old('passPeserta') }}" required>
                    @error('passPeserta')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                    <div id="passwordHelpBlock" class="form-text">
                        Your password must be 8-20 characters long, contain letters and numbers, and must not contain spaces, special characters, or emoji.
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="mb-3 col-md-6">
                    <label for="inputConfirmPassword5" class="form-label">Confirm Password</label>
                    <input type="password" id="inputConfirmPassword5" class="form-control" name="passConfirmPeserta" aria-describedby="passwordHelpBlock" value="{{ old('passConfirmPeserta') }}" required>
                    <div id="confirmPasswordError" class="invalid-feedback" style="display: none;">Password is not the same</div>
                    <div id="passwordHelpBlock" class="form-text">
                        Your password must be 8-20 characters long, contain letters and numbers, and must not contain spaces, special characters, or emoji.
                    </div>
                </div>
            </div>

            <script>
                document.getElementById("inputConfirmPassword5").addEventListener("keyup", function() {
                    var password = document.getElementById("inputPassword5").value;
                    var confirmPassword = document.getElementById("inputConfirmPassword5").value;
                    var confirmPasswordError = document.getElementById("confirmPasswordError");

                    if (password === confirmPassword) {
                        confirmPasswordError.style.display = "none";
                    } else {
                        confirmPasswordError.style.display = "block";
                    }
                });
            </script>


            <div class="row">
                <div class="mb-3 col-md-6">
                    <label for="namaKetua" class="form-label">Nama Ketua (Member 1)</label>
                    <input type="text" class="form-control @error('namaKetua') is-invalid @enderror" id="namaKetua" name="namaKetua" placeholder="" value="{{ old('namaKetua') }}" required>
                    @error('namaKetua')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3 col-md-6">
                    <label for="emailKetua" class="form-label">Email Ketua</label>
                    <input type="email" class="form-control @error('emailKetua') is-invalid @enderror" id="emailKetua" name="emailKetua" placeholder="example@gmail.com" value="{{ old('emailKetua') }}" required>
                    @error('emailKetua')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="row">
                <div class="mb-3 col-md-6">
                    <label for="namaKedua" class="form-label">Nama Member 2</label>
                    <input type="text" id="namaKedua" name="namaKedua" class="form-control @error('namaKedua') is-invalid @enderror" placeholder="" value="{{ old('namaKedua') }}" required>
                    @error('namaKedua')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3 col-md-6">
                    <label for="namaKetiga" class="form-label">Nama Member 3</label>
                    <input type="text" id="namaKetiga" name="namaKetiga" class="form-control @error('namaKetiga') is-invalid @enderror" placeholder="" value="{{ old('namaKetiga') }}" required>
                    @error('namaKetiga')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="row">
                <div class="mb-3 col-md-6">
                    <label for="jenisKonsumsi" class="mb-2">Jenis Konsumsi</label>
                    <select class="form-select @error('jenisKonsumsi') is-invalid @enderror" id="jenisKonsumsi" name="jenisKonsumsi" aria-label="Default select example" required>
                        <option selected>Pilih jenis konsumsi...</option>
                        <option value="normal">Normal</option>
                        <option value="vege">Vege</option>
                        <option value="vegan">Vegan</option>
                    </select>
                    @error('jenisKonsumsi')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3 col-md-6">
                    <label for="alergi" class="form-label">Apakah ada anggota yang mempunyai alergi?</label>
                    <input type="text" class="form-control @error('alergi') is-invalid @enderror" id="alergi" name="alergi" placeholder="Jika tidak bisa inputkan '-'" value="{{ old('jenisAlergi') }}" required>
                    @error('alergi')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="row">
                <div class="mb-3 col-md-6">
                    <label for="buktiTransaksi" class="form-label">Bukti transaksi</label>
                    <input class="form-control @error('buktiTransaksi') is-invalid @enderror" type="file" id="buktiTransaksi" name="buktiTransaksi">
                    @error('buktiTransaksi')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <button type="submit" class="btn btn-primary btn-lg mt-2">Submit</button>
        </form>
    </div>
</div>

<script>

</script>
@endsection