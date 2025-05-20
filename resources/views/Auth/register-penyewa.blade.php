<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Register Penyewa</title>
  <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
</head>
<body>
  <div class="container mt-5">
    <h2 class="text-center mb-4">Register Penyewa</h2>

    {{-- Tampilkan pesan error jika ada --}}
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul class="mb-0">
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
    @endif

    {{-- Form Register Penyewa --}}
    <form action="{{ url('/register/penyewa') }}" method="POST" class="p-4 border rounded">
      @csrf

      <div class="form-group">
        <label for="name">Nama Lengkap</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Masukkan nama lengkap" value="{{ old('name') }}">
      </div>

      <div class="form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control" id="email" name="email" placeholder="Masukkan email" value="{{ old('email') }}">
      </div>


      <div class="form-group">
        <label for="password">Kata Sandi</label>
        <input type="password" class="form-control" id="password" name="password" placeholder="Buat kata sandi">
      </div>

      <div class="form-group">
        <label for="password_confirmation">Konfirmasi Kata Sandi</label>
        <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Ulangi kata sandi">
      </div>

      <button type="submit" class="btn btn-primary btn-block">Daftar</button>
    </form>

    <p class="text-center mt-3">Sudah punya akun? <a href="{{ url('login') }}">Login di sini</a></p>
  </div>
</body>
</html>
