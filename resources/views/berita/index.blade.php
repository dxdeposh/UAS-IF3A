<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Data - Berita</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .container {
            margin-top: 30px;
        }

        .table th,
        .table td {
            vertical-align: middle;
        }

        .btn-custom {
            background-color: #007bff;
            color: white;
            border-radius: 50px;
            padding: 8px 20px;
            transition: background-color 0.3s ease;
        }

        .btn-custom:hover {
            background-color: #0056b3;
        }

        .alert {
            font-size: 1.1rem;
        }

        .card-header {
            background-color: #007bff;
            color: white;
            font-weight: bold;
        }

        .table-container {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            border-radius: 8px;
            background-color: white;
        }
    </style>
</head>

<body>

    <div class="container">
        <div class="card">
            <div class="card-header text-center">
                <h2>Manajemen Berita</h2>
            </div>
            <div class="card-body table-container">
                <!-- Alert Success/Error -->
                @if (session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                @if (session('error'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        {{ session('error') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                <!-- Add New Data Button -->
                <a href="{{ route('berita.create') }}" class="btn btn-custom mb-3">
                    <i class="bi bi-plus-circle"></i> Tambah Data
                </a>

                <!-- News Table -->
                <table class="table table-striped table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>Aksi</th>
                            <th>Judul Berita</th>
                            <th>Isi</th>
                            <th>Kategori</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $item)
                            <tr>
                                <td class="text-center">
                                    <a href="{{ route('berita.edit', $item->id) }}" class="btn btn-warning btn-sm">
                                        <i class="bi bi-pencil-square"></i> Edit
                                    </a>
                                    <a href="{{ route('berita.show', $item->id) }}" class="btn btn-danger btn-sm">
                                        <i class="bi bi-trash-fill"></i> Hapus
                                    </a>
                                </td>
                                <td>{{ $item->judul_berita }}</td>
                                <td>{{ \Str::limit($item->isi_berita, 50) }}</td>
                                <td>{{ $item->kategoriBerita ? $item->kategoriBerita->nama_kategori : '-' }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</body>

</html>
