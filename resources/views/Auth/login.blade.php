<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Login — Harborlights</title>
  <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
</head>
<body>
  <div class="container mt-5">
    <h2 class="text-center mb-4">Login</h2>

    {{-- Tampilkan error validasi --}}
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul class="mb-0">
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
    @endif

    {{-- Form Login --}}
    <form action="{{ route('login.submit') }}" method="POST" class="p-4 border rounded">
      @csrf

      <div class="form-group mb-3">
        <label for="email">Email</label>
        <input
          type="email"
          class="form-control"
          id="email"
          name="email"
          placeholder="Masukkan email"
          value="{{ old('email') }}"
          required
          autofocus
        >
      </div>

      <div class="form-group mb-4">
        <label for="password">Kata Sandi</label>
        <input
          type="password"
          class="form-control"
          id="password"
          name="password"
          placeholder="Masukkan kata sandi"
          required
        >
      </div>

      <button type="submit" class="btn btn-primary btn-block">Login</button>
    </form>

  </div>

  <!-- JS -->
  <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
  <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
</body>
</html>
