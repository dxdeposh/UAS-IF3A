<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Tambah Kendaraan</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Styles (Jika Diperlukan) -->
    <style>
        /* Tambahkan CSS khusus di sini jika diperlukan */
        body {
            font-family: 'Figtree', sans-serif;
            /* Jika Anda ingin menambahkan font atau gaya lainnya */
        }
    </style>
</head>

<body>
    <div class="container mt-5">
        <h1 class="mb-4">Tambah Kendaraan</h1>
        <form action="{{ route('kendaraan.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="nomor_kendaraan" class="form-label">Nomor Kendaraan</label>
                <input type="text" name="nomor_kendaraan" class="form-control" id="nomor_kendaraan" required>
            </div>
            <div class="mb-3">
                <label for="jenis_kendaraan" class="form-label">Jenis Kendaraan</label>
                <input type="text" name="jenis_kendaraan" class="form-control" id="jenis_kendaraan" required>
            </div>
            <button type="submit" class="btn btn-primary mt-3">
                <i class="bi bi-save"></i> Simpan
            </button>
            <a href="{{ route('kendaraan.index') }}" class="btn btn-secondary mt-3 ms-2">
                <i class="bi bi-arrow-left"></i> Kembali
            </a>
        </form>
    </div>

    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Bootstrap JS dan Dependensi -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka1+eCen2tZJoU3CRW1Nq0gd9hE0TRFgFh7ZJzq1NQelLx59lZo6lTkDr4qV5G3V" crossorigin="anonymous">
    </script>

    <!-- Custom Scripts (Jika Diperlukan) -->
    <script>
        // Tambahkan JavaScript khusus di sini jika diperlukan
        // Contoh: Menambahkan animasi atau validasi tambahan
    </script>
</body>

</html>
