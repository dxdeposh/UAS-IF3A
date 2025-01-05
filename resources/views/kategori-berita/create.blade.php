<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Kategori Berita</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <!-- Tambahan Styles (jika diperlukan) -->
    <style>
        /* Tambahkan CSS khusus di sini jika diperlukan */
    </style>
</head>

<body>
    <div class="container mt-5">
        <div class="card shadow-lg p-4">
            <h2 class="text-center mb-4">Tambah Kategori Berita</h2>
            <form action="{{ route('kategori-berita.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="nama_kategori" class="form-label">Nama Kategori</label>
                    <input type="text" name="nama_kategori" id="nama_kategori" class="form-control"
                        placeholder="Masukkan nama kategori" required>
                </div>
                <div class="d-flex justify-content-between">
                    <a href="{{ route('kategori-berita.index') }}" class="btn btn-outline-secondary">Kembali</a>
                    <button type="submit" class="btn btn-primary">
                        <i class="bi bi-save"></i> Simpan
                    </button>
                </div>
            </form>
        </div>
    </div>

    <!-- Bootstrap JS dan dependensi (jika diperlukan) -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXlY3/6jEW1ZK3q3SPucB7K1Cd5jeV5Hf5L6sHg8FD3hHPo+AbQ47h3bZ0vF" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9bInhL+9SOgO2F0Ld09Q38CqY1ZZVJ59Rh5i0hP59H3PEN6R+e4I5II" crossorigin="anonymous">
    </script>
</body>

</html>
