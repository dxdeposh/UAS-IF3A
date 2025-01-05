<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Daftar Kendaraan</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Custom Styles (Jika Diperlukan) -->
    <style>
        body {
            font-family: 'Figtree', sans-serif;
            background-color: #f8f9fa;
            /* Bootstrap's light gray background */
        }

        .container {
            margin-top: 40px;
        }

        h1 {
            margin-bottom: 20px;
            text-align: center;
        }

        .btn-add {
            margin-bottom: 20px;
        }

        /* Optional: Styling untuk tabel */
        table th,
        table td {
            vertical-align: middle;
        }

        /* Optional: Responsive adjustments */
        @media (max-width: 576px) {
            .btn {
                width: 100%;
                margin-bottom: 10px;
            }
        }
    </style>
</head>

<body>
    <!-- Optional: Navigation Bar -->
    <!-- Jika Anda memiliki navigasi, Anda bisa menambahkan kode navbar Bootstrap di sini -->
    <!-- Contoh Navbar Bootstrap -->
    <!--
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Nama Aplikasi</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Fitur</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Kontak</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    -->

    <div class="container">
        <h1>Daftar Kendaraan</h1>
        <a href="{{ route('kendaraan.create') }}" class="btn btn-primary btn-add">
            <i class="bi bi-plus-circle"></i> Tambah Kendaraan
        </a>
        <div class="table-responsive">
            <table class="table table-bordered table-striped mt-3">
                <thead class="table-dark">
                    <tr>
                        <th>No</th>
                        <th>Nomor Kendaraan</th>
                        <th>Jenis Kendaraan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($kendaraans as $kendaraan)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $kendaraan->nomor_kendaraan }}</td>
                            <td>{{ $kendaraan->jenis_kendaraan }}</td>
                            <td>
                                <a href="{{ route('kendaraan.edit', $kendaraan) }}" class="btn btn-warning btn-sm me-2">
                                    <i class="bi bi-pencil-square"></i> Edit
                                </a>
                                <form action="{{ route('kendaraan.destroy', $kendaraan) }}" method="POST"
                                    style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm"
                                        onclick="return confirm('Apakah Anda yakin ingin menghapus kendaraan ini?')">
                                        <i class="bi bi-trash"></i> Hapus
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="text-center">Tidak ada kendaraan tersedia.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

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
