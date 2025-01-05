<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Edit Kendaraan</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons (Jika Diperlukan) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Custom Styles (Jika Diperlukan) -->
    <style>
        /* Tambahkan CSS khusus di sini jika diperlukan */
        body {
            font-family: 'Figtree', sans-serif;
            background-color: #f8f9fa;
        }

        .container {
            max-width: 600px;
            margin-top: 50px;
        }

        h1 {
            margin-bottom: 30px;
            text-align: center;
        }

        .btn-back {
            margin-top: 20px;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Edit Kendaraan</h1>
        <form action="{{ route('kendaraan.update', $kendaraan) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="nomor_kendaraan" class="form-label">Nomor Kendaraan</label>
                <input type="text" name="nomor_kendaraan"
                    class="form-control @error('nomor_kendaraan') is-invalid @enderror" id="nomor_kendaraan"
                    value="{{ old('nomor_kendaraan', $kendaraan->nomor_kendaraan) }}" required>
                @error('nomor_kendaraan')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="jenis_kendaraan" class="form-label">Jenis Kendaraan</label>
                <input type="text" name="jenis_kendaraan"
                    class="form-control @error('jenis_kendaraan') is-invalid @enderror" id="jenis_kendaraan"
                    value="{{ old('jenis_kendaraan', $kendaraan->jenis_kendaraan) }}" required>
                @error('jenis_kendaraan')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">
                <i class="bi bi-save"></i> Perbarui
            </button>
            <a href="{{ route('kendaraan.index') }}" class="btn btn-secondary btn-back">
                <i class="bi bi-arrow-left"></i> Kembali
            </a>
        </form>
    </div>

    <!-- Bootstrap JS dan Dependensi -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka1+eCen2tZJoU3CRW1Nq0gd9hE0TRFgFh7ZJzq1NQelLx59lZo6lTkDr4qV5G3V" crossorigin="anonymous">
    </script>

    <!-- Bootstrap Icons (Jika Diperlukan) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.js"></script>

    <!-- Custom Scripts (Jika Diperlukan) -->
    <script>
        // Tambahkan JavaScript khusus di sini jika diperlukan
        // Contoh: Menambahkan animasi atau validasi tambahan
    </script>
</body>

</html>
